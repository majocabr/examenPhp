<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-107-20-226-93.compute-1.amazonaws.com");
define("DB_USER", "gidmuyutqimolp");
define("DB_PASS", "cd5b5bebe3cdee715cbbee218dbac75663399a1e8f20122e2b3c723e37adc3fb");
define("DB_NAME", "d5pd0jcvebon48");

//define("DB_HOST", "localhost");
//define("DB_USER", "postgres");
//define("DB_PASS", "postgres");
//define("DB_NAME", "comunidad");



class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
