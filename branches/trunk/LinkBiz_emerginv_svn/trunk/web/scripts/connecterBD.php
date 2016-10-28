<?php
try
{
 
$bdd = new PDO('mysql:host=localhost;dbname=proj_LinkBiz_7isoybau', 'LinkBiz', 'fzg60n82hc');
}
catch(Exception $e)
{
        die('Erreur Connection : '.$e->getMessage());
}
?>