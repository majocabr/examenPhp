<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-23-21-197-231.compute-1.amazonaws.com");
define("DB_USER", "msqdapuhslnseb");
define("DB_PASS", "9773d294acb082151527d188e9208a8e0a1fee487a8e4fb2f8f9681a26338eb0");
define("DB_NAME", "dem6du1gsprvsq");

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
