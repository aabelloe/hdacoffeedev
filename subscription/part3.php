<?php
  include('subscription/international/'.$_SESSION['dirlng']."/dictionary_part1.php");
  $theruta="subscription/images/";
?>

<style>
.accordioncafe {
  background-color: white;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.activeaccordion, .accordioncafe:hover {
  background-color: white;
}

.panelaccoedon {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>



  <div class="container container_cat cat_default" style=margin-right:0px;">
      <div class="row product mt__40" data-featured-product-se data-id="_ppr" >
        <div class="col-md-12 col-12">
            <div class="row mb__50 pr_sticky_content" >


                <div class="col-md-5 col-12 product-infors pr_sticky_su" >

                        <h2><?php echo constant('inipart3txt1'); ?></h2>

                        <button class="accordioncafe">Section 1</button>
                        <div class="panelaccoedon">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="accordioncafe">Section 2</button>
                        <div class="panelaccoedon">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <button class="accordioncafe">Section 3</button>
                        <div class="panelaccoedon">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                </div>



                <div class="col-md-7 col-12 pr product-images img_action_popup pr_sticky_img">
                        <img src="<?php echo $theruta.constant('inipart3img1');?>" style="width:100%: height:auto;">
                </div>


         </div>
      </div>
    </div>
  </div>



  <script>
var acc = document.getElementsByClassName("accordioncafe");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activeaccordion");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<!-- ------------------fin aprte 4------------ -->
