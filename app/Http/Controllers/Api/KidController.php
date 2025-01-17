<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Kid;
use App\Models\Toy;
use App\Models\Gender;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KidController extends Controller
{
    const DEFAULTURLIMAGE = '/img/defaultKidImage.png';

    public function index()
    {
        $kids = Kid::all();

        return response()->json($kids, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'image' => 'url',
            'age' => 'required|integer',
            'attitude' => 'required|boolean',
            'gender_id' => 'required|integer|min:0',
            'country_id' => 'required|integer|min:0'
        ]);

        $genderId = $validated['gender_id'];

        $gender = Gender::find($genderId);

        if (!$gender) {
            return response()->json(['message' => 'Using An Inexisting gender'], 404);
        }

        $countryId = $validated['country_id'];

        $country = Country::find($countryId);

        if (!$country) {
            return response()->json(['message' => 'Using An Inexisting country'], 404);
        }

        $kidImage = $validated['image'] ?? $this::DEFAULTURLIMAGE;

        $kid = Kid::create([
            'name' => $validated['name'],
            'surname' => $validated['surname'],
            'image' => $kidImage,
            'age' => $validated['age'],
            'attitude' => $validated['attitude'],
            'gender_id' => $genderId,
            'country_id' => $countryId
        ]);

        $kid->save();

        return response()->json($kid, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kid = Kid::find($id);

        if (!$kid) {
            return response()->json(['message' => 'Kid not found'], 404);
        }

        return response()->json($kid, 200);
    }


    public function update(Request $request, string $id)
    {
        $kid = Kid::find($id);

        if (!$kid) {
            return response()->json(['message' => 'Kid not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'string',
            'surname' => 'string',
            'image' => 'string',
            'age' => 'integer',
            'attitude' => 'boolean',
            'gender_id' => 'integer|min:0',
            'country_id' => 'integer|min:0'
        ]);

        $genderId = $validated['gender_id'] ?? $kid->gender_id;

        $gender = Gender::find($genderId);

        if (!$gender) {
            return response()->json(['message' => 'Using An Inexisting gender'], 404);
        }

        $countryId = $validated['country_id'] ?? $kid->country_id;

        $country = Country::find($countryId);

        if (!$country) {
            return response()->json(['message' => 'Using An Inexisting country'], 404);
        }

        $kidName = $validated['name'] ?? $kid->name;
        $kidSurname = $validated['surname'] ?? $kid->surname;
        $kidImage = $validated['image'] ?? $kid->image;
        $kidAge = $validated['age'] ?? $kid->age;
        $kidAttitude = $validated['attitude'] ?? $kid->attitude;

        $kid->update([
            'name' => $kidName,
            'surname' => $kidSurname,
            'image' => $kidImage,
            'age' => $kidAge,
            'attitude' => $kidAttitude,
            'gender_id' => $genderId,
            'country_id' => $countryId
        ]);

        $kid->save();

        return response()->json($kid, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kid = Kid::find($id);

        if (!$kid) {
            return response()->json(['message' => 'Kid not found'], 404);
        }

        $kid->delete();

        return response()->json([], 204);
    }

    public function listOfGifts()
    {
        try {
            $this->removeKidToysFromDB();

            $allKids = $this->getKidsFromDB();

            $listOfGifts = $this->generateListOfGifts($allKids);

            $this->createKidToysToDB($listOfGifts);
        } catch (Exception $e) {
            return response()
                ->json([
                    'message' => 'Internal Server Error :('
                ], 500);
        }

        return response()
            ->json([
                'listOfGifts' => $listOfGifts
            ], 200);
    }

    private function getKidsFromDB()
    {
        $goodKids = $this->getGoodKids();

        $goodAdults = $this->getAdultsKids();

        $badKids = $this->getBadKids();

        return [
            'goodKids' => $goodKids,
            'goodAdults' => $goodAdults,
            'badKids' => $badKids
        ];
    }

    private function getGoodKids()
    {
        return Kid::where('attitude', true)
            ->where('age', '<', 18)
            ->get();
    }

    private function getAdultsKids()
    {
        return Kid::where('age', '>=', 18)
            ->get();
    }

    private function getBadKids()
    {
        return Kid::where('attitude', false)
            ->where('age', '<', 18)
            ->get();
    }

    private function generateListOfGifts($allKids)
    {
        $listOfGifts = [];

        $goodKids = $allKids['goodKids'];
        $goodAdults = $allKids['goodAdults'];
        $badKids = $allKids['badKids'];

        if ($goodKids)
            $listOfGifts = $this->generateGifts($listOfGifts, $goodKids, 'Plaything', 2);

        if ($goodAdults)
            $listOfGifts = $this->generateGifts($listOfGifts, $goodAdults, 'Trip', 1);

        if ($badKids)
            $listOfGifts = $this->generateGifts($listOfGifts, $badKids, 'Charcoal', 1);

        return $listOfGifts;
    }

    private function generateGifts($listOfGifts, $kids, $toyType, $numbersOfGifts)
    {
        $MODELBASENAMESPACE = 'App\\Models\\';

        $playthingModelNameSpace = $MODELBASENAMESPACE . 'Plaything';
        $modelNameSpace = $MODELBASENAMESPACE . $toyType;

        foreach ($kids as $kid) {
            $listOfToys = [];

            for ($i = 0; $i < $numbersOfGifts; $i++) {
                $toy = $modelNameSpace == $playthingModelNameSpace
                    ? $this->generateNormalGifts($listOfToys, $kid, $modelNameSpace)
                    : $this->generateSpecialGifts($modelNameSpace);

                $listOfToys[] = $toy;
            }

            $listOfGifts[] = [
                $kid,
                $listOfToys
            ];
        }

        return $listOfGifts;
    }

    private function generateNormalGifts($listOfToys, $kid, $modelNameSpace)
    {
        $DEFAULTMAXAGE = 99;

        $kidAge = $kid->age;

        do {
            $toy = Toy::with(['toyType', 'minimumAge'])
                ->inRandomOrder()
                ->first();

            $minToyMinimumAge = $toy->minimumAge->min;
            $maxToyMinimumAge = $toy->minimumAge->max ?? $DEFAULTMAXAGE;

            $type = $toy->toyType->associated_type;

            $exists = $this->checkIfListOfGiftIncludesGift($listOfToys, $toy);
        } while (
            $exists
            || $modelNameSpace != $type
            || !($minToyMinimumAge <= $kidAge && $maxToyMinimumAge >= $kidAge)
        );

        return $toy;
    }

    private function generateSpecialGifts($modelNameSpace)
    {
        do {
            $toy = Toy::with('toyType')
                ->inRandomOrder()
                ->first();

            $type = $toy->toyType->associated_type;
        } while ($modelNameSpace != $type);

        return $toy;
    }

    private function checkIfListOfGiftIncludesGift($listOfToys, $toy)
    {
        $exists = false;
        $lengthOfToys = count($listOfToys);

        $toyName = $toy['name'];

        for ($i = 0; !$exists && $i < $lengthOfToys; $i++) {
            $listOfToyName = $listOfToys[$i]['name'];

            if ($listOfToyName === $toyName)
                $exists = true;
        }

        return $exists;
    }

    private function createKidToysToDB($listOfGifts)
    {
        foreach ($listOfGifts as $gift) {
            $kidID = $gift[0]['id'];
            $listOfToys = $gift[1];

            $kid = Kid::find($kidID);

            foreach ($listOfToys as $toy) {
                $toyID = $toy['id'];

                $kid->toys()->attach($toyID);
            }
        }
    }

    private function removeKidToysFromDB()
    {
        DB::table('kid_toy')->truncate();
    }
}
