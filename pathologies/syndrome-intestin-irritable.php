<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Le syndrome de l’intestin irritable | Santé digestive</title>

  <style>
    :root{
      --bg:#0b1220;
      --card:#121b2e;
      --txt:#eef2ff;
      --muted:#b9c2d6;
      --accent:#7dd3fc;
      --border:rgba(255,255,255,.12);
    }
    *{box-sizing:border-box}

    body{
      margin:0;
      font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
      background:linear-gradient(180deg,#070b14,var(--bg));
      color:var(--txt);
    }

    header{
      padding:18px 16px;
      border-bottom:1px solid var(--border);
      background:rgba(0,0,0,.25);
      backdrop-filter:blur(6px);
    }

    .wrap{max-width:980px;margin:0 auto}

    .header-top{
      display:flex;
      align-items:flex-start;
      justify-content:space-between;
      gap:20px;
    }

    .header-image{
      max-width:180px;
      height:auto;
      flex-shrink:0;
      border-radius:14px;
      border:1px solid var(--border);
    }

    h1{margin:0;font-size:28px;line-height:1.2}
    .sub{color:var(--muted);margin:6px 0 0}

    nav{
      display:flex;
      flex-wrap:wrap;
      gap:10px;
      margin-top:8px;
    }
    nav a{
      color:var(--txt);
      text-decoration:none;
      padding:6px 10px;
      border:1px solid var(--border);
      border-radius:12px;
    }
    nav a:hover{border-color:rgba(125,211,252,.55)}

    main{padding:18px 16px}

    .card{
      margin-top:18px;
      background:var(--card);
      border:1px solid var(--border);
      border-radius:18px;
      padding:18px;
    }

    .card:first-child{margin-top:0}

    h2{margin:0 0 10px;font-size:18px}
    p, li{color:var(--muted);line-height:1.6}
    ul{margin-left:18px}

    footer{
      padding:18px 16px;
      border-top:1px solid var(--border);
      color:var(--muted);
      font-size:13px;
    }

    @media (max-width:700px){
      .header-top{flex-direction:column;}
      .header-image{max-width:140px;}
    }
    @media (max-width:520px){h1{font-size:24px}}
  </style>
</head>

<body>

<header>
  <div class="wrap">

    <div class="header-top">
      <div>
        <h1>Le syndrome de l’intestin irritable</h1>
        <p class="sub">Fiche pratique : comprendre, repérer, agir.</p>

        <nav aria-label="Navigation principale">
          <a href="/yourhealth/index.php">Accueil</a>
          <a href="/yourhealth/ressources.php">Ressources</a>
          <a href="/yourhealth/contact.php">Contact</a>
        </nav>
      </div>

      <img src="/yourhealth/assets/img/Intestin.jfif"
           alt="Syndrome de l’intestin irritable"
           class="header-image">
    </div>

  </div>
</header>

<main>
  <div class="wrap">

    <section class="card" id="definition">
      <h2>Définition de la pathologie</h2>
      <p>
        Le syndrome de l’intestin irritable (SII) est un trouble fonctionnel digestif
        fréquent, sans lésion visible de l’intestin. Il touche principalement le côlon
        et se manifeste par des douleurs abdominales et des troubles du transit.
      </p>
    </section>

    <section class="card">
      <h2>Symptômes les plus courants</h2>
      <ul>
        <li>Douleurs ou crampes abdominales.</li>
        <li>Ballonnements et gaz.</li>
        <li>Diarrhée, constipation ou alternance des deux.</li>
        <li>Soulagement partiel après les selles.</li>
      </ul>
    </section>

    <section class="card">
      <h2>Facteurs déclenchants</h2>
      <ul>
        <li>Stress et anxiété.</li>
        <li>Alimentation inadaptée.</li>
        <li>Hypersensibilité intestinale.</li>
        <li>Déséquilibre du microbiote.</li>
      </ul>
    </section>

    <section class="card">
      <h2>Rôle de l’alimentation</h2>
      <p>
        L’alimentation joue un rôle central dans la gestion du SII.
        Certains aliments peuvent aggraver les symptômes.
      </p>
      <ul>
        <li>Limiter les aliments fermentescibles.</li>
        <li>Adapter la consommation de fibres.</li>
        <li>Manger lentement et régulièrement.</li>
      </ul>
    </section>

    <section class="card">
      <h2>Recommandations générales</h2>
      <ul>
        <li>Identifier ses aliments déclencheurs.</li>
        <li>Maintenir une activité physique régulière.</li>
        <li>Gérer le stress et le sommeil.</li>
        <li>Consulter en cas de symptômes persistants.</li>
      </ul>
    </section>

  </div>
</main>

<footer>
  <div class="wrap">
    Conçu et développé par <strong>Hocine Bekoukes</strong>, Ingénieur physicien et informaticien<br>
    Tous droits réservés © 2025-2026
  </div>
</footer>

</body>
</html>
