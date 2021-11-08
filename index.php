<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div>
        <h1>Cadastro</h1>
            <form method="post" action="cadastro.php">
                <div>
                    <input type="text" name="nome" placeholder="Nome"><br>
                    <input type="email" name="email" placeholder="Email"><br>
                    <label>Selecione seu genero</label><br>
                    <input type="radio"  name="sexo" value="masculino">
                    <label for="masculino">Masculino</label><br>
                    <input type="radio"  name="sexo" value="feminino">
                    <label for="feminino">Feminino</label><br>
                    <input type="radio" name="sexo" value="outro">
                    <label for="outro">Outro</label><br><br>
                    <button type="submit" name="enviar">Enviar</button>
                    
                </div>    

            </form>
    </div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>