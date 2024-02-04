<?php
class Newsletter
{
    private $email;

    // Constructor
    public function __construct($email)
    {
        $this->email = $email;
    }

    // Getter method
    public function getEmail()
    {
        return $this->email;
    }
}
?>
