<?php @session_start();
    include('aboutus/international/'.$_SESSION['dirlng']."/dictionary_part2.php");
    $theruta="aboutus/images/";
?>


<link rel="stylesheet" type="text/css" href="css/usefonts.css">

<style>
 /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .versiongrande {display:none;}
        .versionmedia {display:none;}
        .versionpequenia{display:block;}
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        .versiongrande {display:none;}
        .versionmedia {display:none;}
        .versionpequenia{display:block;}
    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .versiongrande {display:none;}
        .versionmedia {display:block;}
        .versionpequenia{display:none;}
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .versiongrande {display:block;}
        .versionmedia {display:none;}
        .versionpequenia{display:none;}
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        .versiongrande {display:block;}
        .versionmedia {display:none;}
        .versionpequenia{display:none;}
    }

</style>


<div class="versiongrande">
    <div id="shopify-section-1591030222613" class="shopify-section nt_section type_image_text_overlay" >
        <div class="nt_se_1591030222613 nt_full txt_shadow_false se_height_full nt_first" >
            <div class="row equal_nt"
                style=" min-height:100vh">
                <div class="row " style="width:100%;margin-top:140px;">
                    <div class="col-12" style="text-align:center">
                        <h2 style="font-family:MigraItalic-ExtraboldItalic; font-size:2em; color:#8d0707;"><?php echo constant('Part2_Title'); ?></h2>
                    </div>

                    <div class="col-12" style="width:100%; background-image:url(aboutus/images/floral1.png);
                                                background-repeat:no-repeat;
                                                background-position:top left;
                                                margin-top:-90px;
                                                overflow:hidden; text-align:center;">


                            <img src="aboutus/images/letter_about_us.png" style="height:80vh; width:auto; margin-top:90px; ">

                    </div>



                    <div class="col-12" style="background-image:url(aboutus/images/floral2.png);
                                                background-repeat:no-repeat;
                                                background-position:top right;
                                                text-align:center;
                                                overflow:hidden;
                                                margin-top:-190px;
                                                width:100%;">


                        <div class="col-12" style="width:100%;text-align:center; margin-top:190px;">
                            <div class="col-12" style="text-align:center; width:100%; padding-top:20px;">
                                <h2 style="font-family:MigraItalic-ExtraboldItalic; font-size:2em; color:#b3975e;"><?php echo constant('Part2_Title2'); ?></h2>
                            </div>
                            <div style="text-align:center; width:100%; font-size:1.2em;">
                                <?php echo constant('Part2_msg2'); ?>

                            </div>
                            <br>
                            <img src="images/logo-red2x.png" style="width:200px; height:auto;">

                        </div>


                     </div>


<img src="aboutus/images/floral3.png" style="float:left;  position:relative; top:-80px; left:0px;margin-top:-140px;">


                </div>
            </div>
        </div>
    </div>
</div>



<div class="versionmedia">


    <div class="col-12" style="margin-top:100px;
                                    background-image:url(aboutus/images/mobileback.png);
                                    background-repeat:no-repeat;
                                    background-position:top left;
                                    background-size:cover;
                                    padding-top:450vh">

        <div class="col-12" style="text-align:center;">
                <div class="col-12" style="text-align:center; padding-top:20px;">
                    <h2 style="font-family:MigraItalic-ExtraboldItalic; font-size:2em; color:#b3975e;"><?php echo constant('Part2_Title2'); ?></h2>
                </div>
                <div style="text-align:center; width:100%; font-size:1.2em;">
                    <?php echo constant('Part2_msg2'); ?>

                </div>
                <br>
                <img src="images/logo-red2x.png" style="max-width:200px; height:auto;">

        </div>


    </div>

</div>





<div class="versionpequenia" >

    <div class="col-12" style="margin-top:100px;
                                    background-image:url(aboutus/images/mobileback.png);
                                    background-repeat:no-repeat;
                                    background-position:top left;
                                    background-size:contain;
                                    padding-top:50vh">

        <div class="col-12" style="text-align:center;">
                <div class="col-12" style="text-align:center; padding-top:20px;">
                    <h2 style="font-family:MigraItalic-ExtraboldItalic; font-size:2em; color:#b3975e;"><?php echo constant('Part2_Title2'); ?></h2>
                </div>
                <div style="text-align:center; max-width:350px; font-size:1.2em;">
                    <?php echo constant('Part2_msg2'); ?>

                </div>
                <br>
                <img src="images/logo-red2x.png">

        </div>


    </div>


</div>
