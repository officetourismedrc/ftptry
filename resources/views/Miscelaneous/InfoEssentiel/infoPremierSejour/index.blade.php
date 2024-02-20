@extends('layouts.app')
@section('slider')
    @include('Miscelaneous.InfoEssentiel.slider')
@endsection
@section('content')
<div class="section section_visa">
<div class="container visa__container">
    <h2 class="section__title-1">Planifier minitieusement son séjour</h2>
    <div class="content">
      <div class="visa_article__container">
       
        <article class="visa__article">
          <h2 class="section__title-2">Facilitez votre séjour en le planifiant soigneusement</h2>
          On peut vite se sentir submergé et perdu lorsqu'on visite le Japon pour la première fois. Apprenez les bases avant votre départ, familiarisez-vous avec la culture et laissez-vous guider par nos conseils d'organisation. 

          Découvrez-en un peu plus sur la culture et les coutumes japonaises, sur l'accès aux réseaux Wi-Fi mais également sur sa météo saison par saison, ses reliefs et les possibilités de livraison des bagages. Ce guide répond à presque toutes les questions que les personnes voyageant pour la première fois au Japon se posent. Quelques astuces et conseils pratiques s'y sont également glissés et vous permettront d'arpenter le pays en toute confiance.
          
        </article>
        <aside class="visa__aside">
           <img src="{{url('assets/images/Misc/InfoEss/PremierSejour/hotel.avif')}}" alt="hotel" class="visa__image">
        </aside>
        </div>
        <div class="bottom__visa">

        </div>
    </div>
</div>
</div>
@include('layouts.pageMain.publicitySection')
@endsection