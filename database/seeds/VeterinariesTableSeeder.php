<?php

use Illuminate\Database\Seeder;
use App\Models\Veterinary;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $veterinary = new Veterinary;
        $veterinary -> username = "vet974";
        $veterinary -> email = "veto@mail.com";
        $veterinary -> password = '$2y$10$MReXTVnzqbJzW3ra/HuxlevcXcMp1JX/9PaQc1tjJXdDqAF6oEAgK'; //password
        $veterinary -> first_name = "Jean";    
        $veterinary -> last_name = "Dupont";    
        $veterinary -> address_practice = "105, rue Sainte-Marie";    
        $veterinary -> postal_code_practice = "97400";
        $veterinary -> city_practice = "Saint-Denis";
        $veterinary -> country_practice = "RE";
        $veterinary -> phone_practice = "0692010101";        
        $veterinary -> save();

        $veterinary = new Veterinary;
        $veterinary -> username = "eucalyptus";
        $veterinary -> email = "eucalyptus@mail.com";
        $veterinary -> password = '$2y$10$MReXTVnzqbJzW3ra/HuxlevcXcMp1JX/9PaQc1tjJXdDqAF6oEAgK'; //password
        $veterinary -> first_name = "Micheline";    
        $veterinary -> last_name = "Rose";    
        $veterinary -> address_practice = "24 Route des Eucalyptus";    
        $veterinary -> postal_code_practice = "97417";
        $veterinary -> city_practice = "La Montagne";
        $veterinary -> country_practice = "RE";
        $veterinary -> phone_practice = "0262477746";        
        $veterinary -> save();
    }
}
