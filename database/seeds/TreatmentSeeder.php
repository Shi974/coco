<?php

use Illuminate\Database\Seeder;
use App\Models\Treatment;


class TreatmentSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $veterinary = new Treatment;
        $veterinary -> sante_soin = "santé";
        $veterinary -> type = "Vermifuge";
        $veterinary -> date = '2020-08-11 08:30:00';
        $veterinary -> effectue_par = "propriétaire";    
        $veterinary -> rappel = "non";    
        $veterinary -> health_records_id = 1;    
        $veterinary -> save();

        $veterinary = new Treatment;
        $veterinary -> sante_soin = "soin";
        $veterinary -> type = "Toilettage";
        $veterinary -> date = '2020-08-11 10:00:09';
        $veterinary -> rappel = "non";    
        $veterinary -> health_records_id = 1;    
        $veterinary -> save();

        $veterinary = new Treatment;
        $veterinary -> sante_soin = "santé";
        $veterinary -> type = "Consultation vétérinaire";
        $veterinary -> date = '2020-08-24 11:15:00';
        $veterinary -> effectue_par = "vétérinaire";    
        $veterinary -> rappel = "oui";    
        $veterinary -> health_records_id = 1;    
        $veterinary -> save();

        $veterinary = new Treatment;
        $veterinary -> sante_soin = "soin";
        $veterinary -> type = "Nettoyage des oreilles";
        $veterinary -> date = '2020-08-13 15:59:00';
        $veterinary -> effectue_par = "toiletteur";    
        $veterinary -> health_records_id = 1;    
        $veterinary -> save();

        $veterinary = new Treatment;
        $veterinary -> sante_soin = "soin";
        $veterinary -> type = "Aliment";
        $veterinary -> date = '2020-08-14 15:01:07';
        $veterinary -> nom_produit = "SuperDog 2000";    
        $veterinary -> remarques = "croquettes bio, il a bien aimé";    
        $veterinary -> health_records_id = 1;    
        $veterinary -> save();
        
        $veterinary = new Treatment;
        $veterinary -> sante_soin = "soin";
        $veterinary -> type = "Coupe d'ongles";
        $veterinary -> date = '2020-08-14 09:56:04';
        $veterinary -> effectue_par = "toiletteur";    
        $veterinary -> rappel = "oui";    
        $veterinary -> health_records_id = 1;    
        $veterinary -> save();

        $veterinary = new Treatment;
        $veterinary -> sante_soin = "santé";
        $veterinary -> type = "Consultation vétérinaire";
        $veterinary -> date = '2020-08-25 08:45:00';
        $veterinary -> effectue_par = "vétérinaire";    
        $veterinary -> rappel = "oui";    
        $veterinary -> health_records_id = 2;    
        $veterinary -> save();

        $veterinary = new Treatment;
        $veterinary -> sante_soin = "soin";
        $veterinary -> type = "Bain";
        $veterinary -> date = '2020-08-14 14:44:00';
        $veterinary -> effectue_par = "propriétaire";    
        $veterinary -> health_records_id = 2;    
        $veterinary -> save();
    }
}
