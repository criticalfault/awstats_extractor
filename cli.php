<?php
    include_once("core.php");

    if(isset($argv[1])){
        $file = $argv[1];
    } else {
        echo "Incorrect number of arguments passed...";
        exit;
    }

    if($file == "batch"){
        // Example of batch reading multiple files
        echo "Preparing batch process...";
        //Get the files in the batch folder
        $files = scandir("batch");
        //Shift the first two elements off the list of files
        array_shift($files);
        array_shift($files);
        foreach($files as $awstats){
            echo "Processing ".$awstats."...";
            echo extractor("batch/".$awstats, true);
        }
    } else {
        echo extractor($file, true);
    }
?>