<?php
  class FieldCollection {
    public $fields = array();
    public $areFieldsValid = true;
    public $error = false;

    function addField($name,$value,$label,$required,$message,$regex) {
      $this->fields[$name] = new Field($name,$value,$label,$required,$message,$regex);
    }

    function getLabel($name) {
      return $this->fields[$name]->label;
    }

    function getValue($name) {
      return $this->fields[$name]->value;
    }

    function getEncodedValue($name) {
      return htmlspecialchars($this->fields[$name]->value, ENT_QUOTES);
    }

    function getDecodedValue($name) {
      return htmlspecialchars_decode($this->fields[$name]->value, ENT_QUOTES);
    }

    function setValue($name,$value) {
      $this->fields[$name]->value = $value;
    }

    function assignRequestValues($requestKeyAliases = array()) { 
      foreach($_REQUEST as $requestKey => $requestValue) {
        if( array_key_exists($requestKey, $this->fields) ) {
          if (is_array($requestValue)) {
            $requestValue = implode ("," , $requestValue);
          } 
          $this->fields[$requestKey]->value = trim(str_replace('\\','',$requestValue));
        } else if( array_key_exists($requestKey, $requestKeyAliases) ) {
          $this->fields[ $requestKeyAliases[$requestKey] ]->value = trim(str_replace('\\','',$requestValue));
        }
      }
    }

    function assignSQLRowValues($sqlRow) {
      if (!empty($sqlRow)) {    
        foreach($sqlRow as $rowKey => $rowValue) {
          if( array_key_exists($rowKey, $this->fields) ) {
            $this->fields[$rowKey]->value = trim($rowValue);
            //echo $this->fields[$rowKey]->value." <br/>";
          }
        }
      }  
    }
    
    /*
     * This function validate the field values based on the "required" and "regex" for all 
     * the fields in a FieldCollection instance and encodes HTML characters to avoid cross site scripting (XSS) attacks.
     * 
     * returns: $areFieldsValid 
     */
    function validateFields() {
      foreach($this->fields as $field) { 
        $field->message = ""; //clear message
        if(empty($field->value)) {
          if($field->required == 1) {
            //This field is empty but it is a required field, add an error           
            $field->message = " Required";
            $this->areFieldsValid = false;
          }
        } else {
          //Validate fields based on regular expression pattern
          if(!empty($field->regex) && !preg_match($field->regex, $field->value) ) {
            $field->message = " Invalid Format";
            $this->areFieldsValid = false;
          }       
          //Encode HTML characters
          $field->value = htmlspecialchars($field->value, ENT_QUOTES);
        }
      }
      return $this->areFieldsValid;
    } 
  
  }//end class 
?>