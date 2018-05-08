<?PHP include('config.php');
session_start();

?>
<html>
    <title></title>
    <meta charset="utf-8">
    <body>
        <h3> user </h3>
    </body>
    <?PHP if(!empty($_SESSION['y'])):?> 
        <?PHP endif; ?>
    <?PHP if(($_SESSION['y'])== 2):?>
    <div>
        <p style="text-align: center">Dach sách user</p>
        <?PHP
            echo 'Username user: '.$users[1]['username'].'<br>';
            echo 'Password user: '.$users[1]['password'].'<br>';
            echo"type user: ".$users[1]['type'].'<br>';
        ?>
    </div>
    <?PHP endif; ?>
    <?PHP if(($_SESSION['y'])== 1):?>
    <div>
        <h3 style="text-align: center"> admin </h3>

        <div class="row" style="text-align: center">
            <div class="col-md-6">
                <p> Danh sách admin</p>
        <?PHP
            echo 'Username user: '.$users[1]['username'].'<br>';
            echo 'Password user: '.$users[1]['password'].'<br>';
            echo "type admin: ".$users[1]['type'].'<br>';
        ?>
            </div>
            <div class="col-md-6">
                <p>Danh sách uer</p>
        <?PHP
            echo 'Username user: '.$users[1]['username'].'<br>';
            echo 'Password user: '.$users[1]['password'].'<br>';
            echo"type user: ".$users[1]['type'].'<br>';
        ?>
            </div>  
        </div>
    </div>
    <?PHP endif; ?>
    <a href="index.php">quay lại trang index</a>
</html>



