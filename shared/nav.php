<nav class="navbar navbar-expand-lg navbar-dark bg-roxo">
    <a class="navbar-brand" href="index.html">Sparrow-events</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">

                <a class="nav-link" href="cadastrese.html">Cadastre-se</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Eventos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Acontecendo</a>
                    <a class="dropdown-item" href="#">Previstos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Encerrados</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="contato.html" tabindex="-1" aria-disabled="true">Contato</a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">

            <button class="btn btn-outline-light my-2 my-sm-0" type="button" data-toggle="modal" data-target="#modalLogin"><i
                    class="fas fa-user mr-1" ></i>Login</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>