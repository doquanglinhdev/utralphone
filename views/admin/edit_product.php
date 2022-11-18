
<?php include_once "header.php" ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include_once "nav.php" ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">

                            <form action="index.php?ctr=save_product" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Mã hàng hóa</label>
                                        <input required type="text" class="form-control" name="ma_hh" readonly value="<?= $pro_one['id_pro'] ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Tên Hàng</label>
                                        <input required type="text" class="form-control" name="ten_hh" value="<?= $pro_one['name_pro'] ?>" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Đơn giá</label>
                                        <input required type="number" class="form-control" name="don_gia" value="<?= $pro_one['price'] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Loại hàng</label>
                                        <select name="ma_loai" required class="form-control">
                                            <?php foreach ($cate_pro as $l) : ?>
                                                <option value="<?= $l['id_cate'] ?>" <?= ($l['id_cate'] == $pro_one['id_cate']) ? 'selected' : '' ?>>
                                                    <?= $l['name_cate'] ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Giảm giá %</label>
                                        <input required type="number" class="form-control" name="giam_gia"  max="100" min="0" value="<?= $pro_one['sale_pro'] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Hình</label>
                                        <input class="form-control" type="file" name="hinh" multiple>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <textarea class="form-control ckeditor" name="mo_ta" rows="3" ><?= $pro_one['short_des'] ?></textarea>
                                </div>


                                <button class="btn btn-primary" type="submit" name="btn_insert">Lưu</button>
                                <button class="btn btn-info"><a href="?ctr=list_product" class="text-white">Quay lại</a></button>
                            </form>
                            <?php if (isset($_COOKIE['success'])) : ?>
                                <p class="font-weight-bold text-success">
                                    <?= $_COOKIE['success'] ?>
                                </p>
                            <?php endif ?>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <<?php include_once "footer.php" ?>