@extends('layouts.app')
@section('slider')
    @include('Miscelaneous.InfoEssentiel.slider')
@endsection
@section('content')
@include('Miscelaneous.InfoEssentiel.slider')
@endsection
@section('content')
<div class="section section_visa">
<div class="container visa__container">
    <h2 class="section__title-1">Comment bouquet son Hotel</h2>
    <div class="content">
      <div class="visa_article__container">
       
        <article class="visa__article">
          <h2 class="section__title-2">Online-booking sites make staying in Japan easier than ever</h2>
          Research the many accommodation options for staying in Japan and make quick and easy online reservations. Choose from luxury to budget, traditional to modern, and urban to rural. Websites are listed in alphabetical order.
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