<?php
require __DIR__ . '/../.config/private.php';
if (!function_exists('e')) { function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); } }

$metaTitle = "Register Now for the 22th BEAULI™ Academy - Secure Your Spot Today";
$metaDescription = "Join us at BEAULI™ Academy 2026. Register now to secure your place for an enriching experience. Fee details, privacy policy, and contact consent included";
include($_SERVER["DOCUMENT_ROOT"] . "/include/header.php");
?>

<!-- STAGE -->
<section class="hero hero--contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1 class="mt30--xs mb30--xs mt50--sm fs30--xs fs40--sm">
                    <span>Registration</span> for the BEAULI<sup>&trade;</sup> Academy 
                </h1>
            </div>
        </div>
    </div>
</section> 

<!-- CONTENT -->


<section>
    <div class="container bg--white">
        <div class="row pt10--sm pt10--xs">
            <div class="col-md-7 pd20--xs pd30--sm">
                
                <!-- WAITING LIST REGISTRATION 
                <h2>
                    Registration
                </h2>
                <h4>+++ The November course is now fully booked. Join the waiting list to secure your spot if a space becomes available. +++</h4>
                <h3 class="mt60--xs mb30--xs">
                    Sign up for the BEAULI<sup>&trade;</sup> Academy waiting list
                </h3>
                <form action="register.php" id="registration-form" data-toggle="validator">
                    <div class="messages"></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" placeholder="&#x1F552; 21.11.2024" name="date" class="form-control" disabled>
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="&#x1F3AB; Fee: 950,00 €" name="price" class="form-control" disabled>
                                <span style="font-size:12px">Fee due within 10 days of invoice receipt.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Your name" name="name" required="required" data-error="Name is required." class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your email address" name="email" required="required" data-error="Valid email is required." class="form-control">
                        <input type="email"  placeholder="Repeat email address" class="email" name="repeat_email" />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Your message to us (optional)" name="message" data-error="please fill in correctly" class="form-control" rows="3"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="math_question">
                            Solve the following math problem to continue: 3 + 4 = ?</label>
                        <input type="text" id="math_question" name="math_question" required="required" data-error="Correct answer is required." class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group terms">
                        <input type="checkbox" name="terms">
                    </div>
                    <div class="form-group">
                        <label>
                        <input type="checkbox" name="privacy" required="required" data-error="You must accept the privacy policy." value="checked"> 
                            I am registering for the waiting list of the specified academy and affirm that I have read the <a href="/privacy-policy/">Privacy Policy</a>. I consent to being contacted by the BEAULI<sup>&trade;</sup> Team via email or phone, if provided.
                        <div class="help-block with-errors"></div>
                        </label>
                    </div>
                <button class="btn btn-primary pull-right-sm">Register for the Waiting List</button>
                </form>
                -->
                    
                <!-- NORMAL REGISTRATION  -->
                <h2>
                    Registration 
                </h2>
                <h3 class="mt60--xs mb30--xs">
                    Secure your spot at BEAULI<sup>&trade;</sup> Academy 2026
                </h3>
                <!-- WICHTIG: POST -->
                <form action="register.php" method="post" id="registration-form" data-toggle="validator">
                <div class="messages"></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" placeholder="&#x1F552; 23.04.2026" name="date" class="form-control" disabled>
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="&#x1F3AB; Fee: 950,00 €" name="price" class="form-control" disabled>
                                <span style="font-size:12px">Fee due within 10 days of invoice receipt.</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Your name" name="name" required="required" data-error="Name is required." class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your email address" name="email" required="required" data-error="Valid email is required." class="form-control">
                        <?php // Honeypot 1 ?>
                        <input type="email" placeholder="Repeat email address" class="email" name="<?= e(REG_HP_REPEAT_EMAIL) ?>">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Your message to us (optional)" name="message" data-error="please fill in correctly" class="form-control" rows="3"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="<?= e(REG_MATH_FIELD) ?>">Solve the following math problem to continue: 3 + 4 = ?</label>
                        <input type="text" id="<?= e(REG_MATH_FIELD) ?>" name="<?= e(REG_MATH_FIELD) ?>" required="required" data-error="Correct answer is required." class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group terms">
                        <?php // Honeypot 2 ?>
                        <input type="checkbox" name="<?= e(REG_HP_TERMS) ?>">
                    </div>
                    <div class="form-group">
                        <label>
                        <input type="checkbox" name="privacy" required="required" data-error="You must accept the privacy policy." value="checked">
                        I am registering for the specified academy and affirm that I have read the <a href="/privacy-policy/">Privacy Policy</a>. I consent to being contacted by the BEAULI<sup>&trade;</sup> Team via email or phone, if provided.
                        <div class="help-block with-errors"></div>
                        </label>
                    </div>
                    <button class="btn btn-primary pull-right-sm">Register now</button>
                </form>
                
                    
                

            </div>
            <div class="offset-md-1 col-md-4 pd20--xs pd30--sm">
                <?php include( $_SERVER[ "DOCUMENT_ROOT" ] . "/include/card_clinic.php" ); ?>
            </div>
        </div>
    </div>
</section>


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
