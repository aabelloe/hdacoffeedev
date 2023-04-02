
<style>
    @font-face {

    font-family: Migra-Extrabold;

    src: url(css/Fonts/Migra-Extrabold.otf);

    }

@font-face {

font-family: Migra-Extralight;

src: url(css/Fonts/Migra-Extralight.otf);

}


 /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .versiongrande {display:none;}
        .versionpequenia{display:block;}
        .thbtntop{ height:120px;}
        .thbtntopb{ margin-top:90px; font-size:0.6rem;}
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        .versiongrande {display:none;}
        .versionpequenia{display:block;}
        .thbtntop{ height:120px;}
        .thbtntopb{ margin-top:90px; font-size:0.6rem;}
    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .versiongrande {display:block;}
        .versionpequenia{display:none;}
        .thbtntop{ height:220px;}
        .thbtntopb{ margin-top:180px; font-size:1rem;}
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .versiongrande {display:block;}
        .versionpequenia{display:none;}
        .thbtntop{ height:220px;}
        .thbtntopb{ margin-top:180px; font-size:1rem;}
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        .versiongrande {display:block;}
        .versionpequenia{display:none;}
        .thbtntop{ height:220px;}
        .thbtntopb{ margin-top:180px; font-size:1rem;}
    }

</style>











<?php
   include('subscription/international/'.$_SESSION['dirlng']."/dictionary_part1.php");
  $theruta="subscription/images/";
?>



<div class="versiongrande">

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
    <div style="background-image:url(<?php echo $theruta.constant('inipart6img1');?>);
            background-size:cover;
            background-position:center center;
            background-repeat:no-repeat;
            width:100%;
            height:120vh;
            padding:5%; padding-top:10%;">

            <div class="row">
                <div class="col-md-5 col-12"><h1 style=" font-family:MigraItalic-ExtraboldItalic; font-size:2.8em; color:white; font-weight:bold; margin-top:160px;">Subscriptions</h1></div>
                <div class="col-md-6 col-12" style=" font-family:Migra-Extralight; padding:5%; padding-bottom: 3%;
                        background-image:url(subscription/images/paper.png); background-size:cover;
                        background-repeat:no-repeat; background-position:top left; border-bottom-left-radius:20px; border-bottom-right-radius:20px;">
                    <?php
                        include('subscription/Xpart6.php');
                    ?>
                </div>
                <div class="col-md-1 col-12">&nbsp;</div>
            </div>

    </div>

</div> <!--fin vresgrd-->
<!-- ------fin de parte 6-- ----------- -->

<div class="versionpequenia" >

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
    <div style="background-image:url(<?php echo $theruta.constant('inipart6img1');?>);
            background-size:cover;
            background-position:center center;
            background-repeat:no-repeat;
            width:100%;
            height:50vh;
            padding:5%; padding-top:10%;">

            <div class="row">
                <div class="col-md-5 col-12"><h1 style=" font-family:MigraItalic-ExtraboldItalic; font-size:2.8em; color:white; font-weight:bold; margin-top:160px; text-align:center">Subscriptions</h1></div>
                <div class="col-md-1 col-12">&nbsp;</div>
            </div>

    </div>


     <img src="subscription/images/floral2.png" style="float:left; position:relative; height: 180px; width:auto; margin-top:-20px; z-index: 999">

        <div class="row" style="position:relative; left:-40px; padding-right:10%;padding-left:0%; max-height:50px;">
                <div class="col-md-6 col-12" style=" font-family:Migra-Extralight; padding:5%; padding-bottom: 3%;
                        background-image:url(subscription/images/paper.png); background-size:cover;
                        background-repeat:no-repeat; background-position:top left; border-bottom-left-radius:20px; border-bottom-right-radius:20px;">
                    <?php
                        include('subscription/Xpart6.php');
                    ?>
                </div>
                <div class="col-md-1 col-12">&nbsp;</div>
            </div>





</div> <!-- fin verpeque-->







<?php
    include("subscription/part4.php");
    include("subscription/part2.php");
    include("subscription/part7.php");
//     include("subscription/part3.php");
?>
