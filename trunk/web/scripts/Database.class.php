<?php
/**
 * Manage queries for a mysql db
 * 
 */
 
class database {
    private $_host = "localhost";
    private $_user = "LinkBiz";
    private $_pass = "fzg60n82hc";
    private $_base = "proj_LinkBiz_7isoybau";
 
    private $_cursor = null;
    private $_ressource = null;
    private $_errorNum = 0;
    private $_errorMsg = '';
 
    /**
     * Shared instance
     */    	
    private static $_instance;
 
    /**
    * Constructor
    * 
    * <p>Create the static instance of the singleton</p>
    * 
    * @name database::__construct()
    * @return void
    */    
    private function __construct () {
    	$this->_ressource = mysql_connect($this->_host, $this->_user, $this->_pass);
		mysql_select_db( $this->_base );
 
		//set utf-8
		$this->query("SET CHARACTER SET utf8;");
		$this->query("SET NAMES utf8;");
    }
 
    /**
    * Clone
    * 
    * <p>Avoid extern copy of instance</p>
    * 
    * @return void
    */    
    private function __clone () {}
 
 
    /**
    * getInstance
    * 
    * <p>Get the shared db instance</p>
    * 
    * @return database instance
    */      
    public static function getInstance () {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
 
        return self::$_instance;
    }    
 
 
    /**
    * getObject
    * 
    * <p>Get one tuple from database (SELECT requests)</p>
    * 
    * @param selection query $sqlquery
    * @return dbrow
    */
	function getObject ( $sql_query ) {
		$this->_cursor = mysql_query ( $sql_query, $this->_ressource );
		if ( $this->_cursor != null ) {
			$object = mysql_fetch_object ( $this->_cursor );
			mysql_free_result ( $this->_cursor );
			return $object;
		}
		return false;
	}
 
	/**
    * getObjects
    * 
    * <p>Get a collection from database (SELECT requests)</p>
    * 
    * @param selection query $sqlquery
    * @return array
    */	
	function getObjects ( $sql_query ) {
		$this->_cursor = mysql_query ( $sql_query, $this->_ressource );
		$objects = array();
		if ( $this->_cursor ) {
			while ( $object = mysql_fetch_object ( $this->_cursor ) )
				array_push ( $objects, $object );
			mysql_free_result ( $this->_cursor );
		}
		return $objects;
	}
 
	/**
	 * Execute a query (INSERT, DELETE, UPDATE,... requests)
	 *
	 * @param sql query to execute $sql_query
	 * @return mysql_query result
	 */		
	function query ( $sql_query ) {
		$this->_errorNum = 0;
		$this->_errorMsg = '';
		$this->_cursor = mysql_query( $sql_query, $this->_ressource );
		if (!$this->_cursor) {
			$this->_errorNum = mysql_errno( $this->_ressource );
			$this->_errorMsg = mysql_error( $this->_ressource ) ." SQL=".$sql_query ;
			echo $this->_errorMsg;
			return false;
		}
		return $this->_cursor;
	}
 
	/**
	 * Get the latest id
	 *
	 * @return lastest id
	 */			
	function getInsertId () {
		if ( $this->_ressource != null )
			return mysql_insert_id( $this->_ressource )	;
		return false;
	}
 
	/**
	 * Check if $table exist
	 *
	 * @param table $table
	 * @return boolean
	 */
	function isTableExist($table){
	    $query = "SHOW TABLES FROM ".$this->_base;
	    $runQuery = mysql_query($query);
 
	    $tables = array();
	    while($row = mysql_fetch_row($runQuery)){
	        $tables[] = $row[0];
	    }
 
	    if(in_array($table, $tables)){
	        return true;
	    }
	    return false;
	}
 
	/**
	 * List all tables of the database
	 *
	 * @return array which contains all tables names
	 */
	function listTables(){
	    $query = "SHOW TABLES FROM ".$this->_base;
	    $runQuery = mysql_query($query);
 
	    $tables = array();
	    while($row = mysql_fetch_row($runQuery)){
	        $tables[] = $row[0];
	    }
	    return $tables;
	}	
 
	/**
	 * List all columns of $table
	 *
	 * @param  $table
	 * @return array which contains all tables names
	 */
	function listColumnsOfTable($table){
	    $query = "SHOW COLUMNS FROM ".$table;
 
	    $columns = array();
	    if (!$result) {  
			return $columns;
		}  
		if (mysql_num_rows($result) > 0) {  
			while ($row = mysql_fetch_assoc($result)) { 
				$columns[] = $row;
			}
		}
		return $columns;
	}
}
$_db = database::getInstance();
?>
