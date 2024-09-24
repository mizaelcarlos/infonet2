´´´ HTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="row justify-content-md-center">
        <div class="col-md-4"> 
            <div class="row justify-content-md-center">
                <h1>Login</h1>
            </div>
            <div class="row">
               <form>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
      </div>
      

    <script src="popper.min.js"></script>
    <script src="jquery-3.3.1.slim.min.js"></script>
</body>
</html>
