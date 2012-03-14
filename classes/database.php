class database()
{
    function connect($username,$password,$host,$database)
    {
        $con = mysql_connect($host,$username,$password);
        if (!$con)
          {
          die('Could not connect: ' . mysql_error());
          }
        
        mysql_select_db($database, $con);
        
        return null;
    }
    
    function select($column,$from,$where,$countrows,$fetcharray)
    {
        if($where  = null)
        {
            $query = "SELECT " . $column . " FROM " . $from;
        }else{
            $query = "SELECT " . $column . " FROM " . $from . " WHERE " . $where;
        }
        
        $result = mysql_query($query);
        
        if($countrows == "1")
        {
            mysql_numrows($result);
        }
        
        if($fetcharray == "1")
        {
            mysql_fetch_array($result);
        }
    }
    
    function insert($columns, $table,$values)
    {
        $query = "INSERT INTO " $table, " (" . $columns . ") VALUES (" . $values . ")";
        $result = mysql_query($query);
    }
}