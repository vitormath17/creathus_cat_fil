<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Personalizando Input Type Text</title>
</head>
<body>
    <h1>Input Type Text Personalizado</h1>

    <form>

        <div class="single-input">
            <input type="text" class="input" id="autor" required>
            <label for="nome">Autor</label>
        </div>
        <div class="single-input">
            <input type="text" class="input" id="titulo" required>
            <label for="titulo">Título</label>
        </div>
		<div class="single-input">
            <input type="textarea" class="input" id="descricao" required>
            <label for="descricao">Sinopse</label>
        </div>

    </form>
    
</body>
</html>