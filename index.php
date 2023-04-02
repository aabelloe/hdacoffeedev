<?php
    @session_start();
    $themarca=constant('main_title');
    if($_REQUEST['dirlng']==""){
        $_SESSION['dirlng']='ing';
    }else{
        $_SESSION['dirlng']=$_REQUEST['dirlng'];
    }

    include('international/'.$_SESSION['dirlng'].'/dictionary_index.php');
    $themarca=constant('themarca');

    $page="ini";
    if($_REQUEST['p']!=""){
        $page=$_REQUEST['p'].'/index.php';
        if($_REQUEST['s']!=""){ $page=$_REQUEST['p'].'/s1.php'; } //dentro del sq se utilzia el request_s
    } else {
        $page="ini".'/index.php';
    }


   // echo $page;
?>


<!doctype html>
<html class="no-js" lang="es">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php
    include("thehead.php");
?>


<style>

@font-face {
font-family: Migra-Extrabold;
src: url(css/Fonts/Migra-Extrabold.otf);
}

@font-face {
font-family: Migra-Extralight;
src: url(css/Fonts/Migra-Extralight.otf);
}

@font-face {
font-family: MigraItalic-ExtraboldItalic;
src: url(css/Fonts/MigraItalic-ExtraboldItalic.otf);
}

@font-face {
font-family: MigraItalic-ExtralightItalic;
src: url(css/Fonts/MigraItalic-ExtralightItalic.otf);
}

@font-face {
font-family: Amador-W01-Regular;
src: url(css/Fonts/Amador-W01-Regular.ttf);
}

/* ......................................................................................... */


/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  .selmenugrande {display:none;}
  .selmenupeqenio {display:block;}
  .selmenupeqeniosup{display:block;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .selmenugrande {display:none;}
  .selmenupeqenio {display:block;}
  .selmenupeqeniosup{display:block;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .selmenugrande {display:block;}
  .selmenupeqenio {display:none;}
  .selmenupeqeniosup{display:none;}
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .selmenugrande {display:block;}
  .selmenupeqenio {display:none;}
  .selmenupeqeniosup{display:none;}
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .selmenugrande {display:block;}
  .selmenupeqenio {display:none;}
  .selmenupeqeniosup{display:none;}
}

</style>


<body class="kalles_2-0 lazy_icons min_cqty_0 btnt4_style_1 zoom_tp_2 css_scrollbar template-index js_search_true cart_pos_dropdown kalles_toolbar_true hover_img2 swatch_style_square swatch_list_size_small label_style_rectangular wrapper_full_width header_full_true header_sticky_true hide_scrolld_false des_header_3 h_transparent_true h_tr_top_true h_banner_true top_bar_false catalog_mode_false cat_sticky_false prs_bordered_grid_1 prs_sw_limit_false search_pos_full t4_compare_false dark_mode_false  lazyload rtl_false  " style="font-family: Migra-Extralight;">



        <div id="ld_cl_bar" class="op__0 pe_none"></div>


        <div id="shopify-section-header_banner" class="shopify-section type_carousel tp_se_cdth" style="position:fixed;width:100%; z-index:999999999999999999999999999999999">
            <div class="h__banner bgp pt__10 pb__10 fs__14 flex fl_center al_center pr oh show_icon_false" data-ver='6' data-date='8'>
                <div class="container">
                    <div class="row al_center"><a href="index.php?p=freshcoffee&dirlng=<?php echo $_SESSION['dirlng']; ?>" class="pa t__0 l__0 r__0 b__0 z_100"></a>
                        <div class="col h_banner_wrap tc cw"><?php echo constant('thetitlesuperior'); ?></div>
                    </div>
                </div>
            </div>
            <style data-shopify>.h__banner { background-color: #8D0707;min-height:20px;font-size:15px;}.h_banner_wrap {color:#ffffff }.h_banner_close,.h_banner_close:hover,.h_banner_close:focus {color:#ffffff !important }.h_banner_close:after, .h_banner_close:before {background-color:#ffffff }</style>


            <?php include("header.php"); ?>
            <?php include("themenu.php"); ?>

        </div>





        <div id="nt_wrapper">




            <div id="nt_content" >
            <?php include($page); ?>
            </div>
        </div>





                <div id='product-component-1679677554481X' style="text-align:center; width:100%; margin: 0 auto; display:none !important;"></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'cafe-hda.myshopify.com',
      storefrontAccessToken: '0bda254331d43342688eb9f56af351b5',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: '8056436949309',
        node: document.getElementById('product-component-1679677554481X'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {

  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      },
      "title": {
        "font-family": "Josefin Slab, sans-serif",
        "font-weight": "bold",
        "color": "#a01e1e"
      },
      "button": {
        ":hover": {
          "background-color": "#ff1b1b"
        },
        "background-color": "#961010",
        ":focus": {
          "background-color": "#ff1b1b"
        },
        "border-radius": "24px"
      },
      "price": {
        "font-family": "Crimson Text, serif",
        "color": "#a01e1e",
        "font-size":"1rem"
      },
      "compareAt": {
        "font-family": "Crimson Text, serif",
        "color": "#a01e1e",
        "font-size":"1rem"
      },
      "unitPrice": {
        "font-family": "Crimson Text, serif",
        "color": "#a01e1e",
        "font-size":"1rem"
      }
    },
    "buttonDestination": "modal",
//     "layout": "horizontal",//++++++++++++++++++++++++++++++++++++
    "contents": {
      "img": false,
      "title": true,
      "price": true,
      "options": true,
      "compareAt":true,
      "description": true
    },
    "text": {
      "button": "View product"
    },
    "googleFonts": [
      "Josefin Slab",
      "Crimson Text"
    ]
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },



  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        ":hover": {
          "background-color": "#ff1b1b"
        },
        "background-color": "#961010",
        ":focus": {
          "background-color": "#ff1b1b"
        },
        "border-radius": "24px"
      },
      "title": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "bold",
        "font-size": "26px",
        "color": "#4c4c4c"
      },
      "price": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "18px",
        "color": "#4c4c4c"
      },
      "compareAt": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "15.299999999999999px",
        "color": "#4c4c4c"
      },
      "unitPrice": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "15.299999999999999px",
        "color": "#4c4c4c"
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },

  "option": {"color":"green" },

  "cart": {
    "styles": {
      "button": {
        ":hover": {
          "background-color": "#ff1b1b"
        },
        "background-color": "#961010",
        ":focus": {
          "background-color": "#ff1b1b"
        },
        "border-radius": "24px"
      }
    },
    "text": {
      "total": "Subtotal",
      "button": "Checkout"
    },
    "contents": {
      "note": true
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#961010",
        ":hover": {
          "background-color": "#ff1b1b"
        },
        ":focus": {
          "background-color": "#ff1b1b"
        }
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script>




  </body>
</html>
