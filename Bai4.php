<meta charset="UTF-8">
<form action="menu.php" method="post" style="border: solid red 3px;display: inline-block;">
    <table>
        <tr><h1 style="text-align: center">Thực Đơn</h1></tr>
        <tr>
            <td style="padding: 50px">
                <h2>Món Khai Vị</h2>
                <select multiple name="khaivi[]" size="4">
                <option value="mon 1"> Gỏi ngó sen</option>
                <option value="mon 2"> Salat cá ngừ</option>
                <option value="mon 3"> Bò trộn rau thơm</option>
                <option value="mon 4"> Thịt nguội</option>
                </select>
            </td>
            <td style="padding: 50px">
                <h2>Món chính</h2>
                <select multiple name="monchinh[]" size="4">
                <option value="mon 1"> Bò hầm</option>
                <option value="mon 2"> Cá chẽm sốt cà</option>
                <option value="mon 3"> Tôm rang muối</option>
                <option value="mon 4"> Cua sốt me</option>
                </select>
            </td>
            <td style="padding: 50px">
                <h2>Món tráng miệng</h2>
                <select multiple name="trangmieng[]" size="4">
                <option value="mon 1"> Chè hạt sen</option>
                <option value="mon 2"> Bánh flan</option>
                <option value="mon 3"> Rau câu</option>
                </select>
            </td>
        </tr>
        <tr >
            <th>
                <input type="submit" name="sub">
            </th>
        </tr>    
    </table>
</form>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

