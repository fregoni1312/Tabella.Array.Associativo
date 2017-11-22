<html> 
    <head> 
        <title>Visualizzazione Array Associativo</title> 
   </head> 
    <body> 
            <table border = "1">
                        
                        <? php
                                    $pers = array ("a "=>" pippo " ,"b" =>" pluto " ,
                                    "c" =>" paperino " ," d"=>" topolino " );

                                    foreach ( $pers as $idx = > $nome ) 
                                    {
                                                echo " <tr ><td > $idx </ td ><td > $nome </ td > </ tr >\ n ";
                                    }
                        ?>
            </table>

     </body> 
</html> 



