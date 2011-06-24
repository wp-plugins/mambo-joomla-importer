<?php
  /*
  name : showArticle-mambo.php
  author : misterpah
  date : 23 june 2011
  readme : insert this file into the root of mambo installation. make sure that mambo configuration file (configuration.php) is present.
  */
  include "configuration.php";
  $JConfig = new JConfig();
  
  //$JConfig = var JConfig();
  $dbh     = $JConfig->db;
  $dbuser = $JConfig->user;
  $dbpass = $JConfig->password;
  $dbhost = $JConfig->host;         // localhost is default
  $dbprefix = $JConfig->dbprefix;

$link = mysql_connect("$dbhost", "$dbuser", "$dbpass")
	or die("Could not connect");
//print "Connected successfully";
mysql_select_db("$dbh") or die("<p>Could not select database</p>");

function saveHtml($data)
	{
	$data = str_replace('"','[doubleQuote]',$data);
	$data = str_replace("'",'[singleQuote]',$data);
	$data = str_replace("\n",'&lt;br /&gt;',$data);
	return $data;
	}

$query = sprintf("SELECT * FROM %scontent ", $dbprefix);
$result = mysql_query($query) or die("<h3>Query failed</h3><p>" . $query . "</p>");
$page = array();
while($row = mysql_fetch_array( $result )) 
	{
	$introText = htmlentities($row['introtext'],ENT_NOQUOTES);
	$dataStack = array($row['title'] ,$introText);
	array_push($page,$dataStack);
	} 
	
/*$data = serialize($page);
print_r(saveHtml($data));
*/


echo base64_encode(serialize($page));
