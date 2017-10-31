
<!-- Home Content -->


<!-- Section Intro Slider
================================================== -->

    <div id="myCarousel" class="carousel" data-ride="carousel">
 <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol> -->
      <div class="carousel-inner" >
        <div class="item active" style="background-size:cover;background-image: url('../vrs/assets/img/bmw.jpg')">
          <div class="container">
            
          </div>
        </div>
       <!--  <div class="item"  style="background-size:cover;background-image: url('../vrs/assets/img/mercedes.jpg')">
          <div class="container">
           
          </div> -->
        </div> 
        
      </div>
      <!-- <a class="prev hidden-xs" href="#myCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left"></span>
      </a>
      <a class="next hidden-xs" href="#myCarousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right"></span>
      </a> -->
    </div>

<!-- /.carousel -->


<div class="home">



    <section id="feature" >
        <div class="container">

            <div class="row">
                <div class="quick-reservation">

                  <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                           <i class="fa fa-map-marker"></i>
                            <h2>Pick A Location</h2>
                                

                        <div class="row">
                                <select class="home-select">
                                  <option selected disabled>Pickup Location</option>
                                  <option>Windsor - Huron Church</option>
                                  <option>Windsor - Jefferson</option>
                                </select>
                       </div>


                        <div class="row">
                                 <select class="home-select">
                                  <option selected disabled>Dropoff Location</option>
                                  <option>Windsor - Huron Church</option>
                                  <option>Windsor - Jefferson</option>
                                </select>
                        </div>

                        </div>
                    </div><!--/.col-md-4-->

                     <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style=>
                            <i class="fa fa-clock-o"></i>
                            <h2>Pick a Time</h2>
                            

                        <div class="row">
                            <select class="home-select">
                                  <option selected disabled>Pickup Time</option>
                                  <option>Windsor - Huron Church</option>
                                  <option>Windsor - Jefferson</option>
                                </select>
                        </div>


                        <div class="row">
                                 <select class="home-select">
                                  <option selected disabled>Dropoff Time</option>
                                  <option>Windsor - Huron Church</option>
                                  <option>Windsor - Jefferson</option>
                                </select>
                        </div>

                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-car"></i>
                            <h2>Pick a Vehicle</h2>
                           
                        <div class="row">
                            <select class="home-select" id="vehicle-select">
                            <option selected disabled>Select a Class</option>
                            <option>Four Door Sedan</option>
                            <option>Truvk</option>
                            <option>Van</option>
                          </select>
                        </div>

                        <div class="clearfix">

                        <div class="row">
                          <select class="home-select" id="vehicle-select">
                            <option selected disabled>Select a Vehicle</option>
                            <option>Toyota</option>
                            <option>BMW</option>
                          </select>
                        </div>

                        </div>
                    </div><!--/.col-md-4-->                

                </div><!--/.services-->

                <div class="center">                
                  <button type="submit" class="btn btn-danger btn-lg">Start a Reservation</button>
                  <button class="btn btn-danger btn-lg" type="button">Manage a Reservation</button>
                </div>



            </div><!--/.row-->  

  <hr style="border-color:black;max-width:100%">

  <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center" >

      <div style="min-height:400px" id="map"></div>

  </div>

   <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >

    <ul id="province-select">
      <h2>Ontario</h2>
      
      <li><a>Windsor</a></li>
      <li><a>Chatham</a></li>
      <li><a>Sarnia</a></li>
      <li><a>More...</a></li>
    </ul>

   <ul id="province-select">
      <h2>Quebec</h2>
      
      <li><a>Montreal</a></li>
      <li><a>Quebec City</a></li>
      <li><a>Val D'Ors</a></li>
      <li><a>More...</a></li>
 
    </ul>

   </div> 
        </div><!--/.container-->
    </section><!--/#feature-->



</div>

<!-- End of Content -->

  <script type="text/javascript">

function initMap(){
    var locations = [
      ['Windsor - Huron Church',  42.304863, -83.065108],
      ['Windsor - Jefferson',  42.304863,-82.951231]
    ];

     if (navigator.geolocation) {
     navigator.geolocation.getCurrentPosition(function (position) {
         initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
         map.setCenter(initialLocation);
     });
    } else {
      map.setCenter("42.304863, -83.065108")
    }

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(42.304863, -83.065108),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  }
  </script>

    <!-- Google Maps API -->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB7i973YBFx3nNz3I93BbLjZjB_gUmRJz8&callback=initMap" type="text/javascript"></script>
