<?php
declare(strict_types=1);

require __DIR__ . "/includes/config.php";
require __DIR__ . "/includes/header.php";

/** Pathologies pour la liste déroulante */
$PATHOLOGIES_21E = [
  "anxiete"                     => "Anxiété",
  "diabete-type-2"              => "Diabète de type 2",
  "obesite"                     => "Obésité",
  "syndrome-metabolique"        => "Syndrome métabolique",
  "steatose-hepatique-nonalco"  => "Stéatose hépatique non alcoolique",
  "hypertension-arterielle"     => "Hypertension artérielle",
  "palpitations-cardiaques"     => "Palpitations du cœur",
  "infarctus-myocarde"          => "Infarctus du myocarde",
  "avc"                         => "Accident vasculaire cérébral",
  "depression"                  => "Dépression",
  "troubles-anxieux"            => "Troubles anxieux",
  "burn-out"                    => "Burn-out",
  "alzheimer"                   => "Maladie d’Alzheimer",
  "demences"                    => "Autres démences",
  "troubles-sommeil"            => "Troubles du sommeil",
  "addictions"                  => "Addictions",
  "troubles-musculo-squelettiques" => "Troubles musculo-squelettiques",
  "asthme"                      => "Asthme",
  "allergies"                   => "Allergies",
  "drogue"                      => "Méfaits de la drogue"
];
?>

<style>
.hero{
  position: relative;
  padding-top: 0;
}

.hero__box-sante{
  position: absolute;
  top: 0;
  right: 10px;
  max-width: 360px;
  padding: 14px;
  font-family: Verdana, sans-serif;
  font-size: 10px;
  color: #ffffff;
  background-color: #0b1220;
  border-radius: 10px;
  border: 2px solid #22d3ee;
  border-left: 6px solid #3b82f6;
  box-shadow: 0 6px 16px rgba(0,0,0,0.45);
}

.hero__box-sante h4{font-size:11px;color:#7dd3fc;margin:0 0 6px;}
.hero__box-sante h5{font-size:10px;color:#bae6fd;margin:6px 0 4px;}
.hero__box-sante ul{margin:0;padding-left:16px;}
.hero__box-sante li{margin-bottom:4px;}
</style>


<section class="hero">
  <div class="hero__text">
    <h1>Votre santé nous tient à cœur</h1>
    <p>Comprendre les maladies modernes, prévenir et agir.</p>
  </div>

  <div class="hero__box-sante">
    <h4>Hygiène de vie à adopter</h4>

    <h5>Hygiène essentielle</h5>
    <ul>
      <li>Supprimer le tabac et l’alcool.</li>
      <li>Réduire fortement les excès de sucre.</li>
      <li>Limiter les produits ultra-transformés.</li>
      <li>Privilégier une alimentation simple et naturelle.</li>
    </ul>

    <h5>Activité physique</h5>
    <ul>
      <li>Pratiquer une activité régulière adaptée.</li>
      <li>Marcher chaque jour.</li>
    </ul>

    <h5>Sommeil et stress</h5>
    <ul>
      <li>Respecter un sommeil régulier.</li>
      <li>Gérer le stress calmement.</li>
    </ul>
  </div>
</section>


<section class="container">

<h2>Rechercher par pathologie</h2>

<form method="get" action="pathologie.php" style="margin:16px 0 32px;">
  <select name="p" required style="padding:10px; width:100%; max-width:520px;">
    <option value="" disabled selected>— Sélectionner une pathologie —</option>
    <?php foreach ($PATHOLOGIES_21E as $slug => $label): ?>
      <option value="<?= htmlspecialchars($slug) ?>">
        <?= htmlspecialchars($label) ?>
      </option>
    <?php endforeach; ?>
  </select>

  <button type="submit" style="margin-top:10px;padding:10px 16px">
    Afficher
  </button>
</form>


<h2>Pathologies principales</h2>

<ul class="themes">
  <li><a href="pathologies/obesite.html">Obésité</a></li>
  <li><a href="pathologies/hypertension-arterielle.html">Hypertension</a></li>
  <li><a href="pathologies/cholesterol.html">Cholestérol</a></li>
  <li><a href="pathologies/diabete-type-2.html">Diabète</a></li>
  <li><a href="pathologies/troubles-sommeil.html">Sommeil</a></li>
</ul>

</section>


<section class="container" style="margin-top:40px">
  <h2>Alimentation & prévention</h2>

  <p><a href="syndrome-intestin-irritable.php">Syndrome de l’intestin irritable</a></p>
  <p><a href="bienfaits-eau-minerale.php">Bienfaits de l’eau minérale</a></p>
  <p><a href="palpitations.php">Palpitations cardiaques</a></p>
</section>


<?php require __DIR__ . "/includes/footer.php"; ?>