<?php

require 'dados.php';

$id = $_REQUEST['id'];

$filtrado = array_filter($livros, fn($l) => $l["id"] == $id);

$livro = array_pop($filtrado);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-stone-950 text-stone-200">
    <header class="bg-stone-900 shadow-lg">
        <nav class=" mx-auto max-w-screen-lg flex justify-between px-8">
            <div class="font-bold text-xl tracking-wider">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-emerald-800">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>

            </ul>
            <ul>
            <li><a href="/login.php" class="hover:underline">Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-8">

        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">imagem</div>
    
                <div class="space-y-">
                    <a href="/livro.php?id=<?=$livro['id']?>" class="font-semibold hover:underline"><?=$livro['titulo']?></a>
                    <div class="text-xs italic"><?=$livro['autor']?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐ (3 Avaliação)</div>
                </div>
            </div>

            <div class="text-sm mt-2">
            <?=$livro['descricao']?>
            </div>
        </div>
        
    </main>
</body>
</html>