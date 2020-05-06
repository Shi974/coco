<?php

use Illuminate\Database\Seeder;
use App\Models\HealthRecord;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $healthRecord = new HealthRecord;
        $healthRecord -> vaccine_info = "vaccin X réalisé le 05/05/20";
        $healthRecord -> save();

    }
}
