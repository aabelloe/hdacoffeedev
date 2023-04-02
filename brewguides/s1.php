<?php
  include('brewguides/international/'.$_SESSION['dirlng']."/dictionary_".$_REQUEST['s'].".php");
  $theruta="brewguides/images/";
?>


<link rel="stylesheet" type="text/css" href="css/s1.css">



<div id="nt_wrapper">
    <div id="nt_content">
        <div class="container mt__80 mb__60">

            <div class="shogun-root">

            <!-- ................................................... -->



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
                                                                    <h2><?php echo constant('complementopart1txt1'); ?><br></h2>
                                                                </div>
                                                            </div>
                                                            <div id="s-e5672853-cceb-4e08-b324-59a7f360038d" class="shg-c apply-inconsolata-font ">
                                                                <div class="shg-rich-text shg-theme-text-content">
                                                                    <p style="line-height: 18px;">
                                                                        <span style="font-family: migraextralight; font-size: 20px; font-weight: 400;">
                                                                        <?php echo constant('complementopart1txt2'); ?>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="<?php echo $theruta.constant('complementopart1img1'); ?>"
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

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle4')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle4'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle4'); ?></h5>
                                                        <img src="<?php echo $theruta.constant('complementopartimg4'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle5')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle5'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle5'); ?></h5>
                                                        <?php echo constant('complementopart1txt5'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg5'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle6')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle6'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle6'); ?></h5>
                                                        <?php echo constant('complementopart1txt6'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg6'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle7')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle7'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle7'); ?></h5>
                                                        <?php echo constant('complementopart1txt7'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg7'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle8')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle8'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle8'); ?></h5>
                                                        <?php echo constant('complementopart1txt8'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg8'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle9')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle9'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle9'); ?></h5>
                                                        <?php echo constant('complementopart1txt9'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg9'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle10')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle10'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle10'); ?></h5>
                                                        <?php echo constant('complementopart1txt10'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg10'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle11')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle11'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle11'); ?></h5>
                                                        <?php echo constant('complementopart1txt11'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg11'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle12')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle12'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle12'); ?></h5>
                                                        <?php echo constant('complementopart1txt12'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg12'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle13')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle13'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle13'); ?></h5>
                                                        <?php echo constant('complementopart1txt13'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg13'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle14')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle14'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle14'); ?></h5>
                                                        <?php echo constant('complementopart1txt14'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg14'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->


                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle15')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle15'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle15'); ?></h5>
                                                        <?php echo constant('complementopart1txt15'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg15'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle16')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle16'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle16'); ?></h5>
                                                        <?php echo constant('complementopart1txt16'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg16'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle17')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle17'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle17'); ?></h5>
                                                        <?php echo constant('complementopart1txt17'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg17'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle18')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle18'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle18'); ?></h5>
                                                        <?php echo constant('complementopart1txt18'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg18'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle19')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle19'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle19'); ?></h5>
                                                        <?php echo constant('complementopart1txt19'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg19'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle20')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle20'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle20'); ?></h5>
                                                        <?php echo constant('complementopart1txt20'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg20'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle21')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle21'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle21'); ?></h5>
                                                        <?php echo constant('complementopart1txt21'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg21'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle22')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle22'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle22'); ?></h5>
                                                        <?php echo constant('complementopart1txt22'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg22'); ?>">
                                                        <hr style="border-bottom:thin solid black">
                                                    </p>
                                                    <?php } ?>
                                                    <!--....................-->

                                                    <!--....................-->
                                                    <?php if(constant('complementopartitle23')!="") { ?>
                                                    <p>
                                                        <h4><strong><?php echo constant('complementopartitle23'); ?></strong></h4>
                                                        <h5><?php echo constant('complementoparsubtitle23'); ?></h5>
                                                        <?php echo constant('complementopart1txt23'); ?><br><br>
                                                        <img src="<?php echo $theruta.constant('complementopartimg23'); ?>">
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

                                                    <strong><?php echo constant('complementopart1txt3_0'); ?></strong>
                                                    <br><br>
                                                    <?php echo constant('complementopart1txt3_1'); ?><br><br>
                                                    <?php echo constant('complementopart1txt3_2'); ?><br><br>
                                                    <?php echo constant('complementopart1txt3_3'); ?><br><br>
                                                    <img src="<?php echo $theruta.constant('complementopartimg3_4'); ?>"
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
