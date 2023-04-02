<?php
    @session_start();
  include('international/'.$_SESSION['dirlng']."/dictionary_header.php");
?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menuestilos.css">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <section class="top-nav; selmenugrande"
        style="width:100%; background:rgba(160,30,30,0.8); z-index:999999999999999999999999999999; height:auto; position:fixed; padding:3px;">

    <div  style="z-index:999999999999999999999999999999; width:15%; float:left;">
        <a  href="index.php?dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" >
            <img class="" src="images/logo-white2x.png?cache=<?php echo  rand(); ?>" alt="" style="width: 150px; ;">
        </a>
    </div>


    <div  style="z-index:999999999999999999999999999999; width:82%; position:relative; float:right; text-align:right; padding-top:3px; font-size:1rem;">

            <a  href="index.php?dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white; padding-left:4px; margin-right:25px;">Home</a>
            <a  href="index.php?p=<?php echo constant('linkmnu11'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white; margin-left:4px; margin-right:25px;"><?php echo constant('txtmnu1'); ?></a>
            <a  href="index.php?p=<?php echo constant('linkmnu2'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white;margin-left:4px; margin-right:25px;"><?php echo constant('txtmnu2'); ?></a>
            <a  href="index.php?p=<?php echo constant('linkmnu3'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white;margin-left:4px; margin-right:25px;"><?php echo constant('txtmnu3'); ?></a>
            <a  href="index.php?p=<?php echo constant('linkmnu5'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white;margin-left:4px; margin-right:25px;"><?php echo constant('txtmnu5'); ?></a>

            <a class="icon_search push_side cb chp" href="index.php?dirlng=ing" style="border-left:thin solid white; padding-left:25px; text-decoration:none; color:white; margin-right:25px;
                <?php if($_SESSION['dirlng']=="ing") { echo "font-weight:bold;"; } ?>">English</a>
            <a class="icon_search push_side cb chp" href="index.php?dirlng=esp" style="text-decoration:none; color:white;margin-left:4px; margin-right:10px;
                <?php if($_SESSION['dirlng']=="esp") { echo "font-weight:bold;"; } ?>">Español</a>


    </div>
  </section>
