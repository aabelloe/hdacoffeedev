<?php
  include('subscription/international/'.$_SESSION['dirlng']."/dictionary_part1.php");
  $theruta="subscription/images/";
?>


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
    z-index:99999999;
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

<!-- ------parte 6-- ----------- -->
<div style="background:#8D0707; color:white; text-align:center; width:100%; padding:20px;margin-top:100px;">

             <img src="subscription/images/coffee.png" class="thetasa7"  align="right">


                <h3 style="color:white; font-family: Migra-Extrabold; font-size: 43px;"><?php echo constant('inipart7txt1'); ?></h3>
                <h5 id="b_1591030222613-1" class="mt__0 mg__0 lh__1 f_body" style="font-family:Migra-Extralight; color:white;">
                    <?php echo constant('inipart7txt2'); ?></h5>
                <br>
                <a class="imtt4_btn button pe_auto round_false btn_icon_false"
                    style="background-color: #b59264; border-radius:40px; border:thin solid white; padding-left:20px;padding-right:20px;
                                                padding-top:9px;"
                    href="#popup"><?php echo constant('inipart7txt3'); ?></a>


</div>
<img src="subscription/images/floral2.png" style="left: -30px; margin-top:-105px; width:15%; height:auto;">
<!-- ------fin de parte 6-- ----------- -->


<div id="popup" class="overlay">
            <div class="popupBody" >
                 <h2 style="font-family: Migra-Extralight;"><?php echo constant("popupmsg"); ?></h2>
                <a id="cerrar" href="#">&times;</a>
                <div class="popupContent" style="font-family: Migra-Extralight;">
                    <h5  style="font-family: Migra-Extralight;"><?php echo constant("popupmsgq1"); ?></h5>
                    <select name="b1" id="b1" onchange="resultado()" >
                        <option value="1" class="imtt4_btn button pe_auto round_false btn_icon_false"  style="background:white;" selected>1 <?php echo constant("popupmsgr1"); ?></option>
                        <option value="2" class="imtt4_btn button pe_auto round_false btn_icon_false"  style="background:white;" >2 <?php echo constant("popupmsgr1"); ?>s</option>
                        <option value="3" class="imtt4_btn button pe_auto round_false btn_icon_false"  style="background:white;" >3 <?php echo constant("popupmsgr1"); ?>s</option>
                    </select>
                    <h5 style="font-family: Migra-Extralight;"><?php echo constant("popupmsgq2"); ?></h5>
                        <select name="b2" id="b2" onchange="resultado()" >
                        <option value="1" class="imtt4_btn button pe_auto round_false btn_icon_false"  style="background:white;" selected>Expresso</option>
                        <option value="2" class="imtt4_btn button pe_auto round_false btn_icon_false"  style="background:white;" >Pour Over</option>
                        <option value="2" class="imtt4_btn button pe_auto round_false btn_icon_false"  style="background:white;" >French Press</option>
                    </select>
                    <br>
                    <h2 name="anws" id="anws"  style="font-family: Migra-Extralight;"><?php echo constant("popupmsgaw1"); ?>1 <?php echo constant("popupmsgaw2"); ?></h2>
                </div>
            </div>
        </div>
<script>
   function resultado(){
        var multiplo=$("#b2").val();
        var val=$("#b1").val();

        var valx = val * multiplo;
        var anws ="<?php echo constant("popupmsgaw1"); ?>"+valx+"<?php echo constant("popupmsgaw2"); ?>";
        $("#anws").html(anws);
    }
</script>
