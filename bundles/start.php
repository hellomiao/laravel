<?php
Autoloader::namespaces(array(
'Admin' => Bundle::path('admin').'models',
));

Autoloader::map(array(
    'Entry' => path('app').'libraries/entry.php'
));

