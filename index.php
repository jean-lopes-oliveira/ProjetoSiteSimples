<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">RF Engenharia</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="#servicos" class="nav-item nav-link active">Serviços</a>
                        <a href="#missao" class="nav-item nav-link active">Missão</a>
                        <a href="#visao" class="nav-item nav-link active">Visão</a>
                        <a href="#valores" class="nav-item nav-link active">Valores</a>
                        <a href="#contato" class="nav-item nav-link active" >Contato</a>
                    </div>
                
                </div>
            </div>
        </nav>
    </header>
    <main id="main" class="container-fluid">
        <article id="servicos" class="row  justify-content-center align-items-center">
            <div class="conteudo col-xs-12 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <header>
                <h1>Serviços</h1>
            </header>
            <section>
               <p> Projetos de implantação de usinas de energia solar.</p>
            </section>
            
            </div>
        </article>
        
        <article id="missao" class="row justify-content-center align-items-center">
        <div class="conteudo col-xs-12 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <header>
                <h1>Missão</h1>
            </header>
            <section>
               <p> Missão.</p>
            </section>
        </div>
        </article>
        <article id="visao" class="row justify-content-center align-items-center">
        <div class="conteudo col-xs-12 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <header>
                <h1>Visão</h1>
            </header>
            <section>
               <p> Visão.</p>
            </section>
        </div>
        </article>
        <article id="valores" class="row justify-content-center align-items-center">
        <div class="conteudo col-xs-12 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 ">
            <header>
                <h1>Valores</h1>
            </header>
            <section>
               <p> Valores.</p>
            </section>
        </div>
        </article>
        <article id="contato" class="row justify-content-center align-items-center">
        <div class="conteudo col-xs-12 col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <form id="form-contato">
                    <h1>Contato</h1>
                    <label for="nome">Nome</label><input type="text" name="nome" id="nome" required class="form-control">
                    <label for="email">E-mail</label><input type="email" name="email" id="email" required class="form-control">
                    <label for="assunto">Assunto</label><input type="text" name="assunto" id="assunto" required class="form-control">
                    <label for="texto">Conteúdo</label><textarea name="texto" id="texto" required class="form-control" rows="10"></textarea>
                    <button id="btn" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        </article>
        
    </main>
    <footer id="footer" class="container-fluid">
        <div class="conteudo">
            <p>&copy;RF Engenharia - Todos os direitos reservados.</p>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
