<?php
declare(strict_types=1);

/**
 * Commentaires -> fichier texte sur localhost
 * Chemin conseillé : /yourhealth/data/commentaires.txt
 */

date_default_timezone_set('America/Mexico_City');

$DATA_DIR = __DIR__ . '/data';
$COMMENTS_FILE = $DATA_DIR . '/commentaires.txt';

$errors = [];
$ok = null;

function clean_text(string $s, int $maxLen): string {
  $s = trim($s);
  $s = str_replace(["\r\n", "\r"], "\n", $s);
  $s = preg_replace('/[ \t]+/', ' ', $s) ?? $s;
  if (mb_strlen($s) > $maxLen) $s = mb_substr($s, 0, $maxLen);
  return $s;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form'] ?? '') === 'comment') {
  $nom = clean_text((string)($_POST['nom'] ?? ''), 80);
  $commentaire = clean_text((string)($_POST['commentaire'] ?? ''), 2000);

  if ($nom === '') $errors[] = "Le nom est obligatoire.";
  if ($commentaire === '') $errors[] = "Le commentaire est obligatoire.";

  if (trim((string)($_POST['siteweb'] ?? '')) !== '') {
    $errors[] = "Soumission refusée.";
  }

  if (!$errors) {
    if (!is_dir($DATA_DIR) && !mkdir($DATA_DIR, 0775, true)) {
      $errors[] = "Impossible de créer le dossier de stockage.";
    }

    if (!$errors) {
      $dt = date('Y-m-d H:i:s');
      $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

      $entry =
        "-----\n".
        "Date: {$dt}\n".
        "IP: {$ip}\n".
        "Nom: {$nom}\n".
        "Commentaire:\n{$commentaire}\n";

      if (@file_put_contents($COMMENTS_FILE, $entry, FILE_APPEND | LOCK_EX) === false) {
        $errors[] = "Écriture impossible. Vérifie les droits sur le dossier /data.";
      } else {
        $ok = "Merci. Ton commentaire a été enregistré.";
      }
    }
  }
}

$lastComments = '';
if (is_file($COMMENTS_FILE)) {
  $content = @file_get_contents($COMMENTS_FILE);
  if (is_string($content)) {
    $lastComments = mb_substr($content, max(0, mb_strlen($content) - 5000));
  }
}

function h(string $s): string {
  return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact | YourHealth</title>

  <style>
    :root{
      --bg:#0b1220;
      --card:#121b2e;
      --txt:#eef2ff;
      --muted:#b9c2d6;
      --accent:#7dd3fc;
      --border:rgba(255,255,255,.12);
      --bad:#ff8a8a;
      --ok:#98ffb3;
      --yellow:#facc15;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
      background:linear-gradient(180deg,#070b14,var(--bg));
      color:var(--txt);
    }
    header{
      padding:22px 16px;
      border-bottom:1px solid var(--border);
      background:rgba(0,0,0,.25);
      backdrop-filter:blur(6px);
    }
    .wrap{max-width:980px;margin:0 auto}
    h1{margin:0;font-size:26px}
    h2{margin:0 0 12px;font-weight:700}
    .h2-contact{color:var(--accent)}
    .h2-comment{color:var(--ok)}
    .h2-preview{color:var(--yellow)}

    nav{display:flex;flex-wrap:wrap;gap:10px;margin-top:14px}
    nav a{
      color:var(--txt);
      text-decoration:none;
      padding:8px 10px;
      border:1px solid var(--border);
      border-radius:12px;
    }
    nav a:hover{border-color:rgba(125,211,252,.55)}
    main{padding:22px 16px}
    .card{
      background:var(--card);
      border:1px solid var(--border);
      border-radius:18px;
      padding:18px;
      margin-bottom:16px;
    }
    label{display:block;margin-top:12px}
    input,textarea{
      width:100%;
      margin-top:6px;
      padding:10px;
      border-radius:10px;
      border:1px solid var(--border);
      background:#0b1220;
      color:var(--txt);
      font-family:inherit;
    }
    textarea{min-height:120px;resize:vertical}
    button{
      margin-top:16px;
      padding:10px 14px;
      border-radius:12px;
      border:1px solid var(--border);
      background:transparent;
      color:var(--txt);
      cursor:pointer;
    }
    button:hover{border-color:rgba(125,211,252,.55)}
    .muted{color:var(--muted)}
    .msg-ok{color:var(--ok); margin-top:10px}
    .msg-bad{color:var(--bad); margin-top:10px}
    footer{
      padding:18px 16px;
      border-top:1px solid var(--border);
      color:var(--muted);
      font-size:13px;
    }
    pre{
      white-space:pre-wrap;
      background:#0b1220;
      border:1px solid var(--border);
      border-radius:12px;
      padding:12px;
      color:var(--muted);
    }
    .hp{position:absolute;left:-9999px}
  </style>
</head>

<body>

<header>
  <div class="wrap">
    <h1>Hocine Bekoukes</h1>
    <nav>
      <a href="/yourhealth/index.php">Accueil</a>
      <a href="/yourhealth/theme.php">Thèmes</a>
      <a href="/yourhealth/alimentation.php">Alimentation</a>
      <a href="/yourhealth/ressources.php">Ressources</a>
      <a href="/yourhealth/contact.php">Contact</a>
    </nav>
  </div>
</header>

<main>
  <div class="wrap">

    <section class="card">
      <h2 class="h2-contact">Formulaire de contact</h2>
      <p class="muted">
        Merci pour vos retours. Signalez tout problème de navigation ou erreur constatée.
      </p>
    </section>

    <section class="card">
      <h2 class="h2-comment">Commentaires des utilisateurs</h2>

      <?php if ($ok): ?>
        <p class="msg-ok"><?= h($ok) ?></p>
      <?php endif; ?>

      <?php if ($errors): ?>
        <div class="msg-bad">
          <ul>
            <?php foreach ($errors as $e): ?>
              <li><?= h($e) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <form method="post">
        <input type="hidden" name="form" value="comment">

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required>

        <label for="commentaire">Commentaire</label>
        <textarea id="commentaire" name="commentaire" required></textarea>

        <div class="hp">
          <label for="siteweb">Site web</label>
          <input type="text" id="siteweb" name="siteweb">
        </div>

        <button type="submit">Envoyer</button>
      </form>
    </section>

    <?php if ($lastComments !== ''): ?>
      <section class="card">
        <h2 class="h2-preview">Derniers commentaires (aperçu)</h2>
        <pre><?= h($lastComments) ?></pre>
      </section>
    <?php endif; ?>

  </div>
</main>

<footer>
  <div class="wrap">
    Conçu et développé par <strong>Hocine Bekoukes</strong><br>
    Tous droits réservés © 2025-2026
  </div>
</footer>

</body>
</html>
