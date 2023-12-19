<?php

class db
{
    private static function mysqli()
    {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $mysqli->set_charset(DB_CHARSET);

        return $mysqli;
    }

    public static function queryType($type, $query)
    {
        $result = self::mysqli()->query("$query");
        if ($type == "get_data"){
            return $result->fetch_all(MYSQLI_ASSOC);
        }elseif($type != "set_data" && $type != "insert_data"){
            echo "نوع کوئری به درستی انتخاب نشده";
            die();
        }
    }
}