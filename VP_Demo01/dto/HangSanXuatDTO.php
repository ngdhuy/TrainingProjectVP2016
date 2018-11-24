<?php
/**
 * Created by PhpStorm.
 * User: ndhuy
 * Date: 11/24/18
 * Time: 9:29 AM
 */

class HangSanXuatDTO
{
    var $MaHangSanXuat;
    var $TenHangSanXuat;
    var $BiXoa;

    public function __construct()
    {
        $this->MaHangSanXuat = 0;
        $this->TenHangSanXuat = "";
        $this->BiXoa = 0;
    }
}