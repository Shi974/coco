@component('mail::message')
Bonjour {{ $data['username'] }}, <br>
<br>
Une géolocalisation de votre animal vient d'être effectuée via {{ config('app.name') }}.  

<h2>Informations du scan</h2>
<b>Animal :</b> {{ $data['name'] }}<br>
<b>Date :</b> {{ now() }}
<b>Localisation :</b> {{ $data['latitude'] }}, {{ $data['longitude'] }}<br>
@endcomponent