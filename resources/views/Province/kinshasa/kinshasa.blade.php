@extends('layouts.app')
@section('slider')
  @include('Province.kinshasa.kinshasaSlider')
@endsection
@section('content')

<h1 class="section__title">Kinshasa</h1>
@include('Province.kinshasa.interactiveMapKinshasa')
@include('Province.kinshasa.articleKinshasa')
@include('Province.kinshasa.festivalLocal')
@include('Province.kinshasa.attractionPopulaire')
@include('Province.kinshasa.localFood')
@endsection
