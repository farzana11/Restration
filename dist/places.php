<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>places</title>
</head>
<body>
<h4 align="center" style="color:darkturquoise">View Places</h4>
<hr>

<table border="1" width="60%" align="center" >

    <tr style="color:blue">
        <td>City</td>
        <td>Country</td>
        <td>Continent</td>
    </tr>


    <?php
$places=array(
    array('city'=>'Tokyo',
        'country'=>'Japan',
        'continent'=>'Asia'),
    array('city'=>'Mexico city',
        'country'=>'Mexico',
        'continent'=>'North America'),
    array('city'=>'New York',
        'country'=>'USA',
        'continent'=>'North America'),
    array('city'=>'Mumbai',
        'country'=>'India',
        'continent'=>'Asia'),
    array('city'=>'Seoul',
        'country'=>'Koria',
        'continent'=>'Asia'),
    array('city'=>'Tokyo',
        'country'=>'Japan',
        'continent'=>'Asia'),
    array('city'=>'Shaughai',
        'country'=>'China',
        'continent'=>'Asia'),
    array('city'=>'Logos',
        'country'=>'Naijiria',
        'continent'=>'Africa'),
    array('city'=>'London',
        'country'=>'UK',
        'continent'=>'Europe'),

);

    foreach($places as $row){

    ?>

    <tr>
        <td><?php echo $row['city'] ?></td>
        <td><?php echo $row['country'] ?></td>
        <td><?php echo $row['continent'] ?></td>
    </tr>

<?php
   }
    ?>
</table>
</body>
</html>