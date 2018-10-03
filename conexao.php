<?php
//phpinfo();
class Database{
   public static $db;
   public function instance(){
       if(!self::$db){ self::$db = $this->connect(); }
       return self::$db;
   }

    private function connect(){
	
	$servidor = "localhost";
	$banco    = "sorvete";
	$usuario  = "root";
	$senha    = "";

        $db = new PDO("mysql:host=$servidor;dbname=$banco", "$usuario", "$senha");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}

$db = new Database();
$bd = $db->instance();