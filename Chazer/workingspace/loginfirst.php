<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chazer</title>
</head>
<body>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto);
body {
  background-color: #333;
  color: #fff;
  font-family: 'Roboto', Arial;
  padding: 14em;
}

.flex-grid-center {
  
  display: flex;
  justify-content: center;
  margin: 2em 0;
}

.fuller-button {
  color: white;
  background: none;
  border-radius: 0;
  padding: 1.2em 5em;
  letter-spacing: 0.35em;
  font-size: 0.7em;
  transition: background-color 0.3s, box-shadow 0.3s, color 0.3s;
  margin: 1em;
    cursor: pointer;
}
.fuller-button.white {
  box-shadow: inset 0 0 0.8em rgba(255, 255, 255, 0.3), 0 0 0.8em rgba(255, 255, 255, 0.3);
  border: #fff solid 2px;
}
.fuller-button.white:hover {
  color: rgba(0, 0, 0, 0.8);
  background-color: #fff;
  box-shadow: inset 0 0 0 rgba(255, 255, 255, 0.3), 0 0 1.2em rgba(255, 255, 255, 0.5);
}
    h5{
        letter-spacing: 2px;
        font-weight: 200;
        text-align: center;
    }

    @media (max-width: 790px) {
  .fuller-button {
    font-size: 1em;
    width: 100px;
  }
        h5{
        letter-spacing: 2px;
        font-weight: 100;
        text-align: center;
    }
}

    
    
    </style>
  <h5>
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
      echo $_SESSION['message'];
    else:
      header( "location: login.php" );
    endif;
    ?>
      <div class="flex-grid-center">
  <div class="pure-button fuller-button white" onclick="location.href='/newproject/loginsystem/login.php'"
       style="display: inline;">Click me to login!</div>
</div>
    </h5>
</body>
</html>
