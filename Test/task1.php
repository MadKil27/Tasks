<?php

require "connection.php";

final class init{
    //Конструктор
    function __construct(){
        $this->create();
        $this->fill();
    }
    // Функция для создания таблицы
    private function create(){
        global $conn;
        $sql = "CREATE TABLE test(
            id INT NOT NULL AUTO_INCREMENT, 
            PRIMARY KEY (id),
            username varchar(30),
            phone varchar(12),
            position varchar(30),
            result ENUM('normal','success') NOT NULL
            )";
        if($conn->query($sql)){
            echo "Таблица успешно создана!<br>";
        } else {
            echo "Данная таблица уже существует!<br>";
        }
    }
    // Функция для автозаполнения таблицы
    private function fill(){
        global $conn;
        $names = Array("Jack","Mary","Dmitry","Fibi");
        $positions = Array("Engeneer","Doctor","Cook","Killer");
        $results = Array("normal","success");
        $sql = "INSERT INTO test(username,phone,position,result) VALUES ";
        $sql3 = "";
        for($i = 0; $i < 8; $i++){
            $sql2 = "(
                '".$names[array_rand($names)]."',
                '".rand(100000000000,999999999999)."',
                '".$positions[array_rand($positions)]."',
                '".$results[array_rand($results)]."'),";
            $sql3.= $sql2;
        }
        $sql = $sql . rtrim($sql3,",");
        if($conn->query($sql)){
            echo "Данные успешно занесены в таблицу!<br>";
        } else {
            echo "Возникли проблемы при добавлении данных!<br>";
        }
    }
    // Функция для получения данных из таблицы
    public function get(){
        global $conn;
        $results = Array("normal","success");
        $sql = "SELECT * FROM test WHERE result = '".$results[array_rand($results)]."'";
        if($conn->query($sql)){
            foreach ($conn->query($sql) as $row) {
                print_r($row);
                echo "<br>";
            }
        } else {
            echo "Данные не найдены в таблице!";
        }
    }
}

$newInit = new init();
$newInit->get();

