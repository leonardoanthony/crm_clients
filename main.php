<?php

if (isset($_GET['loggout'])) {
    Painel::loggout();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Clients</title>
</head>
<body>
    <a href="<?php echo INCLUDE_PATH; ?>?loggout">loggout</a>
</body>
</html>