<?php
class FactoryDB {
  public $conn = false;
  private $dbhost = 'baseballfactory.com';
  private $dbuser = 'bbf';
  private $dbpwd = 'db4ba$ebB@LL';
  //private $dbname = 'dugout10152012';
  private $dbname = 'dugout';

  function __construct() {
    $this->conn = mssql_connect($this->dbhost,$this->dbuser,$this->dbpwd);
    if (!$this->conn || !mssql_select_db($this->dbname, $this->conn)) {
      echo $strerr = "ERROR: Failed to connect to MSSQL Server: ".mssql_get_last_message();
      return false;
    } else {
      return true;
    }  
  }  
    
  function __destruct() {
    mssql_close ($this->conn);
  }    

 
/*public function connect() {
    $this->conn = mssql_connect('baseballfactory.com','bbf','db4ba$ebB@LL');
    if (!$this->conn || !mssql_select_db('dugout10152012', $this->conn)) {
      echo $strerr = "ERROR: Failed to connect to MSSQL Server: ".mssql_get_last_message();
      return false;
    } else {
      echo "works";
      return true;
    }  
  }*/
          
} // end FactoryDB class
?>