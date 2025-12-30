<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($page_title) ? $page_title : 'Sistema de Gestão'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col">
    <div id="principal" class="flex-1 flex flex-col">
        <div id="topo" class="bg-blue-400 text-white py-4">
            <div class="container mx-auto flex items-center justify-between px-4">
                <div class="w-1/3"></div>
                <div class="flex-1 flex justify-center">
                    <a href="/index.php" class="inline-block"><img src="/assets/img/logo.png" class="h-12 block"
                            alt="Logo"></a>
                </div>
                <div class="w-1/3 flex justify-end">
                    <?php if (isset($_SESSION["nome_Fun"])) { ?>
                    <div class="menu_global">
                        <ul class="flex gap-4 items-center">
                            <li class="mr-2"><span class="text-white">Olá, <?php
                                $validaPath = __DIR__ . '/valida_login.php';
                                if (file_exists($validaPath)) {
                                    include_once $validaPath;
                                } else {
                                    echo '(usuário indisponível)';
                                }
                            ?></span></li>
                            <li><a href="/process/auth/logout.php"
                                    class="text-red-600 visited:text-red-600 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-300 rounded">Sair</a>
                            </li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>