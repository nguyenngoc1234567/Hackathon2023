
@extends('user.layout.master')
@section('content')
<body class="rlr-body">
    <!-- Header -->

    <!-- Main Content -->
    <main id="rlr-main" class="rlr-main--fixed-top">
      <!-- Main Content -->
      <div class="container">
        <!-- Media Slider -->
        <aside class="row">
          <!-- Media main image carousel -->
          <div class="col-md-10 rlr-media">
            <div class="splide rlr-media--wrapper rlr-js-media">
              <!-- Arrows -->
              <div class="splide__arrows">
                <button class="rlr-media__arrow splide__arrow splide__arrow--prev">
                  <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </button>
                <button class="rlr-media__arrow splide__arrow splide__arrow--next">
                  <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </button>
              </div>
              <!-- Media main images -->
              <div class="splide__track rlr-media__strack">
                <ul id="image-preview" class="splide__list">
                  <li class="splide__slide rlr-media__image-view">
                    <img class="lazyload" data-src="https://cdnmedia.baotintuc.vn/Upload/c2tvplmdloSDblsn03qN2Q/files/2022/07/11/chieu/tri-an-anh-hung-liet-sy-1172022.jpg" alt="media image" />
                  </li>
                  <li class="splide__slide rlr-media__image-view">
                    <img class="lazyload" data-src="data:image/jpeg;base64,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" alt="media image" />
                  </li>

                </ul>
              </div>
              <!-- Media pagination counter -->
              <div class="rlr-media__custom-pagination rlr-js-custom-pagination">
                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M1.2 0C.542 0 0 .558 0 1.235v11.53C0 13.442.542 14 1.2 14h15.6c.658 0 1.2-.558 1.2-1.235V1.235C18 .558 17.458 0 16.8 0H1.2zm0 .824h15.6c.228 0 .4.176.4.411v9.844l-3.506-3.95a.4.4 0 0 0-.588 0l-2.862 3.126L6.1 5.488a.4.4 0 0 0-.362-.135.4.4 0 0 0-.232.129L.8 10.687V1.235C.8 1 .972.823 1.2.823zm9.2 2.058c-.879 0-1.6.743-1.6 1.647 0 .905.721 1.647 1.6 1.647.879 0 1.6-.742 1.6-1.647 0-.904-.721-1.647-1.6-1.647zm0 .824c.447 0 .8.363.8.823 0 .46-.353.824-.8.824a.806.806 0 0 1-.8-.824c0-.46.353-.823.8-.823zm-4.606 2.67 5.912 6.8H1.2a.397.397 0 0 1-.4-.411v-.869l4.994-5.52zm7.6 1.64 3.806 4.285v.464a.397.397 0 0 1-.4.411h-4.019l-2-2.303 2.613-2.856z"
                    fill="#212529"
                  ></path>
                </svg>
                <span class="rlr-media__page-counter rlr-js-page"> 0 </span>
              </div>
            </div>
          </div>
          <!-- Media Thumbnails -->
          <div class="col-md-2 rlr-media">
            <!-- Media sidebar -->
            <div class="splide rlr-media--wrapper rlr-media--sidebar rlr-js-thumbnail-media">
              <!-- Arrows -->
              <div class="splide__arrows">
                <button class="rlr-media__arrow splide__arrow splide__arrow--prev">
                  <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </button>
                <button class="rlr-media__arrow splide__arrow splide__arrow--next">
                  <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.889 14.942 8.47 8.36 1.889 1.778" stroke="var(--white)" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </button>
              </div>
              <!-- Thumbnails -->
              <div class="splide__track rlr-media__strack">
                <ul id="image-preview-thumb" class="splide__list">
                  <li class="splide__slide rlr-media__image-view">
                    <img class="rlr-media__thumb lazyload" data-src="https://cdnmedia.baotintuc.vn/Upload/c2tvplmdloSDblsn03qN2Q/files/2022/07/11/chieu/tri-an-anh-hung-liet-sy-1172022.jpg" alt="media image" />
                  </li>
                  <li class="splide__slide rlr-media__image-view">
                    <img class="rlr-media__thumb lazyload" data-src="https://cdnmedia.baotintuc.vn/Upload/c2tvplmdloSDblsn03qN2Q/files/2022/07/11/chieu/tri-an-anh-hung-liet-sy-1172022.jpg" alt="media image" />
                  </li>
                  <li class="splide__slide rlr-media__image-view">
                    <img class="rlr-media__thumb lazyload" data-src="https://cdnmedia.baotintuc.vn/Upload/c2tvplmdloSDblsn03qN2Q/files/2022/07/11/chieu/tri-an-anh-hung-liet-sy-1172022.jpg" alt="media image" />
                  </li>


                </ul>
              </div>
            </div>
          </div>
        </aside>
        <!-- Product Detail Sextion -->
        <section class="row rlr-product-detail-section">
          <div class="rlr-product-detail-section__details col-xl-8">
            <!-- Product Detail Header -->
            <div class="rlr-product-detail-header" id="rlr-js-detail-header">
              <div class="rlr-product-detail-header__contents">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb rlr-breadcrumb__items">
                    <li class="breadcrumb-item rlr-breadcrumb__item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item rlr-breadcrumb__item"><a href="/">Destination</a></li>
                    <li class="breadcrumb-item rlr-breadcrumb__item active" aria-current="page">Tour</li>
                  </ol>
                </nav>
                <h1 class="rlr-section__heading--main rlr-product-detail-header__title">Quảng Trị tổ chức cho người dân, du khách viếng nghĩa trang</h1>
                <div class="rlr-review-stars" itemscope itemtype="https://schema.org/Product">
                  <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                    <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                  </div>
                  <div class="rlr-review-stars__content">
                    <span class="rlr-review-stars__count">6,788</span>
                    <span> lượt theo dõi</span>
                  </div>
                </div>
              </div>
              <div class="rlr-product-detail-header__actions">
                <button type="button" data-bs-toggle="popover-share" data-content-id="rlr-js-share-popover" id="rlr-js-share-button" class="btn rlr-button rlr-button--circle rlr-popover-button" aria-label="share">
                  <i class="rlr-icon-font flaticon-share-1"></i>
                </button>
                <div id="rlr-js-share-popover" class="rlr-popover--hide">
                  <div class="rlr-share">
                    <h3 class="rlr-share__title">Share with a friend</h3>
                    <ul class="rlr-share__items">
                      <li class="rlr-share__list rlr-js--facebook">
                        <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-facebook"> </i> <span class="rlr-share__title">Facebook </span> </a>
                      </li>
                      <li class="rlr-share__list rlr-js--twitter">
                        <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-twitter"> </i> <span class="rlr-share__title">Twitter </span> </a>
                      </li>
                      <li class="rlr-share__list rlr-js--reddit">
                        <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-instagram"> </i> <span class="rlr-share__title">Reddit </span> </a>
                      </li>
                      <li class="rlr-share__list rlr-js--whatsapp">
                        <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-whatsapp"> </i> <span class="rlr-share__title">Whatsapp </span> </a>
                      </li>
                      <li class="rlr-share__list rlr-js--messenger">
                        <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-messenger"> </i> <span class="rlr-share__title">Messenger </span> </a>
                      </li>
                      <li class="rlr-share__list rlr-js--email">
                        <a href="#" class="rlr-icon-text rlr-icon-text--anchor rlr-icon-text__block rlr-share__item"> <i class="rlr-icon-font flaticon-email-1"> </i> <span class="rlr-share__title">Email </span> </a>
                      </li>
                    </ul>
                    <div class="rlr-copylink">
                      <label class="rlr-copylink__title">Share link</label>
                      <div class="rlr-copylink__wrapper"><input type="text" autocomplete="off" class="form-control rlr-copylink__input" value="join.untitledui.com/project" /> <i class="rlr-icon-font flaticon-copy"> </i></div>
                    </div>
                  </div>
                </div>
                <div class="rlr-product-detail-header__button-wrapper">
                  <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                    <i class="rlr-icon-font flaticon-heart-1"> </i>
                  </button>
                  <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                </div>
              </div>
            </div>
            <!-- Secondary Menu -->

            <!-- Overview -->
            <div class="rlr-secondary-menu-desc" data-id="rlr-product-sec-overview">
              <div class="rlr-secondary-menu-desc__icon">
                <svg width="41" height="51" viewBox="0 0 41 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M40.327 13.61H28.296c-.334 0-.558-.221-.558-.55l.002-11.852c0-.329.224-.55.558-.55.334 0 .558.221.558.55l-.002 11.304h11.473c.334 0 .558.22.558.55 0 .33-.224.547-.558.547z" fill="#99A3AD" />
                  <path
                    d="M36.54 50.707H4.568C2.005 50.707 0 48.73 0 46.207L.002 5.047c0-2.525 2.005-4.5 4.568-4.5h23.728c.11 0 .334.109.445.109L40.885 12.51c.11.11.11.22.11.439v33.255c.113 2.527-1.892 4.503-4.455 4.503zM4.568 1.756c-1.892 0-3.342 1.428-3.342 3.292v41.158c0 1.867 1.56 3.402 3.453 3.402H36.65c1.894 0 3.453-1.537 3.453-3.402l.002-32.926-11.92-11.524H4.567z"
                    fill="#99A3AD"
                  />
                  <path
                    d="M33.309 19.756h-19.27c-.335 0-.558-.22-.558-.55 0-.329.223-.549.557-.549h19.273c.334 0 .558.22.558.55-.002.329-.226.55-.56.55zM33.309 25.133H7.91c-.334 0-.558-.22-.558-.55 0-.328.224-.549.558-.549h25.399c.334 0 .558.22.558.55 0 .331-.224.55-.558.55zM33.309 30.622H7.91c-.334 0-.558-.22-.558-.55 0-.329.224-.55.558-.55h25.399c.334 0 .558.221.558.55 0 .33-.224.55-.558.55zM33.309 36.11H7.91c-.334 0-.558-.22-.558-.55 0-.329.224-.549.558-.549h25.399c.334 0 .558.22.558.55 0 .329-.224.55-.558.55zM33.309 41.487H7.91c-.334 0-.558-.22-.558-.549 0-.33.224-.55.558-.55h25.399c.334 0 .558.22.558.55 0 .33-.224.55-.558.55z"
                    fill="#99A3AD"
                  />
                </svg>
              </div>
              <div class="rlr-secondary-menu-desc__details">
                <div class="rlr-overview-detail">
                  <div class="rlr-readmore-desc rlr-overview-detail__description">
                    <p class="rlr-readmore-desc__content rlr-js-desc">
                        Chú thích ảnh
                        Thành cổ Quảng Trị trong đêm tri ân. Ảnh (tư liệu): Hồ Cầu/TTXVN
                        Cụ thể, từ tối 12/7, tỉnh tổ chức thí điểm chương trình tham quan Di tích Quốc gia đặc biệt Thành cổ Quảng Trị và bến thả hoa bên bờ sông Thạch Hãn ở thị xã Quảng Trị. Từ tối 17/7, tỉnh tổ chức chương trình tham quan Di tích Quốc gia đặc biệt Đôi bờ Hiền Lương - Bến Hải.

                        Di tích Quốc gia đặc biệt Thành cổ Quảng Trị đã được đầu tư lắp đặt hệ thống chiếu sáng nghệ thuật vào cuối tháng 4 vừa qua. Hệ thống chiếu sáng này được đặt tại Tượng đài trung tâm, khu vực Nam Môn, Bắc Môn, Lao Xá, Bia chiến tích sinh viên và các tượng điêu khắc nghệ thuật. Tương tự, Di tích Quốc gia đặc biệt Đôi bờ Hiền Lương - Bến Hải cũng đã được đầu tư lắp đặt hệ thống chiếu sáng nghệ thuật tại cầu Hiền Lương, Kỳ đài Hiền Lương, Tượng chiến sỹ Công an bảo vệ giới tuyến, Nhà trưng bày "Vĩ tuyến 17 và khát vọng thống nhất", Nhà liên hợp....
                    </p>
                    <span class="rlr-readmore-desc__readmore rlr-js-readmore">Show more...</span>
                  </div>

                </div>
              </div>
            </div>
            <!-- Itinerary -->
            <!-- Inclusion and Exclusions -->

            <!-- Reviews -->

            <!-- FAQ-->

          </div>
          <!-- Booking Form -->

        </section>
        <!-- Similar Products -->

      </div>
    </main>
    <!-- Footer -->

    <!-- Scripts -->
    <script defer src='https://d33wubrfki0l68.cloudfront.net/bundles/9123ae4616ab9b822de203233984359201cebe4f.js'></script>
  </body>
@endsection
