<?php

class Base64 {
    // Attributes
    private $encrypted;
    private $decrypted;

    // __construct()
    public function __construct($t) {
        if (preg_match('|^[a-zA-Z0-9/+]*={0,2}$|', $t)) {
            $this->encrypted = $t;
        }
        else {
            $this->decrypted = $t;
        }
    }

    // Methods
    public function decrypt() {
        $this->decrypted = base64_decode($this->encrypted);
        return $this->decrypted;
    }

    public function encrypt() {
        $this->encrypted = base64_encode($this->decrypted);
        return $this->encrypted;
    }

    // Getters and Setters
    public function getEncrypted()
    {
        return $this->encrypted;
    }

    public function setEncrypted($encrypted)
    {
        $this->encrypted = $encrypted;
    }

    public function getDecrypted()
    {
        return $this->decrypted;
    }

    public function setDecrypted($decrypted)
    {
        $this->decrypted = $decrypted;
    }
}