<?php 
include($_SERVER["DOCUMENT_ROOT"] . "/include/header.php"); 
// Lesen des übergebenen Fehlercodes
$error_code = isset($_GET['code']) ? $_GET['code'] : 'Unbekannter Fehler';
?> 

<!-- STAGE -->
<section class="hero hero--home">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mt30--xs mb30--xs mt50--sm fs30--xs fs40--sm">
                    <span>Error <?php echo $error_code; ?></span><br>
                    You are in the wrong place.
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
                <h2 class="mt30--xs mb30--xs mt50--sm fs30--xs fs40--sm">
                    Oops! Unfortunately, the requested page could not be found
                </h2>
                <p class="text-lg pt-60 pb-60 lg-pt-30 lg-pb-30">
                    It seems you've ventured off the map. Unfortunately, the page you're looking for doesn't exist or the link you followed might be broken. We understand how frustrating that can be.
                </p>
                <p class="text-lg pt-60 pb-60 lg-pt-30 lg-pb-30">
                    If you're having trouble finding what you need, why not start fresh from our homepage? It's just a click away and might have exactly what you're looking for.
                </p>
                <a href="/" class="btn btn-outline-info mt20--sm">Return to the BEAULI Homepage »</a>
            </div>
            
            <!-- SIDEBAR -->
            <div class="col-md-4 pd20--xs pd30--sm">
                <div class="card">
                    <img class="card-img-top" src="/images/tanzella_ueberreiter.jpg" alt="Dr.med. Klaus Ueberreiter und Dr.med. Ursula Tanzella">
                    <div class="card-body">
                        <h5 class="card-title">
                            Dr. med. Klaus Ueberreiter and Dr. med. Ursula Tanzella
                        </h5>
                        <p class="card-text">Specialists in Plastic and Aesthetic Surgery<br>
                            <br>
                            Park-Klinik Birkenwerder<br>
                            Hubertusstraße 22<br>
                            16547 Birkenwerder<br>
                            <br>
                            Phone: <a href="tel:+49330351340000" target="_blank">+49 3303 513 4000 0</a> <br>
                            E-Mail: <a href="mailto:info@beauli.de" target="_blank">info@beauli.de</a> <br>
                            <a href="https://www.park-klinik-birkenwerder.de/en/" style="font-size: 17px;">www.park-klinik-birkenwerder.de</a>
                        </p>
                    </div> 
                </div> 
            </div> 

        </div>
    </div> 
</section>

<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/register_now.php" ); ?>
<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/four_boxes.php" ); ?>
<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/footer.php" ); ?> 