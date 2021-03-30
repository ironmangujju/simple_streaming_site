<?php
// Index Page Description
// Replace Your Folder Name with "vids"
// https://github.com/tbhavi
$video_array = glob('vids/{*.mp4}', GLOB_BRACE); 

?>
<html>
	<head>
	  

		<title> Sample Streaming </title>
		
		<style>
		* { 
				font-family: sans-serif; 
		   }
			
			body	{
			                 background: black; 
			             }
			
			h1       {
					        color: red; 
					    }
			
			.container {
			font-family: sans-serif;
            float: left;
            width: 30%; 
            margin-left: 1%; 
            margin-top: 20px;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: 2px 2px 2px black; 
            border: 1px solid black;
            background: #80808040;
            height: 188px; 
            color: white;
            }
         </style>
   </head>
       
       <body>
       	<nav>
       	<h1> Sample Show </h1>
           </nav>
           
           <?php
           
          
           for ($i=0; $i < count($video_array); $i++) {
           	$vid = $video_array[$i]; 
               $fileName = str_replace ("vids/", "", $vid); 
               
               echo "<div class=' container '>
               	
               	<a href='play.php?file=$vid '> 
               	<video onmouseover= 'play (this)' onmouseout= 'stop (this)' width= '100%' height='100%'> 
               	<source src='play.php?file=$vid' /> 
               </video>
              </a>
              <br /> $fileName</div>"; 
              }
              ?>
              	
              <center>
              	<h2> Sample Text</h2> 
              </center>
              
              
              <script>
              	function play(elem) {elem.play();}
                  function stop(elem) {elem.pause();}
                  </script>
             
               </body>
               </html>
               
           
          
      
    
            
            
			
		
		