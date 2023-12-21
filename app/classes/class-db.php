<?php

class db
{
    private $name,$tbname,$condition,$value;
    private function mysqli()
    {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $mysqli->set_charset(DB_CHARSET);

        return $mysqli;
    }

    public function query($type,$name='',$condition='',$tbname='',$value='')
    {
        $this->value=$value;
        $this->name=$name;
        $this->condition=$condition;
        $this->tbname=$tbname;

        if ($type=='deleteQuery' ||
            $type=='insertQuery' ||
            $type=='updateQuery' ||
            $type=='getQuery')
        {
            return $this->$type();

        }else{
            die();
        }
    }

    private function deleteQuery ()
    {
//        $query="DELETE FROM {$this->tbname} WHERE {$this->condition}";
//        $this->mysqli()->query("$query");
    }
    private function insertQuery ()
    {
//        $query="INSERT INTO {$this->tbname} ({$this->name}) VALUES ({$this->value});";
//        $this->mysqli()->query("$query");
    }
    private function updateQuery ()
    {
        $query="UPDATE {$this->tbname} set {$this->name}='{$this->value}' WHERE {$this->condition}";
        $this->mysqli()->query("$query");
    }
    private function getQuery ()
    {
        $sql="SELECT {$this->name} FROM {$this->tbname} WHERE {$this->condition};";
        $a=$this->mysqli()->query($sql);
        return $a->fetch_all();
    }
    public function getQueryAdminSetting ($name)
    {
        $sql="SELECT data_value FROM wp_comma_admin WHERE data_name='$name';";
        $a=$this->mysqli()->query($sql);
        return $a->fetch_all();
    }
}