<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/ebb94be4bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/resouces/trix/trix.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>_-ADM-_</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-danger" href="#">_-ADM-_</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <div class="col-11">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="/admin" class="nav-link<?php if (resolve('/admin.*')) : ?> active<?php endif; ?>"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/pages" class="nav-link<?php if (resolve('/admin/pages.*')) : ?> active<?php endif; ?>"><i class="far fa-file-alt"></i> Páginas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/users" class="nav-link<?php if (resolve('/admin/users.*')) : ?> active<?php endif; ?>"><i class="far fa-user"></i> Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/clientes" class="nav-link<?php if (resolve('/admin/clientes.*')) : ?> active<?php endif; ?>"><i class="far fa-users"></i>Clientes</a>
                    </li>

                </ul>
            </div>
            <div class="col-1"><a href="/admin/auth/logout" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Sair</a></div>
        </div>
    </nav>
    <div class="container">
        <?php include $content ?>
    </div>
    <footer class="footer">
        <div class="container">
            <span class="text-muted">2017 - todos os direitos reservados</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        <?php flash(); ?>

        const textarea = $('#mytexterea');
        if (textarea) {
            tinymce.init({
                selector: '#mytextarea'
            });
        }

        const confirmE1 = document.querySelector('.confirm');
        if (confirmE1) {
            confirmE1.addEventListener('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Tem certeza que deseja deletar isso?',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, quero deletar isso'
                }).then((result) => {
                    if (result.value) {
                        window.location = e.target.getAttribute('href');
                    }
                });        console.log(textarea);

            });
        }
    </script>

</body>

</html>