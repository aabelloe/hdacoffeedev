<?php @session_start();
  include('freshcoffee/international/'.$_SESSION['dirlng']."/dictionary_part1.php");
  $theruta="freshcoffee/images/";
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
            <div class="col-md-5 col-12"><h1 style=" font-family:MigraItalic-ExtraboldItalic; font-size:2.8em; color:white; font-weight:bold; margin-top:160px;"><?php echo constant('Part1_HomeBanner1_Title'); ?></h1>

           <!----Part 1 Banner Subtitle----->

                                <h4 id="b_c86cd090-5371-40e0-8292-39253669c12c" class="slt4_h4 mg__0 lh__1 f_heading" style="font-weight:bold;text-size:1.3em;"><?php echo constant('Part1_HomeBanner1_Subtitle'); ?></h4>
                                <div id="b_55d4c2f8-23c4-49e3-a6e5-397b7b985add" class="slt4_space"></div>

                        <!----Part 1 Banner Subtitle----->

            </div>




            <div class="col-md-1 col-12">&nbsp;</div>
        </div>

</div>

<!-- ------fin de parte 6-- ----------- -->









<?php
    //parte de productos....
    include('part2.php');
?>


