<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10; $i++){
            DB::table('publishers')->insert([
            'name' => 'dummyPublisher'.$i,
            'address' => 'dummyStreet'.$i,
            'phone' => $i,
            'email' => 'dummy'.$i.'@gmail.com',
            'image' => 'images/p'.$i.'.jpg'
            ]);
        }
    }
}
