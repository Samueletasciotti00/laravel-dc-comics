<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $db_comics = config('comics');

        //Debug
        // dump($db_comics);

        //Ciclo per stampare gli elementi del DB;
        foreach($db_comics as $comic){

            // Nuova istanza
            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->description =$comic['description']; 
            $new_comic->save();
        }
    }
}
