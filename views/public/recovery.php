<?php include_once "header.php" ?>

<main id="main" role="main">
    <link href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/account.css?v=119705510277218335231666866960" rel="stylesheet" type="text/css" media="all" />
    <section data-section-id="login" data-section-type="login" class="account__page">
        <header class="header_section container text-center">
            <nav aria-label="Breadcrumb" class="breadcrumb">
                <ol class="breadcrumb__list" role="list">
                    <li class="breadcrumb__item">
                        <a class="breadcrumb__link link" href="/">Home</a>
                        <svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                            <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                        </svg>
                    </li>

                    <li class="breadcrumb__item">
                        <a class="breadcrumb__link link" href="/account">Tài khoản</a>
                    </li>

                </ol>
            </nav>
            <h1 class="section__title">Tài khoản của tôi</h1>
        </header>
        <form method="post" action="" accept-charset="UTF-8">
            <input type="hidden" name="form_type" value="recover_customer_password" />
            <input type="hidden" name="utf8" value="✓" />
        </form>
        <div class="container">


            <div class="product-tab advanced">
                <!-- Product tab links -->
                <div class="product-tab__links">
                    <a href="/account/login" class="product-tab__link active" data-txt-type="tab__taikhoan">
                        Tài khoản
                    </a>

                    <a href="/pages/ho-tro" class="product-tab__link" data-txt-type="tab__hotro">
                        Hỗ trợ
                    </a>

                    <a href="/account/addresses" class="product-tab__link" data-txt-type="tab__caidat">
                        Địa chỉ
                    </a>
                    <a href="/account" class="product-tab__link" data-txt-type="tab__lichsumuasam">
                        Lịch sử mua sắm
                    </a>
                </div>
                <!-- Product tab links -->

                <!-- Product tab contents -->
                <div class="product-tab__contents">
                    <div class="product-tab__content product-tab__description">

                        <div class="product-tab__inner">
                            <form method="post" action="?ctr=recovery" id="recover_customer_password" accept-charset="UTF-8" name="recover" class="form form--main" style="display: block">
                                <header class="form__header">
                                    <h1 class="form__title heading h1">Khôi phục lại mật khẩu</h1>
                                    <p class="form__legend">Nhập email của bạn : </p>
                                </header>
                                <div class="form__input-wrapper form__input-wrapper--labelled">
                                    <input placeholder="Email" type="email" id="customer[recover_email]" class="form__field form__field--text" name="mail" required="required">
                                </div>
                                <?php if (isset($_COOKIE['successmail'])) : ?>
                                    <p style="color: green">
                                        <?= $_COOKIE['successmail'] ?>
                                    </p>
                                <?php endif ?>
                                <button type="submit" name="recoverypass" value="1" class="form__submit button button--primary button--full">Khôi phục</button>
                                <div class="form__secondary-action">
                                    <p>Đã nhớ mật khẩu của bạn?
                                        <button type="button" data-action="toggle-login-form" class="link link--accented">Quay lại đăng nhập</button>
                                    </p>
                                </div>
                            </form>

                            <form method="post" action="?ctr=login" id="customer_login" accept-charset="UTF-8" name="login" class="form form--main" style="display: none">
                                <input type="hidden" name="role" value="" />
                                <div class="form__input-wrapper form__input-wrapper--labelled">
                                    <input placeholder="Username" type="text" class="form__field form__field--text" name="username" required="required">
                                </div>

                                <div class="form__input-wrapper form__input-wrapper--labelled">
                                    <input placeholder="Mật khẩu" type="password" class="form__field form__field--text" name="password" required="required" autocomplete="current-password">
                                </div>
                                <?php if (isset($_COOKIE['success'])) : ?>
                                    <p style="color: red">
                                        <?= $_COOKIE['success'] ?>
                                    </p>
                                <?php endif ?>
                                <button type="submit" name="login" value="1" class="form__submit button button--primary button--full">Đăng nhập</button>

                                <div class="form__secondary-action">
                                    <p>Khách hàng mới ? <a href="/account/register" class="link link--accented">Tạo tài khoản</a>
                                    </p>
                                    <p>Quên mật khẩu ?
                                        <button type="button" data-action="toggle-login-form" class="link link--accented">Khôi phục mật khẩu</button>
                                    </p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- Product tab contents -->
            </div>
        </div>

        <script>
            if (window.location.hash === '#recover-password' || window.location.hash === '#recover') {
                document.getElementById('customer_login').style.display = 'none';
                document.getElementById('recover_customer_password').style.display = 'block';
            }
        </script>
    </section>
</main>
<?php include_once "footer.php" ?>