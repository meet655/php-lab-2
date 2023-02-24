<?php

$file_path = "test.txt";
$file_handle = fopen($file_path, "w");
fwrite($file_handle, "Hello, world!\n");
fclose($file_handle);
echo "Data written to file $file_path\n";


$file_handle = fopen($file_path, "r");
$file_contents = fread($file_handle, filesize($file_path));
fclose($file_handle);
echo "Contents of file $file_path:\n";
echo $file_contents;

$file_handle = fopen($file_path, "a");
fwrite($file_handle, "This is some appended data.\n");
fclose($file_handle);
echo "Appended data to file $file_path\n";


if (unlink($file_path)) {
    echo "File $file_path deleted successfully\n";
} else {
    echo "Failed to delete file $file_path\n";
}

?>


output


Data written to file test.txt Contents of file test.txt: Hello, world! Appended data to file test.txt File test.txt deleted successfully