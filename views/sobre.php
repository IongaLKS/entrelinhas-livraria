<?phpcase 'sobre':
    require_once __DIR__ . '/controllers/SobreController.php';
    $c = new SobreController();
    break;
<?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" type="image/png" href="/entrelinhas/public/assets/favicon.png">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre Nós - Entrelinhas</title>
  <link rel="stylesheet" href="/entrelinhas/public/assets/css/sobre.css">
  <style>
    .btn-voltar {
      display: inline-block;
      margin-bottom: 24px;
      padding: 8px 18px;
      background-color: #6a4334;
      color: #FFE7D7;
      border-radius: 20px;
      text-decoration: none;
      font-size: 0.85rem;
      transition: background-color 0.2s;
    }
    .btn-voltar:hover { background-color: #3B1A0D; }
  </style>
</head>
<body>

  <nav>
    <img src="/entrelinhas/public/assets/logo2.png" alt="entrelinhas" class="logo">
    <div class="nav-direita">
      <a class="nav-icone" href="/entrelinhas/index.php?controller=dashboard&action=index">
        <img src="/entrelinhas/public/assets/grafico1.png" alt="dashboard" style="height:25px;width:25px;">
      </a>
      <a class="nav-icone" href="/entrelinhas/index.php?controller=auth&action=logout">
        <img src="/entrelinhas/public/assets/usuario.png" alt="vendedor" style="height:25px;width:25px;">
      </a>
    </div>
  </nav>

  <div class="pagina">
    <h1 class="titulo">Equipe Desenvolvedora</h1>
    <p class="sub-titulo">Conheça as pessoas que tornaram esse projeto possível<br>com dedicação, conhecimento e criatividade.</p>

    <div class="team-grid">

      <div class="desenvolvedores">
        <div class="foto">
          <img src="/entrelinhas/public/assets/imagens-desenvolvedores/rita.webp" alt="ritinha">
        </div>
        <span class="nome">Rita de Cássia</span>
        <span class="funcao">Desenvolvedora do<br>banco de dados</span>
      </div>

      <div class="desenvolvedores">
        <div class="foto">
          <img src="/entrelinhas/public/assets/imagens-desenvolvedores/ana-flor.webp" alt="ana-florzinha">
        </div>
        <span class="nome">Ana Laura Flor</span>
        <span class="funcao">Desenvolvedora do<br>banco de dados</span>
      </div>

      <div class="desenvolvedores">
        <div class="foto">
          <img src="/entrelinhas/public/assets/imagens-desenvolvedores/mariana.webp" alt="mari">
        </div>
        <span class="nome">Mariana Crelier</span>
        <span class="funcao">Responsável pela<br>identidade visual</span>
      </div>

      <div class="desenvolvedores">
        <div class="foto">
          <img src="/entrelinhas/public/assets/imagens-desenvolvedores/djenyffer.webp" alt="dj">
        </div>
        <span class="nome">Djenyffer Alves</span>
        <span class="funcao">Responsável pela<br>identidade visual</span>
      </div>

      <div class="desenvolvedores">
        <div class="foto">
          <img src="/entrelinhas/public/assets/imagens-desenvolvedores/bella.webp" alt="bella">
        </div>
        <span class="nome">Isabella Prieto</span>
        <span class="funcao">Desenvolvedora<br>Front-end</span>
      </div>

      <div class="desenvolvedores">
        <div class="foto">
          <img src="/entrelinhas/public/assets/imagens-desenvolvedores/ian.webp" alt="ian">
        </div>
        <span class="nome">Ian Gonçalves</span>
        <span class="funcao">Desenvolvedor<br>PHP</span>
      </div>

    </div>
  </div>

</body>
</html>