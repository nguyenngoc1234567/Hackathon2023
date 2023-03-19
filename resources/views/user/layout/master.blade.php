<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Your vacation, tours and travel theme needs are all met at emprise." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour Travel Website Template | Emprise</title>
    <link rel="shortcut icon" type="image/png" href="./assets/favicon.ico" />
    <link rel="preload" href="./vendors/jquery.min.js" as="script" />
    <link as='style' href='https://d33wubrfki0l68.cloudfront.net/css/ced58c04a29e3fd1a68d9c2eaef08948c9a5d216/vendors/rs6.css' rel='preload'/>
    <script src='https://d33wubrfki0l68.cloudfront.net/js/dd93095fbc227bc906badfd2cb965e13fffac21c/assets/js/jquery.min.js'></script>
    <link href='https://d33wubrfki0l68.cloudfront.net/bundles/337dcc32f7bae2d01c4f986502e17c5f54cd3dd8.css' rel='stylesheet'/>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QT65KT9DNB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-QT65KT9DNB");
    </script>
  </head>
  <style>
    img.img-itemprop {
        width: 300px;
        height: 200px;
        border-radius: 15px;
    }
    img.img-itemprop:hover {
        width: 350px;
        height: 250px;
    }
    </style>

  <body class="rlr-body">
    @include('user.includes.header')

    <main id="rlr-main" class="rlr-main--fixed-top">
      <!-- Hero Banner -->
      @yield('main')
      <!-- Category Carousel -->

      <!-- Product Carousel -->
     @yield('content')
      <!-- Destination Masonary Grid -->

      <!-- Best Sellers -->

      <!-- Sales and Support -->

    </main>
    <!-- Footer -->
    <footer class="rlr-footer rlr-section rlr-section__mt">
      <div class="container">

        <!-- Footer menu -->

        <!-- Footer bottom -->
        @include('user.includes.footer')

      </div>
    </footer>
    <script src='https://d33wubrfki0l68.cloudfront.net/bundles/9123ae4616ab9b822de203233984359201cebe4f.js'></script>
    <!-- REVOLUTION JS FILES -->
    <script>
      window.RS_MODULES = window.RS_MODULES || {};
      window.RS_MODULES.modules = window.RS_MODULES.modules || {};
      window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
      window.RS_MODULES.defered = true;
      window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
      window.RS_MODULES.type = "compiled";
    </script>
    <script src='https://d33wubrfki0l68.cloudfront.net/bundles/9cbed4606402ae1ba6de814c0fd1f8c1cdea7069.js'></script>
    <script>
      function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
          var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;
          pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
          e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
          e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
          e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
          e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
          e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
          e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
          e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
          if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
          else {
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
            e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

            var nl = new Array(e.rl.length),
              ix = 0,
              sl;
            e.tabw = e.tabhide >= pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
            e.tabh = e.tabhide >= pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl)
              if (sl > nl[i] && nl[i] > 0) {
                sl = nl[i];
                ix = i;
              }
            var m = pw > e.gw[ix] + e.tabw + e.thumbw ? 1 : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
            newh = e.gh[ix] * m + (e.tabh + e.thumbh);
          }
          var el = document.getElementById(e.c);
          if (el !== null && el) el.style.height = newh + "px";
          el = document.getElementById(e.c + "_wrapper");
          if (el !== null && el) {
            el.style.height = newh + "px";
            el.style.display = "block";
          }
        } catch (e) {
          console.log("Failure at Presize of Slider:" + e);
        }
        //});
      }
    </script>
  </body>
</html>
