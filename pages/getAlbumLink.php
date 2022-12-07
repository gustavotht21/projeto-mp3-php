<div class="row" style="color: #12376E;">
    <h3 class="w-75 mt-5" style="color: #12376E;">Com o Spotify aberto, clique no álbum que deseja salvar, clique em "Compartilhar álbum" e depois clique em "Incorporar álbum". Copie esse conteúdo e cole abaixo, e o link para o álbum será dado!</h3>
    <p class="fw-bold mt-3 fs-4">Exemplo:</p>
    <img style="width: 500px; height: 592.75px;" src="helper/example.png" alt="Image exemplo">

    <form action="#" method="POST">
        <div class="form-group mb-3 mt-5" style="color: #12376E;">
            <label for="body" class="fw-semibold">Insira abaixo o conteúdo gerado de "Incorporar álbum", conforme o exemplo</label>
            <input type="text" class="form-control" name="body">
        </div>
        <div>
            <button class="btn btn-success w-25" type="submit">Obter link</button>
            <a href="?page=newAlbum" class="btn btn-danger">Cancelar</a>
        </div>
        <div style="color: #12376E;">
            <p class="mt-5 fw-bold">Seu link:</p>
            <div class="p-3 bg-white mb-5 rounded" style="display: flex; justify-content: center">
                <p style="margin-top: 12px;" class="fw-semibold"><?php $link = $_POST['body'];
                    $link = explode('"', $link);

                    if ($link[3] != NULL || $link != '') {
                        print ($link[3]);
                    }?></p>
            </div>
        </div>
    </form>
</div>




