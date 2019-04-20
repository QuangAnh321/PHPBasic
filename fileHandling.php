<?php
    $path ="/dir1/myFile.php";
    $file ="Hello.txt";
    $br = "<br>";

    /**
     * File status
     */


    // Return file name
    echo basename($path);
    echo $br;

    // Return file name without extension
    echo basename($path, ".php");
    echo $br;

    // Return file path
    echo dirname($path);
    echo $br;

    // Check if file/folder exist
    echo file_exists($file);
    echo $br;

    echo file_exists("dir1");
    echo $br;

    // Return the absolute path
    echo realpath($file);
    echo $br;

    // Check for permission
    echo is_readable($file);
    echo $br;

    echo is_writeable($file);
    echo $br;

    // Return file size (bytes)
    echo filesize($file);
    echo $br;

    /**
     * File manipulation
     */

    // Create new directory
    // mkdir("./dir2", 0755)

    // Remove directory if empty
    // rmdir("dir2");

    // Copy file
    // echo copy("Hello.txt", "Hello2.txt");

    // Rename file
    // rename("Hello2.txt", "Hello3.txt");

    // Remove file
    // unlink("Hello3.txt");

    // Write file content to string
    // echo file_get_contents("Hello.txt");

    // Write string to file (replace old string)
    // echo file_put_contents($file, "Goodbye!");

    // Wirte without repalcing
    // $current = file_get_contents($file);
    // $current = $current . " Goodbye";
    // echo file_put_contents($file, $current);

    // Open file for reading
    // $handle = fopen($file, "r");
    // $data = fread($handle, filesize($file));
    // echo $data;

    // Open file for writing
    $handle = fopen($file, "w");
    $txt = "Written text";
    fwrite($handle, $txt);
    fclose($handle);

?>