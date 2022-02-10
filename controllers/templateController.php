<?php
function template($corpspage){
    require __DIR__ . '/../views/pagehtml.php';
    require __DIR__ . '/../views/header.php';
    if ($corpspage == 'login.php' || $corpspage == 'register.php') require(__DIR__ . '/' . $corpspage);
    #if ($corpspage == 'admin.php' && $_SESSION["connected"])
    else require __DIR__ . '/../views/' . $corpspage;
    require __DIR__ . '/../views/footer.php';
}
