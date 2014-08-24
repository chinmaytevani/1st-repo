
<?php

// outputs e.g.  somefile.txt: 1024 bytes

$filename = 'index.html';
echo $filename . ': ' . filesize($filename) . ' bytes';

?>
