<?php

use Illuminate\Database\Seeder;
use App\Models\Animal;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $animal = new Animal;
        $animal -> first_name = "Bobby";    
        $animal -> last_name = "Techer";    
        $animal -> birth_date = "2018-09-24";
        $animal -> type = "chien";
        $animal -> breed = "Berger Allemand";
        $animal -> users_id = "1";
        $animal -> veterinary_id = "1";
        $animal -> health_records_id = "1";
        $animal -> save();

    }
}
