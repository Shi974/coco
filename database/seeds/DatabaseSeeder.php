<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this -> call(UsersTableSeeder::class);
        $this -> call(VeterinariesTableSeeder::class);
        $this -> call(Health_recordsTableSeeder::class);
        $this -> call(AnimalsTableSeeder::class);
    }
}
