<?php
function show_recover()
{
    render("recovery");
}
function recovery()
{
    $title = "Recovery Password - UtraPhone";
    extract($_POST);
    if (isset($_POST['recoverypass'])) {
        $data = [
            $mail
        ];
        $checkmail = checkmail($data);
        if (is_array($checkmail)) {
            setcookie("successmail", "Mật khẩu của bạn đã gửi về hòm thư. Vui lòng kiểm tra hòm thư .", time() + 2);
            $pas = $checkmail['pass'];
            $contten = "Mật khẩu của bạn là: " . $pas;
            sentmail($mail, $contten, $title);

            echo "<script>window.location.href='index.php?ctr=recovery';</script>";
            // echo ("<script>location.href=index.php</script>");
            // setcookie("use", "hihihi", time() + 2);
            // setcookie("successmail", "$pas", time() + 2);
            // setcookie("mail", "$mail", time() + 2);
            // setcookie("style", "color:green;font-weight:700", time() + 2);
            // header("location: index.php?ctr=recover");


        } else {
            setcookie("successmail", "Email chưa đăng kí !", time() + 2);
            // setcookie("use", "$user", time() + 2);
            // setcookie("successmail", "Thông tin không chính xác", time() + 2);
            // setcookie("mail", "$mail", time() + 2);
            // setcookie("style", "color:red;font-weight:700", time() + 2);
            header("location: index.php?ctr=recovery");
        }
        exit;
    }
}
