<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if($Gender=" ") echo " ";else if($Gender = $_POST["Gender"]) echo $_POST["Gender"];
if(empty($_POST["name"])&& empty($_POST["mail"])&& empty($_POST["web"])&& empty($_POST["comment"])&& empty($_POST["Gender"]))
    {
    echo "             ";
}else{
$Name = $_POST["name"];
$E_Mail = $_POST["mail"];
$Website = $_POST["web"];
$Comment = $_POST["comment"];
$Gender = $_POST["Gender"];
//$Gender = $_POST["male"];
}



?>
<div style="border: solid #7dadd0 3px; padding: 20px 200px 20px 20px; display:inline-block">
<meta charset="UTF-8">
<form method="post" >
    Name: <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" /><br><br>
    E-mail: <input type="text" name="mail" value="<?php echo isset($_POST['mail']) ? $_POST['mail'] : '' ?>" /><br><br>
    Website: <input type="text" name="web"value="<?php echo isset($_POST['web']) ? $_POST['web'] : '' ?>" /><br><br>
    Comment: <textarea rows="5" cols="20" placeholder="Day la vung nhap text" name="comment"  ><?PHP echo isset($_POST['comment']) ? $_POST['comment'] : '' ?></textarea><br><br>
    Gender: <input type="radio" value="Female" name="Gender"<?php if($Gender=='Female')echo "checked"; ?>>Female
    <input type="radio" value="Male" name="Gender"<?php if($Gender=='Male') echo "checked";?>> Male<br><br>
    <input type="submit" name="tim">
</form>
<?PHP
if(empty($_POST["name"])&& empty($_POST["mail"])&& empty($_POST["web"])&& empty($_POST["comment"])&& empty($_POST["Gender"]))
    {
    echo "             ";
}else{
    echo "Name: ".$Name."<br><br>";
    echo "E-Mail: ".$E_Mail."<br><br>";
    echo "Website: ".$Website."<br><br>";
    echo "Comment: ".$Comment."<br><br>";
    echo "Gender: ".$Gender."<br><br>";
   // echo "Gender: ".$Gender"<br><br>";
}
?>
</div>
