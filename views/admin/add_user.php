
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
                            <form action="?ctr=creat_user" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">User Name</label>
                                            <input class="form-control" type="text" name="username" value="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Họ Và Tên</label>
                                            <input class="form-control" type="text" name="hoten" value="" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" type="email" name="email" value="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Số Điện Thoại</label>
                                            <input class="form-control" type="text" name="sdtt" value="" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Mật Khẩu</label>
                                            <input class="form-control" type="text" name="pass" value="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Vai trò:</label>
                                            <select class="form-control" name="vaitro" id="">
                                                <option value="0">Thành Viên</option>
                                                <option value="1">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col">
                                        <div class="form-group">
                                            <label for="">Địa Chỉ</label>
                                            <input class="form-control" type="text" name="address" value="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Hình</label>
                                            <input class="form-control" type="text" name="" value="" disabled>
                                        </div>
                                    </div>
                                   
                                </div>

                                <button class="btn btn-primary" type="submit" name="create" value="ok">Tạo</button>
                                <button class="btn btn-info"><a class="text-white" href="?ctr=user">Hủy</a></button>

                            </form>
                        </div>
                        <!-- /.card -->
                        <?php if (isset($_COOKIE['success'])) : ?>
                                <p class="font-weight-bold text-success">
                                    <?= $_COOKIE['createe'] ?>
                                </p>
                            <?php endif ?>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?php include_once "footer.php" ?>