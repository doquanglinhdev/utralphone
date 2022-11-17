<?php 
function setting(){
    if (isset($_SESSION['admin'])) {
        // $loai = category_all();
        renderadmin(
            "setting"
            // ['loai' => $loai],
        );
    } else {
        header("location: index.php?ctr=admin_login");
        exit;
    }
}