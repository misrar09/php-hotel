<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels php</title>

    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
</head>
<body>

<?php for ($i = 0; $i < count($hotels); $i++) { ?>
    <ul>
        <li>Name:<?php echo $hotels[$i]["name"]; ?></li>
        <li>Description: <?php echo $hotels[$i]["description"]; ?></li>
        <li>Parking: <?php echo $hotels[$i]["parking"]; ?></li>
        <li>Vote: <?php echo $hotels[$i]["vote"]; ?></li>
        <li>Distance to Center: <?php echo $hotels[$i]["distance_to_center"]; ?></li>

    </ul>
<?php } ?>







    
</body>
</html>