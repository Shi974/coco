<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = new User;
        $user -> username = "agent_jenny";
        $user -> email = "jenny@mail.com";
        $user -> password = '$2y$10$MReXTVnzqbJzW3ra/HuxlevcXcMp1JX/9PaQc1tjJXdDqAF6oEAgK';
        $user -> first_name = "Jenny";    
        $user -> last_name = "Techer";    
        $user -> address = "10, rue de Paris";    
        $user -> address_plus = "Résidence Manguier, Apt 5";
        $user -> postal_code = "97400";
        $user -> city = "Saint-Denis";
        $user -> country = "RE";
        $user -> phone = "0692010203";        
        // $user -> is_veterinary = 0;        
        $user -> save();

        // $user = new User;
        // $user -> username = "veto974";
        // $user -> email = "veto974@mail.com";
        // $user -> password = '$2y$10$MReXTVnzqbJzW3ra/HuxlevcXcMp1JX/9PaQc1tjJXdDqAF6oEAgK';
        // $user -> first_name = "Jean";    
        // $user -> last_name = "Dupont";    
        // $user -> address = "105, rue Marius et Ary Leblond";    
        // $user -> postal_code = "97400";
        // $user -> city = "Saint-Denis";
        // $user -> country = "RE";
        // $user -> phone = "0692010101";        
        // // $user -> is_veterinary = 1;        
        // $user -> save();
    }
}
