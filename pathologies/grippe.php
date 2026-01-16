<?php
declare(strict_types=1);

$title = "Grippe hivernale : remèdes maison et précautions";

function e(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$sections = [
    [
        "h2" => "Comprendre la grippe hivernale",
        "p"  => [
            "La grippe est une infection virale saisonnière qui apparaît surtout en hiver.",
            "Elle se distingue du rhume par des symptômes plus intenses et d’apparition brutale."
        ],
    ],
    [
        "h2" => "Symptômes fréquents",
        "p"  => ["La grippe peut provoquer :"],
        "ul" => [
            "Fièvre",
            "Fatigue importante",
            "Courbatures",
            "Maux de tête",
            "Toux",
            "Maux de gorge",
            "Frissons"
        ],
    ],
    [
        "h2" => "Remèdes maison pour soulager",
        "p"  => [
            "Ces mesures ne guérissent pas le virus, mais aident à mieux supporter les symptômes.",
        ],
        "ul" => [
            "Repos : limiter l’activité et dormir suffisamment.",
            "Hydratation : eau, bouillons, tisanes.",
            "Boissons chaudes : thym, gingembre, citron.",
            "Miel : apaise la gorge (interdit avant 1 an).",
            "Inhalation de vapeur : aide à dégager le nez (prudence).",
            "Alimentation légère : soupes, fruits, légumes."
        ],
    ],
    [
        "h2" => "Ce qu’il vaut mieux éviter",
        "p"  => ["Certaines pratiques sont inutiles ou risquées :"],
        "ul" => [
            "Antibiotiques sans indication médicale.",
            "Se forcer à transpirer malgré la fatigue.",
            "Multiplier les médicaments (risque de surdosage)."
        ],
    ],
    [
        "h2" => "Quand consulter rapidement",
        "p"  => ["Consulte sans tarder si :"],
        "ul" => [
            "Difficulté à respirer ou douleur thoracique.",
            "Fièvre élevée persistante ou qui réapparaît.",
            "Signes de déshydratation.",
            "Terrain à risque : âge, grossesse, maladie chronique."
        ],
    ],
    [
        "h2" => "Prévention",
        "p"  => [
            "Lavage des mains, aération, éviter de toucher le visage.",
            "La vaccination réduit le risque de formes graves chez les personnes à risque."
        ],
    ],
];
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title) ?></title>

<style>
:root{
    --bg:#070b17;        /* bleu nuit sombre */
    --card:#0e162d;      /* bleu nuit */
    --txt:#ffffff;      /* texte blanc */
    --muted:#ffffff;    /* texte blanc partout */
    --accent:#9fdcff;   /* bleu clair */
    --border:rgba(255,255,255,.2);
}

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
    background:#070b17;
    color:var(--txt);
}

header{
    padding:22px 16px;
    border-bottom:1px solid var(--border);
    background:#070b17;
}

.wrap{
    max-width:980px;
    margin:0 auto;
}

nav{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    margin-top:12px;
}

nav a{
    color:#ffffff;
    text-decoration:none;
    padding:8px 12px;
    border:1px solid var(--border);
    border-radius:12px;
    background:#0e162d;
}

nav a:hover{
    border-color:var(--accent);
}

main{
    padding:22px 16px;
}

h1,
h2,
p,
li{
    color:#ffffff;
}

h2{
    font-size:18px;
}

section{
    background:var(--card);
    border:1px solid var(--border);
    border-radius:18px;
    padding:16px;
    margin:16px 0;
}

ul{
    margin:8px 0 0 18px;
}

.note{
    font-size:0.9rem;
    color:#ffffff;
    border-left:3px solid var(--accent);
    padding-left:10px;
}
</style>


</head>

<body>

<header>
  <div class="wrap">
    <h1><?= e($title) ?></h1>
    <p class="note">
      Information générale. En cas de doute ou d’aggravation, consulte un professionnel de santé.
    </p>

    <nav aria-label="Navigation principale">
      <a href="/yourhealth/index.php">Accueil</a>
      <a href="/yourhealth/alimentation.php">Alimentation</a>
      <a href="/yourhealth/ressources.php">Ressources</a>
      <a href="/yourhealth/contact.php">Contact</a>
    </nav>
  </div>
</header>

<main>
  <div class="wrap">

    <?php foreach ($sections as $s): ?>
      <section>
        <h2><?= e($s["h2"]) ?></h2>

        <?php if (!empty($s["p"])): ?>
          <?php foreach ($s["p"] as $p): ?>
            <p><?= e($p) ?></p>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php if (!empty($s["ul"])): ?>
          <ul>
            <?php foreach ($s["ul"] as $li): ?>
              <li><?= e($li) ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </section>
    <?php endforeach; ?>

  </div>
</main>
<footer>
  <div class="wrap">
  <p><strong>Avertissement :</strong> informations générales, ne remplace pas un avis médical.</p>
      <div class="wrap">
    © 2026 — Votre santé en main
	<p><strong>Auteur	 :</strong> Site développé par Hocine Korichi, Ingénieur physicien et informaticien</p>
  </div>
</footer>
 

</body>
</html>
