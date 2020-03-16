<?php

$dir_path = "courses/IT/".$_GET['folder']."/";
$extensions_array = array('mp4','ogg');

if(is_dir($dir_path))
{
    $files = scandir($dir_path);
 
    for($i = 0; $i < count($files); $i++)
        if($files[$i] !='.' && $files[$i] !='..')
    {   
        {
            // get file name
           // echo "File Name -> $files[$i]<br>";
            
            // get file extension
            $file = pathinfo($files[$i]);
            $extension = $file['extension'];
            //echo "File Extension-> $extension<br>";
             $extension1 = $file['filename'];
           // check file extension
            if(in_array($extension, $extensions_array))
            {
            // show image
            echo "<center><h4>$extension1</h4><video width='50%' height='auto' controls><source src='$dir_path$files[$i]' type='video/mp4'></video></center><br><br>";
            }
        }
    }
}
?>

