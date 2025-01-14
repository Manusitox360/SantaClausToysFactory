<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Toy;
use App\Models\Gender;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kids = Kid::get();
        $genders = Gender::get();
        $countries = Country::get();
        return view('santa', compact('kids', 'genders', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /* public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
    /*  public function store(Request $request)
    {
        //
    } */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kid = Kid::find($id);

        if (!$kid) {
            return redirect()->route('santa');
        }
        
        return view('santaShow', compact('kid'));
    }

    /*  /**
     * Show the form for editing the specified resource.
     */
    /*  public function edit(Kid $kid)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     */
    /*  public function update(Request $request, Kid $kid)
    {
        //
    }
 */
    /**
     * Remove the specified resource from storage.
     */
    /* public function destroy(Kid $kid)
    {
        //
    } */

    public function listOfGifts()
    {
        $this->removeKidToysFromDB();

        $allKids = $this->getKidsFromDB();

        $listOfGifts = $this->generateListOfGifts($allKids);

        $this->createKidToysToDB($listOfGifts);

        return view('gift', compact('listOfGifts'));
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
        return Kid::where('attitude', true)
            ->where('age', '>=', 18)
            ->get();
    }

    private function getBadKids()
    {
        return Kid::where('attitude', false)
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
            for ($i = 0; $i < $numbersOfGifts; $i++) {
                $toy = $modelNameSpace == $playthingModelNameSpace
                    ? $this->generateNormalGifts($listOfGifts, $kid, $modelNameSpace)
                    : $this->generateSpecialGifts($modelNameSpace);

                $listOfGifts[] = [
                    $kid,
                    $toy
                ];
            }
        }

        return $listOfGifts;
    }

    private function generateNormalGifts($listOfGifts, $kid, $modelNameSpace)
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

            $gift = [
                $kid,
                $toy
            ];

            $exists = $this->checkIfListOfGiftIncludesGift($listOfGifts, $gift);
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

    private function checkIfListOfGiftIncludesGift($listOfGifts, $gift)
    {
        $exists = false;
        $length = count($listOfGifts);

        $giftKid = $gift[0]['name'];
        $giftToy = $gift[1]['name'];

        for ($i = 0; !$exists && $i < $length; $i++) {
            $listOfGiftsKid = $listOfGifts[$i][0]['name'];
            $listOfGiftsToy = $listOfGifts[$i][1]['name'];

            if (
                $listOfGiftsKid === $giftKid
                && $listOfGiftsToy === $giftToy
            )
                $exists = true;
        }

        return $exists;
    }

    private function createKidToysToDB($listOfGifts)
    {
        foreach ($listOfGifts as $gift) {
            $kidID = $gift[0]['id'];
            $toyID = $gift[1]['id'];

            $kid = Kid::find($kidID);

            $kid->toys()->attach($toyID);
        }
    }

    private function removeKidToysFromDB()
    {
        DB::table('kid_toy')->truncate();
    }
}
