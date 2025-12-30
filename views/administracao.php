<?php 
  session_start();
  $page_title = "Administração";
  include "../includes/header.php";
?>

<main class="flex-1">
    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="bg-white rounded-lg shadow p-6">
            <header class="mb-6">
                <h1 class="text-3xl font-bold text-center text-gray-800">Administração</h1>
            </header>

            <div class="flex justify-center">
                <section class="w-full max-w-4xl">
                    <?php include "../includes/menu_opcoes.php"; ?>
                </section>
            </div>

        </div>
    </div>
</main>

<?php include "../includes/footer.php"; ?>