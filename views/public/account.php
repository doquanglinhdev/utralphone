<?php include_once "header.php" ?>

<main id="main" role="main">
    <link href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/account.css?v=119705510277218335231666866960" rel="stylesheet" type="text/css" media="all" />
    <section data-section-id="login" data-section-type="login" class="account__page">
        <header class="header_section container text-center">
            <nav aria-label="Breadcrumb" class="breadcrumb">
                <ol class="breadcrumb__list" role="list">
                    <li class="breadcrumb__item">
                        <a class="breadcrumb__link link" href="/">Home</a><svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                            <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                        </svg>
                    </li>

                    <li class="breadcrumb__item">
                        <a class="breadcrumb__link link" href="?ctr=account">Tài khoản</a>
                    </li>

                </ol>
            </nav>
            <h1 class="section__title">Tài khoản của tôi</h1>
        </header>
        <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" /></form>
        <div class="container">


            <div class="product-tab advanced">
                <!-- Product tab links -->
                <div class="product-tab__links">
                    <a href="?ctr=account" class="product-tab__link active" data-txt-type="tab__taikhoan">
                        Tài khoản
                    </a>
                    <?php if ($_SESSION['user']['role'] == 1) { ?>
                        <a href="?ctr=admin_login" class="product-tab__link" data-txt-type="tab__taikhoan">
                            Quản Lý Admin
                        </a>
                    <?php } ?>
                    <a href="" class="product-tab__link" data-txt-type="tab__hotro">
                        Hỗ trợ
                    </a>

                    <a href="" class="product-tab__link" data-txt-type="tab__caidat">
                        Địa chỉ
                    </a>
                    <a href="" class="product-tab__link" data-txt-type="tab__lichsumuasam">
                        Lịch sử mua sắm
                    </a>
                </div>
                <!-- Product tab links -->

                <!-- Product tab contents -->
                <div class="product-tab__contents">
                    <div class="product-tab__content product-tab__description">

                        <div class="product-tab__inner">
                            Bạn đã đăng nhập!
                            <div class="product-tab__inner-info">
                                Tên: <?= $_SESSION['user']['name_user'] ?>
                            </div>
                            <div class="product-tab__inner-info">
                                Email: <?= $_SESSION['user']['email'] ?>
                            </div>
                            <div class="card__linklist">
                                <a style=" width: fit-content; padding: 5px 12px;" href="?ctr=logout" class="card__linklist-item link button--primary button" data-no-instant>Đăng xuất</a>
                            </div>
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