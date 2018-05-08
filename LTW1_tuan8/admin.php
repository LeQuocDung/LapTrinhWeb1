<?PHP include('config.php')?>
<html>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <body>
        <h3 style="text-align: center"> admin </h3>

        <div class="row" style="text-align: center">
            <div class="col-md-6">
                <p> Danh sach admin</p>
        <?PHP
            echo 'Username user: '.$users[1]['username'].'<br>';
            echo 'Password user: '.$users[1]['password'].'<br>';
            echo "type admin: ".$users[1]['type'].'<br>';
        ?>
            </div>
            <div class="col-md-6">
                <p>Danh sach uer</p>
        <?PHP
            echo 'Username user: '.$users[1]['username'].'<br>';
            echo 'Password user: '.$users[1]['password'].'<br>';
            echo"type user: ".$users[1]['type'].'<br>';
        ?>
            </div>  
        </div>
        <a href="index.php">quay lai trang index</a>
    </body>
</html>



