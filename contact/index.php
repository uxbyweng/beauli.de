<?php 
require __DIR__ . '/../.config/private.php'; // loads hidden constants

// Fallback für e(), falls nicht via header.php geladen
if (!function_exists('e')) {
    function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
}

$metaTitle = "Contact the BEAULI™ Team – We're Here to Answer Your Questions";
$metaDescription = "Have questions or need assistance? Reach out to the BEAULI™ Team through our contact form. We're committed to providing you with helpful support.";
include($_SERVER["DOCUMENT_ROOT"] . "/include/header.php"); 
?>

<!-- STAGE -->
<section class="hero hero--contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1 class="mt30--xs mb30--xs mt50--sm fs30--xs fs40--sm">Feel free to <span>contact</span> the BEAULI™ Team</h1>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT -->
<section>
    <div class="container bg--white">
        <div class="row pt10--sm pt10--xs">
            <div class="col-md-7 pd20--xs pd30--sm">
                <h2>
                    If you have any questions, please do not hesitate to contact us.
                </h2>
                <div class="row mt40--xs">
                    <div class="col-md-9">
                        <p> 
                            The BEAULI™ Team will help you with all your needs. 
                        </p>
                    </div>
                    <div class="col-md-3"> 
                    </div>
                </div>
                <h3 class="mt30--xs">
                    Contact form
                </h3>
                <form action="contact.php" method="post" id="contact-form" data-toggle="validator">
                    <div class="messages"></div>
                    <div class="form-group">
                        <input type="text" placeholder="Your name" name="name" required="required" data-error="Name is required." class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your email address" name="email" required="required" data-error="Valid email is required." class="form-control">
                        <input type="email" placeholder="Repeat email address" class="email" name="<?= e(HP_REPEAT_EMAIL) ?>" />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Please,leave us a message." name="message" required="required" data-error="Please, leave us a message." class="form-control" rows="3"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group terms">
                         <input type="checkbox" name="<?= e(HP_TERMS) ?>">
                    </div>
                    <div class="form-group privacy">
                        <label>
                        <input type="checkbox" name="privacy" required="required" data-error="You must accept the privacy policy." value="checked">
                        I have read the <a href="/privacy-policy/">Privacy Policy</a> and agree that the BEAULI™-Team will contact me by email or telephone (if indicated).
                        <div class="help-block with-errors"></div>
                        </label>
                    </div>
                    <button class="btn btn-primary pull-right-sm">Send Message</button>
                </form>
            </div>
            <div class="offset-md-1 col-md-4 pd20--xs pd30--sm">
                <?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/card_clinic.php" ); ?>
            </div>
        </div>
    </div>
</section>

<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/register_now.php" ); ?>
<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/four_boxes.php" ); ?>
<?php 
/* FOR DEBUGGING / FORMULAR-WERTE IN CONSOLE AUSGEBEN
<script>
(function() {
    function updateLiveData() {
        var name = document.querySelector('input[name="name"]').value;
        var email = document.querySelector('input[name="email"]').value;
        var repeat_email = document.querySelector('input[name="repeat_email"]').value;
        var message = document.querySelector('textarea[name="message"]').value;
        var terms = document.querySelector('input[name="terms"]').checked;
        var privacy = document.querySelector('input[name="privacy"]').checked;

        console.clear();
        console.log("Name:", name);
        console.log("Email:", email);
        console.log("Repeat Email:", repeat_email);
        console.log("Message:", message);
        console.log("Terms Checkbox:", terms ? 'Checked' : 'Not Checked');
        console.log("Privacy Checkbox:", privacy ? 'Checked' : 'Not Checked');
    }

    document.querySelector('input[name="name"]').addEventListener('input', updateLiveData);
    document.querySelector('input[name="email"]').addEventListener('input', updateLiveData);
    document.querySelector('input[name="repeat_email"]').addEventListener('input', updateLiveData);
    document.querySelector('textarea[name="message"]').addEventListener('input', updateLiveData);
    document.querySelector('input[name="terms"]').addEventListener('change', updateLiveData);
    document.querySelector('input[name="privacy"]').addEventListener('change', updateLiveData);
})();
</script> 
*/
?>
<?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/footer.php" ); ?> 
