<?php

class Connect {
  private $server = 'localhost';
  private $user = 'root';
  private $password = '';
  private $db = 'j2school';
  private function connect() {
    $connect = mysqli_connect('localhost', 'root', '', 'j2school');
    mysqli_set_charset($connect,'utf8');
    return $connect;
  }
  public function select($sql) {
    $connect = $this->connect();
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
  }
  public function execute($sql) : void {
    $connect = $this->connect();
    mysqli_query($connect, $sql);
    mysqli_close($connect);
  }
}