<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <p>câu 1</p>
        <p>a)</p>
<?php

    $a = "xin chào các bạn đến với môn học lập trình web 1";
    echo "lập trình web 1";
?>
        <p>b)</p>
        <?PHP
        echo'chào.<br>';
        echo'mừng.<br>';
        echo'các.<br>';
        echo'bạn.<br>';
        echo'đến.<br>';
        echo'với.<br>';
        echo'.........<br>'
        ?>
        <p>Câu2</p>
        <form action="#" method="post">
            <p>Bài Tập Định Dạng Ngày</p>
            Nhập ngày: <input type="text" name="nhapngay" value="">
        </form>
        <?PHP
        if (empty($_POST['nhapngay']))
        {
            echo '   ';
        }else
            {
        echo 'Ngày đã nhập'.$_POST['nhapngay'],'<br>';
        echo 'a. ', substr($_POST['nhapngay'],0,2).'-'.substr($_POST['nhapngay'],3 ,2).'-'.substr($_POST['nhapngay'],8).'<br>';
            }
        ?>
        <p>Câu 3</p>
        <form action="#", method="post">
            <p>Bài tập xử lý mạng</p>
            Nhập mạng >10 phần tử <input style="text" name="mang" value="">
            
        </form>
        <?PHP
        if(empty($_POST['mang']))
        {
            echo'  ';
        } else {
        $a = explode(",", $_POST['mang']);
        echo 'Tổng: '.array_sum($a);
        print"<br>";
        echo 'Lớn nhất: '.max($a);
        print'<br>';
        echo 'Nhỏ nhất: '.min($a);
        print'<br>';
        echo 'Phần tử bị loại bỏ: '.array_pop($a);
        print'<br>';
        }
        ?>
    </body>
</html>