<?php
/**
 * Created by PhpStorm.
 * User: ndhuy
 * Date: 11/24/18
 * Time: 10:04 AM
 */
    $hangSanXuatBUS = new HangSanXuatBUS();
    $lstHangSanXuatDTO = $hangSanXuatBUS->GetAll();
    foreach ($lstHangSanXuatDTO as $hangSanXuatDTO)
    {
        echo "<p>";
        echo "$hangSanXuatDTO->MaHangSanXuat - $hangSanXuatDTO->TenHangSanXuat - <a href='index.php?a=4&id=$hangSanXuatDTO->MaHangSanXuat'>Xoá</a>";
        echo "</p>";
    }
