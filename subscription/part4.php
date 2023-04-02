<?php
  include('subscription/international/'.$_SESSION['dirlng']."/dictionary_part1.php");
  $theruta="subscription/images/";
?>

<style>

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  .casobackgroundmobile {background-size:40% auto;
      padding-left:5%;
      float:left;
      margin-top:-50px;
    }
    .bolsacafe{ margin-top:-50px; margin-right:-100px; height:350px; width:auto; }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .casobackgroundmobile {background-size:40% auto;
      padding-left:5%;
      float:left;
      margin-top:-50px;
      width:100%;
      clear:both;
    }
    .bolsacafe{ margin-top:-50px; margin-right:-100px; height:350px; width:auto; }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    .casobackgroundmobile {background-size:339px auto; margin-top:-100px;
        padding-left:30%; padding-right:0px; margin-right:0px;
        background-image:url(subscription/images/floral2.png);
            background-repeat:no-repeat;
            background-position:top left;
             margin-top:-80px;
      width:100%;
      clear:both;
    }
    .txtcentralsubcription{ padding-top:100px;}
    .bolsacafe{ margin-top:-120px; margin-right:0px; height:679px; width:auto; }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    .casobackgroundmobile {background-size:339px auto; margin-top:-100px;
        padding-left:30%; padding-right:0px; margin-right:0px;
        background-image:url(subscription/images/floral2.png);
            background-repeat:no-repeat;
            background-position:top left;
            width:100%;
    }
    .txtcentralsubcription{ padding-top:100px;}
    .bolsacafe{ margin-top:-120px; margin-right:0px; height:679px; width:auto; }
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    .casobackgroundmobile {background-size:339px auto; margin-top:-100px;
        padding-left:30%; padding-right:0px; margin-right:0px;
        background-image:url(subscription/images/floral2.png);
            background-repeat:no-repeat;
            background-position:top left;
            width:100%;
    }
    .txtcentralsubcription{ padding-top:100px;}
    .bolsacafe{ margin-top:-120px; margin-right:0px; height:679px; width:auto; }
}


</style>

  <div class=" container_cat cat_default casobackgroundmobile"  >
      <div class="row product mt__40" data-featured-product-se data-id="_ppr" >
        <div class="col-md-12 col-12">
            <div class="row mb__50 pr_sticky_content txtcentralsubcription" >


                <div class="col-12 product-infors pr_sticky_su">


                                        <img src="<?php echo $theruta.constant('inipart4img1');?>" class="bolsacafe"  align="right">

                                        <h2 style="color:#8D0707; font-family:Migra-Extralight">
                                            <?php echo constant('inipart4txt1'); ?>
                                            <span style="color:#8D0707; font-family:Amador-W01-Regular">
                                                <?php echo constant('inipart4txt1_1'); ?>
                                            </span>
                                        </h2>
                                        <h4 style="font-family:Migra-Extrabold; color:  #b59264"><?php echo constant('inipart4txt2'); ?></h4>
                                                    <p><?php echo constant('inipart4txt3'); ?></p>
                                        <h4 style="font-family:Migra-Extrabold; color:  #b59264"><?php echo constant('inipart4txt4'); ?></h4>
                                                    <p><?php echo constant('inipart4txt5'); ?></p>
                                        <h4 style="font-family:Migra-Extrabold; color:  #b59264"><?php echo constant('inipart4txt6'); ?></h4>
                                                    <p><?php echo constant('inipart4txt7'); ?></p>
                                        <h4 style="font-family:Migra-Extrabold; color:  #b59264"><?php echo constant('inipart4txt8'); ?></h4>
                                                    <p><?php echo constant('inipart4txt9'); ?></p>



                                        <a class="imtt4_btn button pe_auto round_false btn_icon_false"
                                            style="background-color: #b59264; border-radius:40px; border:thin solid white; padding-left:20px;padding-right:20px;
                                                padding-top:9px;" href="#popup"><?php echo constant('inipart6txt10'); ?></a>


                </div>




         </div>
      </div>
    </div>
  </div>

<!-- ------------------fin aprte 4------------ -->
