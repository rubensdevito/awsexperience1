<?php
$instance_id = file_get_contents("http://instance-data/latest/meta-data/instance-id");
echo $instance_id, "\n";
?>
