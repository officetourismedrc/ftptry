<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
            <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
            <link rel="stylesheet" href="{{url('assets/css/swiper-bundle.min.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/office.css')}}">
            {{-- <link rel="shortcut icon" href="{{url('assets/images/logo-paysage.png')}}" /> --}}
            {{-- <link rel="shortcut icon" href="{{url('assets/images/bijoux-01.png')}}" /> --}}
            
            <title>office</title>
   
    </head>
    <body>
        <header class='header'>
             @include('layouts.headerPage.pageNavigation')
             @include('layouts.headerPage.mainPageSlider')
        </header>
        <main class="main">
          @include('layouts.pageMain.mainMenuSection')
          @include('layouts.pageMain.calendrier5252')
          @include('layouts.pageMain.mapInteractiveSection')
          @include('layouts.pageMain.articleVoyageSection')
          @include('layouts.pageMain.infoPartenaireSection')
          @include('layouts.pageMain.articlesSection')
          @include('layouts.pageMain.meilleurEndroitSection')
          @include('layouts.pageMain.zoneInteretSection')
          @include('layouts.pageMain.placePopulaireSection')
          @include('layouts.pageMain.publicitySection')
          @include('layouts.pageMain.infoGovSection')
        </main>
        <footer class="footer">
         @include('layouts.footer.footer')
        </footer>

        {{-- java script --}}

         <!--==========================scripts==============================-->
    <!--start script for currency conversion-->
     <script src="{{url('assets/js/currency.js')}}"></script>
     <!--end curency converter-->
     <script src="{{url('assets/js/swiper-bundle.min.js')}}"></script>
     <script src="{{url('assets/js/office.js')}}"></script>
        {{-- js --}}
    </body>
</html>
