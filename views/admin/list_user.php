<?php include_once "header.php" ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include_once "nav.php" ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quản Lý Khách Hàng</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Họ Tên</th>
                                    <th>Email</th>
                                    <th>Địa Chỉ</th>
                                    <th>Vai trò</th>
                                    <th>Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($user as $value) { ?>
                                    <tr>
                                        <td><?php echo $value["id_user"] ?></td>
                                        <td><?php echo $value["user_name"] ?></td>
                                        <td><?php echo $value["name_user"] ?></td>
                                        <td><?php echo $value["email"] ?></td>
                                        <td><?php echo $value["address"] ?></td>
                                        <td><?php if ($value["role"] == 1) {
                                                echo "<span class='badge badge-danger'>Admin</span>";
                                            } else {
                                                echo "<span class='badge badge-success'>Thành Viên</span>
                                                ";
                                            }; ?></td>
                                        <td>
                                            <button class="btn btn-warning"><a class="text-white" href="">Sửa</a></button>
                                            <button class="btn btn-danger"><a class="text-white" href="?ctr=delete_user&id=<?php echo $value["id_user"] ?>">Xóa</a></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?php include_once "footer.php" ?>