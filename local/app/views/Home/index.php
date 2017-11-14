<!-- Home Content -->
<!-- Section Intro Slider
================================================== -->

    <div id="myCarousel" class="carousel" data-ride="carousel">
 <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol> -->
      <div class="carousel-inner" >
        <div class="item active background-image">
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

                <form method="post" action="<?php echo URL ?>Reservation/addReservation">
                  <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                           <i class="fa fa-map-marker"></i>
                            <h2>Pick A Location</h2>
                                

                        <div class="row">
                                <select name="pick_loc" class="home-select">
                                  <option selected disabled>Pickup Location</option>

                                 <?php  foreach ($this->locations as $location) 
                                      {
                                        echo "<option value=".$location->location_id.">".$location->name."</option>";
                                      }
                                      ?>

                                </select>
                       </div>


                        <div class="row">
                                 <select name="drop_loc" class="home-select">
                                  <option selected disabled>Dropoff Location</option>
                                  
                                  <?php  foreach ($this->locations as $location) 
                                      {
                                        echo "<option value=".$location->location_id.">".$location->name."</option>";
                                      }
                                      ?>

                                </select>
                        </div>

                        </div>
                    </div><!--/.col-md-4-->

                      <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInDown" style="max-height:277px" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style=>
                            <i class="fa fa-clock-o"></i>
                            <h2>Pick a Time</h2>
                            
                        <div class="row">
                          <input type="text" name="pick_time" placeholder="Pickup Date and Time" readonly class="form_datetime home-select">
                        </div>


                        <div class="row">
                          <input type="text" name="drop_time" placeholder="Dropoff Date and Time" readonly class="form_datetime home-select">
                        </div>

                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-car"></i>
                            <h2>Pick a Vehicle</h2>
                           
                        <div class="row">
                            <select name="class" class="home-select" id="vehicle-select">
                            <option selected disabled>Select a Class</option>
                             <?php  foreach ($this->classes as $classes) 
                                      {
                                        echo "<option value=".$classes->classid.">".$classes->class."</option>";
                                      }
                                      ?>

                          </select>
                        </div>

                        <div class="clearfix">

                        <div class="row">
                          <select name="vehicle" class="home-select" id="vehicle-select">
                            <option selected disabled>Select a Vehicle</option>
                            <?php  foreach ($this->vehicles as $vehicles) 
                                      {
                                        echo "<option value=".$vehicles->vid.">".$vehicles->year." ".$vehicles->company." ".$vehicles->model_name."</option>";
                                      }
                                      ?>

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

  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center" >

  <?php include(dirname(__DIR__)."\Home\config\map.php") ?>

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

<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>       

  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB7i973YBFx3nNz3I93BbLjZjB_gUmRJz8&callback=initMap" type="text/javascript"></script>