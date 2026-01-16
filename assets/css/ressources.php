<?php
declare(strict_types=1);
require __DIR__ . "/includes/config.php";
require __DIR__ . "/includes/data.php";
require __DIR__ . "/includes/header.php";
require __DIR__ . "/includes/images.php";


$links = [
 "sante-alimentation" => [
    ["Conseils alimentaires santé (PDF)", "docs/conseils_alimentaires_sante.pdf"],
    ["Santé et alimentation (PDF)", "docs/Santé_Et-Alimentation.pdf"],
  ],
  "obesite" => [
    ["Assurance Maladie (ameli) – Surpoids et obésité : prévention", "https://www.ameli.fr/assure/sante/themes/surpoids-obesite-adulte/prevention-hygiene-vie"],
    ["Santé publique France – Prévention de l’obésité (avis d’experts)", "https://www.santepubliquefrance.fr/import/avis-d-experts-relatif-a-la-prevention-de-l-obesite-dans-le-contexte-des-inegalites-sociales-de-sante"],
    ["HAS – Parcours de soins : surpoids et obésité de l’adulte", "https://www.has-sante.fr/jcms/p_3408871/fr/guide-du-parcours-de-soins-surpoids-et-obesite-de-l-adulte"],
  ],
  "hypertension" => [
    ["Assurance Maladie (ameli) – Hypertension artérielle", "https://www.ameli.fr/assure/sante/themes/hypertension-arterielle-hta"],
    ["Assurance Maladie (ameli) – Alimentation et HTA", "https://www.ameli.fr/assure/sante/themes/hypertension-arterielle-hta/alimentation-et-hta"],
  ],
  "cholesterol" => [
    ["Inserm – HDL/LDL : comprendre le “bon” et le “mauvais” cholestérol", "https://www.inserm.fr/c-est-quoi/docteur-hdl-et-mister-ldl-cest-quoi-le-bon-cholesterol/"],
    ["Inserm – Athérosclérose", "https://www.inserm.fr/dossier/atherosclerose/"],
  ],
  "diabete" => [
    ["HAS – Stratégie thérapeutique : diabète de type 2", "https://www.has-sante.fr/jcms/p_3191108/fr/strategie-therapeutique-du-patient-vivant-avec-un-diabete-de-type-2"],
  ],
  "sommeil" => [
    ["Santé publique France – Guide “Bien dormir, mieux vivre” (PDF)", "https://www.santepubliquefrance.fr/content/download/121788/file/154241_1215.pdf"],
    ["Assurance Maladie (ameli) – Comment mieux dormir à l’âge adulte", "https://www.ameli.fr/assure/sante/themes/insomnie-adulte/vivre-insomnie"],
    ["Ministère de la Santé – Sommeil : pilier de la santé", "https://sante.gouv.fr/prevention-en-sante/sante-mentale/promotion-et-prevention/article/sommeil-un-determinant-de-sante-essentiel-pour-la-sante-mentale-et-physique"],
    ["INSV – Institut National du Sommeil et de la Vigilance", "https://institut-sommeil-vigilance.org/"],
  ],
];
?>

<h1>Ressources fiables</h1>
<p>Pages officielles et organismes reconnus, classés par thème.</p>

<?php foreach ($THEMES as $key => $t): ?>
  <section class="panel" id="<?= htmlspecialchars($key) ?>">
    <h2><?= htmlspecialchars($t["title"]) ?></h2>
    <ul class="list">
      <?php foreach (($links[$key] ?? []) as $row): ?>
        <li><a href="<?= htmlspecialchars($row[1]) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($row[0]) ?></a></li>
      <?php endforeach; ?>
    </ul>
  </section>
<?php endforeach; ?>

<?php require __DIR__ . "/includes/footer.php"; ?>

<footer>
  <div class="container small">
    © Mini-cours IA — Hocine Korichi, ingénieur physicien et informaticien
  </div>
</footer>
