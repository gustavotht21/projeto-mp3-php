<h1 style="margin: 30px 0; color: #12376E;">Seus álbuns</h1>

<a href="?page=newAlbum" class="btn btn-success" style="margin-bottom: 20px;">Adicionar álbum</a>

<div class="row">
    <?php
        $albumNames = getAlbums();
        foreach ($albumNames as $albumName) {
        $name = explode('/', $albumName);
        $albumName = "{$albumName}/{$name[1]}.png";
    ?>
    <div class="col-3 album" style="color: #12376E;">
        <a href="?page=musics&albumName=<?=$name[1]?>">
            <img style="max-width: 300px; max-height: 300px;" src="<?=$albumName?>" alt="<?=$albumName?>" class="img-album">
            <h4 class="title" style="color: #12376E;"><?=$name[1]?></h4>
        </a>
    </div>
    <?php
        }
    ?>
</div>