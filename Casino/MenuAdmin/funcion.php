
<?php
    function conectar()
    {
        if(!($cnn=mysqli_connect("localhost","root","")))
            {
                 exit();
            }

        if(! mysqli_select_db ($cnn,"casino"))
            {
                   exit();
             }
        return $cnn;
    }
?>