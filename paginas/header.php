<?php

function loadHeader()
{

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['login'])) {
        return headerUser();
    }

    switch ($_SESSION['login']) {
        case 'escritor':
            return headerEscritor();

        case 'admin':
            return headerAdmin();

        default:
            return headerUser();
    }
} 

function headerUser() {
    echo '<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top ">
            <div class="container-fluid">
                <a href="/noticias-php/paginas/index.php" class="navbar-brand">Portal de Noticias</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                    <span class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/noticias-php/paginas/login.php"><i class="bi bi-box-arrow-in-left"></i> Logar</a>
                    </span>
                </div>
            </div>
        </nav>';
}

function headerAdmin() {
    echo '<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
            <div class="container-fluid">
                <a href="/noticias-php/paginas/index.php" class="navbar-brand">Portal de Noticias</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/noticias-php/paginas/write.php"><i class="bi bi-pencil-square"></i> Escrever Noticia</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/noticias-php/paginas/approval-list.php"><i class="bi bi-newspaper"></i> Aprovar Noticias</a>
                        </li>

                        
                    </ul>
                    <span class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/noticias-php/script/logout.php"><i class="bi bi-box-arrow-in-right"></i> Logout</a>
                    </span>
                </div>
            </div>
        </nav>';
}

function headerEscritor(){
    echo '<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top ">
            <div class="container-fluid">
                <a href="/noticias-php/paginas/index.php" class="navbar-brand">Portal de Noticias</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/noticias-php/paginas/write.php"><i class="bi bi-pencil-square"></i> Escrever Noticia</a>
                        </li>

                    </ul>
                    <span class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/noticias-php/script/logout.php"><i class="bi bi-box-arrow-in-right"></i> Logout</a>   
                    </span>
                </div>
            </div>
        </nav>';
}
?>