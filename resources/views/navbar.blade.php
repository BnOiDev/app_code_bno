<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <!--Slidebar menu topo-->
     <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-mega-moda d-block d-lg-none"
        aria-label="Eleventh navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/mega-flor.png"
                    class="logo-navbar rounded-circle mx-2 my-1" alt="Novo Mundo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="#"><i
                                class="bi bi-house-fill"></i> Home</a>
                    </li>

                    {{-- @if ($auth_admMega != 1) --}}
                        <!--Dropdwn:itens de menu-->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdown01"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="bi bi-palette-fill"></i>VENDAS</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" href="#">Catálogo</a></li>
                                <li><a class="dropdown-item" href="#">Pedido Atual</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Consulta
                                        Pedido</a>
                                </li>
                            </ul>
                        </li>
                    {{-- @endif
                    @if ($auth_admMega != 1) --}}
                        <!--Dropdwn:itens de menu-->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdown02"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="bi bi-chat-right-text-fill"></i>CADASTROS</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li><a class="dropdown-item" href="#">Produto</a></li>
                                <li><a class="dropdown-item" href="#">Cliente/Fornecedor</a></li>
                            </ul>
                        </li>
                    {{-- @endif
                    @if ($auth_admLoja == 1) --}}
                        <!--Dropdwn:itens de menu-->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdown03"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="bi bi-person-badge-fill"></i>ÁREA DO LOJISTA</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="#">Visão
                                        Geral</a></li>
                                <li><a class="dropdown-item" href="#">Configurar Loja</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Usuário</a></li>
                            </ul>
                        </li>
                    {{-- @endif
                    @if ($auth_admMega == 1) --}}
                        <!--Dropdwn:itens de menu-->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdown04"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="bi bi-chat-right-text-fill"></i>ADMINISTRATIVO</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown04">
                                <li><a class="dropdown-item" href="#">Cadastrar Lojas</a></li>
                            </ul>
                        </li>
                    {{-- @endif --}}
                </ul>
                <!--Dropdwn:Fim-->
                <ul class="navbar-nav pull-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" id="dropdown05"
                            data-bs-toggle="dropdown" aria-expanded="false"><strong>Olá,</strong> nome:
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05" style="min-width: 8rem;">

                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</body>
</html>