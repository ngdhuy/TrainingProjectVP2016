<?php
/**
 * Created by PhpStorm.
 * User: ndhuy
 * Date: 11/24/18
 * Time: 10:25 AM
 */

if(isset($_POST["txtTenHangSanXuat"]))
{
    $tenHangSanXuat = $_POST["txtTenHangSanXuat"];

    $hangSanXuatBUS = new HangSanXuatBUS();
    $hangSanXuatBUS->Insert($tenHangSanXuat);
}

header("location:index.php");
