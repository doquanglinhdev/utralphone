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
                                    <th>Tên Loại</th>
                                    <th>Trạng thái Menu</th>
                                    <th>Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cate as $value) { ?>
                                    <tr>
                                        <td><?php echo $value["id_cate"] ?></td>
                                        <td><?php echo $value["name_cate"] ?></td>
                                        <td><?php if($value["role"] == 1){
                                                echo "<span class='badge badge-success'>Hiện</span>
                                                ";
                                        } else {
                                            echo "<span class='badge badge-dark'>Ẩn</span>
                                            ";
                                        }  ?></td>
                                        <td>
                                            <button class="btn btn-warning"><a class="text-white" href="?ctr=edit_category&id=<?php echo $value["id_cate"] ?>">Sửa</a></button>
                                            <button class="btn btn-danger"><a class="text-white" href="?ctr=delete_category&id=<?php echo $value["id_cate"] ?>">Xóa</a></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                        <div class="thongbao">
                            <?php if (isset($_COOKIE['edit'])) : ?>
                                <p class="font-weight-bold text-success">
                                    <?= $_COOKIE['edit'] ?>
                                </p>
                            <?php endif ?>
                        </div>
                    </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <<?php include_once "footer.php" ?>