
<body>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="../../_css/pags_index.css"

<nav class="col-sm-3" id="menu-principal">
    <ul>
        <li class="sub">menu de opcão</li>
        <a href="admin/publicar">
            <li class="menu">Publicar</li>
        </a>
        <a href="admin/gerenciar-posts">
            <li class="menu">Gerenciar Publicações</li>
        </a>
        <a href="admin/perfil">
            <li class="menu">Editar perfil</li>
        </a>
        <a href="admin/sair">
            <li class="menu">Sair</li>
        </a>
    </ul>

    <br><br<<br>
    <?php

    $this->loadViewTemplate($viewName, $viewData);

    ?>
    ?>
</nav>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>