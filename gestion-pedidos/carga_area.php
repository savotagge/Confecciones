<?php include("../conn/conn.php");
            
            $CODIGO=$_REQUEST['id'];

            $sql=mysql_query("SELECT * FROM ARTICULOS WHERE COD_ARTICULO='$CODIGO'",$link);
            while($row = mysql_fetch_array($sql)){
           
            echo $row['VALOR_UNITARIO'];
            
            }


            ?>
