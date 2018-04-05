<?PHP include('config.php')?>
<html>
    <title></title>
    <head> 
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="post">
            Username <input type="text" name="username" placeholder=" nhap ten dang nhap "value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
            Password <input type="password" name="password" placeholder="nhap mat khau" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"><br><br>
            <input type="submit" name="nhap" value="dang nhap">
        </form>
        <?PHP
        if(!empty($_POST['username'])&& !empty($_POST['password'])):?>
            <?PHP if(($_POST['username']=='admin') && ($_POST['password']=='admin')):?>
                <?PHP foreach ($users as $item):?>
                    <?PHP if(($item['username']==$_POST['username'])&&($item['password']==$_POST['password'])):?>
                        <?php header('Location: admin.php'); ?>
                    <?PHP endif?>
                <?PHP endforeach?>
            <?PHP endif?>
            <?PHP if(($_POST['username']=='user') && ($_POST['password']=='user')):?>
                <?PHP foreach ($users as $item):?>
                    <?PHP if(($item['username']==$_POST['username'])&&($item['password']==$_POST['password'])):?>
                        <?php header('Location: user.php'); ?>
                    <?PHP endif?>
                <?PHP endforeach?>
            <?PHP endif?>
        <?PHP endif;?>
        
    </body>
    
</html>
