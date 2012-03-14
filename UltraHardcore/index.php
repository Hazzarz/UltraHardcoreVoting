
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ultra Hardcore Predictions - Home</title>
    
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap.js"></script>   
     
     <script type="text/javascript">
     
       var _gaq = _gaq || [];
       _gaq.push(['_setAccount', 'UA-9536417-7']);
       _gaq.push(['_trackPageview']);
     
       (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
       })();
     
     </script>
    
  </head>

  <body>
    <?php
    include ("viewbet.php");
    database();
    if(isset($_GET['complete'])){  ?>
                      <div class="alert fade in">
              <a class="close" data-dismiss="alert" href="#">&times;</a>
              <center><strong>Bet sucessful!</strong> Thanks for betting!</center>
            </div>
            <?php }?>
            
    <?php if(isset($_GET['error'])){  ?>
              <div class="alert fade in">
      <a class="close" data-dismiss="alert" href="#">&times;</a>
      <center><strong>Oops!</strong> Something went wrong, try again or <a href="http://twitter.com/HazzarZ">contact me</a>.</center>
    </div>
    <?php }
    ?>    
    
        <?php if(isset($_GET['ip'])){  ?>
              <div class="alert fade in">
      <a class="close" data-dismiss="alert" href="#">&times;</a>
      <center><strong>Too many bets!</strong> You can only vote twice on a catagory, if you believe this to be a mistake <a href="http://twitter.com/HazzarZ">contact me</a>.</center>
    </div>
    <?php }
    ?>   
    
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <ul class="nav">
              <li class="active"><a href="/index">Home</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="hero-unit">
        <h1>Super Hardcore</h1>
        <p>Ultra Hardcore is a video series staring <?php echo(playvideo(Guude) . ", " . playvideo(PauseUnpause) . ", " . playvideo(VintageBeef). ", " . playvideo(W92Baj)); ?>, 
        <p>To bet on a player find the season you want to bet on, then click on the button. Your vote will be counted if sucessful and be will be counted when there is data.
        <p>The current face on the prediction represents who has the most votes, to find out how people have voted click "Bet Info"
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>
      
      <ul class="nav nav-tabs">
        <li><a href="#season1" data-toggle="tab">Season 1</a></li>
        <li  class="active"><a href="#season2" data-toggle="tab">Season 2</a></li>
        <li><a href="#season3" data-toggle="tab">Season 3</a></li>
      </ul>
      
      <div class="tab-content">
      
        <div class="tab-pane" id="season1" >
          <div class="row">
          <div class="span3">
            <h2><center>Actual<br />Survivor</center></h2>
             <p><center><img src="assets/img/characters/VintageBeef.png"></center></p>
             <p><center><a class="btn " href="#" data-toggle="collapse" data-target="#S1W" >Bet Info &raquo;</a></p>
             <div id="S1W" class="collapse toggle"><p>No Data</p></div>
             </div>
             
          <div class="span3">
            <h2><center>Actual<br />First Death</center></h2>
             <p><center><img src="assets/img/characters/w92Baj.png"></center></p>
             <p><center><a class="btn" href="#" data-toggle="collapse" data-target="#S1FD" >Bet Info &raquo;</a></p>
              <div id="S1FD" class="collapse toggle"><p>No Data</p></div>
              </div>
              
          <div class="span3">
            <h2><center>Actual<br />Second Death</center></h2>
            <p><center><img src="assets/img/characters/Guude.png"></center></p>
            <p><center><a class="btn" href="#" data-toggle="collapse" data-target="#S1SD" >Bet Info &raquo;</a></p>
            <div id="S1SD" class="collapse toggle"><p>No Data</p></div>
            </div>
            
                  <div class="span3">
            <h2><center>Actual<br />Second Place</center></h2>
            <p><center><img src="assets/img/characters/PauseUnpause.png"></center></p>
            <p><center><a class="btn" href="#" data-toggle="collapse" data-target="#S1SP" >Bet Info &raquo;</a></p>
            <div id="S1SP" class="collapse toggle"><p>No Data</p></div>
          </div>
          
        </div>
        
        
        <div class="row">
          <div class="span3">
            <h2><center>Prediction<br />Survivor</center></h2>
             <p><center><img src="assets/img/characters/Guude.png"></center></p>
            <p><center><a class="btn btn-primary disabled" href="#">Make Bet &raquo;</a></center></p>
          </div>
          
          <div class="span3">
            <h2><center>Prediction<br />First Death</center></h2>
             <p><center><img src="assets/img/characters/w92Baj.png"></center></p>
            <p><center><a class="btn btn-primary disabled" href="#">Make Bet &raquo;</a></center></p>
         </div>
          <div class="span3">
            <h2><center>Prediction<br />Second Death</center></h2>
            <p><center><img src="assets/img/characters/PauseUnpause.png"></center></p>
            <p><center><a class="btn btn-primary disabled" href="#">Make Bet &raquo;</a></center></p>
          </div>
          
            <div class="span3">
            <h2><center>Prediction<br />Second Place</center></h2>
            <p><center><img src="assets/img/characters/VintageBeef.png"></center></p>            
            <p><center><a class="btn btn-primary disabled" href="#">Make Bet &raquo;</a></center></p>
            </div>
        </div>
    </div>
    
        <div class="tab-pane active" id="season2">
              <div class="row">
         <div class="span3">
               <h2><center>Actual<br />Survivor</center></h2>
               <p><center><img src="assets/img/characters/Guude.png"></center></p>
            <p><center><a class="btn" href="#" data-toggle="collapse" data-target="#S2S1" >Bet Info &raquo;</a></p></center>
            
            <div id="S2S1" class="collapse toggle"><p>
            <div class="progress">
            <div class="bar"
            style="width: <?php echo(viewbet(1,2,1)); ?>%">Guude(<?php echo(viewbet(1,2,1)); ?>%)</div>
            </div>
            <div class="progress">
            <div class="bar"
            style="width: <?php echo(viewbet(2,2,1)); ?>%">PauseUnpause(<?php echo(viewbet(2,2,1)); ?>%)</div>
            </div>
            <div class="progress">
            <div class="bar"
            style="width: <?php echo(viewbet(3,2,1)); ?>%">VintageBeef(<?php echo(viewbet(3,2,1)); ?>%)</div>
            </div>
            <div class="progress">
            <div class="bar"
            style="width: <?php echo(viewbet(4,2,1)); ?>%">w92Baj(<?php echo(viewbet(4,2,1)); ?>%)</div>
            </div> 
            </p></div> 

             </div>
             <div class="span3">
               <h2><center>Actual<br />First Death</center></h2>
                <p><center><img src="assets/img/characters/w92Baj.png"></center></p>
               <p><center><a class="btn" href="#" data-toggle="collapse" data-target="#S2DH" >Bet Info &raquo;</a></p></center>
                <div id="S2DH" class="collapse toggle"><p>No Data
               </div>

            </div>
             <div class="span3">
               <h2><center>Prediction<br />Survivor</center></h2>
               <?php
                    $guude = highest(1,2,1);
                    $pause = highest(2,2,1);
                    $beef = highest(3,2,1);
                    $baj = highest(4,2,1);
                    $max = max($guude, $pause, $beef, $baj);
                    
                    foreach( array('guude','pause','beef','baj') as $v) {
                        if ($$v == $max) {
                            if($v == "guude")
                            {
                               ?> <p><center><img src='assets/img/characters/Guude.png'></center></p> <?php
                            }elseif ($v == "pause")
                            {
                                ?> <p><center><img src='assets/img/characters/PauseUnpause.png'></center></p> <?php
                            }elseif($v == "beef")
                            {
                                ?> <p><center><img src='assets/img/characters/VintageBeef.png'></center></p> <?php 
                            }elseif($v == "baj")
                            {
                                ?> <p><center><img src='assets/img/characters/w92Baj.png'></center></p> <?php
                            }else{
                                ?> <p><center><img src='assets/img/characters/Question.png'></center></p> <?php
                            }
                            break;
                        }
                    }
               ?>
               <p><center><a class="btn btn-primary disabled" data-toggle="modal" href="">Make Bet &raquo;</a></center></p>
             </div>
             
             <div class="modal hide fade" id="S2W">
               <div class="modal-header">
                 <a class="close" data-dismiss="modal">×</a>
                 <h3>Survivor of Season 2</h3>
               </div>
               <div class="modal-body">
                 <p>
                 <form action="makebet.php" method="POST">                 
                 <input type="radio" name="vote" value="guude" checked/> Guude <br /> 
                 <input type="radio" name="vote" value="pause"/> PauseUnPause <br/>
                 <input type="radio" name="vote" value="beef"/> VintageBeef <br/>
                 <input type="radio" name="vote" value="baj" disabled/>  w92Baj<br/>
                 
                 <input type="hidden" name="season" value="2">
                 <input type="hidden" name="survivor" value="1">
                 <br/>
                 <button type="submit" class="btn btn-primary diabled">Make Bet</button>
                 </form>
                 </p>
               </div>
               <div class="modal-footer">
                 <a href="#" class="btn" data-dismiss="modal" >Close</a>
               </div>
             </div>
             
             <div class="span3">
                 <h2><center>Prection<br />First Death</center></h2>
                                <?php
                      $guude = highest(1,2,0);
                      $pause = highest(2,2,0);
                      $beef = highest(3,2,0);
                      $baj = highest(4,2,0);
                      $max = max($guude, $pause, $beef, $baj);
                      
                      foreach( array('guude','pause','beef','baj') as $v) {
                          if ($$v == $max) {
                              
                              if($v == "guude")
                              {
                                 ?> <p><center><img src='assets/img/characters/Guude.png'></center></p> <?php
                              }elseif ($v == "pause")
                              {
                                  ?> <p><center><img src='assets/img/characters/PauseUnpause.png'></center></p> <?php
                              }elseif($v == "beef")
                              {
                                  ?> <p><center><img src='assets/img/characters/VintageBeef.png'></center></p> <?php 
                              }elseif($v == "baj")
                              {
                                  ?> <p><center><img src='assets/img/characters/w92Baj.png'></center></p> <?php
                              }else{
                                  ?> <p><center><img src='assets/img/characters/Question.png'></center></p> <?php
                              }
                              break;
                          }
                      }
                 ?>
                 <p><center><a class="btn btn-primary disabled" >Make Bet &raquo;</a></center></p>
               </div>
             </div>
        </div>
        
                     
        
        <div class="tab-pane" id="season3">
        <div class="row">
          <div class="span3">
            <h2><center>Actual<br />Winner</center></h2>
             <p><center><img src="assets/img/characters/Question.png"></center></p>
            <p><center><a class="btn disabled" href="#">Bet Info &raquo;</a></center></p>
          </div>
          <div class="span3">
            <h2><center>Actual<br />First Death</center></h2>
             <p><center><img src="assets/img/characters/Question.png"></center></p>
            <p><center><a class="btn disabled" href="#">Bet Info &raquo;</a></p></center>
         </div>
          <div class="span3">
            <h2><center>Prediction<br />Winner</center></h2>
            <p><center><img src="assets/img/characters/Question.png"></center></p>
            <p><center><a class="btn disabled" href="#">Make Bet &raquo;</a></p></center>
          </div>
                  <div class="span3">
            <h2><center>Prection<br />First Death</center></h2>
            <p><center><img src="assets/img/characters/Question.png"></center></p>
            <p><center><a class="btn disabled" href="#">Make Bet &raquo;</a></p></center>
          </div>
        </div>
        </div>


      <hr>

      
      <footer>
        <p>Created with <a href="http://twitter.github.com/bootstrap/index.html">Twitter Bootstrap</a></p>
        <p>Code by <a href="http://twitter.com/HazzarZ">Katie Paxton-Fear</a></p>
    
      </footer>

    </div>
  </body>
</html>
