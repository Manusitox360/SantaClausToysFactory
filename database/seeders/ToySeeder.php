<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toys = [
                // Toys for ages 0 and up
                [
                    'name' => "Colorful Baby Rattle",
                    'description' => "Colorful rattle that stimulates the baby's senses.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg",
                    'minimum_age_id' => 1,
                    'toy_type_id' => 1
                ],
                [
                    'name' => "Snuggly Bear Plush Toy",
                    'description' => "Soft plush toy with textures and contrasting colors.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/SoftPlush.jpg",
                    'minimum_age_id' => 1,
                    'toy_type_id' => 2
                ],
                [
                    'name' => " Musical Crib Mobile with Rotating Figures",
                    'description' => "Musical mobile with rotating figures for the crib.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/CribMobile.jpg",
                    'minimum_age_id' => 1,
                    'toy_type_id' => 1
                ],
                [
                    'name' => "Baby Books Set",
                    'description' => "Books for safe handling and exploration.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/PlasticBooks.jpg",
                    'minimum_age_id' => 1,
                    'toy_type_id' => 3
                ],
                [
                    'name' => "Large Stackable Blocks",
                    'description' => "Soft blocks to encourage motor skills.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/LargeStackableBlocks.jpg",
                    'minimum_age_id' => 1,
                    'toy_type_id' => 4
                ],
                [
                    'name' => "Interactive Play Mats",
                    'description' => "Mats with lights, sounds, and varied textures.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/InteractivePlayMats.jpg",
                    'minimum_age_id' => 1,
                    'toy_type_id' => 5
                ],
                [
                    'name' => "Silicone Teething Ring for Babies",
                    'description' => "Soft and safe teething toy to soothe gums.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/TeethingToy.jpg",
                    'minimum_age_id' => 1,
                    'toy_type_id' => 6
                ],

                // Toys for ages 7 and up
                [
                    'name' => "Advanced LEGO Star Wars Ship",
                    'description' => "LEGO set with challenging models.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/AdvancedLego.jpg",
                    'minimum_age_id' => 2,
                    'toy_type_id' => 7
                ],
                [
                    'name' => "Educational Go Genius in English",
                    'description' => "Monopoly Junior for learning through play.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/EducationalBoardGame.jpg",
                    'minimum_age_id' => 2,
                    'toy_type_id' => 8
                ],
                [
                    'name' => "Idler Gear Experiment Kit",
                    'description' => "Kit for exploring science with fun experiments.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/ExperimentKit.jpg",
                    'minimum_age_id' => 2,
                    'toy_type_id' => 9
                ],
                [
                    'name' => "Ocean Adventure Puzzle (300 pieces)",
                    'description' => "Puzzles that stimulate logic and concentration.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/Puzzles.jpg",
                    'minimum_age_id' => 2,
                    'toy_type_id' => 10
                ],
                [
                    'name' => "Creative Art Set: Watercolors, Clay & More",
                    'description' => "Kits with watercolors, clay, and creative crafts.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/CraftMaterials.jpg",
                    'minimum_age_id' => 2,
                    'toy_type_id' => 11
                ],
                [
                    'name' => "Kids' Blue Mountain Bike (20-inch wheels)",
                    'description' => "Vehicle to develop balance and physical activity.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/Bicycle.jpg",
                    'minimum_age_id' => 2,
                    'toy_type_id' => 12
                ],
                [
                    'name' => "Mini Programmable Robot for Kids",
                    'description' => "Simple programmable robots or small drones.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/BasicTechToys.jpg",
                    'minimum_age_id' => 2,
                    'toy_type_id' => 13
                ],

                // Toys for ages 12 and up
                [
                    'name' => "High-Tech Drone with HD Camera",
                    'description' => "Advanced drone with remote control and integrated camera.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/CameraDrone.jpg",
                    'minimum_age_id' => 3,
                    'toy_type_id' => 13
                ],
                [
                    'name' => "Risk: The Strategy Board Game",
                    'description' => "Board game like Risk to develop strategic skills.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/StrategyGame.jpg",
                    'minimum_age_id' => 3,
                    'toy_type_id' => 8
                ],
                [
                    'name' => "Arduino Starter Kit for Robotics Projects",
                    'description' => "Arduino kit to learn robotics and programming.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/RoboticsKit.jpg",
                    'minimum_age_id' => 3,
                    'toy_type_id' => 14
                ],
                [
                    'name' => "The Legend of Yuan: The crazy man on the road",
                    'description' => "Adventure or strategy titles suitable for teenagers.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/VideoGames.jpg",
                    'minimum_age_id' => 3,
                    'toy_type_id' => 15
                ],
                [
                    'name' => "Basic Musical Instruments for beginners",
                    'description' => "Guitars, keyboards, or electric drums for beginners.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/BasicMusicalInstruments.jpg",
                    'minimum_age_id' => 3,
                    'toy_type_id' => 16
                ],
                [
                    'name' => "Basketball Set: Ball and Hoop Combo",
                    'description' => "Balls, rackets, or accessories for specific sports.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/SportsGames.jpg",
                    'minimum_age_id' => 3,
                    'toy_type_id' => 12
                ],
                [
                    'name' => "Complete Harry Potter Book Series",
                    'description' => "All the complete books of the wonderful Harry Potter saga.",
                    'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/YouthBooks.jpg",
                    'minimum_age_id' => 3,
                    'toy_type_id' => 17
                ],

                // Toys for bad kids
                [
                    'name' => "Charcoal",
                    'description' => "Natural wood charcoal, commonly used for grilling and heating. Known for its eco-friendly properties and clean burn.",
                    'image' => "https://res.cloudinary.com/dierpqujk/image/upload/v1736409946/2148746835_1_gcyddu.jpg",
                    'minimum_age_id' => 7,
                    'toy_type_id' => 20
                ],
                [
                    'name' => "Charcoal",
                    'description' => "Mineral coal, extracted from the earth, widely used for energy production and industrial processes.",
                    'image' => "https://res.cloudinary.com/dierpqujk/image/upload/v1736410222/carbon-2-1541496626_ksw4l3.jpg",
                    'minimum_age_id' => 7,
                    'toy_type_id' => 21
                ],
                [
                    'name' => "Charcoal",
                    'description' => "Sweet candy charcoal, a fun and sugary treat often given as a playful gift during the holidays.",
                    'image' => "https://res.cloudinary.com/dierpqujk/image/upload/v1736410423/vegetal_kojyju.webp",
                    'minimum_age_id' => 7,
                    'toy_type_id' => 22
                ],

                // Toys for adults kids
                [
                    'name' => "Trip",
                    'description' => "A magical visit to Disneyland, the happiest place on Earth, filled with rides, parades, and unforgettable memories.",
                    'image' => "https://res.cloudinary.com/dierpqujk/image/upload/v1736411202/disneyland_pngyqb.jpg",
                    'minimum_age_id' => 6,
                    'toy_type_id' => 18
                ],
                [
                    'name' => "Trip",
                    'description' => "An exciting adventure to Warner Bros Studios, where you can meet your favorite characters and explore behind-the-scenes magic.",
                    'image' => "https://res.cloudinary.com/dierpqujk/image/upload/v1736411087/parque-warner-madrid_qy9cm6.jpg",
                    'minimum_age_id' => 6,
                    'toy_type_id' => 19
                ],
                [
                    'name' => "Trip",
                    'description' => "A thrilling journey to the Moon, exploring the vastness of space and experiencing zero gravity. Perfect for aspiring astronauts.",
                    'image' => "https://res.cloudinary.com/dierpqujk/image/upload/v1736411102/8407_xodiwm.jpg",
                    'minimum_age_id' => 6,
                    'toy_type_id' => 23
                ]
            ];

        foreach ($toys as $toy) {
            Toy::create($toy);
        }
    }
}
