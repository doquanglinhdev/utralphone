<?php include_once "header.php" ?>
<main id="main" role="main">
    <div id="shopify-section-search-template" class="shopify-section">
        <section data-section-id="search-template" data-section-type="collection" data-section-settings='{
  "currentSortBy": "",
  "currentTags": [],
  "filterMode": "",
  "defaultLayout": "grid",
  "defaultProductsPerPage": 24,
  "isAutomatic": true,
  "gridClasses": "1\/3--tablet 1\/4--lap-and-up"
}'>
            <?php if ($data) { ?>
                <div class="container container--flush">
                    <div class="page__sub-header">
                        <nav aria-label="Breadcrumb" class="breadcrumb">
                            <ol class="breadcrumb__list" role="list">
                                <li class="breadcrumb__item">
                                    <a class="breadcrumb__link link" href="/">Home</a><svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                                        <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                                    </svg>
                                </li>

                                <li class="breadcrumb__item">
                                    <span class="breadcrumb__link" aria-current="page">Tìm kiếm kết quả cho &quot;<?= $look ?>&quot;</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page__content">
                        <div>
                            <div>
                                <div class="collection">
                                    <div class="card">
                                        <header class="card__header card__header--tight">
                                            <div class="collection__header">
                                                <div class="collection__header-inner">
                                                    <div class="collection__meta">
                                                        <div class="collection__meta-inner">
                                                            <h1 class="collection__title heading h1">Sản phẩm dành cho &quot;<?= $look ?>&quot;</h1>

                                                            <p class="collection__products-count text--small hidden-desk">29 kết quả</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>

                                        <div class="collection__dynamic-part">
                                            <div class="collection__toolbar">
                                                <div class="collection__toolbar-item collection__toolbar-item--count hidden-pocket"><span class="collection__showing-count hidden-pocket hidden-lap">Showing 1 - 24 of 29 results</span>

                                                    <label for="showing-count">Display:</label>

                                                    <div class="value-picker-wrapper">
                                                        <button class="value-picker-button" aria-haspopup="true" aria-expanded="false" aria-controls="display-by-selector" data-action="open-value-picker">
                                                            <span class="hidden-phone">24 trên một trang</span><svg focusable="false" class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                                                <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                                            </svg>
                                                        </button>

                                                        <div id="display-by-selector" class="value-picker" aria-hidden="true">
                                                            <svg focusable="false" class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                                                                <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                                            </svg>

                                                            <div class="value-picker__inner">
                                                                <header class="value-picker__header">
                                                                    <span class="value-picker__title text--strong">Display</span>
                                                                    <button class="value-picker__close" data-action="close-value-picker" aria-controls="display-by-selector" aria-label="Đóng"><svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                                                                            <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                                                                        </svg></button>
                                                                </header>

                                                                <div class="value-picker__choice-list">
                                                                    <button class="value-picker__choice-item link is-selected" data-action="select-value" data-value="24">24 trên một trang <svg focusable="false" class="icon icon--check-2" viewBox="0 0 13 11" role="presentation">
                                                                            <path d="M1 4.166456L5.317719 9 12 1" stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd"></path>
                                                                        </svg></button>
                                                                    <button class="value-picker__choice-item link " data-action="select-value" data-value="36">36 trên một trang <svg focusable="false" class="icon icon--check-2" viewBox="0 0 13 11" role="presentation">
                                                                            <path d="M1 4.166456L5.317719 9 12 1" stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd"></path>
                                                                        </svg></button>
                                                                    <button class="value-picker__choice-item link " data-action="select-value" data-value="48">48 trên một trang <svg focusable="false" class="icon icon--check-2" viewBox="0 0 13 11" role="presentation">
                                                                            <path d="M1 4.166456L5.317719 9 12 1" stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd"></path>
                                                                        </svg></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="collection__toolbar-item collection__toolbar-item--layout">
                                                    <span class="collection__layout-label hidden-phone">Xem</span><button type="button" class="collection__layout-button is-selected touch-area" aria-label="Hiển thị sản phẩm dưới dạng lưới" data-action="change-layout" data-layout-mode="grid"><svg focusable="false" class="icon icon--grid" viewBox="0 0 18 18" role="presentation">
                                                            <path d="M1 .030067h2c.55228475 0 1 .44771525 1 1v2c0 .55228475-.44771525 1-1 1H1c-.55228475 0-1-.44771525-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.55228475 0 1 .44771525 1 1v2c0 .5522847-.44771525 1-1 1H1c-.55228475 0-1-.4477153-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.55228475 0 1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1H1c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1zm7-14h2c.5522847 0 1 .44771525 1 1v2c0 .55228475-.4477153 1-1 1H8c-.55228475 0-1-.44771525-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.5522847 0 1 .44771525 1 1v2c0 .5522847-.4477153 1-1 1H8c-.55228475 0-1-.4477153-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.5522847 0 1 .4477153 1 1v2c0 .5522847-.4477153 1-1 1H8c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1zm7-14h2c.5522847 0 1 .44771525 1 1v2c0 .55228475-.4477153 1-1 1h-2c-.5522847 0-1-.44771525-1-1v-2c0-.55228475.4477153-1 1-1zm0 7h2c.5522847 0 1 .44771525 1 1v2c0 .5522847-.4477153 1-1 1h-2c-.5522847 0-1-.4477153-1-1v-2c0-.55228475.4477153-1 1-1zm0 7h2c.5522847 0 1 .4477153 1 1v2c0 .5522847-.4477153 1-1 1h-2c-.5522847 0-1-.4477153-1-1v-2c0-.5522847.4477153-1 1-1z" fill="currentColor" fill-rule="evenodd"></path>
                                                        </svg></button>
                                                    <button type="button" class="collection__layout-button  touch-area" aria-label="Hiển thị sản phẩm dưới dạng danh sách" data-action="change-layout" data-layout-mode="list"><svg focusable="false" class="icon icon--list" viewBox="0 0 18 18" role="presentation">
                                                            <path d="M8 1.030067h9c.5522847 0 1 .44771525 1 1s-.4477153 1-1 1H8c-.55228475 0-1-.44771525-1-1s.44771525-1 1-1zm0 7h9c.5522847 0 1 .44771525 1 1s-.4477153 1-1 1H8c-.55228475 0-1-.44771525-1-1s.44771525-1 1-1zm0 7h9c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1H8c-.55228475 0-1-.4477153-1-1s.44771525-1 1-1zm-7-15h2c.55228475 0 1 .44771525 1 1v2c0 .55228475-.44771525 1-1 1H1c-.55228475 0-1-.44771525-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.55228475 0 1 .44771525 1 1v2c0 .5522847-.44771525 1-1 1H1c-.55228475 0-1-.4477153-1-1v-2c0-.55228475.44771525-1 1-1zm0 7h2c.55228475 0 1 .4477153 1 1v2c0 .5522847-.44771525 1-1 1H1c-.55228475 0-1-.4477153-1-1v-2c0-.5522847.44771525-1 1-1z" fill="currentColor" fill-rule="evenodd"></path>
                                                        </svg></button>
                                                </div>
                                            </div>
                                            <div class="product-list product-list--collection">

                                                <?php foreach ($data as $value) { ?>
                                                    <div class="product-item product-item--vertical  1/3--tablet 1/4--lap-and-up"><a href="/products/%F0%9F%92%A5macbook-air-2020-13-3-m1-8g-256g-den-98-99-s%E1%BA%A1c-13-l%E1%BA%A7n?_pos=1&_sid=551797696&_ss=r" class="product-item__image-wrapper ">
                                                            <div class="aspect-ratio aspect-ratio--short" style="padding-bottom: 85.87786259541986%">
                                                                <img class="product-item__primary-image lazyload image--fade-in" data-media-id="31322936246491" data-src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/macairM1_{width}x.png?v=1668663597" data-sizes="auto" data-widths="[200,300,400,500]" alt="Macbook Air 2020 13.3” M1/8G/256G Đen  98.99% sạc 13 lần"><noscript>
                                                                    <img src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Macbook Air 2020 13.3” M1/8G/256G Đen  98.99% sạc 13 lần">
                                                                </noscript>
                                                            </div>
                                                        </a>
                                                        <div class="product-item__info">
                                                            <form method="post" action="/cart/add" id="product_form_id_7894184820955_search-template" accept-charset="UTF-8" class="product-item__action-list product-item__action-list--list-view-only button-stack" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                                                                <div class="product-item__info-inner">

                                                                    <a href="/products/%F0%9F%92%A5macbook-air-2020-13-3-m1-8g-256g-den-98-99-s%E1%BA%A1c-13-l%E1%BA%A7n?_pos=1&_sid=551797696&_ss=r" class="product-item__title text--strong link"><?= $value['name_pro'] ?></a>
                                                                    <div class="product-item__price-list price-list" data-product-id="7894184820955"><span class="price">

                                                                            <span class="visually-hidden"><?= $value['price'] ?></span>

                                                                            Từ <span>¥108,000</span></span></div>

                                                                </div>
                                                                <input type="hidden" name="quantity" value="1">
                                                                <input type="hidden" data-txt="2" data-product-id="7894184820955" name="id" value="43676203090139">
                                                                <div data-product-id="7894184820955" class="default-url hidden-phone hidden-tablet hidden-desktop" style="display: none;">/products/%F0%9F%92%A5macbook-air-2020-13-3-m1-8g-256g-den-98-99-s%E1%BA%A1c-13-l%E1%BA%A7n?_pos=1&_sid=551797696&_ss=r</div>
                                                                <div class="form-button__action">
                                                                    <button type="submit" class="product-item__action-button product-item__action-button--list-view-only button button--small button--primary" data-action="add-to-cart">Thêm vào giỏ</button>

                                                                    <button data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_7894184820955 product__wishlist inloader" data-swaction="addToWishlist" data-product-id="7894184820955" data-variant-id="43676203090139" data-product-url="https://hoanghaimobile.jp/products/%F0%9F%92%A5macbook-air-2020-13-3-m1-8g-256g-den-98-99-s%E1%BA%A1c-13-l%E1%BA%A7n?_pos=1&_sid=551797696&_ss=r"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M21.8768 3.10186C20.4889 1.71394 18.632 0.949646 16.6475 0.949646C14.939 0.949646 13.3252 1.51627 12.0236 2.55943C10.7033 1.51627 9.08747 0.949646 7.39566 0.949646C5.40197 0.949646 3.54009 1.71427 2.15222 3.10186C0.764297 4.48951 0 6.34679 0 8.33096C0 10.3154 0.764297 12.1724 2.15222 13.56L11.3896 22.7974C11.558 22.9661 11.779 23.0504 12 23.0504C12.2205 23.0504 12.4409 22.9663 12.6095 22.7986L21.8544 13.5819C23.2383 12.1669 24 10.3073 24 8.34535C24 6.36521 23.2484 4.50563 21.8768 3.10186ZM20.6276 12.3666L12.0008 20.9669L3.37294 12.3393C2.31136 11.2774 1.72659 9.85383 1.72659 8.33096C1.72659 6.80808 2.31136 5.38449 3.37294 4.32263C4.4348 3.26105 5.86331 2.67629 7.39566 2.67629C8.90358 2.67629 10.335 3.26363 11.4253 4.32952C11.7631 4.66018 12.305 4.65727 12.6391 4.32263C13.701 3.26105 15.1243 2.67629 16.6475 2.67629C18.1706 2.67629 19.5939 3.26105 20.6486 4.31569C21.6964 5.38763 22.2734 6.81872 22.2734 8.34535C22.2734 9.85355 21.6863 11.2846 20.6276 12.3666Z" fill="#D41F26" />
                                                                        </svg>
                                                                    </button>
                                                                    </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                <?php } ?>
                                            </div>

                                            <!-- <div class="pagination">
                                            <div class="pagination__inner">
                                                <div class="pagination__nav"><span class="pagination__nav-item is-active">1</span><a href="/search?options%5Bprefix%5D=last&page=2&q=macbook&type=product" data-page="2" class="pagination__nav-item link" title="Điều hướng đến 2">2</a></div>

                                                <span class="pagination__page-count">Trang 1 / 2</span><a class="pagination__next link" rel="next" title="Trang sau" data-page="2" href="/search?options%5Bprefix%5D=last&page=2&q=macbook&type=product">Trang sau<svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                                                        <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                                                    </svg></a>
                                            </div>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="link-search-results" style="display: none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="container ">
                    <div class="empty-state">
                        <p class="empty-state__heading heading h1">Tìm kiếm</p>
                        <p class="empty-state__description">Không tìm thấy kết quả nào cho &quot;<?= $look ?>&quot;</p>

                        <form class="empty-state__quick-form" action="?ctr=search" method="post">
                            <div class="form__connected-item">
                                <div class="form__input-wrapper form__input-wrapper--labelled">
                                    <input id="search" type="text" class="form__field form__field--text" name="look" autocomplete="off" autocorrect="off">
                                    <label for="search" class="form__floating-label">Tìm kiếm...</label>
                                </div>

                                <button type="submit" class="form__connection button button--primary" aria-label="Tìm kiếm..." name="btn_search" value="1"><svg focusable="false" class="icon icon--search" viewBox="0 0 21 21" role="presentation">
                                        <g stroke-width="2" stroke="black" fill="none" fill-rule="evenodd">
                                            <path d="M19 19l-5-5" stroke-linecap="square"></path>
                                            <circle cx="8.5" cy="8.5" r="7.5"></circle>
                                        </g>
                                    </svg></button>
                            </div>
                        </form>

                        <a href="/" class="empty-state__link link link--accented">hoặc bấm vào đây để quay lại trang chủ</a>
                    </div>
                </div>
            <?php } ?>
            <div id="modal-quick-view-search-template" class="modal" aria-hidden="true">
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
    <div id="shopify-section-static-promotion-list" class="shopify-section"> </div>
</main>

<?php include_once "footer.php" ?>