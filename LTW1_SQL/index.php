<?PHP
session_start();
?>
<html>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <body>
        <div Style="border: solid greenyellow 3px; text-align: center; padding: 50px;">
            <h3>xin chào các bạn đến với lập trình web 1</h3>
            <?PHP if(empty($_SESSION['y'])):?>
            <a href="login.php">Đăng nhập</a>
            <?PHP endif?>
            <?PHP if(!empty($_SESSION['y'])):?>
            <a href="Logout.php">Đăng Xuất</a>
            <?PHP endif?>

        </div>
        
    </body>
    
</html>

