<?php
// set default timezone
date_default_timezone_set('America/Los_Angeles');

//define date and time
$date = date("d M Y H:i:s");

// output
echo strtotime($date);
?> 

<script>
        $(document).ready(function () {
            // Bắt sự kiện khi người dùng click vào button
             $('#calculate').click(function (e) {
                 // Ngăn không cho load lại trang
                 e.preventDefault();
                 //Lấy giá trị của 2 ô input
                 let so1 = $('input[name="so1"]').val(),
                     so2 = $('input[name="so2"]').val();

                 // Gửi request đến file calculate.php để xử lý với tham số là bien1 và bien2
                 $.ajax({
                    url: 'calculate.php',
                    type: 'POST',
                    data: {
                        bien1: so1,
                        bien2: so2
                    },
                     // Nếu thành công thì hiển thị kết quả ra trình duyệt
                     success: function (response) {
                        $('input[name="result"]').val(response);
                     },
                     error: function (error) {
                        console.log(error);
                     }
                 });
             });
        });
</script>