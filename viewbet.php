<?php
function database()
{
    //    
    //k41257_ultrahc
    
        $username = "k41257_ultrahc";
        $password = "4f52bdb024ee7";
        $database = "k41257_ultrahc";
        //host : localhost
        //pass : Click here to display. 4f52bdb024ee7
        
    $con = mysql_connect(localhost,$username,$password) or die("Unable to connect to database");
    @mysql_select_db($database)  or die("Unable to select database");
}
    
function viewbet($bet,$season,$survivor)
   {
       database();
        //$bet = mysql_real_escape_string($bet);
        //$season = mysql_real_escape_string($season);
       // $survivor = mysql_real_escape_string($survivor);
    
        $totalbets = "SELECT * FROM `Bets` WHERE `Season` = $season AND `Survivor` = $survivor";
        $rowsrenturned = "SELECT * FROM `Bets` WHERE `Bet` = '$bet' AND `Season` = $season AND `Survivor` = $survivor";
        
        $result = mysql_query($totalbets);
        $num = mysql_numrows($result);
        $result2 = mysql_query($rowsrenturned);
        $num2 = mysql_numrows($result2);
        
        $return =  round(($num2/$num) * 100);
        
        return $return;
   }
function highest($bet,$season,$survivor)
  {
      database();
      //$bet = mysql_real_escape_string($bet);
      //$season = mysql_real_escape_string($season);
      //$survivor = mysql_real_escape_string($survivor);
   
      $rowsrenturned = "SELECT * FROM `Bets` WHERE `Bet` = '$bet' AND `Season` = $season AND `Survivor` = $survivor";
       
      $result = mysql_query($rowsrenturned);
      $num = mysql_numrows($result);
       
       return $num;
  } 
   
function makebet($bet,$season,$survivor)
   {       
       database();
       //$bet = mysql_real_escape_string($bet);
       //$season = mysql_real_escape_string($season);
       //$survivor = mysql_real_escape_string($survivor);
       
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
           
       }else{
           $show = "error";
       }
       return $show;
   }
   
function playvideo($uploader)
   {
       database();
       //$uploader = mysql_real_escape_string($uploader);
             
       $querycheckIP = "SELECT * FROM `LastVideos` WHERE `Uploader`= '$uploader'";
       $result = mysql_query($querycheckIP);
       $row = mysql_fetch_array($result);
       
       $link = $row['Link'];
       $episode = $row['Episode'];
       
       $return = "<a href='$link'>$uploader</a>($episode)";
       return ($return);
   }
   
?>