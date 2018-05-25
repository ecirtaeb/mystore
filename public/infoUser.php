<?php
session_start();
if ( isset($_SESSION ['id']) ) {
	$userconnect=infoUser ($_SESSION ['id']);
} 