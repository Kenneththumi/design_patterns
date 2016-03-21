<?php
/**
 * Cytonn Technologies
 * @author Kenneth Thumi<kthumi.cytonn.com>
 *
 */
   class database
{
	public static $connection;
	//the constuctor is private such that class cannot be instantiated elsewhere
	private function __construct(){
		//connection code usually comes here
	echo "connection created\n";
	}
    public static function connect()
    {  

						if (!isset(self::$connection))
						{	
						//connect to the database if there is no connection
						  self::$connection=new database;
						}
	//if there is connection continue
	  return self::$connection;

	} 


    /*public static function query($sql)
    {
     mysql_query($sql);
    }*/
   
}

$conn1=database::connect();
$conn2=database::connect(); //this will not be instantiated.

?>
