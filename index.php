File Handling
In PHP we can also do file operations like creating and opening a file, editing a file etc. We have various functions in PHP to perform these tasks.


Reading a File
To read a file, we will use readfile() function. It will read the file and write the contents of the file to the output buffer.



Example:

<?php
echo readfile("FileName.extension");
?>


Creating & Opening a File
We can use the fopen() function to open a file. We can also use this function to create a file. fopen() needs two parameters to work. First, it needs the name of the file that is being opened and the second parameter which specifies in which mode it is being opened.

The fopen() function has the following modes



Modes Description
r Open a file for read-only.
w Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist.
a Open a file for write only. The existing data in the file is preserved. Creates a new file if the file doesn't exist
x Creates a new file for write only. Returns FALSE and an error if the file already exists
r+ Open a file for read/write.
w+ Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist.
a+ Open a file for read/write. The existing data in file is preserved. Creates a new file if the file doesn't exist
x+ Creates a new file for read/write. Returns FALSE and an error if the file already exists


Example:

<?php
$data = fopen("example.txt", "r");
?>


Reading a File (fread())
We can also use the fread() to read from an open file. This function also has two parameters, first one containing the name of the and the second one specifying the maximum number of bytes to read.



Example:

fread($data,filesize("mydata.txt"));


Writing to a File
We can use the fwrite() function to write to a file. This function also takes 2 parameters. The first one is the filename and the second one specifies the string to be written.



Example:

<?php
$myfile = fopen("data.txt", "w");
$txt = "amjad"
($myfile, $txt);
fclose($myfile);
?>


Note: We can also append data into the file by opening the file in append "a" mode.


Closing a File
To close a file, use the fclose() function.



Example:

<?php
$Myfile = fopen("data.txt", "r");
fclose($Myfile);
?>


Reading a single line and a single character:
We can use the fgets() to read a single line from a file.



Example:

<?php
$Myfile = fopen("data.txt", "r");
echo fgets($Myfile);
fclose($Myfile);
?>


We can use the fgetc() to read a single character from a file.



Example:

<?php
$myfile = fopen("webdictionary.txt", "r");
echo fgetc($myfile);
fclose($myfile);
?>