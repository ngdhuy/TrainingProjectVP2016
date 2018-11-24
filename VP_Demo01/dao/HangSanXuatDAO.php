<?php
/**
 * Created by PhpStorm.
 * User: ndhuy
 * Date: 11/24/18
 * Time: 9:32 AM
 */

class HangSanXuatDAO
{
    public function GetAll()
    {
        $sql = "SELECT MaHangSanXuat, TenHangSanXuat, BiXoa FROM HangSanXuat";
        $result = DataProvider::ExecuteQuery($sql);
        $lstHangSanXuatDTO = array();
        while($row = mysqli_fetch_array($result))
        {
            extract($row);
            $hangSanXuatDTO = new HangSanXuatDTO();
            $hangSanXuatDTO->MaHangSanXuat = $MaHangSanXuat;
            $hangSanXuatDTO->TenHangSanXuat = $TenHangSanXuat;
            $hangSanXuatDTO->BiXoa = $BiXoa;

            $lstHangSanXuatDTO[] = $hangSanXuatDTO;
        }

        return $lstHangSanXuatDTO;
    }

    public function GetAllByAvailable()
    {
        $sql = "SELECT MaHangSanXuat, TenHangSanXuat, BiXoa FROM HangSanXuat WHERE BiXoa = 0 ";
        $result = DataProvider::ExecuteQuery($sql);
        $lstHangSanXuatDTO = array();
        while($row = mysqli_fetch_array($result))
        {
            extract($row);
            $hangSanXuatDTO = new HangSanXuatDTO();
            $hangSanXuatDTO->MaHangSanXuat = $MaHangSanXuat;
            $hangSanXuatDTO->TenHangSanXuat = $TenHangSanXuat;
            $hangSanXuatDTO->BiXoa = $BiXoa;

            $lstHangSanXuatDTO[] = $hangSanXuatDTO;
        }

        return $lstHangSanXuatDTO;
    }

    public function GetByID($maHangSanXuat)
    {
        $sql = "SELECT MaHangSanXuat, TenHangSanXuat, BiXoa FROM HangSanXuat WHERE BiXoa = 0 AND MaHangSanXuat = $maHangSanXuat";
        $result = DataProvider::ExecuteQuery($sql);
        if($result == null)
            return null;
        else
        {
            $row = mysqli_fetch_array($result);
            extract($row);
            $hangSanXuatDTO = new HangSanXuatDTO();
            $hangSanXuatDTO->MaHangSanXuat = $MaHangSanXuat;
            $hangSanXuatDTO->TenHangSanXuat = $TenHangSanXuat;
            $hangSanXuatDTO->BiXoa = $BiXoa;

            return $hangSanXuatDTO;
        }
    }

    public function Insert(HangSanXuatDTO $hangSanXuatDTO)
    {
        $sql = "INSERT INTO HangSanXuat(TenHangSanXuat, BiXoa) VALUES ('$hangSanXuatDTO->TenHangSanXuat', $hangSanXuatDTO->BiXoa)";
        DataProvider::ExecuteQuery($sql);
    }

    public function Detele(HangSanXuatDTO $hangSanXuatDTO)
    {
        $sql = "DELETE FROM HangSanXuat WHERE MaHangSanXuat = $hangSanXuatDTO->MaHangSanXuat";
        DataProvider::ExecuteQuery($sql);
    }

    public function SetDelete(HangSanXuatDTO $hangSanXuatDTO)
    {
        $sql = "UPDATE HangSanXuat SET BiXoa = 1 WHERE MaHangSanXuat = $hangSanXuatDTO->MaHangSanXuat";
        DataProvider::ExecuteQuery($sql);
    }

    public function UnsetDelete(HangSanXuatDTO $hangSanXuatDTO)
    {
        $sql = "UPDATE HangSanXuat SET BiXoa = 0 WHERE MaHangSanXuat = $hangSanXuatDTO->MaHangSanXuat";
        DataProvider::ExecuteQuery($sql);
    }

    public function Update(HangSanXuatDTO $hangSanXuatDTO)
    {
        $sql = "UPDATE HangSanXuat SET TenHangSanXuat = '$hangSanXuatDTO->TenHangSanXuat', BiXoa = 0 WHERE MaHangSanXuat = $hangSanXuatDTO->MaHangSanXuat";
        DataProvider::ExecuteQuery($sql);
    }
}