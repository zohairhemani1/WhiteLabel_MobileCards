<?php

include '../headers/connect_to_mysql.php';

$tablename = "registeration";

$query = "SELECT * FROM $tablename ORDER BY username";

$result = mysql_query($query) or die("Error executing query: ".mysql_error());

$row = mysql_fetch_assoc($result);

$line = "";

$comma = "";

foreach($row as $name => $value)

{

    $line .= $comma . '"' . str_replace('"', '""', $name) . '"';

    $comma = ",";

}

$line .= "\n";

$out = $line;

 

mysql_data_seek($result, 0);

 

while($row = mysql_fetch_assoc($result))

{

    $line = "";

    $comma = "";

    foreach($row as $value)

    {

        $line .= $comma . '"' . str_replace('"', '""', $value) . '"';

        $comma = ",";

    }
    $line .= "\n";

    $out.=$line;

}

header("Content-type: text/csv");

header("Content-Disposition: attachment; filename=cvs_content.csv");

echo $out;

exit;




?>