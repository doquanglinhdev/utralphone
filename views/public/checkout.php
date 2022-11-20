<?php include_once "header.php" ?>
<?php $tong = 0;
$i = 0;  ?>
<?php echo "<pre>";
 print_r($_SESSION['cart']) ?>
<div class="container my-5">

    <!-- Section -->
    <section>
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-4">
                <form action="" method="post">
                    <!-- Panel -->
                    <div class="card">

                        <div class="card-header white-text bg-danger text-white">
                            ĐỊA CHỈ NHẬN HÀNG
                        </div>

                        <div class="card-body px-4">
                            <div class="form-group">
                                <label for="email" class="">Email</label>
                                <input type="text" class="form-control mb-4" name="email_oder" value="<?= $_SESSION['user']['email'] ?>" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="email" class="">Họ và Tên</label>
                                <input type="text" class="form-control mb-4" name="name_oder" value="<?= $_SESSION['user']['name_user'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="">Số điện thoại</label>
                                <input type="text" class="form-control mb-4" name="phone_oder" value="<?= $_SESSION['user']['phone'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="">Địa chị cụ thể: </label>
                                <input type="text" class="form-control mb-4" name="adr_oder" value="<?= $_SESSION['user']['address']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="">Tỉnh / Thành phố</label>
                                <select class="form-control mb-4" id="city" aria-label=".form-select-sm" name="tinh_oder" required>
                                    <option value="" selected>Chọn tỉnh thành</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email" class="">Huyện / Quận</label>
                                <select class="form-control mb-4" id="district" aria-label=".form-select-sm" name="huyen_oder" required>
                                    <option value="" selected>Chọn quận huyện</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email" class="">Xã / Phường</label>
                                <select class="form-control mb-4" id="ward" aria-label=".form-select-sm" name="xa_oder" required>
                                    <option value="" selected>Chọn xã phường</option>
                                </select>
                            </div>
                        </div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                        <script src="views/public/assets/js/function.js"></script>
                    </div>
                    <!-- Panel -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4">

                <!-- Panel -->
                <div class="card">

                    <div class="card-header white-text bg-danger text-white">
                        PHƯƠNG THỨC VẬN CHUYỂN
                    </div>

                    <div class="card-body px-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="express" id="express1" value="1" checked>
                            <label class="form-check-label" for="express1">
                                <i class="fa-solid fa-store"></i> Nhận tại cửa hàng
                            </label>
                        </div>
                        <hr>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="express" id="express2" value="2" >
                            <label class="form-check-label" for="express2">
                                <i class="fa-solid fa-car-side"></i> Vận chuyển tiêu chuẩn
                            </label>
                        </div>
                    </div>

                </div>
                <!-- Panel -->
                <div class="card">

                    <div class="card-header white-text bg-danger text-white">
                        PHƯƠNG THỨC THANH TOÁN
                    </div>

                    <div class="card-body px-4">
                        <div class="form-check ml-4">
                            <input class="form-check-input" type="radio" id="payment1" name="payment" value="1" checked>
                            <label class="form-check-label" for="payment1">
                                <img src="https://i.imgur.com/jJa3JqL.png" width="15%" alt=""> Thanh toán bằng thẻ
                            </label>
                        </div>
                        <hr>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" id="payment2" name="payment" value="2">
                            <label class="form-check-label" for="payment2">
                                <img src="https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png" alt="" width="15%"> Thanh toán qua MOMO
                            </label>
                        </div>
                        <hr>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" id="payment3" name="payment"  value="3">
                            <label class="form-check-label" for="payment3">
                                <img src="https://seeklogo.com/images/Q/qr-code-logo-27ADB92152-seeklogo.com.png" width="15%" alt=""> Thanh toán qua chuyển khoản
                            </label>
                        </div>
                        <hr>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" id="payment4" name="payment" value="4">
                            <label class="form-check-label" for="payment4">
                                <img src="https://inhoangkien.vn/wp-content/uploads/2020/09/Logo-Buu-dien-VN-01-1024x701.jpg" width="15%" alt=""> Thanh toán khi nhận hàng
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">

                    <div class="card-header white-text bg-danger text-white">
                        THÔNG TIN THANH TOÁN
                    </div>

                    <div class="card-body table-responsive" style="padding-left: 0; padding-right: 0;">
                        <div class="card border-0 ">
                            <div class="card-body pt-0">
                                <?php foreach ($_SESSION['cart'] as $cart) {  ?>
                                    <div class="row  justify-content-between">
                                        <div class="col-auto col-md-6">
                                            <div class="d-flex flex-column flex-sm-row">
                                                <img class=" img-fluid" src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                                <div class="my-auto">
                                                    <div class="row ">
                                                        <div class="col-auto">
                                                            <p class="mb-0" style="font-weight: 500; color:black"><?= $cart[1] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto col-md-2">
                                            <div class="float-left flex-sm-col col-auto  my-auto">
                                                <p class="boxed-1 text-center"><?= $cart[4] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-auto col-md-4">
                                            <div class="float-left flex-sm-col col-auto  my-auto ">
                                                <p><?= number_format($cart[5]) ?> đ</p>
                                            </div>
                                        </div>

                                    </div>
                                    <hr class="my-2">
                                <?php $tong = $tong + $cart[5];
                                } ?>
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="mb-1">Tạm tính</p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b><?= number_format($tong) ?> đ</b></p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p class="mb-1">Vận chuyển</p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b>0</b></p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p><b>Thành tiền</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b class="text-danger"><?= number_format($tong) ?> đ</b></p>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                    </div>
                                </div>
                                <input type="hidden" name="cart" value="<?= $_SESSION['cart'] ?>">
                                <input type="hidden" name="iduser" value="<?= $_SESSION['user']['id_user'] ?>">
                                <input type="hidden" value="<?= $tong ?>" name="total">
                                <div class="row mb-5 mt-4 ">
                                    <div class="input-group">
                                        <input type="search" class="form-control rounded" placeholder="Nhập mã giảm giá" aria-label="Search" aria-describedby="search-addon" />
                                        <button type="button" class="btn btn-secondary">Add Gift Code</button>
                                    </div>
                                </div>
                                <div class="row mt-4 d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-danger active" aria-pressed="true" name="oder" value="1">Đặt hàng</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Panel -->
                </form>
            </div>
            <!-- Grid column -->

        </div>

    </section>
    <!-- Section -->

</div>
<?php include_once "footer.php" ?>