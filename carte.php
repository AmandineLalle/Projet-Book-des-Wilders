<?php
$wilders = [
  [
    "name" => "Marvin Crépin",
    "futur" => "En recherge de stage",
    "projet" => "Développeur Web et/ou Data Analyst",
    "github" => "https://github.com/MarvinCrepin",
    "linkedin" => "https://www.linkedin.com/in/marvin-crepin/",
    "photo" => "Marvin.png",
    "age" => "20 ans",
    "description" => "Marvin Crépin, 20 ans, Epernay, interested in web development, data analytics.",
    "HTML" => "&#128522;",
    "CSS" => "&#128522;",
    "PHP" => "&#128522;",
    "SoftSkill1" => "Communication",
    "SoftSkill2" => "Perfectionniste",
    "SoftSkill3" => "Créatif",
    "etoile" => "&#11088",
  ],
  [
    "name" => "Amandine Lalle",
    "futur" => "Alternance",
    "projet" => "J'aimerais continuer en alternance ma formation de dev web.",
    "github" => "https://github.com/AmandineLalle",
    "linkedin" => "https://www.linkedin.com/in/amandine-lalle-aa94ab1ba/",
    "photo" => "Amandine.png",
    "age" => "26 ans",
    "description" => "Je verrai plus tard",
    "HTML" => "&#128528;",
    "CSS" => "&#128528;",
    "PHP" => "&#128528;",
    "SoftSkill1" => "Communication",
    "SoftSkill2" => "Créative",
    "SoftSkill3" => "Esprit d'équipe",
    "etoile" => "&#11088",
  ],
];
?>
<!DOCTYPE HTML>
    <html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <script src="https://kit.fontawesome.com/70941b8294.js" crossorigin="anonymous"></script>
      <title>Book des wilders </title>
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
     <header>
       <a href="https://www.wildcodeschool.com/fr-FR" target="_blank">
        <img class="logowild" src="logowildblanc.png" alt="Logo qui redirige vers le site de la wild">
      </a>
      <h1> Projet Book des Wilders</h1>
      <details class="modal">
        <summary class="modal-trigger"><img class="logopromo" src="image0.png"></summary>
      <p class="modal-content">
        <img class="photoclasse" src="imagemasterclass.png">
      </p>
      </details> 
     </header>

     <details>
      <summary>Présentation de notre promotion :</summary>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam minus, consequuntur inventore optio neque officiis fugit ea eaque temporibus, 
         culpa, non ad. Nostrum blanditiis et asperiores adipisci magnam, odio ipsum.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio distinctio et cumque similique perspiciatis voluptatibus id rerum nulla laboriosam, 
        est dicta, obcaecati error dolorum illo eius vitae necessitatibus tempora saepe?
  </details>
     
  <div class="allCards">
      <!-- First Card -->
    <div class="fullCard">
    <?php foreach($wilders as $wilder): ?>
      <figure class="card">
        <img class="photoPromo"src="<?= $wilder["photo"]?>">
        <figcaption>
          <p class="name"><?= $wilder["name"]?></p>
          <p class="softSkills"><?= $wilder["age"]?></p>
          <?= $wilder["futur"]?></span></h1>
            <p><?= $wilder["projet"]?></p>
         
          
          <ul class="skills">
            <li class="skill">HTML <span style="font-size:15px"><?= $wilder["HTML"]?></span></li>
            <li class="skill">CSS <span style="font-size:15px"><?= $wilder["CSS"]?></span></li>
            <li class="skill foot-left">PHP <span style="font-size:15px"><?= $wilder["PHP"]?></span></li>
            <li class="skill"><?= $wilder["SoftSkill1"]?><span style="font-size:15px"><?= $wilder["etoile"]?></span></li>
            <li class="skill"><?= $wilder["SoftSkill2"]?><span style="font-size:15px"><?= $wilder["etoile"]?></span></li>
            <li class="skill foot-right"><?= $wilder["SoftSkill3"]?><span style="font-size:15px"><?= $wilder["etoile"]?></span></li>
          </ul>
        
          <div class="details">
            <div class="center">
            <h1><?= $wilder["name"]?><br><span>
            <p class="description"><?= $wilder["description"]?></p>
              <ul>
                <li><a href="<?= $wilder["github"]?>" target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a href="<?= $wilder["linkedin"]?>" target="_blank"><i class="fab fa-linkedin"></i></a></i></a></li> 
              </ul>
            </div>
          </div>
        </figcaption> 
      </figure>
      <?php endforeach; ?>
    </div>
    </div>
    </body>
    </html>
    <!-- First Card -->
    <div class="fullCard">
    <?php foreach($wilders as $wilder): ?>
      <figure class="card">
      <img class="photoPromo"src="<?= $wilder["photo"]?>" alt="<?= $wilder["name"] ?>">
        <div class="details">
            <div class="center">
              <h1><?= $wilder["name"]?><br><span><?= $wilder["futur"]?></span></h1>
              <p><?= $wilder["projet"]?></p>
              <ul>
                <li><a href="<?= $wilder["github"]?>"target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a href="<?= $wilder["linkedin"]?>"target="_blank"><i class="fab fa-linkedin"></i></a></i></a></li> 
              </ul>
            </div>
          </div> 
        <figcaption>
          <p class="name"><?= $wilder["name"] ?></p>
          <p class="softSkills"><?= $wilder["age"]?></p>
          <p class="description"><?= $wilder["description"]?></p>
          
          <ul class="skills">
            <li class="skill">HTML <span style="font-size:15px"><?= $wilder["HTML"]?></span></li>
            <li class="skill">CSS <span style="font-size:15px"><?= $wilder["CSS"]?></span></li>
            <li class="skill foot-left">PHP <span style="font-size:15px"><?= $wilder["PHP"]?></span></li>
            <li class="skill"><?= $wilder["SoftSkill1"]?><span style="font-size:15px"><?= $wilder["etoile"]?></span></li>
            <li class="skill"><?= $wilder["SoftSkill2"]?><span style="font-size:15px"><?= $wilder["etoile"]?></span></li>
            <li class="skill foot-right"><?= $wilder["SoftSkill3"]?><span style="font-size:15px"><?= $wilder["etoile"]?></span></li>
          </ul>   
        </figcaption> 
            </figure>
            <?php endforeach; ?>
                </div>
                    </div>
                        </body>
                            </html>
    
