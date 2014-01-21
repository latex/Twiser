<?php
// Iniciando sessão
session_start();

// Limpando sessão
session_destroy();
 
// Redirecionando para página de acesso
header('Location: index.php');
?>