<?php include_once "header.php" ?>
<main id="main" role="main">
    <div id="shopify-section-template--16613776851163__main" class="shopify-section">

        <section data-section-id="template--16613776851163__main" data-section-type="product" data-section-settings='{
  "showShippingEstimator": false,
  "showQuantitySelector": true,
  "showPaymentButton": false,
  "showInventoryQuantity": false,
  "lowInventoryThreshold": 0,
  "galleryTransitionEffect": "fade",
  "enableImageZoom": true,
  "zoomEffect": "outside",
  "enableVideoLooping": false,
  "productOptions": [&quot;Title&quot;],
  "enableHistoryState": true,
  "infoOverflowScroll": true,
  "isQuickView": false
}'>
            <div class="page-layout">
                <div class="page__sub-header">
                    <nav aria-label="Breadcrumb" class="breadcrumb">
                        <ol class="breadcrumb__list" role="list">
                            <li class="breadcrumb__item">
                                <a class="breadcrumb__link link" href="/">Home</a><svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                                    <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                                </svg>
                            </li>

                            <li class="breadcrumb__item"><a class="breadcrumb__link link" href="/collections/goi-y-mua-sam">Gợi ý mua sắm</a><svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                                    <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                                </svg></li>

                            <li class="breadcrumb__item">
                                <span class="breadcrumb__link" aria-current="page"><?= $pro_one['name_pro'] ?></span>
                            </li>
                        </ol>
                    </nav>
                    <div class="page__navigation"><span class="page__navigation-item page__navigation-item--next">
                            <a href="/collections/goi-y-mua-sam/products/airpods-pro" class="link" rel="next">Sau<svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                                    <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                                </svg></a>
                        </span></div>
                </div>

                <div class="product-block-list product-block-list--small">
                    <div class="product-block-list__wrapper">
                        <div class="product-block-list__item product-block-list__item--gallery">
                            <div class="card">
                                <div class="card__section card__section--tight">
                                    <div class="product-gallery product-gallery--with-thumbnails">
                                        <div class="product-gallery__carousel-wrapper">
                                            <div class="product-gallery__carousel product-gallery__carousel--zoomable" data-media-count="5" data-initial-media-id="30851912728795">
                                                <div class="product-gallery__carousel-item is-selected " tabindex="-1" data-media-id="30851912728795" data-media-type="image">
                                                    <div class="product-gallery__size-limiter" style="max-width: 1000px">
                                                        <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                                            <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_ea2fd147-6c06-4cf9-9ca3-56c772d36ae3_{width}x.png?v=1663143767" data-widths="[400,500,600,700,800,900,1000]" data-sizes="auto" data-zoom="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_ea2fd147-6c06-4cf9-9ca3-56c772d36ae3_1600x.png?v=1663143767" alt="AirPods 2">

                                                            <noscript>
                                                                <img src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_ea2fd147-6c06-4cf9-9ca3-56c772d36ae3_800x.png?v=1663143767" alt="AirPods 2">
                                                            </noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script src="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/product-gallery.js?v=111603181540343972631666866960" type="text/javascript"></script>
                        </div>
                        <div class="product-block-list__item product-block-list__item--info">
                            <div class="card card--collapsed card--sticky">
                                <div id="product-zoom-template--16613776851163__main" class="product__zoom-wrapper"></div>
                                <div class="card__section">

                                    <div class="product-meta">
                                        <h1 class="product-meta__title page-title-h4"><?= $pro_one['name_pro'] ?></h1>
                                        <div class="product-reviewd">
                                            <div class='jdgm-widget jdgm-preview-badge' data-id='7831299162331' data-template='manual-installation' data-auto-install='false'>
                                                <div style='display:none' class='jdgm-prev-badge' data-average-rating='4.32' data-number-of-reviews='19' data-number-of-questions='0'> <span class='jdgm-prev-badge__stars' data-score='4.32' tabindex='0' aria-label='4.32 stars' role='button'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--half'></span> </span> <span class='jdgm-prev-badge__text'> 19 reviews </span> </div>
                                            </div>
                                        </div>

                                        <div class="product-price-wrapper price-list"><span class="price price--highlight">
                                                <span class="visually-hidden">Giá Sale</span><?=number_format($pro_one['price']) ?> đ</span>

                                            <span class="price price--compare">
                                                <span class="visually-hidden">Regular price</span><?= number_format($pro_one['price']*$pro_one['sale_pro']/10)  ?> đ</span>
                                        </div>
                                    </div>

                                    <hr class="card__separator">
                                    <form method="post" action="/cart/add" id="product_form_7831299162331" accept-charset="UTF-8" class="product-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" data-sku="" value="43373631930587">
                                        <div class="product-form__info-list" style="display: none;">
                                            <div class="product-form__info-item">
                                                <span class="product-form__info-title text--strong">Giá:</span>

                                                <div class="product-form__info-content" role="region" aria-live="polite">
                                                    <div class="price-list"><span class="price price--highlight">
                                                            <span class="visually-hidden">Sale price</span><?=number_format($pro_one['price']) ?> đ</span>

                                                        <span class="price price--compare">
                                                            <span class="visually-hidden">Regular price</span><?= number_format($pro_one['price']*$pro_one['sale_pro']/10)  ?> đ</span>
                                                    </div>

                                                    <div class="product-form__price-info" style="display: none">
                                                        <div class="unit-price-measurement">
                                                            <span class="unit-price-measurement__price"></span>
                                                            <span class="unit-price-measurement__separator">/ </span>

                                                            <span class="unit-price-measurement__reference-value"></span>

                                                            <span class="unit-price-measurement__reference-unit"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__info-item product-form__info-item--quantity">
                                                <label for="template--16613776851163__main-7831299162331-quantity" class="product-form__info-title text--strong">Số lượng:</label>

                                                <div class="product-form__info-content">
                                                    <div class="quantity-selector quantity-selector--product">
                                                        <button type="button" class="quantity-selector__button" data-action="decrease-picker-quantity" aria-label="Decrease quantity by 1" title="Decrease quantity by 1"><svg focusable="false" class="icon icon--minus" viewBox="0 0 10 2" role="presentation">
                                                                <path d="M10 0v2H0V0z" fill="currentColor"></path>
                                                            </svg></button>
                                                        <input name="quantity" aria-label="Số lượng" class="quantity-selector__value" inputmode="numeric" value="1" size="3">
                                                        <button type="button" class="quantity-selector__button" data-action="increase-picker-quantity" aria-label="Increase quantity by 1" title="Increase quantity by 1"><svg focusable="false" class="icon icon--plus" viewBox="0 0 10 10" role="presentation">
                                                                <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z" fill="currentColor" fill-rule="evenodd"></path>
                                                            </svg></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-form__payment-container">
                                            <button type="submit" class="product-form__add-button button button--primary" data-action="add-to-cart">
                                                <div class="buy__now__text" data-price="1780000">MUA NGAY</div>
                                                <div class="buy__now__price"><?= number_format($pro_one['price'])?> đ</div>
                                            </button>
                                            <button class="button email-button hidden">
                                                <span>Đặt hàng</span>
                                            </button>

                                            <button data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_7831299162331 product__wishlist inloader" data-swaction="addToWishlist" data-product-id="7831299162331" data-variant-id="43373631930587" data-product-url="https://hoanghaimobile.jp/products/airpods-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.8768 3.10186C20.4889 1.71394 18.632 0.949646 16.6475 0.949646C14.939 0.949646 13.3252 1.51627 12.0236 2.55943C10.7033 1.51627 9.08747 0.949646 7.39566 0.949646C5.40197 0.949646 3.54009 1.71427 2.15222 3.10186C0.764297 4.48951 0 6.34679 0 8.33096C0 10.3154 0.764297 12.1724 2.15222 13.56L11.3896 22.7974C11.558 22.9661 11.779 23.0504 12 23.0504C12.2205 23.0504 12.4409 22.9663 12.6095 22.7986L21.8544 13.5819C23.2383 12.1669 24 10.3073 24 8.34535C24 6.36521 23.2484 4.50563 21.8768 3.10186ZM20.6276 12.3666L12.0008 20.9669L3.37294 12.3393C2.31136 11.2774 1.72659 9.85383 1.72659 8.33096C1.72659 6.80808 2.31136 5.38449 3.37294 4.32263C4.4348 3.26105 5.86331 2.67629 7.39566 2.67629C8.90358 2.67629 10.335 3.26363 11.4253 4.32952C11.7631 4.66018 12.305 4.65727 12.6391 4.32263C13.701 3.26105 15.1243 2.67629 16.6475 2.67629C18.1706 2.67629 19.5939 3.26105 20.6486 4.31569C21.6964 5.38763 22.2734 6.81872 22.2734 8.34535C22.2734 9.85355 21.6863 11.2846 20.6276 12.3666Z" fill="#D41F26" />
                                                </svg>
                                                YÊU THÍCH</button>
                                        </div>


                                        <style data-shopify>
                                            .payment__partners {
                                                width: 100%;
                                                margin-top: 16px;
                                                margin-bottom: 16px;
                                            }

                                            .payment__partners img {
                                                width: 100%;
                                                height: 100%;
                                                object-fit: cover;
                                                border-radius: 16px;
                                            }
                                        </style>

                                        <div class="payment__partners">
                                            <img class="lazyload hidden-phone" src="//cdn.shopify.com/s/files/1/0653/8923/2347/files/banner_thanh_toan_bf18d939-7368-4c60-9725-96ce1c4e1f7e_1x.png?v=1662283254" data-src="//cdn.shopify.com/s/files/1/0653/8923/2347/files/banner_thanh_toan_bf18d939-7368-4c60-9725-96ce1c4e1f7e.png?v=1662283254" alt="">
                                            <img class="lazyload hidden-tablet hidden-desktop" src="//cdn.shopify.com/s/files/1/0653/8923/2347/files/banner_thanh_toan_1x.png?v=1661660822" data-src="//cdn.shopify.com/s/files/1/0653/8923/2347/files/banner_thanh_toan.png?v=1661660822" alt="">
                                        </div>
                                    </form>




                                    <div class="buy-with__container hidden-tablet hidden-phone">
                                        <h5 class="page-title-h5 buy-width__title">Thường được mua cùng :</h5>
                                        <div class="buy-with__products">
                                            <div class="product-grid">

                                                <div class="product-grid__layout">



                                                    <div class="product-item product-item__small">
                                                        <div class="product-item__image">
                                                            <a href="/products/kinh-c%C6%B0%E1%BB%9Dng-l%E1%BB%B1c-voi-iphone-wk-elephant">
                                                                <img class="lazyload" src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_382f3f34-4507-47f1-b671-297cb0068ac0_1x.png?v=1663144388" data-src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_382f3f34-4507-47f1-b671-297cb0068ac0.png?v=1663144388" alt="Kính cường lực Voi - iPhone WK">
                                                            </a>
                                                        </div>


                                                        <div class="product-item__onsale">
                                                            17%
                                                        </div>

                                                        <div class="product-item__header"><a href="/products/kinh-c%C6%B0%E1%BB%9Dng-l%E1%BB%B1c-voi-iphone-wk-elephant">Kính cường lực Voi - iPhone WK</a></div>
                                                        <div class="product-item__price">



                                                            <span class="price price--highlight">
                                                                <span class="visually-hidden">Sale price</span>¥1,500</span>

                                                            <span class="price price--compare">
                                                                <span class="visually-hidden">Regular price</span>¥1,800</span>


                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="buy-with-slide">
                                                    <button type="button" class="slide-left">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.86175 7.56094L11.2622 0.180933C11.5047 -0.0607219 11.8973 -0.0603156 12.1393 0.182183C12.3812 0.424651 12.3806 0.817431 12.1381 1.05927L5.17809 8.00003L12.1383 14.9407C12.3808 15.1826 12.3814 15.5752 12.1396 15.8177C12.0182 15.9392 11.8593 16 11.7003 16C11.5417 16 11.3834 15.9396 11.2623 15.8189L3.86175 8.43909C3.74497 8.3229 3.67944 8.16478 3.67944 8.00003C3.67944 7.83528 3.74516 7.67734 3.86175 7.56094Z" fill="black" />
                                                        </svg>

                                                    </button>
                                                    <button type="button" class="slide-right">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.1382 7.56094L4.73778 0.180933C4.49531 -0.0607219 4.10275 -0.0603156 3.86069 0.182183C3.61881 0.424651 3.61944 0.817431 3.86194 1.05927L10.8219 8.00003L3.86169 14.9407C3.61922 15.1826 3.61859 15.5752 3.86044 15.8177C3.98178 15.9392 4.14075 16 4.29972 16C4.45828 16 4.61662 15.9396 4.73774 15.8189L12.1382 8.43909C12.255 8.3229 12.3206 8.16478 12.3206 8.00003C12.3206 7.83528 12.2548 7.67734 12.1382 7.56094Z" fill="black" />
                                                        </svg>

                                                    </button>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                    
                            </div>

                        </div>

                        <div class="product-block-list__item product-block-list__item--descAppend">
                            <div class="product__description">

                            </div>

                            <div class="buy-with__container hidden-desktop">
                                <h5 class="page-title-h5 buy-width__title">Thường được mua cùng :</h5>
                                <div class="buy-with__products">
                                    <div class="product-grid">

                                        <div class="product-grid__layout">


                                            <div class="product-item product-item__small">
                                                <div class="product-item__image">
                                                    <a href="/products/kinh-c%C6%B0%E1%BB%9Dng-l%E1%BB%B1c-voi-iphone-wk-elephant">
                                                        <img class="lazyload" src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_382f3f34-4507-47f1-b671-297cb0068ac0_1x.png?v=1663144388" data-src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_382f3f34-4507-47f1-b671-297cb0068ac0.png?v=1663144388" alt="Kính cường lực Voi - iPhone WK">
                                                    </a>
                                                </div>


                                                <div class="product-item__onsale">
                                                    17%
                                                </div>

                                                <div class="product-item__header"><a href="/products/kinh-c%C6%B0%E1%BB%9Dng-l%E1%BB%B1c-voi-iphone-wk-elephant">Kính cường lực Voi - iPhone WK</a></div>
                                                <div class="product-item__price">



                                                    <span class="price price--highlight">
                                                        <span class="visually-hidden">Sale price</span>¥1,500</span>

                                                    <span class="price price--compare">
                                                        <span class="visually-hidden">Regular price</span>¥1,800</span>


                                                </div>
                                            </div>



                                            <div class="product-item product-item__small">
                                                <div class="product-item__image">
                                                    <a href="/products/s%E1%BA%A1c-apple-iphone-type-c-18w-chinh-hang">
                                                        <img class="lazyload" src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_282e30fd-2356-4c14-b089-a14b175c2115_1x.png?v=1662676374" data-src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_282e30fd-2356-4c14-b089-a14b175c2115.png?v=1662676374" alt="Sạc nhanh 18W">
                                                    </a>
                                                </div>


                                                <div class="product-item__onsale">
                                                    9%
                                                </div>

                                                <div class="product-item__header"><a href="/products/s%E1%BA%A1c-apple-iphone-type-c-18w-chinh-hang">Sạc nhanh 18W</a></div>
                                                <div class="product-item__price">



                                                    <span class="price price--highlight">
                                                        <span class="visually-hidden">Sale price</span>¥2,000</span>

                                                    <span class="price price--compare">
                                                        <span class="visually-hidden">Regular price</span>¥2,200</span>


                                                </div>
                                            </div>


                                        </div>

                                        <div class="buy-with-slide">
                                            <button type="button" class="slide-left">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.86175 7.56094L11.2622 0.180933C11.5047 -0.0607219 11.8973 -0.0603156 12.1393 0.182183C12.3812 0.424651 12.3806 0.817431 12.1381 1.05927L5.17809 8.00003L12.1383 14.9407C12.3808 15.1826 12.3814 15.5752 12.1396 15.8177C12.0182 15.9392 11.8593 16 11.7003 16C11.5417 16 11.3834 15.9396 11.2623 15.8189L3.86175 8.43909C3.74497 8.3229 3.67944 8.16478 3.67944 8.00003C3.67944 7.83528 3.74516 7.67734 3.86175 7.56094Z" fill="black" />
                                                </svg>

                                            </button>
                                            <button type="button" class="slide-right">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.1382 7.56094L4.73778 0.180933C4.49531 -0.0607219 4.10275 -0.0603156 3.86069 0.182183C3.61881 0.424651 3.61944 0.817431 3.86194 1.05927L10.8219 8.00003L3.86169 14.9407C3.61922 15.1826 3.61859 15.5752 3.86044 15.8177C3.98178 15.9392 4.14075 16 4.29972 16C4.45828 16 4.61662 15.9396 4.73774 15.8189L12.1382 8.43909C12.255 8.3229 12.3206 8.16478 12.3206 8.00003C12.3206 7.83528 12.2548 7.67734 12.1382 7.56094Z" fill="black" />
                                                </svg>

                                            </button>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="store-locator">
                                <div class="store-locator__title">
                                    <h5 class="page-title-h5">Danh sách cửa hàng :</h5>
                                    <a href="tel:0359809826" class="store-locator__contact hidden-phone">
                                        LIÊN HỆ 03-5980-9826
                                    </a>
                                </div>
                                <div class="store-locator__list">
                                    <div id="inventory-info-app" class="iia-container"></div>


                                </div>
                                <a href="tel:0359809826" class="store-locator__contact hidden-tablet hidden-desktop">
                                    LIÊN HỆ 03-5980-9826
                                </a>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="product-tab bast" data-page-type="product">
                    <!-- Product tab links -->
                    <div class="product-tab__links">
                        <button type="button" class="product-tab__link" data-txt-type="tab__description" onclick="begin(event, 'tab__description')" id="defaultOpen">
                            Mô tả chi tiết
                        </button>
                        <button type="button" class="product-tab__link" data-txt-type="tab__technical" onclick="begin(event, 'tab__technical')">
                            Thông số
                        </button>

                        <button type="button" class="product-tab__link" data-txt-type="tab__policy" onclick="begin(event, 'tab__policy')">
                            Chính sách
                        </button>

                    </div>
                    <!-- Product tab links -->
                    <!-- Product tab contents -->
                    <div class="product-tab__contents">
                        <div class="product-tab__content product-tab__description product-tab__product" aria-expanded="false" id="tab__description">

                            <div class="product-reviewd-expand">
                                <div class="product-tab__inner">
                                    <div class="ksp-content p-2 mb-2" data-mce-fragment="1">
                                        <div data-mce-fragment="1">
                                            <ul data-mce-fragment="1">
                                                <li data-mce-fragment="1">Chip H1 mới nhất cho thời gian phản hồi nhanh cùng thời lượng pin lên đến 5 giờ</li>
                                                <li data-mce-fragment="1">Tích hợp 2 Micro giúp khử tiếng ồn của môi trường cho chất lượng âm thanh rõ ràng khi đàm thoại</li>
                                                <li data-mce-fragment="1">Kích hoạt trợ lý ảo Siri bằng cách gọi "Hey Siri"</li>
                                                <li data-mce-fragment="1">Nhận hoặc dừng cuộc gọi bằng 1 cú chạm với tính năng điều khiển cảm ứng</li>
                                                <li data-mce-fragment="1">Hỗ trợ sạc nhanh:15 phút sạc pin cho thời gian sử dụng lên đến 3 giờ</li>
                                            </ul>
                                            <ul data-mce-fragment="1">
                                                <li data-mce-fragment="1"><img data-src="https://cdn.cellphones.com.vn/media/wysiwyg/Audio_rating/aipods.png" src="https://cdn.cellphones.com.vn/media/wysiwyg/Audio_rating/aipods.png" data-mce-src="https://cdn.cellphones.com.vn/media/wysiwyg/Audio_rating/aipods.png" lazy="loaded" data-mce-fragment="1"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div data-mce-fragment="1">
                                        <h2 data-mce-fragment="1">Tai nghe Apple AirPods 2 – Thiết kế tối giản, chất lượng âm thanh tuyệt vời</h2>
                                        <p data-mce-fragment="1"><em data-mce-fragment="1">Vừa qua, Apple đã chính thức cho ra mắt chiếc tai nghe<span data-mce-fragment="1"> </span><strong data-mce-fragment="1">Airpods 2</strong>. Thế hệ thứ 2 lần này không có nhiều sự khác biệt so với thế hệ đầu về ngoại hình, trừ một số chi tiết về đèn báo hiệu cũng như ra mắt thêm phiên bản sạc không dây và sạc thường (sạc có dây). Ngoài ra, bạn có thể tham khảo thêm<span data-mce-fragment="1"> Apple Airpods Pro</span>, sắp được ra mắt trong thời gian tới.</em></p>
                                    </div>
                                    <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"></div>
                                </div>
                            </div>
                            <div class="preview-content-more" data-action-expand>Xem thêm</div>
                        </div>
                        <div class="product-tab__content product-tab__technical  product-tab__product" aria-expanded="false" id="tab__technical">

                            <div class="flex space-between align-center product-tab__inner-title hidden-desktop">
                                <span class="page-title-h5 page-title-m">
                                    Thông số
                                </span>
                                <span>
                                    <span class="close"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_614_15006)">
                                                <path d="M8.43906 3.86151L15.8191 11.262C16.0607 11.5044 16.0603 11.897 15.8178 12.1391C15.5753 12.3809 15.1826 12.3803 14.9407 12.1378L7.99997 5.17785L1.05925 12.1381C0.817376 12.3805 0.424847 12.3812 0.182347 12.1393C0.0607853 12.018 3.79453e-06 11.859 3.78758e-06 11.7C3.78065e-06 11.5415 0.060379 11.3831 0.181097 11.262L7.56091 3.86151C7.6771 3.74473 7.83522 3.6792 7.99997 3.6792C8.16472 3.6792 8.32266 3.74492 8.43906 3.86151Z" fill="#121212" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_614_15006">
                                                    <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 16 16)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="open"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_614_16167)">
                                                <path d="M8.43906 12.1385L15.8191 4.73802C16.0607 4.49555 16.0603 4.10299 15.8178 3.86093C15.5753 3.61906 15.1826 3.61968 14.9407 3.86218L7.99997 10.8222L1.05925 3.86193C0.817376 3.61946 0.424847 3.61884 0.182347 3.86068C0.0607853 3.98202 3.79453e-06 4.14099 3.78758e-06 4.29996C3.78065e-06 4.45852 0.060379 4.61686 0.181097 4.73799L7.56091 12.1385C7.6771 12.2553 7.83522 12.3208 7.99997 12.3208C8.16472 12.3208 8.32266 12.2551 8.43906 12.1385Z" fill="#121212" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_614_16167">
                                                    <rect width="16" height="16" fill="white" transform="translate(16) rotate(90)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </span>
                            </div>


                            <div class="product-reviewd-expand">
                                <div class="product-tab__inner"></div>
                            </div>
                            <div class="preview-content-more" data-action-expand>Xem thêm</div>
                        </div>
                        <div class="product-tab__content product-tab__policy  product-tab__product" aria-expanded="false" id="tab__policy">
                            <div class="flex space-between align-center product-tab__inner-title hidden-desktop">
                                <span class="page-title-h5 page-title-m">
                                    Chính sách
                                </span>
                                <span>
                                    <span class="close"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_614_15006)">
                                                <path d="M8.43906 3.86151L15.8191 11.262C16.0607 11.5044 16.0603 11.897 15.8178 12.1391C15.5753 12.3809 15.1826 12.3803 14.9407 12.1378L7.99997 5.17785L1.05925 12.1381C0.817376 12.3805 0.424847 12.3812 0.182347 12.1393C0.0607853 12.018 3.79453e-06 11.859 3.78758e-06 11.7C3.78065e-06 11.5415 0.060379 11.3831 0.181097 11.262L7.56091 3.86151C7.6771 3.74473 7.83522 3.6792 7.99997 3.6792C8.16472 3.6792 8.32266 3.74492 8.43906 3.86151Z" fill="#121212" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_614_15006">
                                                    <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 16 16)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="open"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_614_16167)">
                                                <path d="M8.43906 12.1385L15.8191 4.73802C16.0607 4.49555 16.0603 4.10299 15.8178 3.86093C15.5753 3.61906 15.1826 3.61968 14.9407 3.86218L7.99997 10.8222L1.05925 3.86193C0.817376 3.61946 0.424847 3.61884 0.182347 3.86068C0.0607853 3.98202 3.79453e-06 4.14099 3.78758e-06 4.29996C3.78065e-06 4.45852 0.060379 4.61686 0.181097 4.73799L7.56091 12.1385C7.6771 12.2553 7.83522 12.3208 7.99997 12.3208C8.16472 12.3208 8.32266 12.2551 8.43906 12.1385Z" fill="#121212" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_614_16167">
                                                    <rect width="16" height="16" fill="white" transform="translate(16) rotate(90)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </span>
                            </div>
                            <div class="product-reviewd-expand">
                                <div class="product-tab__inner">


                                    <p><em>Hoàng Hải Mobile rất lấy làm tiếc và thành thật xin lỗi quý khách hàng trong trường hợp sản phẩm của quý khách bị lỗi và phải mang đi bảo hành.<br><br></em></p>
                                    <h3><strong>1. Chính sách bảo hành<br><br></strong></h3>
                                    <p>Bảo hành 13 tháng đối với iPhone , iPad , Airpods , Apple Watch <br>Bảo hành 6 tháng đối với Macbook<br><br></p>
                                    <h3>
                                        <strong>2. Chế độ bảo hành tại công ty theo đúng quy định về chính sách bảo hành của Apple Store tại Nhật Bản</strong>.<br><br>
                                    </h3>
                                    <ul>
                                        <li>Lỗi xác định do nhà sản xuất được bảo hành</li>
                                        <li>Lỗi xác định do người dùng không được bảo hành </li>
                                    </ul>
                                    <p>Thời gian chờ đợi bảo hành xong phụ thuộc vào Apple Store <br>Nếu quý khách mua máy cũ , khi nhận hàng phải kiểm tra hình thức sản phẩm ngay , nếu không đúng máy quý khách đặt phải ngay lập tức báo lại công ty để xác nhận , không nhận khiếu lại vào ngày hôm sau.<br><br></p>
                                    <h3><strong></strong></h3>
                                    <h3><strong>3. Chi tiết cụ thể các mục như sau : <br><br></strong></h3>
                                    <p>A. Điều kiện bảo hành miễn phí tại Hoàng Hải Mobile<br><br>* Sản phẩm còn trong thời hạn bảo hành. Số IMEI máy phải đúng được mua từ công ty Hoàng Hải Mobile <br>* Sản phẩm phải còn nguyên vẹn, chưa bị sửa chữa bởi các nơi khác ngoài Apple Store <br>* Sản phẩm có lỗi phần cứng thuộc phạm vi bảo hành của Apple Store sẽ được hưởng chế độ 1 đổi 1 trong suốt thời gian bảo hành không thu thêm bất kì một loại chi phí nào khác <br>* Các trường hợp không được bảo hành 1 đổi 1 nguyên chiếc cho các lỗi sau : Nút Home (nút cảm biến vân tay) , Volume Button (Phím điều chỉnh âm lượng) , iSight camera (camera trước sau), Receiver (loa trong, loa tai nghe) , Vibe Motor (Bộ Rung) , Speaker (Loa Ngoài) , Battery (Pin) vv.vv . Sản phẩm lỗi thuộc các phạm vi trên vẫn được hỗ trợ bảo hành với hình thức là thay thế linh kiện mới chính hãng từ Apple <br><br>* Thời gian gửi lên Apple Store để bảo hành xong , nếu nhanh là 2-4 ngày , nếu lỗi khó xác định , khó xử lý thường là từ 1 - 2 tuần <br>* Ngoại trừ một số trường hợp máy rơi vỡ hoặc vào nước , Apple không bảo hành nhưng cần đổi máy mới thì Apple Store vẫn có chính sách hỗ trợ giá<br>* Nếu lỗi do người dùng mà quý khách không trung thực trong vấn đề thông báo với công ty để Apple ckeck ra được . Trường hợp này quý khách vui lòng thanh toán cước vận chuyển + chi phí tàu xe lên apple store + lương nhân viên baito cho bên công ty Hoàng Hải <br><br>B. Điều kiện không được bảo hành miễn phí tại Hoàng Hải Mobile <br><br>* Máy không còn nguyên vẹn được xác định là đã cạy mở hoặc có sự can thiệp sửa chữa của bên thứ 3 . Nếu tự ý sửa chữa coi như kết thúc bảo hành tại Hoàng Hải Mobile <br>* Máy có dấu hiệu rớt xuống đất, va đập với vật cứng làm cho sản phẩm bị biến dạng: móp, cong, vênh, lồi, trầy, xước, gãy, đứt, nứt, mẻ, bể<br>* Máy bị chất lỏng xâm nhập như nước hay hóa chất làm cho sản phẩm bị ẩm, mốc, gỉ, sét, làm giấy quì tím bên trong máy bị đổi màu<br>* Không bảo hành khi màn hình sọc màn và loang mực. Nếu khách hàng cần sẽ hỗ trợ thay thế ở giá linh kiện <br>* Không bảo hành điểm chết xuất hiện do lão hóa linh kiện trong quá trình sử dụng <br>* Không bảo hành khi iPhone , iPad bị khoá bởi tài khoản Apple icloud của khách hàng<br>* Không bảo hành Touch ID , Face ID khi có dấu hiệu bị vô nước trong quá trình sử dụng.<br><br></p>
                                    <h3><strong>4. Chú ý khi sử dụng : <br><br></strong></h3>
                                    <p>Đối với các dòng máy iPhone có sử dụng Face ID như từ dòng iPhone X trở lên, Face ID hoạt động thông qua bộ camera trước, trong quá trình sử dụng nếu làm rớt , va đập mạnh hoặc nhiễm chất lỏng sẽ rất dễ hỏng Face ID nên cần hết sức cẩn thận.<br><br></p>
                                    <h3><strong>5. Quy định khác<br><br></strong></h3>
                                    1. Đối với những sản phẩm như máy tính, điện thoại, ổ cứng lưu trữ . Chúng tôi hoàn toàn không chịu trách nhiệm về việc mất dữ liệu cá nhân của quý khách như : tài liệu, danh bạ, tin nhắn … sau khi bảo hành xong <br>2. Nếu quý khách có nhu cầu sao lưu dữ liệu hãy copy lại trước khi gửi máy lên công ty Hoàng Hải
                                </div>
                            </div>
                            <div class="preview-content-more" data-action-expand>Xem thêm</div>
                        </div>
                    </div>
                    <!-- Product tab contents -->
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const titles = document.querySelectorAll('.product-tab__inner-title');
                        titles.forEach((current) => {
                            current.addEventListener('click', function() {
                                current.classList.toggle('active');
                            });
                        });
                    });
                    document.getElementById('defaultOpen').click();

                    function begin(evt, name) {
                        let i, tabcontent, tablinks;

                        tabcontent = document.querySelectorAll('.product-tab__content');
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = 'none';
                        }

                        tablinks = document.querySelectorAll('.product-tab__link');
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].clasName = tablinks[i].classList.remove('active');
                        }

                        document.getElementById(name).style.display = 'block';
                        evt.currentTarget.classList.add('active');
                    };
                </script>

            </div>
            <div id="modal-refunds-policy" class="modal" aria-hidden="true">
                <div class="modal__dialog" role="dialog">
                    <header class="modal__header">
                        <h3 class="modal__title heading h2">Chính sách hoàn tiền</h3>
                        <button class="modal__close link" data-action="close-modal"><svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                                <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                            </svg></button>
                    </header>

                    <div class="modal__content">
                        <div class="rte">
                            <h3 data-mce-fragment="1"><strong data-mce-fragment="1">01.&nbsp;<span data-mce-fragment="1">Hoanghaimobile</span> có chế độ đổi trả hàng đối với các trường hợp sau đây:</strong></h3>
                            <p data-mce-fragment="1"><span data-mce-fragment="1">1. Hàng hoá bị hư hỏng trong quá trình vận chuyển.</span></p>
                            <p data-mce-fragment="1"><span data-mce-fragment="1">2. Hình ảnh, chất lượng sản phẩm không đúng với nội dung được ghi trên website.</span></p>
                            <p data-mce-fragment="1"><span data-mce-fragment="1">3. Các nguyên nhân khác được xác định do từ phía nhà cung cấp.</span></p>
                            <p data-mce-fragment="1"><span data-mce-fragment="1">Thời gian tiếp nhận đổi trả hàng được áp dụng trong vòng 02 ngày sau.&nbsp; Nếu có nguyện vọng đổi trả hàng, xin vui lòng nhanh chóng liên hệ Hoanghaimobile để được đối ứng kịp thời.</span></p>
                            <h3 data-mce-fragment="1"><strong data-mce-fragment="1">02. Quy định về việc hoàn tiền:</strong></h3>
                            <p data-mce-fragment="1"><span data-mce-fragment="1">1. Đối với khách hàng thanh toán qua Credit, Debit:&nbsp;Hoanghaimobile sẽ làm thủ tục hoàn tiền ngay sau khi tiếp nhận thông tin, tuy nhiên thời gian hoàn tiền vào tài khoản của khách hàng tuỳ thuộc vào tiến độ xử lý của công ty cung cấp thẻ nên quý khách vui lòng lưu ý. (Từ 1~3 tuần)</span></p>
                            <p data-mce-fragment="1"><span data-mce-fragment="1">2. Đối với hình thức thanh toán qua ví điện tử paypay:&nbsp;Hoanghaimobile sẽ làm thủ tục hoàn tiền ngay sau khi tiếp nhận thông tin và tiền sẽ hoàn trực tiếp vào Paypay của khách hàng.</span></p>
                            <p data-mce-fragment="1"><span data-mce-fragment="1">3. Đối với khách hàng thanh toán qua Chuyển khoản ngân hàng, Daibiki và Combini: Thời gian hoàn tiền trong vòng 3 ngày làm việc kể từ khi tiếp nhận xử lý. Quý khách vui lòng cung cấp thông tin tài khoản yucho để được nhận hoàn tiền.</span></p>
                            <h3 data-mce-fragment="1"><span data-mce-fragment="1"><strong data-mce-fragment="1">03. Thông tin tiếp nhận khiếu nại</strong><br data-mce-fragment="1"></span></h3>
                            <p data-mce-fragment="1">Hotline :&nbsp;<span data-mce-fragment="1">03-5980-9826</span><br data-mce-fragment="1">Email : info@hoanghaimobile.jp<br data-mce-fragment="1">Fanpage Facebook : @hoanghaimobile2018</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-layout">
                <div class="product-reviewd-container preview-content" aria-expanded="false">
                    <h3 class="page-title-h5 product-reviewd-title">

                        Review

                    </h3>
                    <div class="product-reviewd-expand">




                        <div style='clear:both'></div>
                        <div id='judgeme_product_reviews' class='jdgm-widget jdgm-review-widget' data-product-title='AirPods 2' data-id='7831299162331' data-from-snippet='false' data-auto-install='false'>
                            <div class='jdgm-rev-widg' data-updated-at='2022-11-16T16:16:22Z' data-average-rating='4.32' data-number-of-reviews='19' data-number-of-questions='0'>
                                <style class='jdgm-temp-hiding-style'>
                                    .jdgm-rev-widg {
                                        display: none
                                    }
                                </style>
                                <div class='jdgm-rev-widg__header'>
                                    <h2 class='jdgm-rev-widg__title'>Customer Reviews</h2>
                                    <div class='jdgm-rich-snippet' itemprop='aggregateRating' itemscope itemtype='http://schema.org/AggregateRating'>
                                        <meta itemprop='reviewCount' content='19'>
                                        <meta itemprop='ratingValue' content='4.32'>
                                    </div>
                                    <div class='jdgm-rev-widg__summary'>
                                        <div class='jdgm-rev-widg__summary-stars' aria-label='Average rating is 4.32 stars' role='img'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--half'></span> </div>
                                        <div class='jdgm-rev-widg__summary-text'>Based on 19 reviews</div>
                                    </div> <a style='display: none' href='#' class='jdgm-write-rev-link' role='button'>Write a review</a>
                                    <div class='jdgm-histogram jdgm-temp-hidden'>
                                        <div class='jdgm-histogram__row' data-rating='5' data-frequency='12' data-percentage='63'>
                                            <div class='jdgm-histogram__star' role='button' aria-label="63% (12) reviews with 5 star rating" tabindex='0'><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span></div>
                                            <div class='jdgm-histogram__bar'>
                                                <div class='jdgm-histogram__bar-content' style='width: 63%;'> </div>
                                            </div>
                                            <div class='jdgm-histogram__percentage'>63%</div>
                                            <div class='jdgm-histogram__frequency'>(12)</div>
                                        </div>
                                        <div class='jdgm-histogram__row' data-rating='4' data-frequency='5' data-percentage='26'>
                                            <div class='jdgm-histogram__star' role='button' aria-label="26% (5) reviews with 4 star rating" tabindex='0'><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--off'></span></div>
                                            <div class='jdgm-histogram__bar'>
                                                <div class='jdgm-histogram__bar-content' style='width: 26%;'> </div>
                                            </div>
                                            <div class='jdgm-histogram__percentage'>26%</div>
                                            <div class='jdgm-histogram__frequency'>(5)</div>
                                        </div>
                                        <div class='jdgm-histogram__row' data-rating='3' data-frequency='0' data-percentage='0'>
                                            <div class='jdgm-histogram__star' role='button' aria-label="0% (0) reviews with 3 star rating" tabindex='0'><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span></div>
                                            <div class='jdgm-histogram__bar'>
                                                <div class='jdgm-histogram__bar-content' style='width: 0%;'> </div>
                                            </div>
                                            <div class='jdgm-histogram__percentage'>0%</div>
                                            <div class='jdgm-histogram__frequency'>(0)</div>
                                        </div>
                                        <div class='jdgm-histogram__row' data-rating='2' data-frequency='0' data-percentage='0'>
                                            <div class='jdgm-histogram__star' role='button' aria-label="0% (0) reviews with 2 star rating" tabindex='0'><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span></div>
                                            <div class='jdgm-histogram__bar'>
                                                <div class='jdgm-histogram__bar-content' style='width: 0%;'> </div>
                                            </div>
                                            <div class='jdgm-histogram__percentage'>0%</div>
                                            <div class='jdgm-histogram__frequency'>(0)</div>
                                        </div>
                                        <div class='jdgm-histogram__row' data-rating='1' data-frequency='2' data-percentage='11'>
                                            <div class='jdgm-histogram__star' role='button' aria-label="11% (2) reviews with 1 star rating" tabindex='0'><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span></div>
                                            <div class='jdgm-histogram__bar'>
                                                <div class='jdgm-histogram__bar-content' style='width: 11%;'> </div>
                                            </div>
                                            <div class='jdgm-histogram__percentage'>11%</div>
                                            <div class='jdgm-histogram__frequency'>(2)</div>
                                        </div>
                                        <div class='jdgm-histogram__row jdgm-histogram__clear-filter' data-rating=null tabindex='0'></div>
                                    </div>
                                    <div class='jdgm-rev-widg__sort-wrapper'></div>
                                </div>
                                <div class='jdgm-rev-widg__body'>
                                    <div class='jdgm-rev-widg__reviews'>
                                        <div class='jdgm-rev jdgm-divider-top' data-verified-buyer='true' data-review-id='9c7912b5-4349-4d7a-a68b-fcf6adf64207' data-product-title='AirPods 2' data-product-url='/products/airpods-2' data-thumb-up-count='0' data-thumb-down-count='0'>
                                            <div class='jdgm-rev__header'>
                                                <div class='jdgm-rev__icon'> L </div> <span class='jdgm-rev__rating' data-score='1' tabindex='0' aria-label='1 star review' role='img'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span> </span> <span class='jdgm-rev__timestamp jdgm-spinner' data-content='2022-11-12 13:46:40 UTC'></span>
                                                <div class='jdgm-rev__br'></div> <span class='jdgm-rev__buyer-badge-wrapper'> <span class='jdgm-rev__buyer-badge'></span> </span> <span class='jdgm-rev__author-wrapper'> <span class='jdgm-rev__author'>Lâm Oto</span> <span class='jdgm-rev__location'> </span> </span>
                                            </div>
                                            <div class='jdgm-rev__content'>
                                                <div class='jdgm-rev__custom-form'> </div> <b class='jdgm-rev__title'></b>
                                                <div class='jdgm-rev__body'>
                                                    <p>AirPods 2</p>
                                                </div>
                                                <div class='jdgm-rev__pics'> </div>
                                                <div class='jdgm-rev__vids'> </div>
                                            </div>
                                            <div class='jdgm-rev__actions'>
                                                <div class='jdgm-rev__social'></div>
                                                <div class='jdgm-rev__votes'></div>
                                            </div>
                                            <div class='jdgm-rev__reply'> </div>
                                        </div>
                                        <div class='jdgm-rev jdgm-divider-top' data-verified-buyer='true' data-review-id='727ad96a-958f-4f6a-ba53-2269f66eddf1' data-product-title='AirPods 2' data-product-url='/products/airpods-2' data-thumb-up-count='0' data-thumb-down-count='0'>
                                            <div class='jdgm-rev__header'>
                                                <div class='jdgm-rev__icon'> V </div> <span class='jdgm-rev__rating' data-score='5' tabindex='0' aria-label='5 star review' role='img'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span> </span> <span class='jdgm-rev__timestamp jdgm-spinner' data-content='2022-10-30 12:47:48 UTC'></span>
                                                <div class='jdgm-rev__br'></div> <span class='jdgm-rev__buyer-badge-wrapper'> <span class='jdgm-rev__buyer-badge'></span> </span> <span class='jdgm-rev__author-wrapper'> <span class='jdgm-rev__author'>Vũ Hữu Dương</span> <span class='jdgm-rev__location'> </span> </span>
                                            </div>
                                            <div class='jdgm-rev__content'>
                                                <div class='jdgm-rev__custom-form'> </div> <b class='jdgm-rev__title'></b>
                                                <div class='jdgm-rev__body'>
                                                    <p>AirPods 2</p>
                                                </div>
                                                <div class='jdgm-rev__pics'> </div>
                                                <div class='jdgm-rev__vids'> </div>
                                            </div>
                                            <div class='jdgm-rev__actions'>
                                                <div class='jdgm-rev__social'></div>
                                                <div class='jdgm-rev__votes'></div>
                                            </div>
                                            <div class='jdgm-rev__reply'> </div>
                                        </div>
                                        <div class='jdgm-rev jdgm-divider-top' data-verified-buyer='true' data-review-id='6d6c50c2-53ad-426a-bc15-a90f37ca113c' data-product-title='AirPods 2' data-product-url='/products/airpods-2' data-thumb-up-count='0' data-thumb-down-count='0'>
                                            <div class='jdgm-rev__header'>
                                                <div class='jdgm-rev__icon'> H </div> <span class='jdgm-rev__rating' data-score='1' tabindex='0' aria-label='1 star review' role='img'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span><span class='jdgm-star jdgm--off'></span> </span> <span class='jdgm-rev__timestamp jdgm-spinner' data-content='2022-10-30 09:54:05 UTC'></span>
                                                <div class='jdgm-rev__br'></div> <span class='jdgm-rev__buyer-badge-wrapper'> <span class='jdgm-rev__buyer-badge'></span> </span> <span class='jdgm-rev__author-wrapper'> <span class='jdgm-rev__author'>HOÀNG THUY TÂm</span> <span class='jdgm-rev__location'> </span> </span>
                                            </div>
                                            <div class='jdgm-rev__content'>
                                                <div class='jdgm-rev__custom-form'> </div> <b class='jdgm-rev__title'>Quá tệ</b>
                                                <div class='jdgm-rev__body'>
                                                    <p>Quá tệ</p>
                                                </div>
                                                <div class='jdgm-rev__pics'> </div>
                                                <div class='jdgm-rev__vids'> </div>
                                            </div>
                                            <div class='jdgm-rev__actions'>
                                                <div class='jdgm-rev__social'></div>
                                                <div class='jdgm-rev__votes'></div>
                                            </div>
                                            <div class='jdgm-rev__reply'> </div>
                                        </div>
                                        <div class='jdgm-rev jdgm-divider-top' data-verified-buyer='true' data-review-id='6eb5d300-85df-40fc-a5a4-28e11eac082f' data-product-title='AirPods 2' data-product-url='/products/airpods-2' data-thumb-up-count='0' data-thumb-down-count='0'>
                                            <div class='jdgm-rev__header'>
                                                <div class='jdgm-rev__icon'> P </div> <span class='jdgm-rev__rating' data-score='4' tabindex='0' aria-label='4 star review' role='img'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--off'></span> </span> <span class='jdgm-rev__timestamp jdgm-spinner' data-content='2022-10-30 09:23:37 UTC'></span>
                                                <div class='jdgm-rev__br'></div> <span class='jdgm-rev__buyer-badge-wrapper'> <span class='jdgm-rev__buyer-badge'></span> </span> <span class='jdgm-rev__author-wrapper'> <span class='jdgm-rev__author'>Phungthithu Trang</span> <span class='jdgm-rev__location'> </span> </span>
                                            </div>
                                            <div class='jdgm-rev__content'>
                                                <div class='jdgm-rev__custom-form'> </div> <b class='jdgm-rev__title'></b>
                                                <div class='jdgm-rev__body'>
                                                    <p>AirPods 2</p>
                                                </div>
                                                <div class='jdgm-rev__pics'> </div>
                                                <div class='jdgm-rev__vids'> </div>
                                            </div>
                                            <div class='jdgm-rev__actions'>
                                                <div class='jdgm-rev__social'></div>
                                                <div class='jdgm-rev__votes'></div>
                                            </div>
                                            <div class='jdgm-rev__reply'> </div>
                                        </div>
                                        <div class='jdgm-rev jdgm-divider-top' data-verified-buyer='true' data-review-id='a245b309-3055-4902-b419-8073cd0ebeca' data-product-title='AirPods 2' data-product-url='/products/airpods-2' data-thumb-up-count='0' data-thumb-down-count='0'>
                                            <div class='jdgm-rev__header'>
                                                <div class='jdgm-rev__icon'> N </div> <span class='jdgm-rev__rating' data-score='5' tabindex='0' aria-label='5 star review' role='img'> <span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span><span class='jdgm-star jdgm--on'></span> </span> <span class='jdgm-rev__timestamp jdgm-spinner' data-content='2022-10-26 22:12:29 UTC'></span>
                                                <div class='jdgm-rev__br'></div> <span class='jdgm-rev__buyer-badge-wrapper'> <span class='jdgm-rev__buyer-badge'></span> </span> <span class='jdgm-rev__author-wrapper'> <span class='jdgm-rev__author'>Nguyễn Cảnh</span> <span class='jdgm-rev__location'> </span> </span>
                                            </div>
                                            <div class='jdgm-rev__content'>
                                                <div class='jdgm-rev__custom-form'> </div> <b class='jdgm-rev__title'></b>
                                                <div class='jdgm-rev__body'>
                                                    <p>AirPods 2</p>
                                                </div>
                                                <div class='jdgm-rev__pics'> </div>
                                                <div class='jdgm-rev__vids'> </div>
                                            </div>
                                            <div class='jdgm-rev__actions'>
                                                <div class='jdgm-rev__social'></div>
                                                <div class='jdgm-rev__votes'></div>
                                            </div>
                                            <div class='jdgm-rev__reply'> </div>
                                        </div>
                                    </div>
                                    <div class='jdgm-paginate' data-per-page='5' data-url='https://judge.me/reviews/reviews_for_widget'><a class='jdgm-paginate__page jdgm-curt' data-page='1' aria-label='Page 1' tabindex='0' role='button'>1</a><a class='jdgm-paginate__page ' data-page='2' aria-label='Page 2' tabindex='0' role='button'>2</a><a class='jdgm-paginate__page ' data-page='3' aria-label='Page 3' tabindex='0' role='button'>3</a><a class='jdgm-paginate__page jdgm-paginate__next-page' data-page='2' aria-label='Page 2' tabindex='0' rel='next' role='button'></a><a class='jdgm-paginate__page jdgm-paginate__last-page' data-page='4' aria-label='Page 4' tabindex='0' role='button'></a></div>
                                </div>
                                <div class='jdgm-rev-widg__paginate-spinner-wrapper'>
                                    <div class='jdgm-spinner'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="preview-content-more" data-action-expand>Xem thêm</div>
                </div>
            </div>
        </section>

    </div>
    <div id="shopify-section-template--16613776851163__166207162258f085fb" class="shopify-section">
        <section class="section feature-collection feature-collection__section" data-section-id="template--16613776851163__166207162258f085fb" data-section-type="featured-collection" data-section-settings='{
  "stackable": false,
  "layout": "vertical"
}'>
            <div class="container">
                <header class="section__header">
                    <div class="section__header-stack">
                        <h2 class="section__title heading h3">Gợi ý mua sắm</h2>
                    </div><a href="/collections/goi-y-mua-sam" class="section__action-link link">Xem thêm <svg focusable="false" class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                            <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z">
                            </path>
                        </svg></a>
                </header>
            </div>

            <div class="container ">
                <div class="section__content">
                    <div class="scroller">
                        <div class="scroller__inner">
                            <div class="product-list product-list--vertical product-list--scrollable">


                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-quick-view-template--16613776851163__166207162258f085fb" class="modal" aria-hidden="true">
                <div class="modal__dialog modal__dialog--stretch" role="dialog">
                    <button class="modal__close link" data-action="close-modal"><svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                            <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg></button>

                    <div class="modal__loader"><svg focusable="false" class="icon icon--search-loader" viewBox="0 0 64 64" role="presentation">
                            <path opacity=".4" d="M23.8589104 1.05290547C40.92335108-3.43614731 58.45816642 6.79494359 62.94709453 23.8589104c4.48905278 17.06444068-5.74156424 34.59913135-22.80600493 39.08818413S5.54195825 57.2055303 1.05290547 40.1410896C-3.43602265 23.0771228 6.7944697 5.54195825 23.8589104 1.05290547zM38.6146353 57.1445143c13.8647142-3.64731754 22.17719655-17.89443541 18.529879-31.75914961-3.64743965-13.86517841-17.8944354-22.17719655-31.7591496-18.529879S3.20804604 24.7494569 6.8554857 38.6146353c3.64731753 13.8647142 17.8944354 22.17719655 31.7591496 18.529879z">
                            </path>
                            <path d="M1.05290547 40.1410896l5.80258022-1.5264543c3.64731754 13.8647142 17.89443541 22.17719655 31.75914961 18.529879l1.5264543 5.80258023C23.07664892 67.43614731 5.54195825 57.2055303 1.05290547 40.1410896z">
                            </path>
                        </svg></div>

                    <div class="modal__inner"></div>
                </div>
            </div>
        </section>

    </div>
</main>
<?php include_once "footer.php" ?>