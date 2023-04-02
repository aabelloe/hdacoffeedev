

<link rel="stylesheet" href="subscription/css/w3.css">




<div class="w3-bar" >
  <div class="w3-bar-item w3-button thbtntop" onclick="openCity('1bag')"
        style="width:30%; margin-left:2%;margin-right:2%; background-color:white; color:gray;
                background-image:url(subscription/images/plan1.jpg); background-size:cover;
                    background-repeat:no-repeat; background-position:center center; border-radius:20px;">
                        <div class="thbtntopb" style=" font-family:Migra-Extralight;background-color:#8D0707; color:white; border-radius:15px;  width:100%; padding:1px !important;">1 Bag</div>
                    </div>
  <div class="w3-bar-item w3-button thbtntop" onclick="openCity('2bag')" style="width:30%; margin-left:1%;margin-right:1%;
                background-color:white; color:gray;
                background-image:url(subscription/images/plan2.jpg); background-size:cover;
                    background-repeat:no-repeat; background-position:center center; border-radius:20px;">
                    <div class="thbtntopb" style=" font-family:Migra-Extralight;background-color:#8D0707; color:white; border-radius:15px;  width:100%; padding:1px !important;">2 Bags</div>
                    </div>
  <div class="w3-bar-item w3-button thbtntop" onclick="openCity('3bag')" style="width:30%; margin-left:2%;margin-right:2%;
                background-color:white; color:gray;
                background-image:url(subscription/images/plan3.jpg); background-size:cover;
                    background-repeat:no-repeat; background-position:center center; border-radius:20px;">
                    <div class="thbtntopb" style=" font-family:Migra-Extralight;background-color:#8D0707; color:white; border-radius:15px;  width:100%; padding:1px !important;">3 Bags</div>
                </div>
</div>

<?php
/* */
?>
<div id="1bag" class="w3-container w3-display-container planscooffee" style="display:none">
  <!--<span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>-->
  <h2 style=" font-family:Migra-Extralight;">1 Bag</h2>
  <p style=" font-family:Migra-Extralight;">Balance for approximatwly 1 coffee a day<br>Includes free shipping on orders over 50 capsules.</p>
  <br>
  <a class="imtt4_btn button pe_auto round_false btn_icon_false " style="width:100%; text-align:center; background: #8D0707; color:white; padding-top:10px;" href="<?php echo constant('inipart6lnk10-6'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>"><?php echo constant('inipart2txtg6'); ?></a>
  <br>&nbsp;
</div>

<div id="2bag" class="w3-container w3-display-container planscooffee" style="display:none">
  <!--<span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>-->
  <h2 style=" font-family:Migra-Extralight;">2 Bags</h2>
  <p style=" font-family:Migra-Extralight;">Balance for approximatwly 1.5 coffee a day<br>Includes free shipping on orders over 50 capsules</p>
  <br>
  <a class="imtt4_btn button pe_auto round_false btn_icon_false " style="width:100%; text-align:center; background: #8D0707; color:white; padding-top:10px;" href="<?php echo constant('inipart6lnk10-6'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>"><?php echo constant('inipart2txtg6'); ?></a>
  <br>&nbsp;
</div>

<div id="3bag" class="w3-container w3-display-container planscooffee" style="display:none">
  <!--<span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>-->
  <h2 style=" font-family:Migra-Extralight;">3 Bags</h2>
  <p style=" font-family:Migra-Extralight;">Balance for approximatwly 1.5 coffee a day<br>Includes free shipping on orders over 50 capsules</p>
  <br>
  <a class="imtt4_btn button pe_auto round_false btn_icon_false " style="width:100%; text-align:center; background: #8D0707; color:white; padding-top:10px;" href="<?php echo constant('inipart6lnk10-6'); ?>&dirlng=<?php echo $_SESSION['dirlng']; ?>"><?php echo constant('inipart2txtg6'); ?></a>
  <br>&nbsp;
</div>
<?php
/* */
?>

<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("planscooffee");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(cityName).style.display = "block";
 }

 openCity('1bag');
</script>
