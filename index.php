<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/header.php';

/**
 * Images dans /yourhealth/assets/img (chemin web)
 * Chemin disque pour file_exists()
 */
$IMG_BASE_WEB = '/yourhealth/assets/img/';
$IMG_BASE_FS  = realpath(__DIR__ . '/assets/img') ?: '';

/** Image par défaut */
$IMG_FALLBACK_WEB = $IMG_BASE_WEB . 'default.jpg';

/** Extensions testées */
$IMG_EXTS = ['jfif', 'jpg', 'jpeg', 'png', 'webp'];

function h(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Retourne une image existante pour un slug :
 * - essaie /yourhealth/assets/img/<slug>.<ext>
 * - sinon fallback
 */
function img_for_slug(string $slug, string $imgBaseWeb, string $imgBaseFs, array $exts, string $fallbackWeb): string {
    if ($imgBaseFs === '' || !is_dir($imgBaseFs)) {
        return $fallbackWeb;
    }
    foreach ($exts as $ext) {
        $fs = $imgBaseFs . DIRECTORY_SEPARATOR . $slug . '.' . $ext;
        if (is_file($fs)) {
            return $imgBaseWeb . $slug . '.' . $ext;
        }
    }
    return $fallbackWeb;
}

/** Pathologies */
$PATHOLOGIES_21E = [
    'anxiete'                        => ['label' => 'Anxiété',                         'desc' => 'Stress, inquiétude, symptômes physiques et mentaux.'],
    'diabete'                        => ['label' => 'Diabète de type 2',               'desc' => 'Glycémie élevée, résistance à l’insuline, complications possibles.'],
    'obesite'                        => ['label' => 'Obésité',                         'desc' => 'Excès de masse grasse, risques cardio-métaboliques.'],
    'syndrome-metabolique'           => ['label' => 'Syndrome métabolique',            'desc' => 'Tour de taille, tension, sucre et lipides déséquilibrés.'],
    'foie-gras'                      => ['label' => 'Stéatose hépatique non alcoolique (maladie du foie gras)', 'desc' => 'Accumulation de graisses dans le foie hors alcool, risque d’inflammation.'],
    'hypertension'                   => ['label' => 'Hypertension artérielle',         'desc' => 'Tension élevée durable, risque cardiovasculaire accru.'],
    'palpitations'                   => ['label' => 'Palpitations du cœur',            'desc' => 'Battements rapides, forts ou irréguliers.'],
    'infarctus-myocarde'             => ['label' => 'Infarctus du myocarde',            'desc' => 'Urgence : obstruction d’une artère coronaire.'],
    'avc'                            => ['label' => 'Accident vasculaire cérébral',    'desc' => 'Urgence : atteinte de la circulation cérébrale.'],
    'depression'                     => ['label' => 'Dépression',                     'desc' => 'Humeur basse, fatigue, perte d’intérêt, troubles du sommeil.'],
    'troubles-anxieux'               => ['label' => 'Troubles anxieux',                'desc' => 'Anxiété excessive : panique, phobies, anxiété généralisée.'],
    'burn-out'                       => ['label' => 'Burn-out',                       'desc' => 'Épuisement lié au stress chronique, baisse d’énergie.'],
    'alzheimer'                      => ['label' => 'Maladie d’Alzheimer',            'desc' => 'Troubles cognitifs progressifs, notamment de la mémoire.'],
    'demences'                       => ['label' => 'Autres démences',                'desc' => 'Autres causes de déclin cognitif (vasculaire, etc.).'],
    'troubles-sommeil'               => ['label' => 'Troubles du sommeil',             'desc' => 'Insomnie, apnée, sommeil non réparateur.'],
    'addictions'                     => ['label' => 'Addictions',                     'desc' => 'Dépendances avec impact sur la santé et la vie sociale.'],
    'troubles-musculo-squelettiques' => ['label' => 'Troubles musculo-squelettiques',  'desc' => 'Douleurs et limitations : dos, tendons, articulations.'],
    'asthme'                         => ['label' => 'Asthme',                          'desc' => 'Inflammation des voies aériennes, crises, essoufflement.'],
    'allergies'                      => ['label' => 'Allergies',                       'desc' => 'Réaction excessive à des allergènes (respiratoire, peau, etc.).'],
    'drogue'                         => ['label' => 'Méfaits de la drogue',            'desc' => 'Risques physiques, psychiques, sociaux et dépendance.'],
];
?>

<style>
.hero{
  background:linear-gradient(180deg,#0b1220,#1a2233);
  color:#eef2ff;
  border-radius:18px;
  margin:0 0 20px 0;
  padding:16px;
}

/* Haut du hero */
.hero-top{
  display:flex;
  align-items:flex-start;
  justify-content:space-between;
  gap:20px;
}

.hero-left{flex:1;text-align:center}

.hero__medic{
  display:block;
  margin:0 auto 12px;
  max-width:180px;
  border-radius:14px;
  border:2px solid #3b82f6;
}

.hero__text h1{font-size:32px;color:#22c55e;margin:0 0 8px}
.hero__text p{font-size:16px;color:#facc15;margin:0}

.hero__box-sante{
  max-width:260px;
  margin:0;
  padding:16px;
  font-family:Verdana,sans-serif;
  font-size:12px;
  color:#fff;
  background-color:rgba(11,18,32,.95);
  border-radius:12px;
  border:2px solid #22d3ee;
  border-left:6px solid #3b82f6;
  box-shadow:0 8px 20px rgba(0,0,0,.55);
  text-align:left;
}

.hero__box-sante h4{font-size:14px;color:#22c55e;margin:0 0 6px}
.hero__box-sante h5{font-size:12px;color:#facc15;margin:6px 0 4px}
.hero__box-sante ul{margin:0;padding-left:16px}
.hero__box-sante li{margin-bottom:4px}

.cards-container{display:flex;flex-wrap:wrap;gap:20px;justify-content:center;margin-top:20px}
.card-patho{display:block;width:220px;text-align:center;background:rgba(11,18,32,.9);border:1px solid #22d3ee;border-radius:16px;overflow:hidden;transition:transform .3s,box-shadow .3s;text-decoration:none}
.card-patho img{width:100%;height:140px;object-fit:cover}
.card-patho h3{margin:12px 8px 6px;font-size:18px;color:#22c55e}
.card-patho p{padding:0 8px 12px;font-size:14px;color:#b9c2d6}
.card-patho:hover{transform:translateY(-6px);box-shadow:0 8px 20px rgba(0,0,0,.5)}

.container{margin-top:20px}

/* Remonter légèrement Pathologies principales */
.container-pathologies{margin-top:8px}

@media (max-width:800px){
  .hero-top{flex-direction:column}
  .hero__box-sante{max-width:100%}
}
</style>

<section class="hero">
  <div class="hero-top">
    <div class="hero-left">
      <img src="<?= h($IMG_BASE_WEB) ?>Medic.jfif" alt="Medic" class="hero__medic"
           onerror="this.onerror=null;this.src='<?= h($IMG_FALLBACK_WEB) ?>';">
      <div class="hero__text">
        <h1>Votre santé nous tient à cœur</h1>
        <p>Comprendre les maladies modernes, leurs causes et leurs mécanismes, afin de mieux les prévenir. Ce site propose des informations accessibles, des repères fiables et des conseils pratiques pour adopter une hygiène de vie plus saine et agir concrètement sur sa santé au quotidien.</p>
		<p>---------------------------------------------------------------<p>
		<p>Site en cours de développement, vos commentaires sont apprécis<p>
      </div>
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
  </div>
</section>

<section class="container container-pathologies">
  <h2>Pathologies principales</h2>
  <div class="cards-container">
    <?php foreach ($PATHOLOGIES_21E as $slug => $data): ?>
      <?php $imgWeb = img_for_slug($slug, $IMG_BASE_WEB, $IMG_BASE_FS, $IMG_EXTS, $IMG_FALLBACK_WEB); ?>
      <a href="pathologies/<?= h($slug) ?>.html" class="card-patho">
        <img src="<?= h($imgWeb) ?>" alt="<?= h($data['label']) ?>"
             onerror="this.onerror=null;this.src='<?= h($IMG_FALLBACK_WEB) ?>';">
        <h3><?= h($data['label']) ?></h3>
        <p><?= h($data['desc']) ?></p>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<section class="container">
  <h2>Prévention et bien-être</h2>
  <p>Des conseils simples pour réduire les risques et améliorer la qualité de vie.</p>
  <p><a href="alimentation.php">Alimentation équilibrée</a></p>
  <p><a href="pathologies/alzheimer.html">Maladie d’Alzheimer</a></p>
  <p><a href="pathologies/syndrome-intestin-irritable.php">Syndrome de l’intestin irritable</a></p>
  <p><a href="pathologies/bienfaits-eau-minerale.html">Bienfaits de l’eau minérale</a></p>
  <p><a href="pathologies/palpitations.php">Palpitations cardiaques</a></p>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
