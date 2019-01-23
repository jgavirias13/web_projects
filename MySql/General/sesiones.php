<?php
session_start();

$_SESSION['username'] = 'jgavirias13';
echo "<p>Usuario: ".$_SESSION['username']."</p>";
?>