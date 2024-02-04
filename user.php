<?php

class User {
    private $Emri;
    private $Mbiemri;
    private $Email;
    private $Password;

    public function __construct($Emri, $Mbiemri, $Email, $Password) {
        $this->Emri = $Emri;
        $this->Mbiemri = $Mbiemri;
        $this->Email = $Email;
        $this->Password = $Password;
    }

    public function getEmri() {
        return $this->Emri;
    }

    public function getMbiemri() {
        return $this->Mbiemri;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getPassword() {
        return $this->Password;
    }
}
?>