<?php
 @session_start();
    include('wholesale/international/'.$_SESSION['dirlng']."/dictionary_part1.php");
  $theruta="wholesale/images/";
?>


<link rel="stylesheet" type="text/css" href="css/aboutus.css">







<style>
    .nt_se_1591030222613 .nt_img_txt>a:after{ background-color: #000000;opacity: 0.0 }
    .nt_se_1591030222613 .nt_img_txt #b_1591030222613-0{ font-size: 30px;font-weight: 600;color: #ffffff }
        @media (min-width: 768px) {.nt_se_1591030222613 .nt_img_txt #b_1591030222613-0 { font-size: 40px}}#b_1591030421392 {height: 10px}
        @media (min-width: 768px) {#b_1591030421392 { height:20px} }.nt_se_1591030222613 .nt_img_txt #b_1591030222613-1{ font-size: 15px;font-weight: 600;color: #ffffff }
        @media (min-width: 768px) {.nt_se_1591030222613 .nt_img_txt #b_1591030222613-1 { font-size: 20px}}#b_1591030564628 {height: 10px}
        @media (min-width: 768px) {#b_1591030564628 { height:50px} }.nt_se_1591030222613 .imtt4_btn{
        padding-left:15px;padding-right:15px;border-radius:0px;min-height:40px;font-size: 14px;color: #ffffff;background-color: #222222;border-color: #ffffff
        }
        .nt_se_1591030222613 .imtt4_btn.btn_icon_true:after {color: #ffffff }
        @media (min-width: 768px) {.nt_se_1591030222613 .imtt4_btn { padding-left:15px;padding-right:15px;border-radius:0px;font-weight: 500;min-height:40px;font-size: 14px }}
</style>

<!-- ------parte 6-- ----------- -->
<div style="background-image:url(<?php echo $theruta.constant('Part1_HomeBanner1_Image');?>);
        background-size:cover;
        background-position:center center;
        background-repeat:no-repeat;
        width:100%;
        height:100vh;
        padding:5%; padding-top:10%;">

        <div class="row">
            <div class="col-md-5 col-12"><h1 style=" font-family:MigraItalic-ExtraboldItalic; font-size:2.8em; color:white; font-weight:bold; margin-top:160px;"><?php echo constant('Part1_HomeBanner1_Title'); ?></h1></div>
           <!-- <div class="col-md-6 col-12" style=" font-family:Migra-Extralight; padding:5%; padding-bottom: 3%;
                    background-image:url(subscription/images/paper.png); background-size:cover;
                    background-repeat:no-repeat; background-position:top left; border-bottom-left-radius:20px; border-bottom-right-radius:20px;">
                <?php
//                     include('subscription/Xpart6.php');
                ?>
            </div>-->
            <div class="col-md-1 col-12">&nbsp;</div>
        </div>

</div>

<!-- ------fin de parte 6-- ----------- -->







<div class="container container_cat cat_default" style="border:transparent">
      <div class="row product mt__40" id="product-4677197561937" data-featured-product-se data-id="_ppr" style="border:transparent">
        <div class="col-md-12 col-12" style="border:transparent">
            <div class="row mb__50 pr_sticky_content" style="border:transparent">

                <div class="col-md-7 col-12 pr product-images img_action_popup pr_sticky_img" data-pr-single-media-group style="border:transparent">
                    <div class="row theiaStickySidebar" style="border:transparent">
                        <div class="col-12 col_thumb" style="border:transparent">
                            <div class="p-thumb fade_flick_1 p-thumb_ppr images sp-pr-gallery equal_nt nt_contain ratio1_1 position_8 nt_slider"
                            style="border:transparent">


        <!--------Part 4 Image--------->

                                <div class="img_ptw p_ptw js-sl-item p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload media_id_14816718651583"
                                    data-bgset="<?php echo $theruta.constant('Part4_Image');?>"
                                    data-ratio="1.0" data-sizes="auto"
                                    style="border:transparent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        <!--------Part 4 Title--------->

                <div class="col-md-5 col-12 product-infors pr_sticky_su" style="border:transparent">
                    <div class="theiaStickySidebar" style="border:transparent">
                        <div id="shopify-section-pr_description" class="shopify-section shopify-tabs sp-tabs nt_section" style="border:transparent">
                            <div class="panel entry-content sp-tab des_mb_2 des_style_1 active" id="tab_pr_deskl" style="border:transparent">


        <!--------Part 4 Body--------->

                                <div class="sp-tab-content" style="border:transparent; padding-top:15px;">
                                    <h2><strong><?php echo constant('inipart4txt1'); ?></strong><br></h2>
                                    <p><?php echo constant('Part4_Body'); ?></p>


                                    <a class="imtt4_btn button pe_auto round_false btn_icon_false"
                                         href="#popup"
                                         style="border-radius:40px; border:thin solid white; padding-left:20px;padding-right:20px;font-size:1rem;"><?php echo constant('ContactUs'); ?></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

         </div>
      </div>
    </div>
    </div>




<style>
.overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
    z-index:99999999999;
    }
    .overlay:target{
    visibility: visible;
    opacity: 1;
    }

    .popupBody{
    padding: 2%;
    border-radius: 15px;
    box-shadow: 0 0 5px #CCC;
    background: #FFF;
    position: relative;
    transition: all 5s ease-in-out;
    overflow:hidden;
    overflow-y:auto;
    max-height:480px;
    z-index:99999999999999999999;
    }


    #cerrar{
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 30px;
    fotn-weight: bold;
    text-decoration: none;
    color: #F00;
    transition: all 200ms;
    }

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
 .thetasa7{
      margin-top:-80px; height:150px; width:auto;
    }
      .popupBody{width: 95%;
              margin: 30% auto;
    }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
 .thetasa7{
      margin-top:-80px; height:150px; width:auto;
    }
          .popupBody{width: 95%;
                  margin: 30% auto;
        }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
 .thetasa7{
      margin-top:-140px; height:200px; width:auto;
    }
    .popupBody{width: 56%;
            margin: 8% auto;
    }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
 .thetasa7{
      margin-top:-140px; height:200px; width:auto;
    }
    .popupBody{width: 56%;
            margin: 8% auto;
    }
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .thetasa7{
      margin-top:-140px; height:200px; width:auto;
    }
    .popupBody{width: 56%;
            margin: 8% auto;
    }
}


</style>



<div id="popup" class="overlay">
            <div class="popupBody" >
                 <h2 style="font-family: Migra-Extralight;"><?php echo constant('ContactUs'); ?></h2>
                <a id="cerrar" href="#">&times;</a>
                <div class="popupContent" style="font-family: Migra-Extralight;">






                    <div class="row" style="text-align:center; padding-top:5px;">
                    <?php

                        $p1=$_REQUEST['p1'];

                    ?>
                        <div style="margin: 0 auto;">


                            <?php
                                if($p1!=""){
                                    $name=$_REQUEST['your-name'];
                                    $emailusr=$_REQUEST['your-email'];
                                    $subjectusr=$_REQUEST['your-subject'];
                                    $msg=$_REQUEST['your-message'];

                                        $to = "hdacoffee@gmail.com";
                                        $subject = "Historia de Amor in contact";

                                        $message = "<b>".$subjectusr."</b><br><br>";
                                        $message = $message."<h5>Name:</h5>".$name."<br>";
                                        $message = $message."<h5>Your email:</h5>".$emailusr."<br>";
                                        $message = $message."<h5>Your Message:</h5>".$msg;

                                        $header = "From:hdacoffee@gmail.com \r\n";
                                        $header .= "MIME-Version: 1.0\r\n";
                                        $header .= "Content-type: text/html\r\n";

                                        $retval = mail($to,$subject,$message,$header);


                                        echo "<div style='margin: 0 auto;'><center>";
                                        if( $retval == true ) {
                                            echo "<br><br><h3>Message sent successfully...</h3><br><br>";
                                        }else {
                                            echo "<br><br><h3>Message could not be sent...</h3><br><br>";
                                        }
                                }
                            ?>


                            <form action="index.php?p=wholesale" method="post"  >
                                <input type="hidden" name="p1" id="p1" value="sendmail">

                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name" style="margin:1px;"/></span> </label><br>

                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email" style="margin:1px;"/></span> </label><br>

                                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Subject" style="margin:1px;"/></span> </label><br>

                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message" style="margin:1px;"></textarea></span> </label><br>

                                    <p><input type="submit" class="imtt4_btn button pe_auto round_false btn_icon_false"
                                            value="Send Message" class="wpcf7-form-control has-spinner wpcf7-submit"
                                            style="border-radius:40px; border:thin solid white; padding-left:20px;
                                            padding-right:20px;font-size:1rem;color:white;"/></p>


                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>










        </div>
    </div>
</div>




