<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    $_SESSION["login"] = false;

    function loadHeader () {
        if(!$_SESSION['login']) {
            return headerUser();
        } else {
            return headerAdmin();
        }
    }

    function headerUser() {
        echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Portal de Noticias</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="write.php">Escrever Noticia</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php">Logar como administrador</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar Noticia" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>';
    }
    
    function headerAdmin() {
        echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Portal de Noticias</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="write.php">Escrever Noticia</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="approval.php">Aprovar Noticias</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                        </li>
                        
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar Noticia" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>';
    }
?>