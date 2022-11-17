
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

                            <form action="?ctr=save_category" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Mã loại</label>
                                            <input class="form-control" type="text" name="maloai" readonly placeholder="Auto" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Tên loại</label>
                                            <input class="form-control" type="text" name="ten_loai" placeholder="Tên hàng">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="btn_insert" value="1">Thêm</button>
                                <button class="btn btn-info"><a class="text-white" href="?ctr=list_category">Danh sách</a></button>

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

    </div>
    <!-- End of Main Content -->
    <<?php include_once "footer.php" ?>