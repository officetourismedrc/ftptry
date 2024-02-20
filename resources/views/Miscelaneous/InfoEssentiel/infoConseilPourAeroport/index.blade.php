@extends('layouts.app')
@section('slider')
@include('Miscelaneous.InfoEssentiel.slider')
@endsection

@section('content')
<div class="section section_visa">
<div class="container visa__container">
    <h2 class="section__title-1">Accés à l'Aeroport</h2>
    <div class="content">
      <div class="visa_article__container">
       
        <article class="visa__article">
          <h2 class="section__title-2">Le Japon est situé dans une région assez isolée du globe, vous devrez donc probablement prendre un vol long-courrier pour vous y rendre.</h2>
          Nous savons qu'être en mesure d'accéder facilement à votre hôtel ou hébergement après votre arrivée sur le sol japonais figure parmi vos priorités. Par chance, les aéroports des grandes villes japonaises sont très bien desservis par les trains express, les bus et les taxis, et disposent généralement de services de location de voiture. Vous pourrez ainsi rejoindre votre logement aisément. Pour faciliter votre séjour, nous vous conseillons de vous renseigner sur les horaires des différents modes de transport.
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