
<form name="bai2" method="post" action="bai2.php">
    <input type="#" name="ten" placeholder="Tu khoa...">
    <input type="submit" value="Tim">
    
</form>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (empty($_POST["ten"])){
echo "           ";
}else{
    echo "ket qua tim kiem voi tu khoa: ".$_POST["ten"];
}
?>