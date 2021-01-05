<?php
// Definisikan class Menu
class Menu {
    // Deklarasikan property $name
    public $name;

    // Definisikan constructor
    public function __construct(){
        echo 'Sebuah instance telah diciptakan.';
    }
    
    // Definisikan method hello
    public function hello(){
        echo 'Saya adalah '.$this->name;
    }
}

// Tetapkan instance baru dari kelas Menu ke variable $curry
$curry = new Menu();

// Tetapkan 'GULAI' ke property name $curry
$curry->name = 'GULAI';

// Cetak property name $curry
echo $curry->name;
echo '<br>';

// Panggil method hello menggunakan $curry
$curry->hello();
echo '<br>';

// Tetapkan instance baru dari kelas Menu ke variable $pasta
$pasta = new Menu();

// Tetapkan 'PASTA' ke property name $pasta
$pasta->name = 'PASTA';

// Cetak property name dari $pasta
echo $pasta->name;

// Panggil method hello menggunakan $pasta
$pasta->hello();
?>