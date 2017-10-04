  <div class="row">

    <div style="margin:50px;width:40%" id="map"></div>

    <p style="margin:50px;width:35%">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod bibendum vulputate. Quisque ante metus, consequat ac sagittis sed, dictum eu lorem. Sed egestas dictum enim a ullamcorper. Etiam aliquet, odio sed feugiat dignissim, ex nibh mollis erat, eu cursus eros felis a ante. Nulla facilisi. Vestibulum porttitor vulputate velit rutrum tristique. Suspendisse dignissim magna non neque scelerisque, in placerat massa tincidunt. In cursus nunc non magna bibendum consequat. Aliquam non erat ex. Mauris vulputate consequat turpis. Vestibulum efficitur bibendum turpis nec pulvinar. Ut sollicitudin nunc bibendum odio accumsan, vitae varius ligula pretium.</p>

  </div>

  <script>
    function initMap() {
      var uluru = {lat: 42.304863, lng: -83.065108};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG64iwZotZTg1gvhY-nxb_qdLBpJeQzXA&callback=initMap">
</script>

