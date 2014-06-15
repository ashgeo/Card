<?php
if(isset($_POST['cards1']){
	$card1=$_POST['cards1'];
	echo $card1.<br><br>
	}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Simple Personal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
</head>
<body>
<div id="wrapper">
  <div class="title">    
      <div class="title-left">
        <div class="title-right">
          <div class="title-bottom">            
              <div class="title-bottom-left">               
                  <div class="title-bottom-right">
                    <h1><a >PLAY<span>BLACKJACK</span></a></h1>
                    <p >PLAY BLACK JACK </p>
                  </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="noscreen" />
  <div class="content">    
    <div class="column-right">
      <div class="box">
        <div class="box-top"></div>
        <div class="box-in">
         <form action="index.php" method="post">
		    <P> Select Your Card and Suit</p>
			<label for="card_1">Card 1</label>
			<input type="text" name="cards1" value="10s">
			<label for="card_2">Card 2</label>
			<input type="text"  name="cards2" value="KH">
			<input type="submit">
		</form>
        </div>
      </div>
      <div class="box-bottom">    
       
    </div>
    <div class="cleaner">&nbsp;</div>
  </div>
</div>
</body>
</html>
