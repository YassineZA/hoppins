<?php

use Illuminate\Database\Seeder;

class AddessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Address::class, 10)->create();
    }
}
