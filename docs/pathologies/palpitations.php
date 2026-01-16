<?php
declare(strict_types=1);
?>

<style>
.top-menu{
  width:100%;
  background:#0b1220;
  border-bottom:2px solid #22d3ee;
}

.top-menu ul{
  margin:0;
  padding:10px 16px;
  list-style:none;
  display:flex;
  gap:20px;
  flex-wrap:wrap;
}

.top-menu a{
  color:#e5e7eb;
  text-decoration:none;
  font-size:14px;
}

.top-menu a:hover{
  text-decoration:underline;
}
</style>

<nav class="top-menu">
  <ul>
    <li><a href="/yourhealth/index.php">Accueil</a></li>
    <li><a href="/yourhealth/index.php#themes">Thèmes</a></li>
    <li><a href="/yourhealth/alimentation.php">Alimentation</a></li>
    <li><a href="/yourhealth/ressources.php">Ressources</a></li>
    <li><a href="/yourhealth/contact.php">Contact</a></li>
  </ul>
</nav>

<section class="container">

  <div style="display:flex; align-items:flex-start; gap:20px; flex-wrap:wrap">

    <div style="flex:1; min-width:260px">
      <h1>Palpitations du cœur</h1>

      <h2>Définition</h2>
      <p>
        Les palpitations correspondent à la perception anormale des battements du cœur.
        Elles peuvent être rapides, irrégulières ou anormalement fortes.
        Elles sont souvent bénignes, mais ne doivent pas être ignorées.
      </p>
    </div>

    <div style="flex:0 0 200px">
      <img
        src="/yourhealth/assets/img/heart.jfif"
        alt="Cœur et rythme cardiaque"
        style="width:100%; max-width:200px; border-radius:10px"
      >
    </div>

  </div>

  <h2>Causes fréquentes</h2>
  <ul>
    <li>Stress, anxiété, émotions fortes</li>
    <li>Fatigue, manque de sommeil</li>
    <li>Café, thé, boissons énergisantes, tabac</li>
    <li>Déshydratation</li>
    <li>Effort physique excessif</li>
    <li>Carences en magnésium ou potassium</li>
    <li>Médicaments</li>
    <li>Troubles du rythme cardiaque</li>
    <li>Problèmes hormonaux</li>
    <li>Hypertension ou maladie cardiaque</li>
  </ul>

  <h2>Quand s’inquiéter</h2>
  <p>Consulter rapidement si les palpitations sont associées à :</p>
  <ul>
    <li>douleur thoracique</li>
    <li>essoufflement</li>
    <li>malaise ou perte de connaissance</li>
    <li>palpitations prolongées</li>
  </ul>

  <h2>Mesures simples</h2>
  <ul>
    <li>Boire suffisamment d’eau</li>
    <li>Réduire café et nicotine</li>
    <li>Dormir régulièrement</li>
    <li>Respiration lente</li>
    <li>Éviter les efforts brusques</li>
  </ul>

  <h2>À retenir</h2>
  <p>
    Les palpitations sont souvent bénignes, mais leur répétition doit être évaluée.
  </p>

</section>

<?php
require __DIR__ . "/../../includes/footer.php";
