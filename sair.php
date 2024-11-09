<?php
// a session vai expirar em 30 minutos
session_cache_expire(30);
// iniciando a session
session_start();
// destruindo ou terminando a session
session_destroy();
// destruindo ou terminando a session
session_unset();
// direciona para a index
header("Location:index.php");

?>