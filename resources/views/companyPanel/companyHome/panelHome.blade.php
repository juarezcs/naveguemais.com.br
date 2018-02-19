@extends('companyDashboard.template.template1')

<!-- COMPLEMENTO CSS -->
@push('css')
    <link rel="stylesheet" type="text/css" href="{{url('assets/companyDashboard/companyHome/css/panelHome.css')}}">
    
    <script type="text/javascript">
     // Create a map variable
     var map;
     // Function to initialize the map within the map div
     function initMap() {
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: 40.74135, lng: -73.99802},
         zoom: 14
       });
       // Create a single latLng literal object.
       var singleLatLng = {lat: 40.74135, lng: -73.99802};
       // TODO: Create a single marker appearing on initialize -
       // Create it with the position of the singleLatLng,
       // on the map, and give it your own title!
       // TODO: create a single infowindow, with your own content.
       // It must appear on the marker
       // TODO: create an EVENT LISTENER so that the infowindow opens when
       // the marker is clicked!
     }
   </script>
@endpush
<!-- /COMPLEMENTO CSS -->

<!-- /CONTEÚDO PÁGINA -->
@section('conteudo')
    
        
    <div id="map"></div>
        

@endsection
<!-- /CONTEÚDO PÁGINA -->


<!-- SCRIPT DA PÁGINA -->
@push('scripts')
    
<script async defer src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCWnfD2xuZngXAWrkOO5N6emR3yGHi0te8&callback=initMap"></script>

@endpush
<!-- /SCRIPT DA PÁGINA -->

