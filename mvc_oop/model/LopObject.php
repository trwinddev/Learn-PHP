<?php

class LopObject {
  private $ma;
  private $ho;
  private $ten;

  public function __construct($row) {
    $this->ma = $row['ma'] ?? '';
    $this->ho = $row['ho'] ?? '';
    $this->ten = $row['ten'] ?? '';
  }
    public function get_ma() {
      return $this->ma;
    }
    public function get_ho() {
      return $this->ho;
    }
    public function get_ten() {
      return $this->ten;
    }

    public function set_ma($ma) {
      $this->ma = $ma;
    }
    public function set_ho($ho) {
      $this->ho = $ho;
    }
    public function set_ten($ten) {
      $this->ten = $ten;
    }
    public function get_ho_ten() {
      return $this->ho.'.'. $this->ten;
    }
}