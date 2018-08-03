<?php

use Illuminate\Database\Seeder;

class UserRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Register::class,50)->create();
    }
}
