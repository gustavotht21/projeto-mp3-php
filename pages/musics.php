<?php
    $link = getLink();
?>
<a class="btn btn-primary mt-3 w-25" href="?page=albums">
    Voltar para o Início
</a>
<h1 style="margin: 30px 0;">Músicas do Álbum <?=$_GET['albumName']?></h1>

<iframe
        style="border-radius:12px"
        src=<?=$link?>
        width="100%"
        height="500"
        allowfullscreen=""
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
        loading="lazy">
</iframe>