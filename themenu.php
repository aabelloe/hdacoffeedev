<?php
@session_start();
  include('international/'.$_SESSION['dirlng']."/dictionary_header.php");
?>

<style>
.menu-itemm{
    color:white;
    font-size:2rem;
    text-align:center;
    cursor:pointer;
}
</style>

<section class="top-nav; selmenupeqeniosup"
        style="width:100%; background:rgba(160,30,30,0.8); z-index:999999999999999999999999999999; height:auto; position:fixed; padding:3px;">

    <div  style="z-index:999999999999999999999999999999; width:70%; float:left;">
        <a  href="index.php?dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" >
            <img class="" src="images/logo-white2x.png?cache=<?php echo  rand(); ?>" alt="" style="width: 150px; ;">
        </a>
    </div>


    <div  style="z-index:999999999999999999999999999999; width:30%; position:relative; float:right; text-align:right; padding-top:3px; font-size:1rem;">

            <img class="" src="images/menuhambuerer.png" alt=""
                style="text-decoration:none; color:white;margin-left:4px; margin-right:10px;"
                onclick="abrirmenu();">

    </div>
  </section>

<div class="selmenupeqenio" name="themenu" id="themenu" style="position:fixed; width:100%; height:100vh;
            color:white; top:0px; left:0px; z-index:999999999999999999999999999999999999999999999;
            background: rgb(160,30,30);
            background: linear-gradient(180deg, rgba(160,30,30,1) 6%, rgba(160,30,30,0.8) 100%);
            overflow:hidden;
            overflow-y:auto;
            display:none">
<br><br><br>
        <div style="font-size:2rem; font-weight:bold;
                    position:absolute;:3px; margin:4px; color:white; cursor:pointer; top:15px; right:15px;" onclick="cerrarmenu()">X</div>


        <div id="" class="menu-itemm " >
            <a  href="index.php?dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white;" onclick="cerrarmenu()">Home</a>
        </div>
        <div id="" class="menu-itemm " >
            <a  href="index.php?p=<?php echo constant('linkmnu11'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white;" onclick="cerrarmenu()"><?php echo constant('txtmnu1'); ?></a>
        </div>

        <div id="" class="menu-itemm " >
            <a  href="index.php?p=<?php echo constant('linkmnu2'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white;"><?php echo constant('txtmnu2'); ?></a>
        </div>

        <div id="" class="menu-itemm " >
            <a  href="index.php?p=<?php echo constant('linkmnu3'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white;"><?php echo constant('txtmnu3'); ?></a>
        </div>

         <div id="" class="menu-itemm " >
            <a  href="index.php?p=<?php echo constant('linkmnu5'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>" target="_top" style="text-decoration:none; color:white;"><?php echo constant('txtmnu5'); ?></a>
        </div>



<br><br>
    <table style="width:100%; border:transparent;">
        <tr>
            <td class="menu-itemm " style="width:50%; border:transparent;"  >

                    <a class="icon_search push_side cb chp" href="index.php?dirlng=ing" style="text-decoration:none; color:white;
                    <?php if($_SESSION['dirlng']=="ing") { echo "font-weight:bold;"; } ?>">English</a>

            </td>
            <td class="menu-itemm " style="width:50%; border:transparent;" >

                    <a class="icon_search push_side cb chp" href="index.php?dirlng=esp" style="text-decoration:none; color:white;
                    <?php if($_SESSION['dirlng']=="esp") { echo "font-weight:bold;"; } ?>">Español</a>

            </td>
        </tr>
    </table>






</div>


<script>
    function cerrarmenu(){
        $("#themenu").css("display","none");
    }
     function abrirmenu(){
        $("#themenu").css("display","block");
    }

</script>
