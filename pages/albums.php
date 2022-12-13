<h1 style="margin: 30px 0; color: #12376E;">Seus álbuns</h1>

<div style="margin-bottom: 20px;">
    <a href="?page=newAlbum" class="btn btn-success">Adicionar álbum</a>
    <a href="?page=deleteAlbum" class="btn btn-danger">Excluir álbum</a>
</div>

<div class="row mb-5">
    <?php
        $albumNames = getAlbums();
        foreach ($albumNames as $albumName) {
        $name = explode('/', $albumName);
        $albumName = "{$albumName}/{$name[1]}.png";
    ?>
    <div class="col-sm-12 col-lg-6 col-xl-3 album" style="color: #12376E;">
        <a href="?page=musics&albumName=<?=$name[1]?>">
            <img style="max-width: 300px; max-height: 300px;" src="<?=$albumName?>" alt="<?=$albumName?>" class="img-album w50">
            <h4 class="title" style="color: #12376E;"><?=$name[1]?></h4>
        </a>
    </div>
    <?php
        }
    ?>
</div>