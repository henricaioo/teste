<nav class="position-fixed bottom-0 start-0 navbar navbar-expand-lg bg-dark container-fluid">
    <div class="container-fluid">
        <h1 class="orange fs-3">Apogeu</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link orange" aria-current="page" href="<?php echo '/'?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange" href="<?php echo '/map'?>">Mapa Sistema solar</a>
                </li>
                <li class="nav-item dropup">
                    <a class="nav-link dropdown-toggle orange" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Conteúdos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/news">Notícias</a></li>
                        <li><a class="dropdown-item" href="/estudo">Material</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange" href="<?php echo '/questoes'?>">Questões</a>
                </li>
                <li class="nav-item dropup">
                    <a class="nav-link dropdown-toggle orange" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                        Perfil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="<?php echo '/editaruser' ?>" class="dropdown-item">perfil</a></li>
                        <li><a href="<?php echo '/adm' ?>" class="dropdown-item">adm</a></li>
                        <li><a href="/User/logout" class="dropdown-item">Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>