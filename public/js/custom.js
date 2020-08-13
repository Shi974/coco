$(document).ready(function () {
    $('#type_soin input:radio').change(function() {
        var selectedVal = $("#type_soin input:radio:checked").val();
        if('santé' == selectedVal){
            var foodList = "<select name='type' class='form-control @error('type') is-invalid @enderror' name='type' required><option>Consultation vétérinaire</option><option>Vermifuge</option><option>Traitement anti puces/tiques</option><option>Vaccin</option><option>Traitement</option><option>Chirurgie</option><option>Consultation spécialiste</option><option>Test génétique/santé</option><option>Examen en labo</option><option>Reproduction</option><option>Autre</option>";
            $('select').remove();
            $('#selectList').append(foodList);
        } else if ('soin' == selectedVal){
            var countryList = "<select name='type' class='form-control @error('type') is-invalid @enderror' name='type' required><option>Coupe d'ongles</option><option>Toilettage</option><option>Nettoyage des oreilles</option><option>Nettoyage des dents</option><option>Bain</option><option>Poids</option><option>Taille</option><option>Aliment</option>";
            $('select').remove();
            $('#selectList').append(countryList);
        }
    });
});