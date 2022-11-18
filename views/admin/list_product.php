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
                    <h6 class="m-0 font-weight-bold text-primary">Quản Lý Sản Phẩm</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Hình</th>
                                    <th>Mô Tả</th>
                                    <th>Lượt Xem</th>
                                    <th>Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($product as $value) { ?>
                                    <tr>
                                        <td><?php echo $value["id_pro"] ?></td>
                                        <td><?php echo $value["name_pro"] ?></td>
                                        <td><?php echo $value["price"] ?></td>
                                        <td><?php echo $value["img_pro"] ?></td>
                                        <td><?php echo $value["short_des"] ?></td>
                                        <td><?php echo $value["view"] ?></td>
                                        <td>
                                            <button class="btn btn-warning"><a class="text-white" href="?ctr=edit_product&id=<?php echo $value["id_cate"] ?>">Sửa</a></button>
                                            <button class="btn btn-danger"><a class="text-white" href="?ctr=delete_product&id=<?php echo $value["id_pro"] ?>">Xóa</a></button>
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
    <<?php include_once "footer.php" ?>