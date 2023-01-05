
<?php
$host = 'sql9.freemysqlhosting.net';
$db   = 'sql9588487';
$user = 'sql9588487';
$pass = 'v9IYnsdDGg';
$charset = 'utf8mb4';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    mysqli_set_charset($mysqli, $charset);
} catch (\mysqli_sql_exception $e) {
     throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
}
unset($host, $db, $user, $pass, $charset); // we don't need them anymore
?>
<!DOCTYPE html>
<html>
<style type="text/css">
  #searchBar {
  border: 1px solid #000;
  border-right:none;
  font-size: 16 px;
  padding: 10px;
  outline: none;
  width: 250px;
  -webkit-border-top-left-radius: 10px;
  -webkit-border-bottom-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  -moz-border-radius-bottomleft: 10px;
  border-top-left-radius: 10px;
  border-bottom-left-radius:10px;
}
#searchBtn {
  
  border: 1px solid #000;
  border-left: none;
  font-size: 16px;
  padding: 8.5px;
  outline: none;
  background: #f1d829
  font-weight: bold;
  cursor: pointer;
  outline: none;
  -webkit-border-top-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  -moz-border-radius-bottomright: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius:10px;
  
}
</style>
<head>
  <title>Search bar</title>
  <script type="text/javascript">
    function active(){
      var searchBar = document.getElementById('searchBar');
      if(searchBar.value == 'Search...'){
        searchBar.value=''
        searchBar.placeholder = 'Search...'
      }
    }
  </script>
</head>

<body>
  
  <form action="search.php" method="post">
    <input type="text" id="searchBar" placeholder="" value="Search..." maxlength="25" autocomplete="off" onmousedown="active()" onblur="" /><input type="submit" id="searchBtn" value="Go!">
  </form>

    



  
</body>

</html>
