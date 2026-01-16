<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Santé et alimentation</title>

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
 padding:20px;
 border-bottom:1px solid var(--border);
 background:rgba(0,0,0,.3);
}

.wrap{max-width:1000px;margin:auto}

h1{margin:0;font-size:28px}
.sub{color:var(--muted);margin-top:6px}

nav{
 margin-top:12px;
 display:flex;
 gap:12px;
 flex-wrap:wrap;
}

nav a{
 text-decoration:none;
 color:var(--txt);
 border:1px solid var(--border);
 padding:6px 12px;
 border-radius:12px;
}

nav a:hover{border-color:var(--accent)}

main{padding:20px}

.section{
 background:var(--card);
 border:1px solid var(--border);
 border-radius:18px;
 padding:18px;
 margin-bottom:18px;
 overflow:hidden;
}

.section img{
 float:right;
 max-width:220px;
 margin-left:15px;
 border-radius:12px;
}

h2{margin-top:0}

p,li{color:var(--muted);line-height:1.6}

ul{margin-top:6px}

footer{
 border-top:1px solid var(--border);
 text-align:center;
 padding:15px;
 color:var(--muted);
 font-size:14px;
}

@media(max-width:700px){
 .section img{
   float:none;
   display:block;
   margin:10px auto;
   max-width:100%;
 }
}
</style>
</head>

<body>

<header>
 <div class="wrap">
   <h1>Santé et alimentation</h1>
   <p class="sub">Comprendre le rôle de l’alimentation dans la santé.</p>

   <nav>
     <a href="/yourhealth/index.php">Accueil</a>
     <a href="/yourhealth/ressources.php">Ressources</a>
     <a href="/yourhealth/contact.php">Contact</a>
   </nav>
 </div>
</header>

<main class="wrap">

<section class="section">
<img src="assets/img/alimentation.jfif" alt="Alimentation saine">
<h2>Introduction</h2>
<p>
L’alimentation est un pilier fondamental de la santé. Elle influence directement l’énergie,
l’immunité, l’humeur et la prévention de nombreuses maladies.
Une alimentation variée et équilibrée permet de préserver l’organisme sur le long terme.
</p>
</section>

<section class="section">
<img src="assets/img/fruits_legumes.jfif" alt="Fruits et légumes">
<h2>Fruits et légumes</h2>
<p>
Les fruits et légumes apportent vitamines, minéraux, antioxydants et fibres.
Leur consommation quotidienne réduit le risque de maladies cardiovasculaires,
de diabète et de certains cancers.
Plus ils sont colorés, plus ils sont riches en composés protecteurs.
</p>
</section>

<section class="section">
<img src="assets/img/vitamines.jfif" alt="Vitamines">
<h2>Vitamines essentielles</h2>
<p>
Les vitamines participent à toutes les fonctions vitales :
immunité, énergie, vision, santé osseuse et protection cellulaire.
Une alimentation naturelle et variée couvre généralement les besoins.
</p>
</section>

<section class="section">
<img src="assets/img/antioxydants.jfif" alt="Antioxydants">
<h2>Antioxydants</h2>
<p>
Les antioxydants neutralisent les radicaux libres responsables du vieillissement cellulaire.
On les trouve principalement dans les fruits rouges, les légumes verts,
le thé vert et le chocolat noir.
</p>
</section>

<section class="section">
<img src="assets/img/epices.jfif" alt="Épices">
<h2>Épices et herbes</h2>
<p>
Le curcuma, le gingembre, l’ail et la cardamome possèdent
des propriétés anti-inflammatoires et protectrices.
Ils renforcent l’immunité et facilitent la digestion.
</p>
</section>

<section class="section">
<img src="assets/img/fibres.jfif" alt="Fibres">
<h2>Fibres alimentaires</h2>
<p>
Les fibres améliorent le transit intestinal,
régulent la glycémie et favorisent la satiété.
Elles sont présentes dans les légumes, fruits,
légumineuses et céréales complètes.
</p>
</section>

<section class="section">
<img src="assets/img/index_glycemique.jfif" alt="Index glycémique">
<h2>Index glycémique</h2>
<p>
L’index glycémique mesure l’impact d’un aliment sur la glycémie.
Privilégier les aliments à index bas permet
d’éviter les pics de sucre et de réduire le risque de diabète.
</p>
</section>

<section class="section">
<img src="assets/img/lait_sans_lactose.jfif" alt="Lait sans lactose">
<h2>Avec ou sans lactose</h2>
<p>
Certaines personnes digèrent mal le lactose.
Les laits végétaux et fromages affinés sont
de bonnes alternatives tout en assurant un apport en calcium.
</p>
</section>

<section class="section">
<img src="assets/img/chocolat-noir.jfif" alt="Chocolat noir">
<h2>Chocolat noir</h2>
<p>
Le chocolat noir riche en cacao est un excellent antioxydant.
Il protège le cœur, améliore l’humeur et stimule la concentration,
à condition d’être consommé avec modération.
</p>
</section>

<section class="section">
<h2>Conseils essentiels</h2>
<ul>
<li>Consommer des produits frais et peu transformés.</li>
<li>Limiter le sucre et les graisses industrielles.</li>
<li>Boire suffisamment d’eau.</li>
<li>Maintenir une activité physique régulière.</li>
</ul>
</section>

</main>

<footer>
© 2026 — Santé et alimentation
</footer>

</body>
</html>
