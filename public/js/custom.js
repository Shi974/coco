$(document).ready(function () {
    $('#type_soin input:radio').change(function() {
        var selectedVal = $("#type_soin input:radio:checked").val();
        if('santé' == selectedVal){
            var foodList = "<select id='soin_sante' name='type' class='form-control @error('type') is-invalid @enderror' name='type' required><option>Consultation vétérinaire</option><option>Vermifuge</option><option>Traitement anti puces/tiques</option><option>Vaccin</option><option>Traitement</option><option>Chirurgie</option><option>Consultation spécialiste</option><option>Test génétique/santé</option><option>Examen en labo</option><option>Reproduction</option><option>Autre</option></select>";
            $('#soin_sante').remove();
            $('#selectList').append(foodList);
        } else if ('soin' == selectedVal){
            var countryList = "<select id='soin_sante' name='type' class='form-control @error('type') is-invalid @enderror' name='type' required><option>Coupe d'ongles</option><option>Toilettage</option><option>Nettoyage des oreilles</option><option>Nettoyage des dents</option><option>Bain</option><option>Poids</option><option>Taille</option><option>Aliment</option></select>";
            $('#soin_sante').remove();
            $('#selectList').append(countryList);
        }
    });

    // FIXME icone dropdown
    $('.dropdown-icon').click(function () {
        var open = false;
        if (open) {
            $('.h2').removeClass().addClass('fas fa-caret-down h2 align-self-center');
        } else {
            console.log($('.h2').attr('class'));
            $('.h2').removeClass().addClass('fas fa-caret-up h2 align-self-center');
        }
        open = !open;
    });

    // FILTRE VETO
    $(".selectDescVeto").hide();
    $("select#veto_id").change(function () {
        var str = "";
        $("select#veto_id option:selected").each(function () {
            str += $(this).val();
        });
        var targetId = str;
        $(".selectDescVeto").hide();
        $("." + targetId).show();
    }).trigger('change');

    // REGISTER INPUT RACES ANIMAL
    $('select#animal_type').change(function() {
        var selectedVal = $("select#animal_type").val();
        if('chien' == selectedVal){
            var foodList = "<select id='animal_breed' class='form-control @error('animal_breed') is-invalid @enderror' name='animal_breed' value='{{ old('animal_breed') }}' required autocomplete='animal_breed' autofocus><option>Berger Allemand</option><option>Border Collie</option><option>Bulldog Anglais</option><option>Caniche</option><option>Chihuahua</option><option>Corgi</option><option>Husky</option><option>Labrador</option><option>Royal Bourbon</option><option>Teckel</option><option value='autre'>Autre</option></select>";
            $('#animal_breed').remove();
            $('#selectBreed').append(foodList);
        } else if ('chat' == selectedVal){
            var countryList = "<select id='animal_breed' class='form-control @error('animal_breed') is-invalid @enderror' name='animal_breed' value='{{ old('animal_breed') }}' required autocomplete='animal_breed' autofocus><option>American Shorthair</option><option>British Shorthair</option><option>Chartreux</option><option>Maine coone</option><option>Norvégien</option><option>Persan</option><option>Sacré de Birmanie</option><option>Siamois</option><option value='autre'>Autre</option></select>";
            $('#animal_breed').remove();
            $('#selectBreed').append(countryList);
        }
    });

    //FIXME autre input à intégrer
    $('select#animal_breed').change(function() {
        var breed = "";
        breed += $("select#animal_breed option:selected").text();
        console.log(breed);
    });
});