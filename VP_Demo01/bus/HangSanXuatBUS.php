<?php
/**
 * Created by PhpStorm.
 * User: ndhuy
 * Date: 11/24/18
 * Time: 10:01 AM
 */

class HangSanXuatBUS
{
    var $hangSanXuatDAO;

    public function __construct()
    {
        $this->hangSanXuatDAO = new HangSanXuatDAO();
    }

    public function GetAll()
    {
        return $this->hangSanXuatDAO->GetAll();
    }

    public function Insert($tenHangSanXuat)
    {
        $hangSanXuatDTO = new HangSanXuatDTO();
        $hangSanXuatDTO->TenHangSanXuat = $tenHangSanXuat;

        $this->hangSanXuatDAO->Insert($hangSanXuatDTO);
    }

    public function Delete($maHangSanXuat)
    {
        $hangSanXuatDTO = new HangSanXuatDTO();
        $hangSanXuatDTO->MaHangSanXuat = $maHangSanXuat;

        $this->hangSanXuatDAO->Detele($hangSanXuatDTO);
    }
}