<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic){
            $newComic = new Comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->artists = json_encode($comic['artists']);
            $newComic->writers = json_encode($comic['writers']);

            $newComic->save();
        }
    }
}

// $table->string('title',100);
// $table->text('description');
// $table->text('thumb');
// $table->unsignedTinyInteger('price');
// $table->string('series', 100);
// $table->date('sale_date');
// $table->string('type', 100);
// $table->json('artists');
// $table->json('writers');
