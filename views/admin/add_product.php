
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
                                        <input required type="text" class="form-control" name="ma_hh" readonly placeholder="auto number" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Tên Hàng</label>
                                        <input required type="text" class="form-control" name="ten_hh" placeholder="Tên Hàng">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Đơn giá</label>
                                        <input required type="number" class="form-control" name="don_gia" placeholder="Nhập giá ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Loại hàng</label>
                                        <select required class="form-control" name="ma_loai" id="">
                                            <option value="">Mã loại</option>
                                            <?php foreach ($loai as $l) : ?>
                                                <option value="<?= $l['id_cate'] ?>"><?= $l['name_cate'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Giảm giá %</label>
                                        <input required type="number" class="form-control" name="giam_gia" placeholder="Theo phần trăm" max="100" min="0">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Hình</label>
                                        <input class="form-control" type="file" name="hinh" multiple>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <textarea class="form-control ckeditor" name="mo_ta" rows="3"></textarea>
                                </div>


                                <button class="btn btn-primary" type="submit" name="btn_insert">Thêm</button>
                                <button class="btn btn-info"><a href="?ctr=list_product" class="text-white">Danh sách</a></button>
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