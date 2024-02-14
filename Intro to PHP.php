<?php

/*******w******** 
    
    Name: Deborah Ekpeneidua
    Date: Jan 11, 2024
    Description: Dynamic image gallery using php

****************/

$config = [

    'gallery_name' => 'Travel Gallery',
 
    'unsplash_categories' => ['Africa','Europe','Asia','South-America',                       'Antartica', 'Australia', 'North-America'],
 
    'local_images' => [
                        ['image_url' => 'images/africa.jpg',
                          'photographer' => 'Lina Loos',
                          'home_page' => 'https://unsplash.com/@linaloos'],

                        ['image_url' => 'images/europe.jpg',
                          'photographer' => 'Anthony Delanoix',
                          'home_page' => 'https://unsplash.com/@anthonydelanoix'],
                        
                         ['image_url' => 'images/asia.jpg',
                          'photographer' => 'Sebastien Goldberg',
                          'home_page' => 'https://unsplash.com/@sebastiengoldberg'],             
                        
                        ['image_url' => 'images/south-america.jpg',
                          'photographer' => 'F Cary Synder',
                          'home_page' => 'https://unsplash.com/@fcarysnyder'],
                        
                        ['image_url' => 'images/antartica.jpg',
                          'photographer' => '66 north',
                          'home_page' => 'https://unsplash.com/@66north'],

                    ],
        ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1>  <?= $config['gallery_name']  ?></h1>

    <div id="gallery">
           <?php foreach ($config['unsplash_categories'] as $category): ?>
            <div >
                <h2> <?= $category ?> </h2>
                <img src="https://source.unsplash.com/random/300x200/?<?=$category?>" alt="Photo from <?=$category?>">
            </div>
        <?php endforeach ?>

    </div>

     <h1> <?= count($config['local_images'])?> Large Images</h1>
     <div id="large-images">
         <?php foreach($config['local_images'] as $image): ?>
            <img src="<?= $image['image_url'] ?>" alt="<?=$image['photographer']?>'s photo">
            <p><a href="<?=$image['home_page']?>"> <?= $image['photographer']?></a></p>
        <?php endforeach ?>
     </div>
     
</body>
</html>








