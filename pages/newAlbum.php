<h1 style="margin: 30px 0; color: #12376E;">Adicione um novo álbum</h1>

<form action="#" method="POST" enctype="multipart/form-data" style="color: #12376E;">
    <div class="form-group mb-3">
        <label for="name" class="fw-semibold">Insira o nome do álbum</label>
        <input type="text" name="name" placeholder="Nome" class="form-control" required>
    </div>
    <div class="form-group mb-3">
        <label for="image" class="fw-semibold">Insira a foto do álbum</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <div class="form-group mb-3">
        <label for="link" class="fw-semibold">Insira o link de "Incorporar álbum"</label>
        <input type="url" name="link" placeholder="Link" class="form-control" required>
        <a href="?page=getAlbumLink" class="btn btn-primary mt-3">Clique aqui para conseguir o link do seu álbum</a>
    </div>
    <div class="mt-5">
        <button type="submit" class="btn btn-success w-25">Adicionar novo álbum</button>
        <a href="?page=albums" class="btn btn-danger">Cancelar</a>
    </div>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $albumName = $_POST['name'];
    $imageName = ("{$albumName}.png");
    $fileName = ("{$albumName}.txt");

    $path = "albums/{$albumName}";

    if (! is_dir("{$path}")) {
        mkdir("{$path}");
    }

    touch("{$path}/{$fileName}");

    $file = fopen("{$path}/{$fileName}", 'a+');
    fwrite($file, $_POST['link']);
    fclose($file);


    if (move_uploaded_file($_FILES['image']['tmp_name'], "{$path}/{$imageName}")) {
        header('Location: ?page=albums');
    } else {
        print ('Algo deu errado');
    }
}

?>
