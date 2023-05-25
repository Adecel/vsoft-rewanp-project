<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- SCROLL -->
<script src="{{asset('js/scrollspy.min.js')}}"></script>
<!-- SCROLL -->
<script src="{{asset('js/feather.min.js')}}"></script>
<!--  -->
<!-- bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- easing -->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<!-- Portfolio -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<!-- scroll -->
<script src="{{asset('js/scrollspy.min.js')}}"></script>
<!-- Counter -->
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Custom -->
<script src="{{asset('js/app.js')}}"></script>



<!-- js for home -->

<!-- js section -->
<script src="forHome/js/jquery.min.js"></script>
<script src="forHome/js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="forHome/js/menumaker.js"></script>
<!-- wow animation -->
<script src="forHome/js/wow.js"></script>
<!-- custom js -->
<script src="forHome/js/custom.js"></script>
<!-- revolution js files -->
<script src="forHome/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="forHome/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="forHome/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="forHome/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="forHome/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="forHome/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="forHome/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="forHome/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="forHome/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="forHome/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="forHome/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map js -->
<script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = 'forHome/images/it_service/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
<!-- js for home -->