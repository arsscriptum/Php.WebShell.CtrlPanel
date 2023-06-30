<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->



<?php
    $srvName = $_SERVER['SERVER_NAME'];
    $srvAddress = $_SERVER['SERVER_ADDR'];
    $srvHost = $_SERVER['HTTP_HOST'];
    $srvFilename = $_SERVER['SCRIPT_FILENAME'];
    $docRoot = $_SERVER['DOCUMENT_ROOT'];
    
    echo "srvName $srvName"; echo "<br>\n";
    echo "srvAddress $srvAddress"; echo "<br>\n";
    echo "srvHost $srvHost"; echo "<br>\n";
    echo "srvFilename $srvFilename"; echo "<br>\n";
    echo "docRoot $docRoot"; echo "<br>\n";
?>
