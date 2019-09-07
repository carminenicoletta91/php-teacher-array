<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <title>Classe Boolean</title>
    <?php

      $arrclasse=[

        'insegnanti'=>[

            [
              'name' => 'Michele',
              'lastname' => 'Pagani'
            ],
            [
              'name' => 'Fabio',
              'lastname' => 'Forghieri'
            ]

        ],

        'alunni' =>[

          [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
          ],

          [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
          ],
          [
            'name' => 'Carmine',
            'lastname' => 'Nicoletta'
          ]

        ]

      ];


    ?>
  </head>
  <body>

    <div class="items">
      <?php foreach ($arrclasse as $ruolo => $valore) {

        if($ruolo === "insegnanti"){

          echo "<div class='gray' rif='insegnanti'>" ."<h2>".ucfirst($ruolo)."</h2>";
        }else{
          echo "<div class='green' rif='alunni'>"."<h2>".ucfirst($ruolo)."</h2>";
        }
          foreach ($valore as $nominativo) {

            $name = $nominativo['name'];
            $lastname = $nominativo['lastname'];
            if($ruolo === "insegnanti"){
              echo "<p>".$name." ".$lastname."</p>";
            }else{
              echo "<p>".$name." ".$lastname."</p>";
            }

          }
        echo "</div>";
        }
      ?>

    </div>
  </body>
</html>
