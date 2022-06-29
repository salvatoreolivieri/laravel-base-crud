<?php

use App\Comic;

use Illuminate\Database\Seeder;

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

        foreach ($comics as $item) {
            $new_item = new Comic();
            $new_item->title = $item->title;
            $new_item->image = $item->image;
            $new_item->type = $item->type;
            $new_item->save();

        }
    }
}
