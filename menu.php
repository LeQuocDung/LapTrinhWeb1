<!DOCTYPE html>
<html>
<head>
	<title>Menu thuc don da chon</title>
	<meta charset="utf-8">
</head>
    <body>
        <div>
            <div  style="padding-left: 130px; font-size: 28px; margin-bottom: 20px;">
                <div >Thực đơn đã chọn</div>
                    
            </div>
		
            <table border="1px">
                <tr>
                    <td style="padding-right: 40px;">
                        khai vi:<br>
                        <?PHP
                        if(!empty($_POST['khaivi'])){
                            foreach ($_POST['khaivi'] as $kv){
                                echo $kv. '<br>';
                            }
                        }
                        
                        ?>
                    </td >
                    <td style="padding-right: 40px;">
                        Món chính:<br>
                       <?PHP
                        if(!empty($_POST['monchinh'])){
                            foreach ($_POST['monchinh'] as $kv){
                                echo $kv. '<br>';
                            }
                        }
                        
                        ?>
                    <td style="padding-right: 40px;">
                        Món tráng miệng:<br>
                             <?PHP
                        if(!empty($_POST['trangmieng'])){
                            foreach ($_POST['trangmieng'] as $kv){
                                echo $kv. '<br>';
                            }
                        }
                        
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>