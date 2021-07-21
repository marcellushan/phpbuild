<?php

class DB{

    private $dbHost     =   'localhost';
    private $dbUsername =   'django';
    private $dbPassword =   'django';
    private $dbName     =   'arizona';

    public function __construct(){
        if(!isset($this->db))
            //connect to the db
            try{
                $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
                $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db = $conn;
            }catch(PDOException $e){
                die("Failed to connect with MySQL: " . $e->getMessage());
            }
    }

    // public function getRows(){
    public function getRows($table,$conditions = array()){
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM ' .$table;
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '" .$value."'";
                $i++;
            }
        }
        $query = $this->db->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
        // $data  =[];
        return !empty($data)?$data:false;
    }

    public function insert($table, $data){
        if(!empty($data) && is_array($data)){
            $columns = '';
            $values = '';
            $i =0;
            if(!array_key_exists('created', $data)){
                $data['created'] = date("Y-m-d H:i:s");
            }
            if(!array_key_exists('modified', $data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }

            // $columnString = implode(',', array_keys($data));
            $columnString = 'marc';
            $valueString =":".implode(',:', array_keys($data));
            // return array_keys($data);
            return $columnstring;
        }
    }
}
