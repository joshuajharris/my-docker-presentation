<?php

/*
  Figlet example based on github.com/epeay/figlet-docker-app 
 */

require_once "../vendor/autoload.php";
$figlet = new Zend\Text\Figlet\Figlet();
?>

<pre>
<?php
echo $figlet->render(apache_get_version());
echo apache_get_version();
?>
</pre>
