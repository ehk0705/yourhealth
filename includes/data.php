<?php
declare(strict_types=1);

$SITE_TITLE = "Votre Santé";

$THEMES = [

  "obesite" => [
    "title" => "Obésité",
    "image" => "assets/img/obesite.jfif",
    "intro" => "L’obésité correspond à un excès de masse grasse pouvant nuire à la santé.",
    "file"  => "pathologies/obesite.html",
    "sections" => [
      "Pathologie" => [
        "Excès de masse grasse lié à des apports énergétiques supérieurs aux dépenses."
      ],
      "Prévention et hygiène de vie" => [
        "Activité physique régulière, réduction de la sédentarité."
      ],
      "Alimentation" => [
        "Privilégier les aliments peu transformés, riches en fibres."
      ]
    ],
    "tips" => [
      "Perte de poids progressive et durable."
    ]
  ],

  "palpitations" => [
    "title" => "Palpitations du cœur",
    "image" => "assets/img/palpitations.jfif",
    "intro" => "Les palpitations sont la perception anormale des battements du cœur.",
    "file"  => "pathologies/palpitations.php",
    "sections" => [
      "Symptôme" => [
        "Sensation de cœur qui bat trop vite, trop fort ou de manière irrégulière."
      ],
      "Causes fréquentes" => [
        "Stress, anxiété, effort physique, caféine, troubles du rythme cardiaque."
      ],
      "Quand consulter" => [
        "Si les palpitations sont fréquentes, prolongées ou associées à un malaise."
      ]
    ],
    "tips" => [
      "Limiter café, alcool et tabac.",
      "Apprendre à gérer le stress."
    ]
  ],

  "hypertension" => [
    "title" => "Hypertension",
    "image" => "assets/img/hypertension.jfif",
    "intro" => "Pression artérielle trop élevée, souvent sans symptôme.",
    "file"  => "pathologies/hypertension-arterielle.html",
    "sections" => [
      "Pathologie" => [
        "Facteurs génétiques et environnementaux."
      ],
      "Prévention et hygiène de vie" => [
        "Réduction du sel, activité physique."
      ],
      "Alimentation" => [
        "Limiter les aliments salés et ultra-transformés."
      ]
    ],
    "tips" => [
      "Mesurer régulièrement sa tension."
    ]
  ],

  "cholesterol" => [
    "title" => "Cholestérol",
    "image" => "assets/img/cholesterol.png",
    "intro" => "Un excès de LDL favorise les maladies cardiovasculaires.",
    "file"  => "pathologies/cholesterol.html",
    "sections" => [
      "Pathologie" => [
        "Accumulation de cholestérol dans les artères."
      ],
      "Prévention et hygiène de vie" => [
        "Arrêt du tabac, activité physique."
      ],
      "Alimentation" => [
        "Privilégier huiles végétales et fibres."
      ]
    ],
    "tips" => [
      "L’équilibre alimentaire reste essentiel même sous traitement."
    ]
  ],

  "diabete" => [
    "title" => "Diabète",
    "image" => "assets/img/diabete.jfif",
    "intro" => "Élévation chronique de la glycémie, surtout de type 2 chez l’adulte.",
    "file"  => "pathologies/diabete.html",
    "sections" => [],
    "tips" => []
  ],

  "sommeil" => [
    "title" => "Sommeil",
    "image" => "assets/img/someil.jfif",
    "intro" => "Un mauvais sommeil augmente les risques métaboliques.",
    "file"  => "pathologies/troubles-sommeil.html",
    "sections" => [
      "Pathologie" => [
        "Insomnie, apnée du sommeil."
      ],
      "Prévention et hygiène de vie" => [
        "Horaires réguliers, réduction des écrans le soir."
      ],
      "Alimentation" => [
        "Éviter café et alcool le soir."
      ]
    ],
    "tips" => [
      "La régularité est la clé."
    ]
  ],

  "anxiete" => [
    "title" => "Anxiété",
    "image" => "assets/img/anxiete.jfif",
    "intro" => "L’anxiété est une réaction excessive et persistante face au stress ou à l’anticipation du danger.",
    "file"  => "pathologies/anxiete.html",
    "sections" => [
      "Trouble" => [
        "Inquiétude constante, tension nerveuse, agitation, difficultés de concentration."
      ],
      "Facteurs déclenchants" => [
        "Stress chronique, événements de vie difficiles, troubles du sommeil."
      ],
      "Quand consulter" => [
        "Si l’anxiété devient envahissante ou perturbe la vie quotidienne."
      ]
    ],
    "tips" => [
      "Respiration lente et profonde.",
      "Activité physique régulière.",
      "Limiter caféine et stimulants."
    ]
  ],

  "steatose" => [
    "title" => "Stéatose hépatique non alcoolique (foie gras)",
    "image" => "assets/img/foie-gras.jfif",
    "intro" => "Accumulation excessive de graisses dans le foie, sans consommation excessive d’alcool.",
    "file"  => "pathologies/foie-gras.html",
    "sections" => [
      "Pathologie" => [
        "Excès de lipides dans les cellules du foie, souvent associé au surpoids et au diabète."
      ],
      "Facteurs de risque" => [
        "Surpoids, obésité abdominale, diabète de type 2, sédentarité."
      ],
      "Prévention et hygiène de vie" => [
        "Perte de poids progressive, activité physique régulière."
      ],
      "Alimentation" => [
        "Réduction des sucres rapides et des produits ultra-transformés.",
        "Privilégier légumes, fibres et graisses de bonne qualité."
      ]
    ],
    "tips" => [
      "La perte de 5 à 10 % du poids améliore l’état du foie.",
      "Éviter l’alcool, même à faible dose."
    ]
  ],

  "sante-alimentation" => [
    "title" => "Santé et alimentation",
    "image" => "assets/img/alimentation.jfif",
    "intro" => "Bien manger pour prévenir les maladies chroniques.",
    "file" => "alimentation_mod.php",
    "sections" => [
      "Rôle de l’alimentation" => [
        "L’alimentation influence l’énergie, l’immunité et le bien-être général.",
        "Une alimentation déséquilibrée favorise des maladies chroniques."
      ],
      "Prévention et hygiène de vie" => [
        "Privilégier une alimentation variée et peu transformée.",
        "Associer activité physique, sommeil suffisant et gestion du stress."
      ],
      "Alimentation" => [
        "Fruits et légumes, légumineuses, céréales complètes.",
        "Limiter les produits ultra-transformés."
      ]
    ],
    "tips" => [
      "La régularité et la simplicité sont plus efficaces que les régimes extrêmes."
    ],
    "page" => "alimentation.php"
  ],

  "grippe" => [
    "title" => "Grippe hivernale",
    "intro" => "Symptômes, remèdes maison, prévention et signes d’alerte.",
    "image" => "assets/img/grippe-hiver.jfif",
    "page"  => "grippe.php"
  ],

  "mental-health" => [
    "title" => "Santé mentale",
    "intro" => "Dépression, troubles bipolaires et de la personnalité.",
    "image" => "assets/img/mental-health.jfif",
    "page"  => "mental-health.php"
  ],
  
"avc" => [
    "label" => "Accident vasculaire cérébral (AVC)",
    "desc"  => "Urgence médicale : interruption de la circulation sanguine dans le cerveau.",
    "image" => "assets/img/avc.jfif",
    "page"  => "avc.html"
],

];
