<?php 

print_r($_GET);

$id=10;

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="get.php?id=<?php echo $id; ?>">click</a>
</body>
</html>