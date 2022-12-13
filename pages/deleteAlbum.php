<?php

if (isset($_POST['enviar'])) {
    $albumName = $_POST['name'];
    $albumName = ucwords($albumName);
    $files = glob("albums/{$albumName}/*");
    foreach ($files as $file) {
        unlink($file);
    }
    if (rmdir("albums/{$albumName}/")) {
        header("Location: ?page=albums");
    } else {
        $erro = "<p style='color: red;'>Não foi possível deletar o álbum. Verifique se você digitou corretamente o nome do álbum</p>";
    }
}

?>

<h1 class="mt-5 mb-5">Delete um álbum que você não deseja mais!</h1>

<form action="?page=deleteAlbum" method="POST" enctype="" style="color: #12376E;">
    <?=$erro?>
    <div class="form-group mb-3">
        <label for="name" class="fw-semibold">Insira o nome do álbum</label>
        <input type="text" name="name" placeholder="Nome" class="form-control" required>
    </div>
    <div class="mt-5">
        <button type="submit" name="enviar" class="btn btn-danger w-25">Deletar álbum</button>
        <a href="?page=albums" class="btn btn-primary">Cancelar</a>
    </div>
</form>