<?php
    require_once "main.php";
?>

<html>
    <head>
        <?php include "includes/head.php"; ?>
    </head>
    <body>
        <?php include "includes/header.php"; ?>
        <div class="container">
            <!-- Screenshot carousel -->
            <div class="row row-centered">
                <div class="col-md-8 col-md-offset-2">
                    <div id="screenshot-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/screenshots/screenshot_1.png"/>
                            </div>
                            <div class="item">
                                <img src="images/screenshots/screenshot_2.png"/>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $('carousel').carousel({
                        interval: 2000
                    })
                </script>
            </div>
            <!-- Information Row -->
            <div class="row row-centered">
                <!-- Game Description -->
                <div class="col-md-8">
                    <p>Hour of towers is a game and stuff. Lorem ipsum something something.</p>
                </div>
                <div class="col-md-4">
                    <p>This is where my dev blog would go. IF I HAD ONE</p>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>
