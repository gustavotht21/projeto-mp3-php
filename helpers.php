<?php

function getAlbums() {
    return glob('albums/*');
}

function getLink() {
    $path = glob("albums/{$_GET['albumName']}/*.txt");
    $file = fopen($path[0], 'r');
    $link = fgets($file, 4096);
    fclose($file);
    return $link;
}

function setAlbum ($name, $file, $link) {
    if (! is_dir("albums/{$name}")) {
        mkdir("{$name}");
        touch("albums/{$name}.txt");

        $image = $_FILES['image'];
        $path = "albums/{$name}";

        if (move_uploaded_file($image['tmp_name'], "{$path}/{$name}")) {
            alert('Álbum criado com sucesso');
        } else {
            alert ('Algo deu errado');
        }

    } else {
        alert("O álbum \"{$name}\" já existe. Tente novamente");
    }
}

function alert($msg) {
    return "<script type='text/javascript'>alert('$msg');</script>";
}
