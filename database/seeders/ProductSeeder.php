<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'Atomic Habits',
                'price'=>"100",
                'description'=>"An atomic habit is a regular practice or routine that is not only small and easy to do but is also the source of incredible powe",
                'category'=>"Self-Improvement",
                'gallery'=>"https://www.shoroukbookstores.com/images/Books/original/9781847941831.jpg",
            ],
            [
                'name'=>'Rich Dad & Poor Dad',
                'price'=>"200",
                'description'=>"Most people don't take action because they lack confidence. The don't know who to trust or fear they might follow bad advice. That's why I'm giving you access to my top experts",
                'category'=>"Self-Improvement",
                'gallery'=>"https://m.media-amazon.com/images/I/81bsw6fnUiL._AC_UF1000,1000_QL80_.jpg",
            ],
            [
                'name'=>'The Power of Now',
                'price'=>"150",
                'description'=>"To make the journey into the Now we will need to leave our analytical mind and its false created self, the ego, behind",
                'category'=>"Self-Improvement",
                'gallery'=>"https://cdn.aseeralkotb.com/storage/media/303710/conversions/the-power-of-now-a-guide-to-spiritual-enlightenment-25708-200x300-jpg.jpg",
            ],
            [
                'name'=>'The Subtle Art of Not Giving a F*ck',
                'price'=>"200",
                'description'=>"Argues that individuals should seek to find meaning through what they find to be important and only engage in values that they can control",
                'category'=>"Self-Improvement",
                'gallery'=>"https://m.media-amazon.com/images/I/51J2W2rS0oL._AC_UF1000,1000_QL80_.jpg",
            ],
            [
                'name'=>'Three Musketeers',
                'price'=>"300",
                'description'=>" is a French historical adventure novel written in 1844 by French author ?",
                'category'=>"Advanture Books",
                'gallery'=>"https://www.annahar.com/Library/Images/Uploaded%20Images/2023/03/31/Ali.zalzale/51-eGlHtrJL.jpg",
            ],
            [
                'name'=>'The Mysterious Island',
                'price'=>"400",
                'description'=>"A group of escaped prisoners, traveling in a hot air balloon, have to land on a remote islands and must try to survive there. They encounter a castaway, pirates, and captain Nemo with his array of scientific gadgets to keep strangers off his island",
                'category'=>"Advanture Books",
                'gallery'=>"https://m.media-amazon.com/images/M/MV5BOGM2MWMyNmQtM2NiNC00ZWMxLTgwY2QtNDIxNWU3ZjQ1MTk2XkEyXkFqcGdeQXVyNDk5MTU5MDc@._V1_.jpg",
            ],
            [
                'name'=> 'Behind The Scenes Of The Universe',
               
                'price'=>"300",
                'description'=>"An extraordinary discovery has recently shaken the foundations of Cosmology and Particle Physics, sparking a scientific revolution that has profoundly modified our understanding of our Universe and that is still far from over",
                'category'=>"History",
                'gallery'=>"https://m.media-amazon.com/images/I/617kx81MN9L._AC_UF1000,1000_QL80_.jpg",
            ],
            [
                'name'=>'Prominent Civilisatios',
                'price'=>"100",
                'description'=>"A cradle of civilization is a location and a culture where civilization was created independent of other civilizations in other locations",
                'category'=>"History",
                'gallery'=>"https://m.media-amazon.com/images/I/81CNSqOY6WL._AC_UF1000,1000_QL80_.jpg",
            ],
            [
                'name'=>'The Horror of Police',
                'price'=>"120",
                'description'=>"In this book—equally steeped in pop culture, the latest critical theory, and the history and contemporary reality of policing",
                'category'=>"Police Books",
                'gallery'=>"https://m.media-amazon.com/images/I/41BvZVTQ-GL._AC_UF1000,1000_QL80_.jpg",
            ],
            [
                'name'=>'The Perfect Police State',
                'price'=>"120",
                'description'=>"Blocked from facts and truth, under constant surveillance, surrounded by a hostile alien police force: Xinjiang's Uyghur population has become cursed",
                'category'=>"Police Books",
                'gallery'=>"https://www.hachettebookgroup.com/wp-content/uploads/2020/10/9781541757011-1.jpg",
            ],
            [
                'name'=>'Pride and Prejudice',
                'price'=>"250",
                'description'=>"Pride & Prejudice Sparks fly when spirited Elizabeth Bennet meets single, rich, and proud Mr. Darcy. But Mr. Darcy reluctantly finds himself falling in love ",
                'category'=>"Romantic Books",
                'gallery'=>"https://i0.wp.com/ic.pics.livejournal.com/bizarrevictoria/62054556/93090/93090_original.jpg",
            ],
            [
                'name'=>'In My Heart Is A Hebrew Woman',
                'price'=>"250",
                'description'=>"In My Heart A Hebrew Girl is a novel by Khawla Hamdi, in which the author describes how she became acquainted with the protagonist of the story Nada",
                'category'=>"Romantic Books",
                'gallery'=>"https://m.media-amazon.com/images/I/51+VmhpfqPL.jpg",
            ],


        ]);
    }
}
