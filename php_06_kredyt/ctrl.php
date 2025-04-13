<?php
require_once 'init.php';

getRouter()->setDefaultRoute('landing'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('landing',        'StaticCtrl');
getRouter()->addRoute('calcCompute',    'CalcCtrl', ['user','admin']);
getRouter()->addRoute('formula',        'StaticCtrl', ['user', 'admin']);
getRouter()->addRoute('login',          'LoginCtrl');
getRouter()->addRoute('logout',         'LoginCtrl', ['user','admin']);

getRouter()->go();