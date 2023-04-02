
            <!--...Photo Design...-->
            <div class="shg-c-lg-4 shg-c-md-4 shg-c-sm-12 shg-c-xs-12" style="padding:10px; margin-bottom:20px;">
                <div class="shg-c-lg-12 " style="background-color:#F7F5EF; padding:10px;">
                    <!--...Product Image...-->
                        <div class="shg-c shogun-image-container  shogun-image-linked  shg-align-center" style="" >
                            <img class="lazyautosizes lazyloaded" src="<?php echo $theruta.constant('Product4_Image'); ?>">
                        </div>
                    </a>
                </div>

                <!--...Quick Add Button...-->
                <div class="shg-c-lg-12 " style="text-align:center;">


<div id='product-component-1679686155231' style="text-align:center; width:100%; margin: 0 auto;"></div>
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
        id: '8055752163645',
        node: document.getElementById('product-component-1679686155231'),
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



                </div>

            </div>
            <!--....................-->

