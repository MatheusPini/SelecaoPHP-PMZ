<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">SelecaoPHP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Lista de aparelhos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuário
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('usuarios.novo')}}">+ Adicionar</a>
                        <a class="dropdown-item" href="{{route('usuarios.listar')}}">Listar</a>
                        </div>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="content col-md-12">
                        <form method="POST" action="{{route('usuarios')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlInput1">Nome do usuário</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="nome_usuario">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlInput1">Login do usuário</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name="login_usuario">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlInput1">Senha do usuário</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="name@example.com" name="senha_usuario">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlInput1">E-mail do usuário</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="name@example.com" name="email_usuario">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlInput1">validade do usuário em dias</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput5" placeholder="name@example.com" name="validade_senha_usuario">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlInput1">Código de autorização</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput6" placeholder="name@example.com" name="codg_auth">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlSelect1">status do usuário</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="status_usuario">
                                    <option value="1">ATIVO</option>
                                    <option value="2">INATIVO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit" style="width:100%;" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                            
                        </form>
                            {{--  <div class="links">
                                <a href="https://laravel.com/docs">Docs</a>
                                <a href="https://laracasts.com">Laracasts</a>
                                <a href="https://laravel-news.com">News</a>
                                <a href="https://blog.laravel.com">Blog</a>
                                <a href="https://nova.laravel.com">Nova</a>
                                <a href="https://forge.laravel.com">Forge</a>
                                <a href="https://vapor.laravel.com">Vapor</a>
                                <a href="https://github.com/laravel/laravel">GitHub</a>
                            </div>  --}}
                    </div>
                </div>
                <div class="col-sm-3"></div>
                
            </div>
            
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>
