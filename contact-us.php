<?php

class ContactUs
{
    private $fullName;
    private $email;
    private $company;
    private $phone;
    private $comment;

    // Constructor
    public function __construct($fullName, $email, $company, $phone, $comment)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->company = $company;
        $this->phone = $phone;
        $this->comment = $comment;
    }

    // Getter methods
    public function getFullName()
    {
        return $this->fullName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getComment()
    {
        return $this->comment;
    }
}

?>
