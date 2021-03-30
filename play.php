<?php
  // https://github.com/tbhavi
  
  require_once("VideoStream.php");
  $stream = new VideoStream($_GET['file']); 
  $stream->start(); 
  
  ?>
  
 