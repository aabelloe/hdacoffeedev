<?php
  include('gifts/international/'.$_SESSION['dirlng']."/dictionary_".$_REQUEST['s'].".php");
  $theruta="gifts/images/";
?>


<link rel="stylesheet" type="text/css" href="css/s1.css">



<div id="nt_wrapper">
    <div id="nt_content">
        <div class="container mt__80 mb__60">

            <div class="shogun-root">

        <!-- ............Subpage Gifts................... -->


                <div class="shg-fw" style="margin-right: -90.5px; margin-left: -90.5px; width: calc(100% + 181px);">
                    <div class="shg-box-vertical-align-wrapper">
                        <div class="shg-box shg-c" >

                            <div class="shg-box-content">
                                <div class="shg-fw" style="margin-right: 0px; margin-left: 0px; width: calc(100% + 0px);">
                                    <div class="shg-box-vertical-align-wrapper">


                                        <div class="shg-box shg-c    ">
                                            <div class="shg-box-content">
                                                <div class="shg-c " style=" background-color:#F7F5EF;
                                                    margin-top: -100px;
                                                    margin-left: 0px;
                                                    margin-right: 0px;
                                                    padding-top: 230px;
                                                    padding-left: 130px;
                                                    padding-bottom: 120px;
                                                    padding-right: 130px;
                                                    ">
                                                    <div class="shg-row" >
                                                        <div class="shg-c-lg-6 shg-c-md-6 shg-c-sm-6 shg-c-xs-12">
                                                            <div id="s-de5e6537-9085-4fd5-b7c2-e09a1b4933f3" class="shg-c  shg-align-left">
                                                                <div class="shogun-heading-component">

                                                   <!-- ..... Gift Name..... -->

                                                                    <h2><?php echo constant('Gift_Title'); ?><br></h2>
                                                                </div>
                                                            </div>

                                                 <!-- ......... -->

                                                            <div id="s-e5672853-cceb-4e08-b324-59a7f360038d" class="shg-c apply-inconsolata-font ">
                                                                <div class="shg-rich-text shg-theme-text-content">
                                                                    <p style="line-height: 18px;">
                                                                        <span style="font-family: Sumana; font-size: 20px; font-weight: 400;">


                                                  <!-- ...Gift Subtitle...... -->

                                                                        <?php echo constant('Gift_Subtitle'); ?>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                            <!-- ........... Gifts Banner............. -->

                                                <img src="<?php echo $theruta.constant('Gifts_Banner'); ?>"
                                                    style=" height:90%; width: auto; float:right; margin-top:-300px; margin-right:10%">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <!-- ................................................... -->


                <div class="shg-fw" style="margin-right: -90.5px; margin-left: -90.5px; width: calc(100% + 181px);">
                    <div class="shg-box-vertical-align-wrapper">
                        <div class="shg-box shg-c" id="s-07c7b773-b47e-41c9-aeb9-dc696389ace6">
                            <div class="shg-box-overlay"></div>
                            <div class="shg-box-content container ">

                                <div class="shg-c" id="s-98ed8af8-702e-40e4-a170-e627715ce284">
                                    <div class="shg-row" data-col-grid-mode-on="">

                                        <div class="shg-c-lg-10 shg-c-md-10 shg-c-sm-10 shg-c-xs-12">
                                            <div  class="shg-c  ">
                                                <div class="shg-rich-text shg-theme-text-content" style="padding-left:50px;">

                                <!--........Shop Gift Info Title............-->

                                                    <?php if(constant('Shop_GiftsInfo_Title')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('Shop_GiftsInfo_Title'); ?></strong></h4>

                             <!--........Shop Gift Info Subtitle............-->

                                                        <h5><?php echo constant('Shop_GiftsInfo_Taste'); ?></h5>

                                <!--........Shop Gift Info Image............-->

                                                        <img src="<?php echo $theruta.constant('Shop_GiftsInfo_Image'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                      <!--........Shop Gift Info Section Title............-->

                                                    <?php if(constant('Shop_GiftsInfo_SectionTitle')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('Shop_GiftsInfo_SectionTitle'); ?></strong></h4>

                                      <!--......Shop Product Info  Subtitle......-->

                                                        <h5><?php echo constant('Shop_GiftsInfo_Subtitle'); ?></h5>

                                      <!--......Shop Product Info Body 2......-->

                                                        <?php echo constant('Shop_GiftsInfo_Body'); ?><br><br>

                                        <!--......Shop Product Info Image 2......-->

                                                        <img src="<?php echo $theruta.constant('Shop_GiftsInfo_Image2'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->


                                                </div>
                                            </div>
                                        </div>



                                        <div class="shg-c-lg-2 shg-c-md-2 shg-c-sm-2 shg-c-xs-12">
                                            <div  class="shg-c">
                                                <div class="shogun-heading-component">

                                 <!--......Shop: Gifts Info Sidebar......-->

                                                    <strong><?php echo constant('Gifts_Sidebar_Title'); ?></strong>
                                                    <br><br>

                                    <!--......Shop: Gifts Sidebar Expert......-->

                                                    <?php echo constant('Gifts_Sidebar_Expert'); ?><br><br>

                                    <!--......Shop: Gifts Sidebar Job......-->

                                                    <?php echo constant('Gifts_Sidebar_Job'); ?><br><br>

                                    <!--......Shop: Gifts Sidebar Body......-->

                                                    <?php echo constant('Gifts_Sidebar_Body'); ?><br><br>

                                     <!--......Shop: Gifts Sidebar Image......-->

                                                    <img src="<?php echo $theruta.constant('Gifts_Sidebar_Image'); ?>"
                                                        style="width:100%; height:auto;">

                                                </div>
                                            </div>
                                        </div>







                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            <!-- ....................................................... -->
            </div>
        </div>
    </div>
</div>
