<?php
  class Field {
    public $name = "";
    public $value = "";
    public $label = "";
    public $required = "";
    public $message = "";
    public $regex = "";
    
    function __construct($name,$value,$label,$required,$message,$regex) {
      $this->name = $name;
      $this->value = $value;
      $this->label = $label;
      $this->required = $required;
      $this->message = $message;
      $this->regex = $regex;
    }     
  }
?>