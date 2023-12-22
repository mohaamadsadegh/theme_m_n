<?php

class db
{
    private $name,$tbname,$condition,$value;

    private function wbdb()
    {
        global $wpdb;
        return $wpdb;
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
        $sql="UPDATE {$this->tbname} set {$this->name}='{$this->value}' WHERE {$this->condition}";
        return $this->wbdb()->get_row("$sql");
    }
    private function getQuery ()
    {
        $sql="SELECT {$this->name} FROM {$this->tbname} WHERE {$this->condition};";
        return $this->wbdb()->get_row("$sql");
    }
    public function getQueryAdminSetting ($name)
    {
        $sql="SELECT data_value FROM wp_comma_admin WHERE data_name='$name';";
        return $this->wbdb()->get_row("$sql");
    }
}