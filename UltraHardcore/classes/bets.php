class bets 
{
    function connect()
    {
        $db = new database();
        $db->connect();
    }
    function viewbet($bet,$season,$survivor)
    {
        $table = "Bets";
        $wheretotal = "`Season` = $season AND `Survivor` = $survivor";
        $wherereturned = "WHERE `Bet` = '" .$bet . "' AND `Season` = " . $season . " AND `Survivor` = " . $survivor;
        
        $result = mysql_query($totalbets);
        $num = mysql_numrows($result);
        $result2 = mysql_query($rowsrenturned);
        $num2 = mysql_numrows($result2);
        $return =  round(($num2/$num) * 100);
        
        return $return;
    }
    
    function highest($bet,$season,$survivor)
    {
        $rowsrenturned = "SELECT * FROM `Bets` WHERE `Bet` = '$bet' AND `Season` = $season AND `Survivor` = $survivor";
               
        $result = mysql_query($rowsrenturned);
        $num = mysql_numrows($result);
               
        return $num;
    }
   
    function makebet($bet,$season,$survivor)
    {
        $IP =  $_SERVER["REMOTE_ADDR"];
        $querycheckIP = "SELECT * FROM `Bets` WHERE `IP`= '$IP' AND `Season` = $season AND `Survivor` = $survivor";
        $result = mysql_query($querycheckIP);
        $num = mysql_numrows($result);
       
        if($num < 2)
        {           
            if($bet == "guude")
            {
                $bet = 1;
            }
            elseif($bet == "pause")
            {
                $bet = 2;
            }
            elseif($bet == "beef")
            {
                $bet = 3;
            }
            elseif($bet == "baj")
            {
                $bet = 4;
            }
            
            $query = "INSERT INTO Bets (`Season`, `Survivor`, `Bet`,`IP`) VALUES ($season,$survivor,$bet,'$IP')";
                       
            mysql_query($query);
            $show = "bet";
        }
        else
        {
           $show = "error";
        }
        
        return $show;
    }
   
    function playvideo($uploader)
    {             
        $querycheckIP = "SELECT * FROM `LastVideos` WHERE `Uploader`= '$uploader'";
        $result = mysql_query($querycheckIP);
        $row = mysql_fetch_array($result);
               
        $link = $row['Link'];
        $episode = $row['Episode'];
               
        $return = "<a href='$link'>$uploader</a>($episode)";
        return ($return);
    }
}
   
}