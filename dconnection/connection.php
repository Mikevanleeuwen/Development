<?php

/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 16-2-2016
 * Time: 09:00
 */




class Connection{
    public $host;
    public $user;
    public $passw;
    public $name;
    public $con;


    public function __construct()
    {
        $this->setDefaults();
        $this->makeCon();
    }

    public function setDefaults(){
        $configures = new dbconfigure();
        $this->host = $configures->host;
        $this->user = $configures->user;
        $this->passw = $configures->passw;
        $this->name = $configures->name;

    }


    public function makeCon()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->passw);
        if(mysqli_connect_errno($this->con)){
            echo 'failed to connect to MSQL: '.mysqli_connect_error();
        }
        $db_selected = mysqli_select_db($this->con, 'gemeente');
        if(!$db_selected){
            mysqli_query($this->con,'CREATE DATABASE gemeente');
            $db_selected = mysqli_select_db($this->con, 'gemeente');
        }
        $this->con = $db_selected;

    }

    public function getData($table, $what)
    {
        $query = "SELECT $what FROM $table";
        $result = mysqli_query($this->con, $query);
        $data = mysqli_fetch_all($result);
        return $data;
    }

    public function getColNames($table)
    {
        $result = mysqli_query($this->con, "DESC $table");
        $cols = mysqli_fetch_all($result);
        return $cols;

    }

    public function destroyConnection()
    {
        mysqli_close($this->con);
    }

    public function checkLogin($table, $loginName, $password)
    {
        

    }




}