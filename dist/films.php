<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title></title>
</head>
<body>
<br>
<div class="container">
    <div class="col-md-12">
        <div class = "panel panel-primary">
            <div class="panel-heading ">

            </div>
            

            <table class="table" class="panel-body" >
                <thead>
                <tr>
                    <th>title</th>
                    <th>genere</th>
                    <th>stars</th>
                </tr>
                </thead>
                <tbody>
<?php
$films = array(
    array('title'=>'funney movie 3',
        'genere'=>'comedy',
          'stars'=>array('leading actor','leading actor','expandable dude','somebody else')),
    array('title'=>'funney movie 3',
        'genere'=>'comedy',
        'stars'=>array('leading actor','leading actor','expandable dude','somebody else')));

foreach($films as $row)
{
    ?>
    <tr><td><?php echo $row ['title'];?></td>
        <td><?php echo $row ['genere'];?></td>
        <td><?php foreach ($row ['stars'] as $stars){?>
        <ul>
            <li><?php echo $stars ?></li>
        </ul>
            <?php } ?>
        </td>
    </tr>
<?php
}
?>
                 </tbody>