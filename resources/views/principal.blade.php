<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/sidebar.css" />
</head>

<body>

    <!-- Sidebar-Nav -->
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <div id="logo-empresa" class="d-flex flex-column rounded mx-auto d-block">
                <br>
                <img src="images/mega-flor.png" class="rounded-circle" width="80" height="80">
                <br>
            </div>
            <div id="welcome" class="col-12 col-sm-12 col-md-12 col-xl-12">
                <div class="col-10" style="text-align: -webkit-center;">
                    <img src="images/avatar.png" alt="hugenerd" width="30" height="30" class="rounded-circle mx-2 my-1">
                    <span class="d-none d-sm-inline text-black">Bem vindo(a),&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <b>Almeida Modas</b></span><br>
                    <span class="d-none d-sm-inline text-black">Loja: <b>039</b></span>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                    <a href="#" class="nav-link">Sair</a>
                </div>

                <ul class="nav nav-pills flex-column mb-sm-auto align-items-center align-items-sm-start" id="menu">
                <li>
                    {{-- @if ($auth_admMega != 1) --}}
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link align-middle ">
                            <img src="icones_slide\shop.svg" style="width:10%">
                             <span class="ms-1 d-none d-sm-inline fs-6 dropdown-toggle">VENDAS</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#submenu1">
                            <li class="w-100">
                                <a href="#" class="nav-link pt-0"><span class="d-none d-sm-inline fs-6">Catálogo</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link pt-0"> <span class="d-none d-sm-inline fs-6">Pedido Atual</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link pt-0"> <span class="d-none d-sm-inline fs-6">Consulta Pedidos</span> </a>
                            </li>
                        </ul>
                    {{-- @endif --}}
                </li>
                <li>
                    {{-- @if ($auth_admMega != 1) --}}
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link align-middle ">
                            <img src="icones_slide\person.svg" style="width:10%">
                            <span class="ms-1 d-none d-sm-inline fs-6 dropdown-toggle">CADASTROS</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu2" data-bs-parent="#submenu2">
                            <li class="w-100">
                                <a href="#" class="nav-link pt-0"> <span class="d-none d-sm-inline fs-6">Produtos</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link pt-0"> <span class="d-none d-sm-inline fs-6">Cliente/Fornecedor</span> </a>
                            </li>
                        </ul>
                    {{-- @endif --}}
                </li>
                <li>
                    {{-- @if ($auth_admLoja == 1) --}}
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link align-middle">
                            <img src="icones_slide\shop.svg" style="width:8%">
                            <span class="ms-1 d-none d-sm-inline fs-6 dropdown-toggle">ÁREA DO LOJISTA</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu3" data-bs-parent="#submenu3">
                            <li class="w-100">
                                <a href="#" class="nav-link pt-0"> <span class="d-none d-sm-inline  fs-6">Visão Geral</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link pt-0"> <span class="d-none d-sm-inline fs-6">Configurar Loja</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link pt-0"> <span class="d-none d-sm-inline fs-6">Usuário</span></a>
                            </li>

                        </ul>
                    {{-- @endif
                    @if ($auth_admMega == 1) --}}
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link align-middle">
                             <img src="icones_slide\shop.svg" style="width:8%">
                            <span class="ms-1 d-none d-sm-inline fs-6 dropdown-toggle">ADMINISTRATIVO</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu3" data-bs-parent="#submenu3">
                            <li class="w-100">
                                <a href="#" class="nav-link pt-0"><span class="d-none d-sm-inline  fs-6">Cadastrar Lojas</span></a>
                            </li>
                        </ul>
                    {{-- @endif --}}
                </li>
            </ul>
        </ul>

        <span href="#" class="nav-link h4 w-100 mb-5">
            <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
            <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
            <a href=""><i class="bx bxl-facebook text-white"></i></a>
        </span>
    </div>

    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light bg-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
        </nav>
        <!--End Top Nav -->
        <h3 class="text-dark p-3">Responsivo: 💻 📱</h3>


    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <!-- custom js -->
    <script>
        var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });
    </script>
</body>

</html>
