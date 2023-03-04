<?php include 'header.php'; ?>
      <!-- contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <form class="main_form" action="msg.php" method="post">
                     <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input class="form-control" placeholder="Name" type="text" name="Name">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input class="form-control" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input class="form-control" placeholder="Phone" type="text" name="Phone">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <button class="send">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padddd">
                  <div class="map_section">
                     <div id="map">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact  -->
      <?php include 'footer.php'; ?>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
             var map = new google.maps.Map(document.getElementById('map'), {
                 zoom: 11,
                 center: {
                     lat: 11.0168,
                     lng: 76.9558
                 },
             });
         
             var image = 'images/maps-and-flags.png';
             var beachMarker = new google.maps.Marker({
                 position: {
                     lat: 11.0168,
                     lng: 76.9558
                 },
                 map: map,
                 icon: image
             });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>