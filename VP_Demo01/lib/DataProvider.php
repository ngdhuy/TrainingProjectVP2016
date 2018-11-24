<?php
/**
 * Created by PhpStorm.
 * User: ndhuy
 * Date: 11/24/18
 * Time: 9:22 AM
 */

class DataProvider
{
    public static function ExecuteQuery($sql)
    {
        $con = mysqli_connect("localhost", "root", "root", "BabyShop") or die ("Cannot connect to Database");
        mysqli_query($con,"set name 'utf8'");
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        return $result;
    }
}