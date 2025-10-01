<?php 
$metaTitle = "BEAULI™ Academy: Hotel Accommodation for Attendees";
$metaDescription = "Discover convenient hotel accommodations in Birkenwerder for the BEAULI™ Academy. Stay comfortably while attending our workshops and sessions.";
include($_SERVER["DOCUMENT_ROOT"] . "/include/header.php"); 
?>

<!-- STAGE -->
<section class="hero hero--anderson-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <h1 class="mt30--xs mb30--xs mt50--sm fs30--xs fs40--sm">
                  Hotel <span>accommodation</span> for BEAULI<sup>™</sup> participants.
               </h1>
            </div>
        </div>
    </div>
</section>

<section>
   <div class="container bg--white">
      <div class="row pt-2 pr-3 pb-5 pl-3">
         <div class="col-md-7 pd20--xs pd30--sm">
            <h2>
              Hotel Accommodation
           </h2>
            <p class="pt-2">
               Birkenwerder can be reached by Train (S1 or S8) from Berlin city center. There is a large choice of various hotels in Berlin. Two hotels in Birkenwerder:
           </p>
            <div class="row mt40--xs mt80--sm">
               <div class="col-md-6">
                  <div class="card"> 
                      <a href="https://maps.app.goo.gl/1vd32qCZ7CCJwgJE9" target="_blank">
                          <img class="card-img-top" src="/images/anderson_hotel.jpg" alt="Anderson Hotel">
                      </a>
                     <div class="card-body">
                        <h5 class="card-title">
                            Andersen Hotel
                         </h5>
                        <p class="card-text">
                            Clara-Zetkin-Straße 11,<br>
                            16547 Birkenwerder<br>
                            Phone: <a href="tel:+49330329460" target="_blank">+49330329460</a><br>
                            <a href="https://www.andersen-hotel.de/" target="_blank">www.andersen-hotel.de</a>
                         </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card mt40--xs mt0--sm"> 
                      <a href="https://maps.app.goo.gl/DWhEEK9bY9bwuWnC8" target="_blank">
                          <img class="card-img-top" src="/images/buffet_hotel.jpg" alt="Buffet Hotel">
                      </a>
                     <div class="card-body">
                        <h5 class="card-title">
                            Buffet Hotel
                         </h5>
                        <p class="card-text">
                            Clara-Zetkin-Straße 9,<br>
                            16547 Birkenwerder<br>
                            Phone: <a href="tel:+493303508122" target="_blank">+493303508122</a><br>
                            <a href="https://maps.app.goo.gl/DWhEEK9bY9bwuWnC8" target="_blank">Google Maps</a>
                         </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="offset-md-1 col-md-4 pd20--xs pd30--sm">
            <?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/banner.php" ); ?>
         </div>
      </div>
   </div>
</section>


<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/register_now.php" ); ?>
<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/four_boxes.php" ); ?>
<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/footer.php" ); ?> 