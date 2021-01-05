<?php
class Menu {
  public $name;
  
  // Tambahkan parameter $name ke constructor
  public function __construct($name) {
    // Tetapkan $name ke property name
    $this->name = $name;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}

// Berikan 'GULAI' ke new Menu() sebagai argument
$curry = new Menu('GULAI');
// Berikan 'PASTA' ke new Menu() sebagai argument
$pasta = new Menu('PASTA');
?>

<!-- Cetak property name milik $curry didalam tag <p> -->
<p><?php echo $curry->name ?></p>

<!-- Cetak property name milik $pasta didalam tag <p> -->
<p><?php echo $pasta->name ?></p>