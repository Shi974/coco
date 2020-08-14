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
});