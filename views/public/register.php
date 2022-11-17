<?php include_once "header.php" ?>

<main id="main" role="main">
      <link href="//cdn.shopify.com/s/files/1/0653/8923/2347/t/22/assets/account.css?v=119705510277218335231666866960" rel="stylesheet" type="text/css" media="all" />
<section class="account__page">
  <header class="header_section container text-center">
    <nav aria-label="Breadcrumb" class="breadcrumb">
      <ol class="breadcrumb__list" role="list">
        <li class="breadcrumb__item">
          <a class="breadcrumb__link link" href="/">Home</a><svg focusable="false" class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
  <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
</svg></li>

        <li class="breadcrumb__item">
          <a class="breadcrumb__link link" href="/account">Tài khoản</a> 
        </li>

  
      </ol>
    </nav>
    <h1 class="section__title">Tài khoản của tôi</h1>
  </header>

  <div class="container">


    <div class="product-tab advanced">
      <!-- Product tab links -->
      <div class="product-tab__links">
        <a href="/account/login" class="product-tab__link active" data-txt-type="tab__taikhoan">
          Tài khoản
        </a>

        <a  href="/pages/ho-tro" class="product-tab__link" data-txt-type="tab__hotro">
          Hỗ trợ
        </a>

        <a  href="/account/addresses" class="product-tab__link" data-txt-type="tab__caidat">
        Địa chỉ
        </a>
        <a  href="/account" class="product-tab__link" data-txt-type="tab__lichsumuasam">
          Lịch sử mua sắm
        </a>
    </div>
      <!-- Product tab links -->
  
      <!-- Product tab contents -->
      <div class="product-tab__contents">
          <div class="product-tab__content product-tab__description">
              <div class="product-tab__inner"><form method="post" action="/account" id="create_customer" accept-charset="UTF-8" name="create" class="form form--main create__account"><input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" /><div class="input__form"><div class="form__input-wrapper form__input-wrapper--labelled">
              <input placeholder="Họ &amp; tên đệm" type="text" id="customer[first_name]" class="form__field form__field--text" name="customer[first_name]" autocomplete="given-name" required="required">
            </div>
    
            <div class="form__input-wrapper form__input-wrapper--labelled">
              <input placeholder="Tên" type="text" id="customer[last_name]" class="form__field form__field--text" name="customer[last_name]" autocomplete="family-name" required="required">
            </div><div class="form__input-wrapper form__input-wrapper--labelled">
            <input placeholder="Email" type="email" id="customer[email]" class="form__field form__field--text" name="customer[email]" required="required" >
          </div>
    
          <div class="form__input-wrapper form__input-wrapper--labelled">
            <input placeholder="Mật khẩu" type="password" id="customer[password]" class="form__field form__field--text" name="customer[password]" required="required" autocomplete="new-password" >
          </div>

          <div id="birthday" class="form__input-wrapper form__input-wrapper--labelled">
            <label for="date" class="phone-only">Ngày sinh</label>
            <input placeholder="Ngày sinh" class="textbox-n text form__field form__field--text" type="date" name="customer[note][birthday]" id="date">
          </div>

          <div id="phone" class="form__input-wrapper form__input-wrapper--labelled">
            <input type="tel" placeholder="Số điện thoại (nếu có)" id="phone" name="customer[note][phone]"  class="text form__field form__field--text">
          </div>
          
     
    
          </div>
               
          
              
                <button type="submit" class="form__submit button button--primary button--full">Tạo tài khoản</button>
          
                <div class="form__secondary-action">
                  <p>Bạn đã có tài khoản ? <a href="/account/login" class="link link--accented">Đăng nhập</a></p>
                </div></form></div>
          </div>         
      </div>
      <!-- Product tab contents -->
  </div>

   

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const dateField = document.querySelector('[type="date"]').addEventListener('click', function() {
      this.click();
    });
  });
</script>
    </main>
<?php include_once "footer.php" ?>
