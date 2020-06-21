<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('city') as $key => $value) {
            factory(App\City::class)->create(['name' => $value]);
        }
        // factory(App\Runner::class,20)->create();
        
    }
}
