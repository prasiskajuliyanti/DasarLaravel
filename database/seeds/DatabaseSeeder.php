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
        // $this->call(siska::class);
        // $this->call(SiswaSeeder::class);
        $this->call(PostsTablebio::class);
        //$this->call(UsersTableSeeder:class);
    }
}
