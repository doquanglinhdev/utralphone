<?php $setiing = setiing_show(); ?>
<!doctype html>
<html class="no-js" lang="vi">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=5.0">
  <meta name="theme-color" content="#d41f26">
  <title><?= $setiing['name_site'] ?>｜Website mua sắm điện thoại </title>
  <meta name="description" content="Hoàng Hải Mobile｜Website mua sắm điện thoại, laptop, đồng hồ hàng đầu tại Nhật">
  <link rel="canonical" href="https://hoanghaimobile.jp/">
  <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/0653/8923/2347/files/only-logo-hoanghai-mobile_96x96.png?v=1661515559" type="image/png">
  <script src="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/jqueryui.js?v=3841827695553272571666866960" defer>
  </script>
  <link href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/jqueryui.css?v=163747186686686371921666866960" rel="stylesheet" type="text/css" media="all" />
  <script src="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/jquery-3.6.0.min.js?v=115860211936397945481666866960" defer></script>
  <link rel="preload" as="script" href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/slick.min.js?v=71779134894361685811666866960">
  <link rel="preload" as="script" href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/custom.js?v=26678410925558552081666886116">
  <link rel="preload" as="style" href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/theme.css?v=96097795529474979791667300742">
  <link rel="preload" as="script" href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/theme.js?v=168700448905247613401666866960">
  <link rel="stylesheet" href="views/public/assets/css/all.css">
  <link rel="preconnect" href="https://cdn.shopify.com">
  <link rel="preconnect" href="https://fonts.shopifycdn.com">
  <link rel="dns-prefetch" href="https://productreviews.shopifycdn.com">
  <link rel="dns-prefetch" href="https://ajax.googleapis.com">
  <link rel="dns-prefetch" href="https://maps.googleapis.com">
  <link rel="dns-prefetch" href="https://maps.gstatic.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap&subset=vietnamese" rel="stylesheet">

  <meta property="og:type" content="website">
  <meta property="og:title" content="Hoàng Hải Mobile｜Website mua sắm điện thoại, đồng hồ hàng đầu tại Nhật">
  <meta property="og:description" content="Hoàng Hải Mobile｜Website mua sắm điện thoại, laptop, đồng hồ hàng đầu tại Nhật">
  <meta property="og:url" content="https://hoanghaimobile.jp/">
  <meta property="og:site_name" content="HoangHaiMobile">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Hoàng Hải Mobile｜Website mua sắm điện thoại, đồng hồ hàng đầu tại Nhật">
  <meta name="twitter:description" content="Hoàng Hải Mobile｜Website mua sắm điện thoại, laptop, đồng hồ hàng đầu tại Nhật">
  <style>
    @font-face {
      font-family: "DIN Next";
      font-weight: 500;
      font-style: normal;
      font-display: fallback;
      src: url("https://fonts.shopifycdn.com/din_next/dinnext_n5.9de62f474792d83a5c7487ba13c73b05f03f03c7.woff2?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=0c46786c5c93b134c1c395c4995770289e2b8ba56a83d175c91d2061276b5473") format("woff2"),
        url("https://fonts.shopifycdn.com/din_next/dinnext_n5.780618dec464e6222d24888730ca26e0ca6ad6af.woff?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=0e4c9619f84ee4c75e54159c8af639f426a820007ba535ec81025c4cf27c7f9b") format("woff");
    }

    @font-face {
      font-family: "DIN Next";
      font-weight: 400;
      font-style: normal;
      font-display: fallback;
      src: url("https://fonts.shopifycdn.com/din_next/dinnext_n4.438c249fdbceeefafa64221353c5ece2fdb8ae14.woff2?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=467d71244677740178da5eccd3b59ca66d089cc6f8209c097d12b1ecdb9834e4") format("woff2"),
        url("https://fonts.shopifycdn.com/din_next/dinnext_n4.ba1a214c52f07ec250a5179209eb84e73639e1c9.woff?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=f4e65b3017e6063f05bd08b504863768da42434a85c8897430d0a65454878344") format("woff");
    }

    @font-face {
      font-family: "DIN Next";
      font-weight: 500;
      font-style: normal;
      font-display: fallback;
      src: url("https://fonts.shopifycdn.com/din_next/dinnext_n5.9de62f474792d83a5c7487ba13c73b05f03f03c7.woff2?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=0c46786c5c93b134c1c395c4995770289e2b8ba56a83d175c91d2061276b5473") format("woff2"),
        url("https://fonts.shopifycdn.com/din_next/dinnext_n5.780618dec464e6222d24888730ca26e0ca6ad6af.woff?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=0e4c9619f84ee4c75e54159c8af639f426a820007ba535ec81025c4cf27c7f9b") format("woff");
    }

    @font-face {
      font-family: "DIN Next";
      font-weight: 500;
      font-style: italic;
      font-display: fallback;
      src: url("https://fonts.shopifycdn.com/din_next/dinnext_i5.6181c1c6bd79a156767a82929b9c449117ad57ca.woff2?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=c6b98b08beb8ee6df349b8dc0e213412492e64c5baa4779158995bc9ea0abc0a") format("woff2"),
        url("https://fonts.shopifycdn.com/din_next/dinnext_i5.8a0b77e365efc8daea9a021f4043f6d7046af5bb.woff?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=1de977315dd262ed64651e1258172d175f2aa9ece5989630d264da9a9349e7ed") format("woff");
    }


    @font-face {
      font-family: "DIN Next";
      font-weight: 700;
      font-style: normal;
      font-display: fallback;
      src: url("https://fonts.shopifycdn.com/din_next/dinnext_n7.57888b0b2051a4dba7d02aad7ca64db99eca3cf1.woff2?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=24d583a8b9de1b4f0729034322c962c2d6d3653fde6093e113077625d6c37142") format("woff2"),
        url("https://fonts.shopifycdn.com/din_next/dinnext_n7.8ca52ee0f403ce0c89c90387f16284e4637c1b10.woff?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=69e2c6f3608fc14ac24dcda0cac60d309900895983c229ac370585d8a4f067b2") format("woff");
    }

    @font-face {
      font-family: "DIN Next";
      font-weight: 400;
      font-style: italic;
      font-display: fallback;
      src: url("https://fonts.shopifycdn.com/din_next/dinnext_i4.61ded265c0c537a08a3ef6c1f78e76a5f3be91c9.woff2?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=02a7440960e5be29acaee0fbc607e1656bfd44bcc886bd3fdff0541648db4d35") format("woff2"),
        url("https://fonts.shopifycdn.com/din_next/dinnext_i4.09dd19acb435d364f8a7263a588c573108d49efc.woff?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=20ace258dcb70a40a293cfd0fce220cd4d47383f90dac86d04eed600df876607") format("woff");
    }

    @font-face {
      font-family: "DIN Next";
      font-weight: 700;
      font-style: italic;
      font-display: fallback;
      src: url("https://fonts.shopifycdn.com/din_next/dinnext_i7.3e0968fa491d382704988ea5c9fc6209193f03d0.woff2?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=10a795542d875f29caf922318d66d9445a55f521b3805f693791de911ab63470") format("woff2"),
        url("https://fonts.shopifycdn.com/din_next/dinnext_i7.28611b7c75be07249f4251b10e48a8d9f8dbf8ba.woff?h1=aG9hbmdoYWltb2JpbGUuYWNjb3VudC5teXNob3BpZnkuY29t&h2=aG9hbmdoYWltb2JpbGUuanA&hmac=ad1efef486a2004869b3fa9c412fdbd89e3f4f6d1f85f82dd57c89fc4b9aabde") format("woff");
    }


    :root {
      --default-text-font-size: 15px;
      --base-text-font-size: 16px;
      --heading-font-family: "DIN Next", sans-serif;
      --heading-font-weight: 500;
      --heading-font-style: normal;
      --text-font-family: "DIN Next", sans-serif;
      --text-font-weight: 400;
      --text-font-style: normal;
      --text-font-bolder-weight: 500;
      --text-link-decoration: underline;

      --text-color: #000000;
      --text-color-rgb: 0, 0, 0;
      --heading-color: #d41f26;
      --border-color: #e1e3e4;
      --border-color-rgb: 225, 227, 228;
      --form-border-color: #d4d6d8;
      --accent-color: #d41f26;
      --accent-color-rgb: 212, 31, 38;
      --link-color: #00badb;
      --link-color-hover: #00798e;
      --background: #f3f5f6;
      --secondary-background: #ffffff;
      --secondary-background-rgb: 255, 255, 255;
      --accent-background: rgba(212, 31, 38, 0.08);

      --input-background: #ffffff;

      --error-color: #ff0000;
      --error-background: rgba(255, 0, 0, 0.07);
      --success-color: #00aa00;
      --success-background: rgba(0, 170, 0, 0.11);

      --primary-button-background: #d41f26;
      --primary-button-background-rgb: 212, 31, 38;
      --primary-button-text-color: #ffffff;
      --secondary-button-background: #d41f26;
      --secondary-button-background-rgb: 212, 31, 38;
      --secondary-button-text-color: #ffffff;

      --header-background: #d41f26;
      --header-text-color: #ffffff;
      --header-light-text-color: #a3afef;
      --header-border-color: rgba(163, 175, 239, 0.3);
      --header-accent-color: #d41f26;

      --footer-background-color: #ffffff;
      --footer-heading-text-color: #a6a6a6;
      --footer-body-text-color: #000000;
      --footer-accent-color: #d41f26;
      --footer-accent-color-rgb: 212, 31, 38;
      --footer-border: none;

      --flickity-arrow-color: #abb1b4;
      --product-on-sale-accent: #d41f26;
      --product-on-sale-accent-rgb: 212, 31, 38;
      --product-on-sale-color: #ffffff;
      --product-in-stock-color: #008a00;
      --product-low-stock-color: #d41f26;
      --product-sold-out-color: #8a9297;
      --product-custom-label-1-background: #008a00;
      --product-custom-label-1-color: #ffffff;
      --product-custom-label-2-background: #00a500;
      --product-custom-label-2-color: #ffffff;
      --product-review-star-color: #ffbd00;

      --mobile-container-gutter: 20px;
      --desktop-container-gutter: 40px;
    }
  </style>

  <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/65389232347/digital_wallets/dialog">


  <script>
    window.ShopifyPaypalV4VisibilityTracking = true;
  </script>
  <script integrity="sha256-pfEFLtGor1q9LzHf7xpslSiKa+MZ45v9cHL18ZbWNhI=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-a5f1052ed1a8af5abd2f31dfef1a6c95288a6be319e39bfd7072f5f196d63612.js" crossorigin="anonymous"></script>
  <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>


  <script>
    window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');
  </script>

  <link rel="stylesheet" href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/theme.css?v=96097795529474979791667300742">
  <link href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/common.scss.css?v=99823060610401429431666866960" rel="stylesheet" type="text/css" media="all" />

  <link href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/home.scss.css?v=969000172477433621666866960" rel="stylesheet" type="text/css" media="all" />

  <link rel="stylesheet" href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/slick.css?v=98340474046176884051666866960">
  <script src="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/slick.min.js?v=71779134894361685811666866960" defer></script>
  <script src="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/theme.js?v=168700448905247613401666866960" defer>
  </script>

  <script src="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/ajaxinate.js?v=184365010133491792511666866960" defer></script>
  <script src="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/custom.js?v=26678410925558552081666886116" defer>
  </script>
  <link href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/app.css?v=63642124928503512871668475553" rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/fix.css?v=63449735137300879061667787486" rel="stylesheet" type="text/css" media="all" />
  <!-- Start of Judge.me Core -->
  <link rel="dns-prefetch" href="https://cdn.judge.me/">
  <script async data-cfasync="false" type="text/javascript" src="https://cdn.judge.me/loader.js"></script>
  <noscript>
    <link rel="stylesheet" type="text/css" media="all" href="https://cdn.judge.me/shopify_v2.css">
  </noscript>
  <script src="https://magecomp.us/js/LimitQtyHelper.js" defer></script>
  <script src="https://cdn.shopify.com/extensions/b305b36b-04c8-44f2-92a0-d3b0ff358ea4/1.66.0/assets/main.bundle.js">
  </script>
  <style>
    .iia-icon svg {
      height: 18px;
      width: 18px;
    }
  </style>
  <!-- END app app block -->
  <script src="https://cdn.shopify.com/extensions/736e97d3-05cf-4dbf-a680-0bd9355989cc/1.92.0/assets/limit-qty.js" type="text/javascript" defer="defer"></script>
  <meta property="og:image" content="https://cdn.shopify.com/s/files/1/0653/8923/2347/files/Frame_1.png?height=628&pad_color=fff&v=1659242138&width=1200" />
  <meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/0653/8923/2347/files/Frame_1.png?height=628&pad_color=fff&v=1659242138&width=1200" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="628" />
  <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
  </div>
  <div id="shopify-section-header" class="shopify-section shopify-section__header">

    <header class="header header--inline " role="banner">
      <div class="container">
        <div class="header__inner">
          <h1 class="header__logo"><a href="index.php" class="header__logo-link"><img class="header__logo-image" src="views/public/images/logo.png" alt="HoangHaiMobile"><img class="header__logo-image logo-mobile"  width="1500" src="views/public/images/logo.png" alt="HoangHaiMobile"></a></h1>
          <div class="header__action-list">
            <div class="header__action-item hidden-tablet-and-up">
              <a class="header__action-item-link" href="/search" data-action="toggle-search" aria-expanded="false" aria-label="Tìm kiếm"><svg focusable="false" class="icon icon--search" viewBox="0 0 21 21" role="presentation">
                  <g stroke-width="2" stroke="black" fill="none" fill-rule="evenodd">
                    <path d="M19 19l-5-5" stroke-linecap="square"></path>
                    <circle cx="8.5" cy="8.5" r="7.5"></circle>
                  </g>
                </svg></a>
            </div>
            <div class="header__action-item header__action-item--phone">
              <a class="header__action-item-link header__phone-toggle" href="tel:0359809826" target="_blank">
                <div class="header__action-item-content">
                  <div class="header__phone-icon icon-state" aria-expanded="false"><svg focusable="false" class="icon icon--head-phone" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 0C5.54441 0 0.292725 5.25169 0.292725 11.7073V18.6341C0.292725 19.173 0.729459 19.6097 1.26833 19.6097H4.3903V17.6585H2.24394V11.7073C2.24394 6.3278 6.62052 1.95122 12 1.95122C17.3796 1.95122 21.7561 6.3278 21.7561 11.7073V17.6585H19.7074V19.6097H22.7317C23.2706 19.6097 23.7074 19.173 23.7074 18.6341V11.7073C23.7074 5.25169 18.4557 0 12 0Z" fill="white" />
                      <path d="M7.93497 13.5935H4.39028C3.85141 13.5935 3.41467 14.0302 3.41467 14.5691V22.9919C3.41467 23.5272 3.8462 23.9623 4.38152 23.9675L7.9262 24C7.92911 24 7.93206 24 7.93497 24C8.19189 24 8.43902 23.8982 8.62178 23.7174C8.80652 23.534 8.91058 23.2849 8.91058 23.0244V14.5691C8.91058 14.0302 8.47385 13.5935 7.93497 13.5935ZM6.95936 22.04L5.36584 22.0254V15.5447H6.95936V22.04Z" fill="white" />
                      <path d="M19.6423 13.5935H16.0651C15.5262 13.5935 15.0895 14.0302 15.0895 14.5691V22.9919C15.0895 23.5308 15.5262 23.9675 16.0651 23.9675H19.6423C20.1812 23.9675 20.6179 23.5308 20.6179 22.9919V14.5691C20.6179 14.0302 20.1812 13.5935 19.6423 13.5935ZM18.6667 22.0162H17.0407V15.5447H18.6667V22.0162Z" fill="white" />
                    </svg></div>

                  <span class="header__action-text"><?= $setiing['phone_admin'] ?></span>
                </div>
              </a>
            </div>


            <div class="header__action-item header__action-item--wishlist">
              <a class="header__action-item-link header__wishlist-toggle" href="/pages/swym-wishlist">
                <div class="header__action-item-content">
                  <div class="header__wishlist-icon icon-state" aria-expanded="false"><svg focusable="false" class="icon icon--wish_list" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.8768 3.10186C20.4889 1.71394 18.632 0.949646 16.6475 0.949646C14.939 0.949646 13.3252 1.51627 12.0236 2.55943C10.7033 1.51627 9.08747 0.949646 7.39566 0.949646C5.40197 0.949646 3.54009 1.71427 2.15222 3.10186C0.764297 4.48951 0 6.34679 0 8.33096C0 10.3154 0.764297 12.1724 2.15222 13.56L11.3896 22.7974C11.558 22.9661 11.779 23.0504 12 23.0504C12.2205 23.0504 12.4409 22.9663 12.6095 22.7986L21.8544 13.5819C23.2383 12.1669 24 10.3073 24 8.34535C24 6.36521 23.2484 4.50563 21.8768 3.10186ZM20.6276 12.3666L12.0008 20.9669L3.37294 12.3393C2.31136 11.2774 1.72659 9.85383 1.72659 8.33096C1.72659 6.80808 2.31136 5.38449 3.37294 4.32263C4.4348 3.26105 5.86331 2.67629 7.39566 2.67629C8.90358 2.67629 10.335 3.26363 11.4253 4.32952C11.7631 4.66018 12.305 4.65727 12.6391 4.32263C13.701 3.26105 15.1243 2.67629 16.6475 2.67629C18.1706 2.67629 19.5939 3.26105 20.6486 4.31569C21.6964 5.38763 22.2734 6.81872 22.2734 8.34535C22.2734 9.85355 21.6863 11.2846 20.6276 12.3666Z" fill="white" />
                    </svg></div>

                  <span class="header__action-text">Yêu thích</span>
                </div>
              </a>
            </div>
            <div class="header__action-item header__action-item--account">
              <div class="header__action-item-content">
                <?php if (isset($_SESSION['user'])) { ?>
                  <a href="?ctr=account" class="header__action-item-link header__account-icon icon-state" aria-label="Thành viên">
                    <span class="icon-state__primary"><svg focusable="false" class="icon icon--account" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.5 13.5182C5.2889 13.5182 1.3175 16.9296 1.3175 23.1241C1.3175 23.6079 1.70961 24 2.19341 24H22.8066C23.2903 24 23.6825 23.6079 23.6825 23.1241C23.6825 16.93 19.7111 13.5182 12.5 13.5182ZM3.10119 22.2482C3.44572 17.6167 6.60336 15.2701 12.5 15.2701C18.3966 15.2701 21.5543 17.6167 21.8991 22.2482H3.10119V22.2482Z" fill="white" />
                        <path d="M12.4999 0C9.18748 0 6.6897 2.54803 6.6897 5.92673C6.6897 9.40439 9.29613 12.2333 12.4999 12.2333C15.7037 12.2333 18.3101 9.40439 18.3101 5.92702C18.3101 2.54803 15.8123 0 12.4999 0ZM12.4999 10.4818C10.2619 10.4818 8.44151 8.43853 8.44151 5.92702C8.44151 3.50775 10.1484 1.75181 12.4999 1.75181C14.8138 1.75181 16.5583 3.54656 16.5583 5.92702C16.5583 8.43853 14.7379 10.4818 12.4999 10.4818Z" fill="white" />
                      </svg></span>
                    <span class="icon-state__secondary"><svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                        <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                      </svg></span>
                  </a>

                  <a href="?ctr=account" class="header__action-item-link hidden-pocket hidden-lap">
                    <?= $_SESSION['user']['name_user'] ?>
                  </a>
                <?php } else { ?>
                  <a href="index.php?ctr=login" class="header__action-item-link header__account-icon icon-state" aria-label="Thành viên">
                    <span class="icon-state__primary"><svg focusable="false" class="icon icon--account" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.5 13.5182C5.2889 13.5182 1.3175 16.9296 1.3175 23.1241C1.3175 23.6079 1.70961 24 2.19341 24H22.8066C23.2903 24 23.6825 23.6079 23.6825 23.1241C23.6825 16.93 19.7111 13.5182 12.5 13.5182ZM3.10119 22.2482C3.44572 17.6167 6.60336 15.2701 12.5 15.2701C18.3966 15.2701 21.5543 17.6167 21.8991 22.2482H3.10119V22.2482Z" fill="white" />
                        <path d="M12.4999 0C9.18748 0 6.6897 2.54803 6.6897 5.92673C6.6897 9.40439 9.29613 12.2333 12.4999 12.2333C15.7037 12.2333 18.3101 9.40439 18.3101 5.92702C18.3101 2.54803 15.8123 0 12.4999 0ZM12.4999 10.4818C10.2619 10.4818 8.44151 8.43853 8.44151 5.92702C8.44151 3.50775 10.1484 1.75181 12.4999 1.75181C14.8138 1.75181 16.5583 3.54656 16.5583 5.92702C16.5583 8.43853 14.7379 10.4818 12.4999 10.4818Z" fill="white" />
                      </svg></span>
                    <span class="icon-state__secondary"><svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                        <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                      </svg></span>
                  </a>

                  <a href="index.php?ctr=login" class="header__action-item-link hidden-pocket hidden-lap">
                    Thành Viên
                  </a>
                <?php } ?>
                <div id="account-popover" class="popover popover--large popover--unlogged" aria-hidden="true"><svg focusable="false" class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="header__action-item header__action-item--cart">
              <a class="header__action-item-link header__cart-toggle" href="/cart" aria-controls="mini-cart" aria-expanded="false" data-action="toggle-mini-cart" data-no-instant>
                <div class="header__action-item-content">
                  <div class="header__cart-icon icon-state" aria-expanded="false">
                    <span class="icon-state__primary"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_432_6177)">
                          <path d="M21.9353 20.0336L20.7494 8.51765C20.7004 8.04014 20.2981 7.67719 19.8181 7.67719H4.21344C3.7347 7.67719 3.3327 8.03892 3.28245 8.51517L2.06464 20.0367C1.96414 21.0423 2.29934 22.0529 2.98405 22.8097C3.6688 23.5659 4.64005 24 5.64903 24H18.3828C19.3871 24 20.3493 23.5746 21.0215 22.8322C21.7032 22.0809 22.0362 21.0622 21.9353 20.0336ZM19.6349 21.5747C19.3115 21.9311 18.8668 22.1274 18.3828 22.1274H5.64936C5.16842 22.1274 4.70309 21.918 4.37258 21.5529C4.04206 21.1877 3.88011 20.703 3.92755 20.2283L5.05606 9.55008H18.9732L20.0724 20.2215C20.1224 20.728 19.9666 21.2086 19.6349 21.5747Z" fill="white" />
                          <path d="M12.1717 0C9.21187 0 6.80371 2.40811 6.80371 5.36803V8.6138H8.67627V5.36803C8.67627 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6675 3.44053 15.6675 5.36803V8.6138H17.5397V5.36803C17.5398 2.40811 15.1317 0 12.1717 0Z" fill="white" />
                        </g>
                        <defs>
                          <clipPath id="clip0_432_6177">
                            <rect width="24" height="24" fill="white" />
                          </clipPath>
                        </defs>
                      </svg><span class="header__cart-count">0</span>

                    </span>

                    <span class="icon-state__secondary"><svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                        <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                      </svg></span>
                  </div>
                </div>
                <div class="header__action-item-text">
                  <span class="hidden-pocket hidden-lap">Giỏ hàng</span>
                </div>
              </a>
              <form method="post" action="/cart" id="mini-cart" class="mini-cart" aria-hidden="true" novalidate="novalidate" data-item-count="0">
                <input type="hidden" name="attributes[collection_products_per_page]" value="">
                <input type="hidden" name="attributes[collection_layout]" value=""><svg focusable="false" class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                  <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                </svg>
                <div class="mini-cart__content mini-cart__content--empty">
                  <div class="mini-cart__empty-state"><svg focusable="false" width="81" height="70" viewBox="0 0 81 70">
                      <g transform="translate(0 2)" stroke-width="4" stroke="#d41f26" fill="none" fill-rule="evenodd">
                        <circle stroke-linecap="square" cx="34" cy="60" r="6"></circle>
                        <circle stroke-linecap="square" cx="67" cy="60" r="6"></circle>
                        <path d="M22.9360352 15h54.8070373l-4.3391876 30H30.3387146L19.6676025 0H.99560547"></path>
                      </g>
                    </svg>
                    <p class="heading h4">Giỏ hàng của bạn trống</p>
                  </div>

                  <a href="/collections/all" class="button button--primary button--full">Xem sản phẩm khác</a>
                </div>
              </form>
            </div>
            <div class="header__action-item header__action-item--menu">
              <nav class="header__mobile-nav hidden-lap-and-up">
                <button class="header__mobile-nav-toggle icon-state touch-area" data-action="toggle-menu" aria-expanded="false" aria-haspopup="true" aria-controls="mobile-menu" aria-label="Mở menu">
                  <span class="icon-state__primary"><svg focusable="false" class="icon icon--hamburger-mobile" viewBox="0 0 20 16" role="presentation">
                      <path d="M0 14h20v2H0v-2zM0 0h20v2H0V0zm0 7h20v2H0V7z" fill="currentColor" fill-rule="evenodd">
                      </path>
                    </svg></span>
                  <span class="icon-state__secondary"><svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                      <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                    </svg></span>
                </button>
                <div id="mobile-menu" class="mobile-menu" aria-hidden="true"><svg focusable="false" class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                  </svg>
                  <div class="mobile-menu__inner">
                    <div class="mobile-menu__panel">
                      <div class="mobile-menu__section">
                        <ul class="mobile-menu__nav" data-type="menu" role="list">
                          <li class="mobile-menu__nav-item"><a href="/" class="mobile-menu__nav-link" data-type="menuitem">Home</a></li>
                          <li class="mobile-menu__nav-item"><a href="/pages/about-us" class="mobile-menu__nav-link" data-type="menuitem">Về chúng tôi</a></li>
                          <li class="mobile-menu__nav-item"><button class="mobile-menu__nav-link" data-type="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="mobile-panel-2" data-action="open-panel">Danh mục sản phẩm<svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                                <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                              </svg></button></li>
                          <li class="mobile-menu__nav-item"><button class="mobile-menu__nav-link" data-type="menuitem" aria-haspopup="true" aria-expanded="false" aria-controls="mobile-panel-3" data-action="open-panel">Hướng dẫn mua hàng<svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                                <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                              </svg></button></li>
                          <li class="mobile-menu__nav-item"><a href="/blogs/news" class="mobile-menu__nav-link" data-type="menuitem">Hoàng Hải Blog</a></li>
                          <li class="mobile-menu__nav-item"><a href="/pages/thu-mua-dien-thoai-cu" class="mobile-menu__nav-link" data-type="menuitem">Thu mua điện thoại cũ</a></li>
                          <li class="mobile-menu__nav-item"><a href="/pages/chinh-sach" class="mobile-menu__nav-link" data-type="menuitem">Chính sách bảo hành</a></li>
                        </ul>
                      </div>
                      <div class="mobile-menu__section mobile-menu__section--loose">
                        <p class="mobile-menu__section-title heading h5">Bạn cần hỗ trợ</p>
                        <div class="mobile-menu__help-wrapper"><svg focusable="false" class="icon icon--bi-phone" viewBox="0 0 24 24" role="presentation">
                            <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                              <path d="M17 15l-3 3-8-8 3-3-5-5-3 3c0 9.941 8.059 18 18 18l3-3-5-5z" stroke="#d41f26">
                              </path>
                              <path d="M14 1c4.971 0 9 4.029 9 9m-9-5c2.761 0 5 2.239 5 5" stroke="#d41f26"></path>
                            </g>
                          </svg><span>Gọi ngay <?= $setiing['phone_admin'] ?></span>
                        </div>
                        <div class="mobile-menu__help-wrapper"><svg focusable="false" class="icon icon--bi-email" viewBox="0 0 22 22" role="presentation">
                            <g fill="none" fill-rule="evenodd">
                              <path stroke="#d41f26" d="M.916667 10.08333367l3.66666667-2.65833334v4.65849997zm20.1666667 0L17.416667 7.42500033v4.65849997z">
                              </path>
                              <path stroke="#d41f26" stroke-width="2" d="M4.58333367 7.42500033L.916667 10.08333367V21.0833337h20.1666667V10.08333367L17.416667 7.42500033">
                              </path>
                              <path stroke="#d41f26" stroke-width="2" d="M4.58333367 12.1000003V.916667H17.416667v11.1833333m-16.5-2.01666663L21.0833337 21.0833337m0-11.00000003L11.0000003 15.5833337">
                              </path>
                              <path d="M8.25000033 5.50000033h5.49999997M8.25000033 9.166667h5.49999997" stroke="#d41f26" stroke-width="2" stroke-linecap="square"></path>
                            </g>
                          </svg><a href="mailto:info@hoanghaimobile.jp">info@hoanghaimobile.jp</a>
                        </div>
                      </div>
                      <div class="mobile-menu__section mobile-menu__section--loose">
                        <p class="mobile-menu__section-title heading h5">Theo dõi chúng tôi</p>
                        <ul class="social-media__item-list social-media__item-list--stack list--unstyled" role="list">
                          <li class="social-media__item social-media__item--facebook">
                            <a href="https://www.facebook.com/hoanghaimobile2018" target="_blank" rel="noopener" aria-label="Theo dõi chúng tôi Facebook"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.1201 5.32003H17.0001V2.14003C16.0899 2.04538 15.1753 1.99865 14.2601 2.00003C11.5401 2.00003 9.68011 3.66003 9.68011 6.70003V9.32003H6.61011V12.88H9.68011V22H13.3601V12.88H16.4201L16.8801 9.32003H13.3601V7.05003C13.3601 6.00003 13.6401 5.32003 15.1201 5.32003Z" fill="#A6A6A6" />
                              </svg>Facebook</a>
                          </li>


                          <li class="social-media__item social-media__item--youtube">
                            <a href="https://www.youtube.com/channel/UCvuddOcizjWlUAchAxAVeKw" target="_blank" rel="noopener" aria-label="Theo dõi chúng tôi YouTube"><svg focusable="false" class="icon icon--youtube" role="presentation" viewBox="0 0 30 30">
                                <path d="M15 30c8.2842712 0 15-6.7157288 15-15 0-8.28427125-6.7157288-15-15-15C6.71572875 0 0 6.71572875 0 15c0 8.2842712 6.71572875 15 15 15zm7.6656364-18.7823145C23 12.443121 23 15 23 15s0 2.5567903-.3343636 3.7824032c-.184.6760565-.7260909 1.208492-1.4145455 1.3892823C20.0033636 20.5 15 20.5 15 20.5s-5.00336364 0-6.25109091-.3283145c-.68836364-.1807903-1.23054545-.7132258-1.41454545-1.3892823C7 17.5567903 7 15 7 15s0-2.556879.33436364-3.7823145c.184-.6761452.72618181-1.2085807 1.41454545-1.38928227C9.99663636 9.5 15 9.5 15 9.5s5.0033636 0 6.2510909.32840323c.6884546.18070157 1.2305455.71313707 1.4145455 1.38928227zm-9.302 6.103758l4.1818181-2.3213548-4.1818181-2.3215322v4.642887z" fill="currentColor" fill-rule="evenodd"></path>
                              </svg>YouTube</a>
                          </li>



                        </ul>
                      </div>
                    </div>
                    <div id="mobile-panel-2" class="mobile-menu__panel is-nested">
                      <div class="mobile-menu__section is-sticky">
                        <button class="mobile-menu__back-button" data-action="close-panel"><svg focusable="false" class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                            <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none" stroke-linecap="square"></path>
                          </svg> Quay lại</button>
                      </div>

                      <div class="mobile-menu__section">
                        <ul class="mobile-menu__nav" data-type="menu" role="list">
                          <li class="mobile-menu__nav-item">
                            <a href="/collections" class="mobile-menu__nav-link text--strong">Danh mục sản phẩm</a>
                          </li>
                          <li class="mobile-menu__nav-item"><a href="/collections/campain" class="mobile-menu__nav-link" data-type="menuitem">Khuyến mãi</a></li>
                          <li class="mobile-menu__nav-item"><a href="/collections/iphone" class="mobile-menu__nav-link" data-type="menuitem">Iphone</a></li>
                          <li class="mobile-menu__nav-item"><a href="/collections/ipad" class="mobile-menu__nav-link" data-type="menuitem">Ipad</a></li>
                          <li class="mobile-menu__nav-item"><a href="/collections/phu-kien" class="mobile-menu__nav-link" data-type="menuitem">Phụ kiện</a></li>
                        </ul>
                      </div>
                    </div>
                    <div id="mobile-panel-3" class="mobile-menu__panel is-nested">
                      <div class="mobile-menu__section is-sticky">
                        <button class="mobile-menu__back-button" data-action="close-panel"><svg focusable="false" class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                            <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none" stroke-linecap="square"></path>
                          </svg> Quay lại</button>
                      </div>

                      <div class="mobile-menu__section">
                        <ul class="mobile-menu__nav" data-type="menu" role="list">
                          <li class="mobile-menu__nav-item">
                            <a href="/pages/shopping-guide" class="mobile-menu__nav-link text--strong">Hướng dẫn mua
                              hàng</a>
                          </li>
                          <li class="mobile-menu__nav-item"><a href="/pages/shipping" class="mobile-menu__nav-link" data-type="menuitem">Chi phí vận chuyển</a></li>
                          <li class="mobile-menu__nav-item"><a href="/pages/faqs" class="mobile-menu__nav-link" data-type="menuitem">Câu hỏi thường gặp</a></li>
                          <li class="mobile-menu__nav-item"><a href="/pages/chinh-sach-for-dien-thoai" class="mobile-menu__nav-link" data-type="menuitem">Chính sách bảo hành điện thoại</a>
                          </li>
                          <li class="mobile-menu__nav-item"><a href="/pages/chinh-sach-bao-hanh-dong-ho" class="mobile-menu__nav-link" data-type="menuitem">Chính sách bảo hành đồng hồ</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
          <div class="header__search-bar-wrapper ">
            <form action="/search" method="get" role="search" class="search-bar">
              <div class="search-bar__top-wrapper">
                <div class="search-bar__top">
                  <input type="hidden" name="type" value="product">
                  <input type="hidden" name="options[prefix]" value="last">

                  <button class="search-bar__submit" aria-label="Tìm kiếm"><svg focusable="false" class="icon icon--search" viewBox="0 0 21 21" role="presentation">
                      <g stroke-width="2" stroke="black" fill="none" fill-rule="evenodd">
                        <path d="M19 19l-5-5" stroke-linecap="square"></path>
                        <circle cx="8.5" cy="8.5" r="7.5"></circle>
                      </g>
                    </svg><svg focusable="false" class="icon icon--search-loader" viewBox="0 0 64 64" role="presentation">
                      <path opacity=".4" d="M23.8589104 1.05290547C40.92335108-3.43614731 58.45816642 6.79494359 62.94709453 23.8589104c4.48905278 17.06444068-5.74156424 34.59913135-22.80600493 39.08818413S5.54195825 57.2055303 1.05290547 40.1410896C-3.43602265 23.0771228 6.7944697 5.54195825 23.8589104 1.05290547zM38.6146353 57.1445143c13.8647142-3.64731754 22.17719655-17.89443541 18.529879-31.75914961-3.64743965-13.86517841-17.8944354-22.17719655-31.7591496-18.529879S3.20804604 24.7494569 6.8554857 38.6146353c3.64731753 13.8647142 17.8944354 22.17719655 31.7591496 18.529879z">
                      </path>
                      <path d="M1.05290547 40.1410896l5.80258022-1.5264543c3.64731754 13.8647142 17.89443541 22.17719655 31.75914961 18.529879l1.5264543 5.80258023C23.07664892 67.43614731 5.54195825 57.2055303 1.05290547 40.1410896z">
                      </path>
                    </svg></button>

                  <div class="search-bar__input-wrapper">
                    <input class="search-bar__input" type="text" name="q" autocomplete="off" autocorrect="off" aria-label="Nhập từ khóa tìm kiếm..." placeholder="Nhập từ khóa tìm kiếm...">
                    <button type="button" class="search-bar__input-clear hidden-lap-and-up" data-action="clear-input"><svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                        <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                      </svg></button>
                  </div>
                </div>

                <button type="button" class="search-bar__close-button hidden-tablet-and-up" data-action="unfix-search">
                  <span class="search-bar__close-text">Đóng</span>
                </button>
              </div>

              <div class="search-bar__inner">
                <div class="search-bar__inner-animation">
                  <div class="search-bar__results" aria-hidden="true">
                    <div class="skeleton-container">
                      <div class="search-bar__result-item search-bar__result-item--skeleton">
                        <div class="search-bar__image-container">
                          <div class="aspect-ratio aspect-ratio--square">
                            <div class="skeleton-image"></div>
                          </div>
                        </div>

                        <div class="search-bar__item-info">
                          <div class="skeleton-paragraph">
                            <div class="skeleton-text"></div>
                            <div class="skeleton-text"></div>
                          </div>
                        </div>
                      </div>
                      <div class="search-bar__result-item search-bar__result-item--skeleton">
                        <div class="search-bar__image-container">
                          <div class="aspect-ratio aspect-ratio--square">
                            <div class="skeleton-image"></div>
                          </div>
                        </div>

                        <div class="search-bar__item-info">
                          <div class="skeleton-paragraph">
                            <div class="skeleton-text"></div>
                            <div class="skeleton-text"></div>
                          </div>
                        </div>
                      </div>
                      <div class="search-bar__result-item search-bar__result-item--skeleton">
                        <div class="search-bar__image-container">
                          <div class="aspect-ratio aspect-ratio--square">
                            <div class="skeleton-image"></div>
                          </div>
                        </div>

                        <div class="search-bar__item-info">
                          <div class="skeleton-paragraph">
                            <div class="skeleton-text"></div>
                            <div class="skeleton-text"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="search-bar__results-inner"></div>
                  </div>
                  <div class="search-bar__menu-wrapper" aria-hidden="true">
                    <p class="search-bar__menu-title heading">HỖ TRỢ KHÁCH HÀNG</p>
                    <ul class="search-bar__menu-linklist list--unstyled" role="list">
                      <li>
                        <a href="/pages/shipping" class="search-bar__menu-link">Vận chuyển</a>
                      </li>
                      <li>
                        <a href="/policies/refund-policy" class="search-bar__menu-link">Chính sách hoàn tiền</a>
                      </li>
                      <li>
                        <a href="/policies/privacy-policy" class="search-bar__menu-link">Chính sách bảo mật</a>
                      </li>
                      <li>
                        <a href="/pages/faqs" class="search-bar__menu-link">Câu hỏi thường gặp</a>
                      </li>
                      <li>
                        <a href="/pages/shopping-guide" class="search-bar__menu-link">Hướng dẫn mua hàng</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="header__action-item header__action-item-mobile--phone">
                <a class="header__action-item-link header__phone-toggle" href="tel:0359809826">
                  <div class="header__action-item-content">
                    <div class="header__phone-icon icon-state" aria-expanded="false"><svg focusable="false" class="icon icon--head-phone" width="24" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C5.54441 0 0.292725 5.25169 0.292725 11.7073V18.6341C0.292725 19.173 0.729459 19.6097 1.26833 19.6097H4.3903V17.6585H2.24394V11.7073C2.24394 6.3278 6.62052 1.95122 12 1.95122C17.3796 1.95122 21.7561 6.3278 21.7561 11.7073V17.6585H19.7074V19.6097H22.7317C23.2706 19.6097 23.7074 19.173 23.7074 18.6341V11.7073C23.7074 5.25169 18.4557 0 12 0Z" fill="white"></path>
                        <path d="M7.93497 13.5935H4.39028C3.85141 13.5935 3.41467 14.0302 3.41467 14.5691V22.9919C3.41467 23.5272 3.8462 23.9623 4.38152 23.9675L7.9262 24C7.92911 24 7.93206 24 7.93497 24C8.19189 24 8.43902 23.8982 8.62178 23.7174C8.80652 23.534 8.91058 23.2849 8.91058 23.0244V14.5691C8.91058 14.0302 8.47385 13.5935 7.93497 13.5935ZM6.95936 22.04L5.36584 22.0254V15.5447H6.95936V22.04Z" fill="white"></path>
                        <path d="M19.6423 13.5935H16.0651C15.5262 13.5935 15.0895 14.0302 15.0895 14.5691V22.9919C15.0895 23.5308 15.5262 23.9675 16.0651 23.9675H19.6423C20.1812 23.9675 20.6179 23.5308 20.6179 22.9919V14.5691C20.6179 14.0302 20.1812 13.5935 19.6423 13.5935ZM18.6667 22.0162H17.0407V15.5447H18.6667V22.0162Z" fill="white"></path>
                      </svg></div>

                    <span class="header__action-text">HOTLINE</span>
                  </div>
                </a>
              </div>
            </form>
            <div class="header__recommended-search">

            </div>
          </div>
        </div>
      </div>
    </header>
    <nav class="nav-bar">
      <div class="nav-bar__inner">
        <div class="container">
          <ul class="nav-bar__linklist list--unstyled" data-type="menu" role="list">
            <li class="nav-bar__item no-image">
              <a href="" class="nav-bar__link link" data-type="menuitem"><span>KHUYẾN MÃI</span>
              </a>

            </li>
            <?php $all = category_all() ?>
            <?php foreach ($all as $valuee) {
              if($valuee['role'] == 1){?>

              <li class="nav-bar__item">
              <a href="" class="nav-bar__link link" data-type="menuitem" aria-expanded="false" aria-controls="" aria-haspopup="true"><img class="multicolumn-card__image" src="<?= $valuee['img_cate'] ?>" alt="" height="16" width="16" loading="lazy"><span><?= $valuee['name_cate'] ?></span>
              </a>
            </li>
            <?php }} ?>
            
            <!-- <li class="nav-bar__item">
              <a href="/collections/laptop" class="nav-bar__link link" data-type="menuitem" aria-expanded="false" aria-controls="" aria-haspopup="true"><img class="multicolumn-card__image" srcset="//cdn.shopify.com/s/files/1/0653/8923/2347/files/laptop_2_1.png?v=1659173029 48w" src="//cdn.shopify.com/s/files/1/0653/8923/2347/files/laptop_2_1.png?v=1659173029&width=550" alt="" height="16" width="16" loading="lazy"><span>Macbook | Laptop</span>
              </a>
            </li>
          
            <li class="nav-bar__item">
              <a href="/collections/phu-kien" class="nav-bar__link link" data-type="menuitem" aria-expanded="false" aria-controls="" aria-haspopup="true"><img class="multicolumn-card__image" srcset="//cdn.shopify.com/s/files/1/0653/8923/2347/files/3605429-200.png?v=1667293909 200w" src="//cdn.shopify.com/s/files/1/0653/8923/2347/files/3605429-200.png?v=1667293909&width=550" alt="" height="16" width="16" loading="lazy"><span>Phụ kiện</span>
              </a>
            </li>
            <li class="nav-bar__item">
              <a href="/collections/simdata" class="nav-bar__link link" data-type="menuitem" aria-expanded="false" aria-controls="" aria-haspopup="true"><img class="multicolumn-card__image" srcset="//cdn.shopify.com/s/files/1/0653/8923/2347/files/sim_icon_25416aab-50c4-45ef-aef1-52f5e75953ae.png?v=1662366593 49w" src="//cdn.shopify.com/s/files/1/0653/8923/2347/files/sim_icon_25416aab-50c4-45ef-aef1-52f5e75953ae.png?v=1662366593&width=550" alt="" height="16" width="16" loading="lazy"><span>Sim - Wifi</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    </section>

    <style>
      .mega-menu__inner .mega-menu__linklist {
        text-align: left;
      }

      @media screen and (max-width: 640px) {
        .nav-bar__linklist .nav-bar__item.nav-bar__item--static {
          position: static;
        }

        .nav-bar__linklist .nav-bar__item.nav-bar__item--static .mega-menu__inner {
          justify-content: space-between;
          flex-wrap: wrap;
          padding: 25px 12px;
          gap: 15px;
        }

        .mega-menu__column .mega-menu__linklist {
          text-align: left;
        }

        .mega-menu__inner .mega-menu__column {
          margin: 0;
          width: calc(50% - 10px);
        }

        .mega-menu__inner .mega-menu__promo {
          margin: 0;
          flex: 0 1 100%;
          width: 100%;
        }

        .mega-menu__inner .mega-menu__link {
          white-space: pre-wrap;
        }
      }

      :root {
        --header-is-sticky: 1;
        --header-inline-navigation: 1;
      }

      #shopify-section-header {
        position: relative;
        z-index: 5;
        position: -webkit-sticky;
        position: sticky;
        top: 0;
      }

      .header__logo-image {
        max-width: 85px !important;
      }

      @media screen and (min-width: 641px) {
        .header__logo-image {
          max-width: 95px !important;
        }
      }

      @media screen and (min-width: 1000px) {
        .search-bar.is-expanded .search-bar__top {
          box-shadow: 0 -1px var(--border-color) inset;
        }
      }
    </style>

    <script>
      document.documentElement.style.setProperty('--header-height', document.getElementById('shopify-section-header')
        .clientHeight + 'px');
    </script>

  </div>

  <div id="shopify-section-bottom-bar" class="shopify-section shopify-section__bottom-bar">
    <section data-section-id="bottom-bar" data-section-type="botom-bar"></section>

  </div>

  <div id="shopify-section-recommended-search" class="shopify-section">
    <section data-section-id="recommended-search" data-section-type="recommended-search">
      <div class="recommended-search">
        <div class="container">
          <span class="recommended-search__content">
            Từ khóa phổ biến :
          </span><a class="recommended-search__text--item" href="">
            <span>
              iphone 13 
            </span>
          </a><a class="recommended-search__text--item" href="">
            <span>
              apple watch 
            </span>
          </a>
          <a class="recommended-search__text--item" href="">
            <span>
              macbook pro 
            </span>
          </a>
          </a>
        </div>
      </div>
    </section>
  </div>