<?php include("Connection.php"); ?>
<?php

class ProcessQuery extends Connection{
    public $connectionString;
    public $dataSet;
    private $sqlQuery;

    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;

function Mysql()    {
    $this -> connectionString = NULL;
    $this -> sqlQuery = NULL;
    $this -> dataSet = NULL;

            $dbPara = new Connection();
            $this -> databaseName = $dbPara -> dbName;
            $this -> hostName = $dbPara -> serverName;
            $this -> userName = $dbPara -> userName;
            $this -> passCode = $dbPara ->passCode;
            $dbPara = NULL;
}

function dbConnect()    {
    $this -> Mysql();
    $this -> connectionString = mysql_connect($this -> serverName,$this -> userName,$this -> passCode);
    mysql_select_db($this -> databaseName,$this -> connectionString);
}

function dbDisconnect() {
    $this -> connectionString = NULL;
    $this -> sqlQuery = NULL;
    $this -> dataSet = NULL;
            $this -> databaseName = NULL;
            $this -> hostName = NULL;
            $this -> userName = NULL;
            $this -> passCode = NULL;
}

function selectAll($tableName)  {
    $this -> sqlQuery = 'SELECT * FROM '.$this -> databaseName.'.'.$tableName;
    $this -> dataSet = mysql_query($this -> sqlQuery,$this -> connectionString);
            return $this -> dataSet;
}

function selectWhere($tableName,$value)   {
    $this -> dbConnect();
    $this -> sqlQuery = "SELECT * FROM ".$tableName." WHERE course_uid = '".$value."'";
    // if($valueType == 'int') {
        // $this -> sqlQuery .= $value;
    // }
    // else if($valueType == 'char')   {
        // $this -> sqlQuery .= "'".$value."'";
    // }
    
    $rows = array();
    $this -> dataSet = mysql_query($this -> sqlQuery,$this -> connectionString);
    while($row = mysql_fetch_array($this -> dataSet))
         $rows[] = $row;
    $this -> sqlQuery = NULL;
    $this -> dbDisconnect();
    return $rows;
    #return $this -> sqlQuery;

}

 function insertInto($tableName,$values) {
    $i = NULL;

    $this -> sqlQuery = 'INSERT INTO '.$tableName.' VALUES (';
    $i = 0;
    while($values[$i]["val"] != NULL && $values[$i]["type"] != NULL)    {
        if($values[$i]["type"] == "char")   {
            $this -> sqlQuery .= "'";
            $this -> sqlQuery .= $values[$i]["val"];
            $this -> sqlQuery .= "'";
        }
        else if($values[$i]["type"] == 'int')   {
            $this -> sqlQuery .= $values[$i]["val"];
        }
        $i++;
        if($values[$i]["val"] != NULL)  {
            $this -> sqlQuery .= ',';
        }
    }
    $this -> sqlQuery .= ')';
            #echo $this -> sqlQuery;
    mysql_query($this -> sqlQuery,$this ->connectionString);
            return $this -> sqlQuery;
    #$this -> sqlQuery = NULL;
}

function selectFreeRun($query)  {
    $this -> dataSet = mysql_query($query,$this -> connectionString);
    return $this -> dataSet;
}

function freeRun($query)    {
    return mysql_query($query,$this -> connectionString);
  }
}
?>