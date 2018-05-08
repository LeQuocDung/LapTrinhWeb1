<?PHP include('config.php');
session_start();
   if( !empty($_SESSION['y'])==1)
    {
        header('Location: user.php');
    }
    if( !empty($_SESSION['y'])==2)
    {
        header('Location: user.php');
    }
?>
<html>
    <title></title>
    <head> 
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="login" style="border: solid greenyellow 3px; text-align: center; padding: 50px;">
            <form action="" method="post">
            Username <input type="text" name="username" placeholder=" nhap ten dang nhap "value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
            Password <input type="password" name="password" placeholder="nhap mat khau" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"><br><br>
            <input type="submit" name="nhap" value="Dang nhap">
        </form>
        <?PHP
        if(!empty($_POST['username'])&& !empty($_POST['password']))
            if(($_POST['username']=='admin') && ($_POST['password']=='admin'))
            {
                foreach ($users as $item)
                    if(($item['username']==$_POST['username'])&&($item['password']==$_POST['password']))
                        $_SESSION['y']= 1;
                        header('Location: user.php'); 
                        
            }
            else if(($_POST['username']=='user') && ($_POST['password']=='user'))
            {
                foreach ($users as $item)
                    if(($item['username']==$_POST['username'])&&($item['password']==$_POST['password']))
                        $_SESSION['y']= 2;
                        header('Location: user.php');
            }
                else {
                    $_SESSION['y']= 0;
                    echo 'Nhap sai';    
                }
            ?>
        </div>
        <a href="index.php">quay lại trang index</a>
    </body>
    
</html>
