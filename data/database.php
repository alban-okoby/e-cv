<?php

class DataBase
{
	private static $hoostName = "localhost";
    private static $dbName = "php_portfolio";
    private static $userName = "root";
    private static $userPassword = "";
	
	public static $connexion = null;

	public static function connect()
	{
		
		try{
			self::$connexion = new PDO("mysql:host=".self::$hoostName.";dbname=".self::$dbName,self::$userName,self::$userPassword);
			
			self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
		}  
		catch(PDOException $error){
			echo '<i style="color:red; font-size:3rem"> Connection failed:' .$error->getMessage() .'</i>';
		}
		return self::$connexion;

	}
	public static function disconnect()
	{
		self::$connexion = null;
	}
}
DataBase::connect();
    
