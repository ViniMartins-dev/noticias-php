<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    function loadHeader () {
        if(!isset($_SESSION['login'])) {
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
                            <a class="nav-link active" aria-current="page" href="write.php"><i class="bi bi-pencil-square"></i> Escrever Noticia</a>
                        </li>

                    </ul>
                    <span class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php"><i class="bi bi-box-arrow-in-left"></i> Logar</a>
                    </span>
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
                            <a class="nav-link active" aria-current="page" href="write.php"><i class="bi bi-pencil-square"></i> Escrever Noticia</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="approval-list.php"><i class="bi bi-newspaper"></i> Aprovar Noticias</a>
                        </li>

                        
                    </ul>
                    <span class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../script/logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </span>
                </div>
            </div>
        </nav>';
    }
?>