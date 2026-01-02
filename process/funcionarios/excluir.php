<?php
session_start();
require_once __DIR__ . '/../../config/database.php';

// Só aceitar POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash'] = ['type' => 'error', 'message' => 'Requisição inválida.'];
    header('Location: ../../views/funcionarios/lista.php');
    exit;
}

// Validar ID
$id = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
if (!$id || $id <= 0) {
    $_SESSION['flash'] = ['type' => 'error', 'message' => 'ID inválido.'];
    header('Location: ../../views/funcionarios/lista.php');
    exit;
}

$conectar = conectar();

// Prepared statement para evitar SQL injection
$stmt = mysqli_prepare($conectar, "DELETE FROM funcionarios WHERE id_Fun = ?");
if (!$stmt) {
    $_SESSION['flash'] = ['type' => 'error', 'message' => 'Erro ao preparar a query: ' . mysqli_error($conectar)];
    header('Location: ../../views/funcionarios/lista.php');
    exit;
}

mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$affected = mysqli_stmt_affected_rows($stmt);
mysqli_stmt_close($stmt);

if ($affected > 0) {
    $_SESSION['flash'] = ['type' => 'success', 'message' => 'Funcionário excluído com sucesso.'];
} else {
    $_SESSION['flash'] = ['type' => 'info', 'message' => 'Nenhum funcionário encontrado com esse ID.'];
}

header('Location: ../../views/funcionarios/lista.php');
exit;
