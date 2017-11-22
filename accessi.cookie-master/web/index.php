<html> 
    <head> 
        <title>Visualizzazione Array Associativo</title> 
   </head> 
  <body> 
        < table border = "1" >
            <tr ><th > Personaggio </ th > </ tr >
            <? php
            $pers = array (" pippo " ," pluto " ," paperino " ," topolino " );
            foreach ( $pers as $nome ) {
            print " <tr ><td > $nome </ td > </ tr >\ n";
            }
            ?>
        </ table >
   </body> 
</html>






