<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10; $i++){
            DB::table('books')->insert([
            'publisher_id' => $i,
            'title' => 'dummyTitle'.$i,
            'author' => 'dummyAuth'.$i,
            'year' => 2000+$i,
            'synopsis' => 'dummySynopsis'.$i,
            'image' => 'images/'.$i.'.jpg'
            ]);
        }
    }
}
