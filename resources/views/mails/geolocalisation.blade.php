@component('mail::message')
Bonjour {{ $data['username'] }}, <br>
<br>
Une géolocalisation de votre animal vient d'être effectuée via {{ config('app.name') }}.  

<h2>Informations du scan</h2>
<b>Animal :</b> {{ $data['name'] }}<br>
<b>Date :</b> {{ utf8_encode(strftime('%A %d %B %Y - %T', strtotime(now()))) }}<br/>
<b>Localisation : {{ $data['latitude'] }}, {{ $data['longitude'] }}<br>
<a href="https://maps.google.com/?q={{ $data['latitude'] }},{{ $data['longitude'] }}" target="_blank" class="btn mt-1 mb-2">
    Voir sur la carte
</a>
@endcomponent