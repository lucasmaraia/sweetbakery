<?php 

$host = getenv("DB_HOST") ?: "localhost";
$usuario = getenv("DB_USER") ?: "root";
$senha = getenv("DB_PASSWORD") ?: "";
$bd = getenv("DB_NAME") ?: "sweetbakery";

$mysqli = new mysqli($host,$usuario,$senha,$bd);


