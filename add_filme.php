<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icone1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <title>Adicionar Filme | CREATHUS</title>
    <link rel="stylesheet" href="css/add_filme.css">

</head>

<body>

    <div class="sidenav">
        <div class="col-md-6">
            <a href=""><img class="logo" src="images/icone1.ico" alt="">
        </div>
        </a>

        <a class="teste" href="index.php"><img class="navimg" src="images/casa.png" alt="">
            <p class="navlat">Ínicio</p>
        </a>
        <a href="add_filme.php"><img class="navimg" src="images/adicionar.png" alt="">
            <p class="navlat">Adicionar</p>
        </a>
    </div>
    <?php 

include_once('database/config.php');



  $imagelink = "images/" . $_POST['titulo'] . ".jpg";
  
  

  $sql = 'INSERT INTO filme (autor, titulo, descricao, imagem) 
  VALUES ("'.$_POST['autor'].'", "'.$_POST['titulo'].'", "'.$_POST['descricao'].'", "'.$imagelink.'")';
  
   echo $sql;
  $res = mysql_query($sql) or die(mysql_error());

  


?>


    <h1>Adicionar novo filme</h1>

    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imageResult').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {
        $('#upload').on('change', function() {
            readURL(input);
        });
    });
    var input = document.getElementById('upload');
    var infoArea = document.getElementById('upload-label');

    input.addEventListener('change', showFileName);

    function showFileName(event) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
    }
    </script>
    <?php
   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_FAILONERROR, true);

   $data = curl_exec($curl);

   //var_dump($data);




       //Salvar imagem do produto
       $Nome_Imagem = $_POST['titulo'] . '.JPG';
       $Caminho_Imagem = 'images/' . $Nome_Imagem;
       $Salvou_Imagem = file_put_contents($Caminho_Imagem, file_get_contents($produtoJson->thumbnail));


   
?>

    <form action="" method="post" enctype="multipart/form-data" name="form1">
        <div class="row text-center">
        <div class="col-md-5 m-0 p-0 text-center">
            <div class="image-area">
        <label class="text-center" for="upload">
                <input style="display: none" name="uploaded_file" id="upload" type="file" title=" "
                    accept="image/png,image/jpeg,image/gif" onchange="readURL(this)">
        </label>
            </div>
                   
                   

<small class="text-uppercase font-weight-bold text-muted" style="cursor:pointer;"> Selecionar
    Foto</small>
</label>
<br>
                        <label for="upload">Visualização</label>
                        <div class="image-area">
                            <label for="upload">
                                <img id="imageResult" for="upload" style="max-height: 300px; max-width:300px; cursor:pointer;" 
                                    src="images/creathus.png" />
                            </label>
                        </div>

                        <div class="container">
                            
                        <div class="single-input">
    <input type="text" class="input" id="autor">
    <label for="nome">Autor</label>
</div>
<div class="single-input">
    <input type="text" class="input" id="titulo">
    <label for="titulo">Título</label>
</div>
<div class="single-input">
    <input type="textarea" class="input" id="descricao">
    <label for="descricao">Sinopse</label>
</div>
                            
                            <input type="hidden" name="imagem" value="<?php echo $imagemlink; ?>" />

                            <br><br>
                 
                            <a href="#" class="btn btn-secondary pull-right m-0 " data-toggle="modal"
                                data-target="#modal-primary" onClick="document.form1.submit();"
                                title="Atualizar">POSTAR</a>
                            <a href="index.php" class="btn btn-warning pull-right m-0 mr-5"
                                onClick="document.form1.reset();" title="Cancelar">CANCELAR</a>
                        </div>
                    </div>
    </form>
    <footer>
        <img class="creathus" src="images/creathus.png" alt="">
    </footer>

</body>

</html>