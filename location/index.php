<?php 
$metaTitle = "BEAULI™ Academy Location in Birkenwerder – Park-Klinik Details";
$metaDescription = "Discover the beautiful location of the BEAULI™ Academy: Park-Klinik Birkenwerder in Germany. Explore the venue for our upcoming event.";
include($_SERVER["DOCUMENT_ROOT"] . "/include/header.php"); 
?> 

<!-- STAGE -->
<section class="hero hero--location">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h1 class="mt-xs mt30--xs mb30--xs mt50--sm fs30--xs fs40--sm">
                The <span>Location</span> of the BEAULI<sup>™</sup> academy in Birkenwerder
            </h1>
         </div>
      </div>
   </div>
</section>

<!-- CONTENT -->
<section>
   <div class="container bg--white">
      <div class="row pt-2 pr-3 pb-5 pl-3">
         <div class="col-md-8 pd20--xs pd30--sm">
            <h2>
               Location
            </h2>
            <p class="pt-2">
               This year's BEAULI<sup>™</sup> Academy will take place in the Park-Klinik Birkenwerder clinic building:
            </p>
            <p class="pt-4">
               <strong>Park-Klinik Birkenwerder</strong><br>
               Hubertusstraße 22<br>
               16547 Birkenwerder<br>
               Germany
            </p>
            <a href="https://www.park-klinik-birkenwerder.de/" target="_blank">Click here for Park-Klinik Website</a>
            <p>&nbsp;</p>
            <a href="https://maps.app.goo.gl/KaHm8N3jMouVQdxL6" target="_blank">
               <img src="/images/standort_pkb.jpg" class="img-responsive d-none d-sm-block" alt="Location: Park-Klinik Birkenwerder">
               <img src="/images/standort_pkb.jpg" class="img-responsive d-block d-sm-none" alt="Location: Park-Klinik Birkenwerder">
            </a>
         </div>
         <div class="col-md-4 pd20--xs pd30--sm">
             <?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/card_clinic.php" ); ?>
         </div>
      </div>
   </div>
</section>

<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/register_now.php" ); ?>
<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/four_boxes.php" ); ?>
<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/footer.php" ); ?> 