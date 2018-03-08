<?php

if(isset($_GET['url'])) {
	echo header("location: ".htmlspecialchars($_GET['url']));
}

?>