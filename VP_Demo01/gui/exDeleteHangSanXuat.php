<?php
/**
 * Created by PhpStorm.
 * User: ndhuy
 * Date: 11/24/18
 * Time: 10:34 AM
 */

if(isset($_GET["id"]))
{
    $maHangSanXuat = $_GET["id"];
    $hangSanXuatBUS = new HangSanXuatBUS();
    $hangSanXuatBUS->Delete($maHangSanXuat);
}

header("location:index.php");