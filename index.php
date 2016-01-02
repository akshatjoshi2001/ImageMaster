<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Image Master | Awesome tool to get information about almost any image on earth and get its info!</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
        <style>
            form,h1
            {
                font-weight:100;
                font-family:Roboto;
                
            }
            
          </style>
    </head>
    <body>
        <form>
            Enter Image Keyword: <input type="text" name="keyword" autocomplete="off">
            <button type="submit" class="btn btn-warning">Get Image</button>
            
            <i>Created with love By Akshat Joshi!</i>
        </form>
        <div class="well">
        <?php
        include 'aboutimage.php';
         if(isset($_GET["keyword"]) && strtolower($_GET["keyword"]) != "akshat" && strtolower($_GET["keyword"]) != "akshat joshi" )
         {
             echo '<img src="cover.php?key='.$_GET["keyword"].'">';
             $data = wikidefinition($_GET["keyword"]) ;
//var_dump( wikidefinition('bangladesh') ) ; //displays the array content
             if($data[1] == "" || $data[1] == ucfirst($_GET["keyword"])." may refer to")
             {
              echo "No info about image found";   
             }
             else
             {
echo "About Image: " . $data[1]  . "<br/>";

             }
         }
         elseif (strtolower($_GET["keyword"]) == "akshat" || strtolower($_GET["keyword"]) == "akshat joshi") 
             
             {
             
                 echo "<img src='http://kidkonnect.esy.es/yt/upload/20130729_040303.jpg' height='25%' width='25%'> About Image: Akshat Joshi is a computer programmer in pune";
             
             }
         else
         {
             echo 'Enter some stuff and see the magic!!!';
         }
         ?></div>
    </body>
    <center><h1>Search from over 100000000000 images in the world!</h1></center>
</html>
