<!doctype html>
<html lang="pt-br" class="h-100">

<head>
    <?php require_once 'shared/head.php'?>


    <title>Sparrow-events - Contato</title>
</head>

<body class="d-flex flex-column h-100">
    <!--#region BARRA DE NAVEGAÇÃO-->


    <?php require_once 'shared/nav.php'?>

    <div class="row">
        <div class="container-fluid">
            <iframe style="width: 100%; border:0;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21284.949436912782!2d-40.071091880747325!3d-19.426097033503886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb628aa4674e73f%3A0xb1e5bd7adb87b443!2sSenai!5e0!3m2!1spt-BR!2sbr!4v1574807340298!5m2!1spt-BR!2sbr"
                height="234" frameborder="0" allowfullscreen=""></iframe>
        </div>
    </div>
    <main role="main" class="flex-shrink-0 mb-5">
        <div class="container">
            <form class=" needs-validation" novalidate>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset>
                            <legend>Formulário de contato</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input name="nome" type="text" class="form-control " id="nome" required>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefone">telefone celular</label>
                            <input name="telefone" type="text" class="form-control celular_ddd" id="telefone" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <input name="assunto" type="text" class="form-control" id="assunto" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" type="text" class="form-control" id="mensagem"
                                required></textarea>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Enviar mensagem</button>
                        <button type="reset" class="btn btn-link">Limpar formulário</button>
                    </div>
                </div>

            </form>
        </div>
    </main>
    <!--#region RODAPÉ DO SITE-->

    <?php require_once 'shared/footer.php'?>
    <!--#endregion-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php require_once 'shared/scripts.php'?>
</body>

</html>