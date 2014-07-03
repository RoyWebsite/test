<?PHP

$file = "./lines.txt";
$write = "this is line one\n";

file_put_content($file,$write);
//file_put_content($file,$write,FILE_APPEND);
?>