<?php

include_once 'Vagon.php';

$vagoncito = new Vagon( 2005, 20, 5, 150, 10);

echo $vagoncito->__toString();