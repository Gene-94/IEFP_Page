<?php

class Database {

    public $connection;
    public $statment;

    function __construct($config, $user, $pass){

        
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        // $dsn = "mysql:localhost;port=3306;dbname=$db_name;user=root;password=$pass";

        $this->connection = new PDO($dsn,$user,$pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $variables_array = null){
        $this->statment = $this->connection->prepare($query);
        $this->statment->execute($variables_array);


        return $this;

    }
    
    public function fetch(){
        $item = $this->statment->fetch();
        if (! $item){
            status_err(404);
        }
        return $item;
    }

    public function fetchAll(){
        $items = $this->statment->fetchAll();
        if(!count($items)){
            return null;
        }
        return $items;
    }

}