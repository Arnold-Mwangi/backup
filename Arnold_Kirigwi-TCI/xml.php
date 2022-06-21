<?Php
require "config.php";
$sql="select *  from addresses"; 
$str ="<?xml version=\"1.0\" encoding=\"UTF-8\"?><addresses>";

foreach ($conn->query($sql) as $row) {
$str .= "\n<details>\n\t\t\t<id>$row[id]</id>\n\t\t\t<name>$row[firstname]</name> ";

$str .= "\n\t\t\t  <class>$row[lastname]</class>\n</details>";
$str .= "\n\t\t\t  <class>$row[email]</class>\n</details>";
$str .= "\n\t\t\t  <class>$row[street]</class>\n</details>";
$str .= "\n\t\t\t  <class>$row[zip_code]</class>\n</details>";
$str .= "\n\t\t\t  <class>$row[city]</class>\n</details>";

}
$str.= "\n</address>";
$str=nl2br($str);

echo $str;


$file_name="test_file.xml";               
$fp = fopen ($file_name, "w");  

fwrite ($fp,$str);         
fclose ($fp);                               
chmod($file_name,0777);  

?>