<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bank Accounts</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif, Roboto;
        font-size: .9em;
        color: #000000;
        background-image: url(https://i.imgur.com/itlbefA.png);
        margin: 0;
        padding: 10px 20px 20px 20px;
    }

    samp {
        font-size: 1.3em;
    }

    a {
        color: #000000;
        background-color: #FFFFFF;
    }

    sup a {
        text-decoration: none;
    }

    hr {
        margin-left: 90px;
        height: 1px;
        color: #000000;
        background-color: #000000;
        border: none;
    }

    #logo {
        margin-bottom: 10px;
        margin-left: 28px;
    }

    .text {
        width: 80%;
        margin-left: 90px;
        line-height: 140%;
    }
	table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     }
     table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
  text-align: center;
} 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: white}
  tr:nth-child(odd) {background-color: #fdccc6}
  a:link {
  color: green; 
  background-color: transparent; 
  text-decoration: none;
}

a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>
</head>

<body>
<center><strong><h1 style="color:white;">Bank Accounts</h1></strong></center>
<script src="https://unturnedsl.com/embedlike/green/16911"></script>
<h4><a href="http://legionpolicefines.epizy.com/index.php">Go back to the Index</a><br></h4>
<?php

$db_host='45.121.210.253';
$db_user='db25461';
$db_pass='xR2Ap76h4A';
$db_name='db25461';
?>
<?php
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$conn)
{
	die ('failed to connec to mysql database' . mysqli_connect_error());
}

$sql = 'select * from 1bankaccount order by 1bankaccount.Balance DESC';
$query = mysqli_query($conn,$sql);

if(!$query)
{
	die ('error found'. mysql_error($conn));
}

echo "
<table class-'table'>
<tr>
<th>SteamID</th>
<th>Balance</th>
</tr>";

while ($row = mysqli_fetch_array($query))
{
	echo ' <tr>
	<td>' .$row['PlayerId'].'</td>
	<td>' .$row['Balance'].'</td>
	</tr>';
}

echo "</table>";



?>
</body>
</html>