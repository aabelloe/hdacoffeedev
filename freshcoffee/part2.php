<?php
  include('freshcoffee/international/'.$_SESSION['dirlng']."/dictionary_part2.php");
  $theruta="freshcoffee/images/";

if(!isset($_GET['Ancho']) && !isset($_GET['Alto'])){
    echo "<script language=\"JavaScript\">
    <!--
    document.location=\"index.php?p=freshcoffee&dirlng=".$_SESSION['dirlng']."&Ancho=\"+screen.width+\"&Alto=\"+screen.height;
    //-->
    </script>";
} else {
    if(isset($_GET['Ancho']) && isset($_GET['Alto'])) {
        // Resolución de pantalla detectada
       //  echo "Esta es tu resolucion de pantalla: Ancho= ".$_GET['Ancho']." y Alto= ".$_GET['Alto'];
    } else {
        // error en la detección de resolución de pantalla
        // echo "No se ha podido detectar la resolución de pantalla";
    }
}
?>


<div  style="overflow:hidden;">

<?php if($_GET['Ancho']>=1024){ ?>


    <div class="col-md-12 container" style="margin-top:30px;">
            <h3 class="section-title tc pr flex fl_center al_center fs__24 title_11">
                <span class="mr__10 ml__10" style="color:#8D0707; font-family: MigraItalic-ExtralightItalic;"><?php echo constant('Part2_Title'); ?>
                    <span style="color:#8D0707; font-family:Amador-W01-Regular;"><?php echo constant('Part2_Title2'); ?></span>
                </span>
            </h3>
    </div>




            <table style="width:100%; border:transparent">
                <tr>
                    <td style="border:transparent">
                        <img src="freshcoffee/images/floral.png" style="position:relative; margin-top:-180px; margin-left:-10px;">
                    </td>
                    <?php $est="G"; ?>
                    <td style="border:transparent"><?php include('showproducto1.php'); ?></td>
                    <td style="border:transparent"><?php include('showproducto4.php'); ?></td>
                    <td style="border:transparent">
                        <img src="freshcoffee/images/floral3.png" style="position-relative; margin-right:-50px;">
                    </td>
                </tr>
            </table>

<?php }else{
    echo '<br><br><br><br><br><br>'.$_GET['Ancho'].'.......................';
    if($_GET['Ancho']>=767){
    ?>



            <div class="col-md-12 container" style="margin-top:30px;">
                    <h3 class="section-title tc pr flex fl_center al_center fs__24 title_11">
                        <span class="mr__10 ml__10" style="color:#8D0707; font-family: MigraItalic-ExtralightItalic;"><?php echo constant('Part2_Title'); ?>
                            <span style="color:#8D0707; font-family:Amador-W01-Regular;"><?php echo constant('Part2_Title2'); ?></span>
                        </span>
                    </h3>
            </div>

                    <table style="width:100%; border:transparent">
                        <tr>
                            <td style="border:transparent">
                                <img src="freshcoffee/images/floral.png" style="position:relative; margin-top:-180px; margin-left:-10px;">
                            </td>
                            <?php $est="M"; ?>
                            <td style="border:transparent"><?php include('showproducto1.php'); ?></td>
                            <td style="border:transparent"><?php include('showproducto4.php'); ?></td>
                            <td style="border:transparent">
                                <img src="freshcoffee/images/floral3.png" style="position-relative; margin-right:-50px;">
                            </td>
                        </tr>
                    </table>

<?php }else{
    if($_GET['Ancho']<=767){
    ?>

            <div class="col-md-12 container" style="margin-top:30px;">
                    <h3 class="section-title tc pr flex fl_center al_center fs__24 title_11">
                        <span class="mr__10 ml__10" style="color:#8D0707; font-family: MigraItalic-ExtralightItalic;"><?php echo constant('Part2_Title'); ?>
                            <span style="color:#8D0707; font-family:Amador-W01-Regular;"><?php echo constant('Part2_Title2'); ?></span>
                        </span>
                    </h3>
            </div>

                    <table style="width:100%; border:transparent">
                        <tr>
                            <td style="border:transparent">
                                <img src="freshcoffee/images/floral.png" style="position:relative; margin-top:-180px; margin-left:-10px;">
                            </td>
                            <?php $est="P"; ?>
                            <td style="border:transparent">
                                    <?php include('showproducto1.php'); ?>
                                    <?php include('showproducto4.php'); ?>
                            </td>
                            <td style="border:transparent">
                                <img src="freshcoffee/images/floral3.png" style="position-relative; margin-right:-50px;">
                            </td>
                        </tr>
                    </table>





            <?php
    }
    }
}


                //include('showproducto2.php');
                //include('showproducto3.php');
            ?>
</div>
