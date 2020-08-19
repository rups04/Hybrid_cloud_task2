<html> 
    <head> 
        <title>My website</title> 
    </head> 
        <body style="background-color:pink;font-size:300%">
    <body> 
        <pre>
        <?php
        $filename = "/var/www/html/domain_name.txt" ;
        $file = fopen( $filename , "r");
        $filesize = filesize( "domain_name.txt" );
        $domain_name = fread($file , $filesize);
        fclose( $file );
        echo   "<h1>WELCOME !!</h1>";
        echo   "<h1>This is Task2 of Hybrid Multi Cloud</h1>";
        echo   "<img src='http://{$domain_name}/image.jpg'   width='390'   height='712'     />";
        ?>
        </pre>
    </body> 
</html>                     
