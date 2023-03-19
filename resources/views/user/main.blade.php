@extends('user.layout.master')

@section('content')
<aside>
    <div class="container-fluid">
      <!-- START revslider2 REVOLUTION SLIDER 6.5.15 -->
      <p class="rs-p-wp-fix"></p>
      <rs-module-wrap id="rev_slider_2_1_wrapper" data-alias="revslider-2" data-source="gallery" style="visibility: hidden; background: transparent; padding: 0; margin: 0px auto; margin-top: 0; margin-bottom: 0">
        <rs-module id="rev_slider_2_1" style="" data-version="6.5.15">
          <rs-slides>
            <rs-slide style="position: absolute" data-key="rs-4" data-title="Slide" data-anim="d:20;ms:1210;" data-in="o:0;x:ran(-200|200);sx:2;sy:2;e:power3.Out;row:100;col:10;" data-d3="f:cube;z:450;t:20;su:true;sc:#9e9e9e;">
              <img src="https://cdn.yeudulich.com/940x630/media/attraction/attraction/VNMVQT04.jpg" alt="" title="BG Image" width="1800 px" height="646 px" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina />


          </rs-slides>
        </rs-module>
        <script>
          if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
              console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
              console.log("To fix this, you can:");
              console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
              console.log("2. Find the double jQuery.js inclusion and remove it");
              return "Double Included jQuery Library";
            }
          }
        </script>
      </rs-module-wrap>
      <!-- END REVOLUTION SLIDER -->
      <script>
        var tpj = jQuery;
        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider21"] = {
          once: RS_MODULES.modules["revslider21"] !== undefined ? RS_MODULES.modules["revslider21"].once : undefined,
          init: function () {
            window.revapi2 = window.revapi2 === undefined || window.revapi2 === null || window.revapi2.length === 0 ? document.getElementById("rev_slider_2_1") : window.revapi2;
            if (window.revapi2 === null || window.revapi2 === undefined || window.revapi2.length == 0) {
              window.revapi2initTry = window.revapi2initTry === undefined ? 0 : window.revapi2initTry + 1;
              if (window.revapi2initTry < 20)
                requestAnimationFrame(function () {
                  RS_MODULES.modules["revslider21"].init();
                });
              return;
            }
            window.revapi2 = jQuery(window.revapi2);
            if (window.revapi2.revolution == undefined) {
              revslider_showDoubleJqueryError("rev_slider_2_1");
              return;
            }
            revapi2.revolutionInit({
              revapi: "revapi2",
              DPR: "dpr",
              sliderLayout: "fullwidth",
              visibilityLevels: "1240,1024,778,480",
              gridwidth: 1600,
              gridheight: 646,
              perspective: 600,
              perspectiveType: "global",
              editorheight: "646,768,960,720",
              responsiveLevels: "1240,1024,778,480",
              progressBar: { disableProgressBar: true },
              navigation: {
                onHoverStop: false
              },
              viewPort: {
                global: false,
                globalDist: "-200px",
                enable: false
              },
              fallbacks: {
                allowHTML5AutoPlayOnAndroid: true
              }
            });
          }
        }; // End of RevInitScript
        if (window.RS_MODULES.checkMinimal !== undefined) {
          window.RS_MODULES.checkMinimal();
        }
      </script>
    </div>
    <div class="container">
      <!-- Search banner -->
            @csrf
      <form class="rlr-banner-search rlr-banner-search--hero-half-mast" action="{{ route('home') }}" method="GET">
        @csrf

        <div class="rlr-banner-search__input-wrapper">
          <!-- Destination -->
          <div class="rlr-banner-input-group rlr-banner-input-group rlr-banner-input-group--home-search rlr-js-autocomplete-demo rlr-banner-search__banner-input rlr-js-search-layout-wrapper">
            <label class="rlr-banner-input-group__label" for="destination_input">
              <mark>Tỉnh </mark>
            </label>
            <select name="province" id="" class="form-control">
                @foreach ($provinces as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
          </div>
          <!-- Activity -->

          <!-- Date -->

        </div>
        <button class="rlr-banner-search__submit-button" aria-label="banner submit">
          <i class="rlr-icon-font flaticon-search"> </i>

      </form>
    </div>
  </aside>
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
                  <span class="rlr-badge rlr-badge-- rlr-badge--accent-red rlr-product-card__badge"> Chùa đình </span>
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
                      <a class='rlr-product-card__anchor-title' href='{{route('location.detail')}}'>
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
@endsection
