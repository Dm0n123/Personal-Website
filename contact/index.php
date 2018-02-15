<!DOCTYPE HTML>
<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes.html'); ?>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.html'); ?>
        <link rel="stylesheet" type="text/css" href="css/page.css"/>

        <div class="back">
            <div class="cenMain">
                 <h1 class="titleMain">CONTACT</h1>
                <h3 class="regTitle padB40">Send me an email through this form.</h3>
                <!-- <h3 class="regTitle padB20">Send me an email through this form</h3> -->

                <!-- <img>devon.proj@gmail.com</img> -->
                <form action="send.php" method="get">
                    <div class="form-group row">
                      <label for="name" class="col-2 col-form-label">Name</label>
                      <div class="col-10">
                          <input class="form-control" name="name" aria-describedby="emailHelp">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-2 col-form-label rp">Email address</label>
                        <div class="col-10">
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                                <!-- <small id="emailHelp" class="form-text text-muted">Address for me to reply.</small> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject" class="col-2 col-form-label">Subject</label>
                            <div class="col-10">
                                <input class="form-control" name="subject" aria-describedby="emailHelp">
                            </div>
                    </div>
                     <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="10"></textarea>
                    </div>

                    <div class="cenX down">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary btn-lg">
                    </div>
                </form>
            </div>
        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'].'/footer.html'); ?>
        <script src="scripts/mobile.js" type="text/javascript"></script>
    </body>
</html>
