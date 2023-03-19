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
      @include('user.includes.main')
      <!-- Category Carousel -->

      <!-- Product Carousel -->
      <section class="rlr-section rlr-section__mb">
        <div class="container">
          <!-- Swiper -->
          <div class="rlr-carousel__items">
            <div class="swiper rlr-js-product-card-swiper">
              <!-- Carousel header -->
              <div class="rlr-section-header">
                <!-- Section heading -->
                <div class="rlr-section__title">
                  <h2 class="rlr-section__title--main">Trending 2023</h2>
                </div>
                <div class="button-row">
                  <button type="button" class="btn rlr-button button button--previous rlr-button--carousel" aria-label="Previous">
                    <i class="rlr-icon-font flaticon-left-chevron"> </i>
                  </button>
                  <div class="button-group button-group--cells">
                    <button class="button is-selected">1</button>
                    <button class="button">2</button>
                  </div>
                  <button type="button" class="btn rlr-button button button--next rlr-button--carousel" aria-label="Next">
                    <i class="rlr-icon-font flaticon-chevron"> </i>
                  </button>
                </div>
              </div>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--accent-red rlr-product-card__badge"> -20% Today </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <div class="swiper rlr-js-product-multi-image-swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img itemprop="image"  data-src="https://d33wubrfki0l68.cloudfront.net/e130927abfddd9b3ce8dd3db6d41b6606591b25d/6090c/assets/images/product-images/small/01.jpg" data-srcset="https://dulichmedia.dalat.vn/Images/TNN/namdan.tnn/thang6/t3/untitled1_637916550926735974.jpg" class="lazyload" alt="product-image" />
                          </div>
                          <div class="swiper-slide">
                            <img itemprop="image"  data-src="https://d33wubrfki0l68.cloudfront.net/7a61c27c1584bc2fc2405af810f4cf0e018ee5f2/92944/assets/images/product-images/small/02.jpg" data-srcset="https://d33wubrfki0l68.cloudfront.net/7a61c27c1584bc2fc2405af810f4cf0e018ee5f2/92944/assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                          </div>
                          <div class="swiper-slide">
                            <img itemprop="image"  data-src="https://d33wubrfki0l68.cloudfront.net/e8eaab1664e0a66491cf5a8fa59320f688942c5a/7e92c/assets/images/product-images/small/03.jpg" data-srcset="https://d33wubrfki0l68.cloudfront.net/e8eaab1664e0a66491cf5a8fa59320f688942c5a/7e92c/assets/images/product-images/small/03.jpg" class="lazyload" alt="product-image" />
                          </div>
                        </div>
                        <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                          <i class="rlr-icon-font flaticon-left-chevron"> </i>
                        </button>
                        <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                          <i class="rlr-icon-font flaticon-chevron"> </i>
                        </button>
                      </div>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a class='rlr-product-card__anchor-title' href='/product-detail-page'>
                            <h2 class="rlr-product-card__title" itemprop="name">Chùa Một Cột Tại Hải Lăng </h2>
                          </a>
                          <div>
                            <a class='rlr-product-card__anchor-cat' href='/product-detail-page'>
                              <span class="rlr-product-card__sub-title"></span>
                            </a>
                            <span class="rlr-product-card__sub-title"></span>
                            <a class='rlr-product-card__anchor-sub-cat' href='/product-detail-page'>
                              <span class="rlr-product-card__sub-title"></span>
                            </a>
                          </div>
                        </div>
                      </header>
                      <!-- Product card body -->
                      <div class="rlr-product-card__details">

                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">

                        </div>
                      </div>
                      <!-- Product card footer -->

                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--accent-blue rlr-product-card__badge"> Thành Cổ </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <div class="swiper rlr-js-product-multi-image-swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img itemprop="image"data-src="https://media.vov.vn/sites/default/files/styles/large/public/2022-07/tri_an_cac_anh_hung_liet_si_tai_thanh_co_quang_tri.jpg" data-srcset="https://media.vov.vn/sites/default/files/styles/large/public/2022-07/tri_an_cac_anh_hung_liet_si_tai_thanh_co_quang_tri.jpg" class="lazyload" alt="product-image" />
                          </div>
                          <div class="swiper-slide">
                            <img itemprop="image"data-src="https://ximgo.com/upload/2020/07/30/thanh-co-quang-tri-1.jpg" data-srcset="https://ximgo.com/upload/2020/07/30/thanh-co-quang-tri-1.jpg" class="lazyload" alt="product-image" />
                          </div>
                          <div class="swiper-slide">
                            <img itemprop="image"data-src="https://luhanhvietnam.com.vn/du-lich/vnt_upload/news/09_2019/thanh-co.jpg" data-srcset="https://luhanhvietnam.com.vn/du-lich/vnt_upload/news/09_2019/thanh-co.jpg" class="lazyload" alt="product-image" />
                          </div>
                        </div>
                        <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                          <i class="rlr-icon-font flaticon-left-chevron"> </i>
                        </button>
                        <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                          <i class="rlr-icon-font flaticon-chevron"> </i>
                        </button>
                      </div>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a class='rlr-product-card__anchor-title' href='{{route('location.detail/1')}}'>
                            <h2 class="rlr-product-card__title" itemprop="name">Quảng Trị tổ chức cho người dân, du khách viếng nghĩa trang </h2>
                          </a>
                          <div>
                            <a class='rlr-product-card__anchor-cat' href='/product-detail-page'>
                              <span class="rlr-product-card__sub-title"></span>
                            </a>
                            <span class="rlr-product-card__sub-title"></span>
                            <a class='rlr-product-card__anchor-sub-cat' href='/product-detail-page'>
                              <span class="rlr-product-card__sub-title"></span>
                            </a>
                          </div>
                        </div>
                      </header>
                      <!-- Product card body -->
                      <div class="rlr-product-card__details">
                        <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                          <span class="rlr-product-card__from"></span>
                          <span class="rlr-product-card__price"> <mark itemprop="priceCurrency"></mark><mark itemprop="price"></mark> </span>
                        </div>
                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">


                        </div>
                      </div>
                      <!-- Product card footer -->
                      <div class="rlr-product-card__footer">

                        <ul class="rlr-product-card__icon-text-list">

                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--brand rlr-product-card__badge">Cầu Hiền lương  </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <div class="swiper rlr-js-product-multi-image-swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img itemprop="image"data-src="https://www.quangtri.gov.vn/o/3cmsnew-portlet/ViewImage?imagename=DJI_0299_1618562528082.jpg" data-srcset="https://www.quangtri.gov.vn/o/3cmsnew-portlet/ViewImage?imagename=DJI_0299_1618562528082.jpg" class="lazyload" alt="product-image" />
                          </div>
                          <div class="swiper-slide">
                            <img itemprop="image"data-src="https://i1-dulich.vnecdn.net/2022/07/13/QT1-7138-1657697263.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=FnKUxCDbjS6AjW3C5Ar1XA" width="200" height="100" class="lazyload" alt="product-image" />
                          </div>
                          <div class="swiper-slide">
                            <img itemprop="image"data-src="https://image.nhandan.vn/w800/Files/Images/2022/05/01/368634B9_1247_4805_B602_117D533-1651367460146.jpeg" data-srcset="https://image.nhandan.vn/w800/Files/Images/2022/05/01/368634B9_1247_4805_B602_117D533-1651367460146.jpeg" class="lazyload" alt="product-image" />
                          </div>
                        </div>
                        <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                          <i class="rlr-icon-font flaticon-left-chevron"> </i>
                        </button>
                        <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                          <i class="rlr-icon-font flaticon-chevron"> </i>
                        </button>
                      </div>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a class='rlr-product-card__anchor-title' href='/product-detail-page'>
                            <h2 class="rlr-product-card__title" itemprop="name">Đôi Bờ Cầu Hiền lương</h2>
                          </a>

                        </div>
                      </header>
                      <!-- Product card body -->

                      <!-- Product card footer -->

                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--accent-magenta rlr-product-card__badge">Khu Sinh Thái </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <div class="swiper rlr-js-product-multi-image-swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img itemprop="image"  data-src="https://d33wubrfki0l68.cloudfront.net/a66f59b8d8a25928bbea0d8ae492caf362f5c665/5bae6/assets/images/product-images/small/04.jpg" data-srcset="https://d33wubrfki0l68.cloudfront.net/a66f59b8d8a25928bbea0d8ae492caf362f5c665/5bae6/assets/images/product-images/small/04.jpg" class="lazyload" alt="product-image" />
                          </div>
                          <div class="swiper-slide">
                            <img itemprop="image"  data-src="https://d33wubrfki0l68.cloudfront.net/7a61c27c1584bc2fc2405af810f4cf0e018ee5f2/92944/assets/images/product-images/small/02.jpg" data-srcset="https://d33wubrfki0l68.cloudfront.net/7a61c27c1584bc2fc2405af810f4cf0e018ee5f2/92944/assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                          </div>
                          <div class="swiper-slide">
                            <img itemprop="image"  data-src="https://d33wubrfki0l68.cloudfront.net/e8eaab1664e0a66491cf5a8fa59320f688942c5a/7e92c/assets/images/product-images/small/03.jpg" data-srcset="https://d33wubrfki0l68.cloudfront.net/e8eaab1664e0a66491cf5a8fa59320f688942c5a/7e92c/assets/images/product-images/small/03.jpg" class="lazyload" alt="product-image" />
                          </div>
                        </div>
                        <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                          <i class="rlr-icon-font flaticon-left-chevron"> </i>
                        </button>
                        <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                          <i class="rlr-icon-font flaticon-chevron"> </i>
                        </button>
                      </div>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a class='rlr-product-card__anchor-title' href='/product-detail-page'>
                            <h2 class="rlr-product-card__title" itemprop="name">Khu Sinh Thái Ở Cửa Việt
                          </a>

                        </div>
                      </header>

                    </div>
                  </article>
                </div>


              </div>
            </div>
          </div>
        </div>
      </section>
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
