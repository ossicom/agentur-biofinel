<section class="contact" id="contact">
    <div class="container">
        <h3 class="text-center">Kontaktformular</h3>
        <p class="text-center font-italic">Hinterlasse uns doch eine Nachricht!</p>

        <?php require_once ('phpmailer.php'); ?>

        <!-- Show error message -->

        <div class='error'><?php  echo $error; echo $successMessage; ?></div>



        <form method="post" action="" id="form" name="form">
            <div class="row">
                <div class="col-12 col-sm-6">

                    <input class="form-control mb-4" type="text" maxlength="50" name="name" id="name"
                        placeholder="Dein Vor und Nachname *" required />

                    <input class="form-control mb-4" type="text" maxlength="50" id="subject" name="subject"
                        placeholder="Betreff *" required />

                    <input class="form-control mb-4 mb-sm-0" type="email" id="email" maxlength="50" name="email"
                        placeholder="Deine E-Mail *" required />

                </div>

                <div class="col-12 col-sm-6">
                    <textarea class="form-control contact-message" maxlength="500" name="message" id="message"
                        placeholder="Deine Nachricht *" required></textarea>
                </div>
            </div><br>
            <!-- goggle recaptcha -->
            <div style="display: flex; justify-content: center;">
                <div class="g-recaptcha" data-sitekey="enter your sitekey hier">
                </div>
            </div>
            <!-- ende recaptcha -->
            <div class="text-center">
                <button type="submit" class="mt-3 btn btn-primary">Nachricht abschicken!</button>
            </div>
            <br>
        </form>
        <p class="mt-3 text-center">Send Email</p>
        <p class="mt-3 text-center" type="email"><a href="mailto:webmaster@biofinel.ch">webmaster@biofinel.ch</a>
        </p>

        <p class="mt-3 text-center"><a href='https://biofinel.ch'>
                < Home Biofinel />
            </a>
        </p>
    </div>
</section>
