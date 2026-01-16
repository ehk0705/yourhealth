<?php
declare(strict_types=1);

require __DIR__ . "/includes/config.php";
require __DIR__ . "/includes/data.php";
require __DIR__ . "/includes/header.php";



/**
 * Association explicite des thèmes avec les fichiers images existants
 * dans assets/img (extensions mixtes .jfif / .png).
 */
$IMAGES_THEMES = [
  "obesite"            => "obesite.jfif",
  "hypertension"       => "hypertension.jfif",
  "cholesterol"        => "cholesterol.png",
  "diabete"            => "diabete.jfif",
  "sommeil"            => "someil.jfif",      // nom de fichier actuel (sans 2e "m")
  "sante-alimentation" => "alimentation.jfif",
];
?>

<section class="hero">
  <div class="hero__text">
    <h1>Votre santé, en clair</h1>
    <p>Obésité, hypertension, cholestérol, diabète, sommeil : comprendre, prévenir, agir.</p>
    <div class="hero__badges">
      <span class="badge">Prévention</span>
      <span class="badge">Hygiène de vie</span>
      <span class="badge">Alimentation</span>
    </div>
  </div>
</section>

<section>
  <h2>Thèmes</h2>

  <div class="grid">
    <?php foreach ($THEMES as $key => $t): ?>
      <?php
        $imgFile = $IMAGES_THEMES[$key] ?? "default.jpg";
        $imgPath = "assets/img/" . $imgFile;
      ?>


<?php
  $href = ($key === "sante-alimentation")
    ? "alimentation.php"
    : "theme.php?t=" . urlencode($key);
?>

<a class="card" href="<?= htmlspecialchars($href, ENT_QUOTES, "UTF-8") ?>">

        <!-- Image à gauche -->
        <div class="card__img"
             style="background-image:url('<?= htmlspecialchars($imgPath) ?>')">
        </div>

        <!-- Texte à droite -->
        <div class="card__body">
          <h3><?= htmlspecialchars($t["title"]) ?></h3>
          <p><?= htmlspecialchars($t["intro"]) ?></p>
          <span class="linklike">Lire →</span>
        </div>

      </a>
    <?php endforeach; ?>
  </div>
</section>

<?php require __DIR__ . "/includes/footer.php"; ?>

<footer>
  <div class="container small">
    © Mini-cours IA — Hocine Korichi, ingénieur physicien et informaticien
  </div>
</footer>
