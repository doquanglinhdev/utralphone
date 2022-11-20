<?php include_once "header.php" ?>
<?php $tong = 0;
$i = 0;  ?>
<main id="main" role="main">
    <div id="shopify-section-template--16613775769819__main" class="shopify-section">
        <section data-section-id="template--16613775769819__main" data-section-type="cart" data-section-settings='{
  "showShippingEstimator": false
}' data-item-count="3">
            <div class="container">
                <header class=" header__cart">
                    <h1 class="text-center page-title-h1">Giỏ hàng</h1>
                </header>
            </div>

            <div class="page-layout">
                <div class="cart-wrapper__inner">
                    <div class="">
                        <div class="cart-wrapper__grid">
                            <div class="card">
                                <div class="table-wrapper">
                                    <table class="line-item-table table table--loose">
                                        <thead class="hidden-phone hidden-tablet hidden-desktop">
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th class="table__cell--center">Số lượng</th>
                                                <th class="table__cell--right">Tổng</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($_SESSION['cart'] as $cart) {
                                                $tong = $tong + $cart[5]
                                            ?>
                                                <tr class="line-item line-item--stack">
                                                    <td class="line-item__product-info">
                                                        <div class="line-item__since">
                                                            <div class="line-item__since--image">
                                                                <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                                                    <img src="//cdn.shopify.com/s/files/1/0653/8923/2347/products/1_c7cac2e4-46ae-4abf-ac8c-1d9600d9c44e_180x.png?v=1663143869" alt="">
                                                                </div>
                                                            </div>

                                                            <div class="line-item__info">
                                                                <div class="line-item__info-top">
                                                                    <a href="/products/airpods-3" class="page-title-h5 line-item__info--name">
                                                                        <?= $cart[1] ?>
                                                                    </a>
                                                                    <div class="line-item__variants">
                                                                    </div>
                                                                </div>

                                                                <div class="line-item__info-bottom">
                                                                    <div class="line-item__delete">
                                                                        <a href="?ctr=deletecart&id=<?= $i ?>" data-action="decrease-quantity" data-quantity="0" data-line="1" class="line-item__quantity-remove link">Xóa</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="line-item__product-final">
                                                        <div class="line-item__final-top">
                                                            <div class="line-item__product-totalItem">
                                                                <?= number_format($cart[3]) ?> đ
                                                            </div>
                                                            <div class="quantity-selector">
                                                                <button type="button" class="quantity-selector__button" data-action="decrease-quantity" data-href="?ctr=deletecart&id=<?= $i ?>" data-quantity="0" data-line="1" aria-label="Decrease quantity by 1" title="Decrease quantity by 1">
                                                                    <svg focusable="false" class="icon icon--minus" viewBox="0 0 10 2" role="presentation">
                                                                        <path d="M10 0v2H0V0z" fill="currentColor"></path>
                                                                    </svg>
                                                                </button>
                                                                <input aria-label="Số lượng" class="quantity-selector__value" inputmode="numeric" data-current-value="1" data-line="1" value="<?= $cart[4] ?>" size="2">
                                                                <button type="button" class="quantity-selector__button" data-action="increase-quantity" data-href="/cart/change?quantity=2&line=1" data-quantity="2" data-line="1" aria-label="Increase quantity by 1" title="Increase quantity by 1">
                                                                    <svg focusable="false" class="icon icon--plus" viewBox="0 0 10 10" role="presentation">
                                                                        <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z" fill="currentColor" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="line-item__final-bottom hidden-phone">
                                                            <span class="page-title-h4 line-item__product-total">
                                                                <?= number_format($cart[5]) ?>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <form class="cart-recap" method="post" action="?ctr=checkout" novalidate="novalidate" data-item-count="1">
                                <div class="cart-recap__scroller">
                                    <div class="card">
                                        <div class="card__section">
                                            <div class="text__label__content">
                                                <span>Tiền hàng</span>

                                                <span class="page-title-h4 cart-recap__price-line-price"><?= number_format($tong)  ?> đ</span>
                                            </div>
                                            <div class="text__label__content">
                                                <span>Vận chuyển</span>
                                                <span class="text__label__normal">Bước tiếp theo</span>
                                            </div>
                                            <div class="text__label__seperate"></div>
                                            <div class="text__label__content">
                                                <span>Tạm tính</span>
                                                <span class="page-title-h4"><?= number_format($tong)  ?> đ</span>
                                            </div>
                                        </div>
                                    </div>


                                    <input type="hidden" name="attributes[collection_products_per_page]" value="">
                                    <input type="hidden" name="attributes[collection_layout]" value="">


                                    <div class="cart-shiptime">
                                        <select name="attributes[ship-time]" class="order-input">
                                            <option value="Không yêu cầu">Chọn thời gian nhận hàng</option>
                                            <option value="Trong buổi sáng">Trong buổi sáng</option>
                                            <option value="12h~14h">12h~14h</option>
                                            <option value="14h~16h">14h~16h</option>
                                            <option value="16h~18h">16h~18h</option>
                                            <option value="18h~20h">18h~20h</option>
                                            <option value="19h~21h">19h~21h</option>
                                        </select>
                                    </div>
                                    <div class="cart-shipname">
                                        <input type="text" name="attributes[nguoi-phu-trach]" class="order-input" placeholder="Tên nhân viên hỗ trợ" value="">
                                    </div>


                                    <div class="cart-recap__note">
                                        <textarea name="note" class="order__note__input" rows="4" placeholder="Ghi chú cho cửa hàng"></textarea>
                                    </div>

                                    <button type="submit" name="checkout" class="cart-recap__checkout button button--primary button--full button--large">Thanh toán</button>

                                    <div class="cart-recap__secure-payment">
                                        <p class="cart-recap__secure-payment-title">
                                            <svg focusable="false" class="icon icon--lock-2" viewBox="0 0 12 15" role="presentation">
                                                <g stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <path d="M6 1C4.32 1 3 2.375 3 4.125V6h6V4.125C9 2.375 7.68 1 6 1zM1 6h10v8H1z"></path>
                                                </g>
                                            </svg> Thanh toán dễ dàng với
                                        </p>

                                        <div class="cart-recap__secure-payment-list payment-list payment-list--centered">

                                            <svg class="payment-list__item" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express">
                                                <title id="pi-american_express">American Express</title>
                                                <g fill="none">
                                                    <path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07" />
                                                    <path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1" />
                                                    <path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z" />
                                                </g>
                                            </svg>


                                            <svg class="payment-list__item" width="38" height="24" role="img" aria-labelledby="pi-jcb" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg">
                                                <title id="pi-jcb">JCB</title>
                                                <g fill="none" fill-rule="evenodd">
                                                    <g fill-rule="nonzero">
                                                        <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07" />
                                                        <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF" />
                                                    </g>
                                                    <path d="M11.5 5H15v11.5a2.5 2.5 0 0 1-2.5 2.5H9V7.5A2.5 2.5 0 0 1 11.5 5z" fill="#006EBC" />
                                                    <path d="M18.5 5H22v11.5a2.5 2.5 0 0 1-2.5 2.5H16V7.5A2.5 2.5 0 0 1 18.5 5z" fill="#F00036" />
                                                    <path d="M25.5 5H29v11.5a2.5 2.5 0 0 1-2.5 2.5H23V7.5A2.5 2.5 0 0 1 25.5 5z" fill="#2AB419" />
                                                    <path d="M10.755 14.5c-1.06 0-2.122-.304-2.656-.987l.78-.676c.068 1.133 3.545 1.24 3.545-.19V9.5h1.802v3.147c0 .728-.574 1.322-1.573 1.632-.466.144-1.365.221-1.898.221zm8.116 0c-.674 0-1.388-.107-1.965-.366-.948-.425-1.312-1.206-1.3-2.199.012-1.014.436-1.782 1.468-2.165 1.319-.49 3.343-.261 3.926.27v.972c-.572-.521-1.958-.898-2.919-.46-.494.226-.737.917-.744 1.448-.006.56.245 1.252.744 1.497.953.467 2.39.04 2.919-.441v1.01c-.358.255-1.253.434-2.129.434zm8.679-2.587c.37-.235.582-.567.582-1.005 0-.438-.116-.687-.348-.939-.206-.207-.58-.469-1.238-.469H23v5h3.546c.696 0 1.097-.23 1.315-.415.283-.25.426-.53.426-.96 0-.431-.155-.908-.737-1.212zm-1.906-.281h-1.428v-1.444h1.495c.956 0 .944 1.444-.067 1.444zm.288 2.157h-1.716v-1.513h1.716c.986 0 1.083 1.513 0 1.513z" fill="#FFF" fill-rule="nonzero" />
                                                </g>
                                            </svg>

                                            <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master">
                                                <title id="pi-master">Mastercard</title>
                                                <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                                <circle fill="#EB001B" cx="15" cy="12" r="7" />
                                                <circle fill="#F79E1B" cx="23" cy="12" r="7" />
                                                <path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z" />
                                            </svg>

                                            <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa">
                                                <title id="pi-visa">Visa</title>
                                                <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                                <path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div id="shopify-section-template--16613775769819__166172258010869134" class="shopify-section">
        <section class="section feature-collection feature-collection__section" data-section-id="template--16613775769819__166172258010869134" data-section-type="featured-collection" data-section-settings='{
  "stackable": false,
  "layout": "vertical"
}'>
            <div class="container">
                <header class="section__header">
                    <div class="section__header-stack">
                        <h2 class="section__title heading h3">Gợi ý mua sắm</h2>
                    </div><a href="/collections/campain" class="section__action-link link">Xem thêm <svg focusable="false" class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                            <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z">
                            </path>
                        </svg></a>
                </header>
            </div>


            <div id="modal-quick-view-template--16613775769819__166172258010869134" class="modal" aria-hidden="true">
                <div class="modal__dialog modal__dialog--stretch" role="dialog">
                    <button class="modal__close link" data-action="close-modal">
                        <svg focusable="false" class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                            <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div class="modal__loader">
                        <svg focusable="false" class="icon icon--search-loader" viewBox="0 0 64 64" role="presentation">
                            <path opacity=".4" d="M23.8589104 1.05290547C40.92335108-3.43614731 58.45816642 6.79494359 62.94709453 23.8589104c4.48905278 17.06444068-5.74156424 34.59913135-22.80600493 39.08818413S5.54195825 57.2055303 1.05290547 40.1410896C-3.43602265 23.0771228 6.7944697 5.54195825 23.8589104 1.05290547zM38.6146353 57.1445143c13.8647142-3.64731754 22.17719655-17.89443541 18.529879-31.75914961-3.64743965-13.86517841-17.8944354-22.17719655-31.7591496-18.529879S3.20804604 24.7494569 6.8554857 38.6146353c3.64731753 13.8647142 17.8944354 22.17719655 31.7591496 18.529879z">
                            </path>
                            <path d="M1.05290547 40.1410896l5.80258022-1.5264543c3.64731754 13.8647142 17.89443541 22.17719655 31.75914961 18.529879l1.5264543 5.80258023C23.07664892 67.43614731 5.54195825 57.2055303 1.05290547 40.1410896z">
                            </path>
                        </svg>
                    </div>

                    <div class="modal__inner"></div>
                </div>
            </div>
        </section>

    </div>
</main>
<?php include_once "footer.php" ?>