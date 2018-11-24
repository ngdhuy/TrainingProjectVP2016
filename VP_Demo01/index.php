<?php
    include_once ("lib/DataProvider.php");
    include_once ("dto/HangSanXuatDTO.php");
    include_once ("dao/HangSanXuatDAO.php");
    include_once ("bus/HangSanXuatBUS.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Danh sách hãng sản xuất</h1>
    <div>
        <a href="index.php?a=2">Thhêm hãng mới</a>
    </div>
    <?php
        $a = 1;
        if(isset($_GET["a"]))
            $a = $_GET["a"];
        switch ($a)
        {
            case 1:
                include("gui/QuanLySanPham.php");
                break;
            case 2:
                include("gui/frmInsertHangSanXuat.php");
                break;
            case 3:
                include("gui/exInsertHangSanXuat.php");
                break;
            case 4:
                include("gui/exDeleteHangSanXuat.php");
                break;
            default:
                include("gui/error.php");
        }
    ?>
</body>
</html>