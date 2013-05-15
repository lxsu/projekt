<?php
/* -----------------------------------------------------------------------------
index.php

Beskrivning: index-fil
Skapare: RaJ
<<<<<<< HEAD
=======

Vettiga länkar:
http://php.net/manual/en/language.constants.predefined.php

>>>>>>> 18f8162ca307fff2f09a7621429d7af5f4a70daa
================================================================================
------------------------------------------------------------------------------*/



/* -------------------------------------------------
"bootstrap" är initieringsfasen där de oundvikliga grunderna etableras och defineras. 
Dessa behövs i varje förfrågan
------------------------------------------------- */
//
// PHASE: BOOTSTRAP
//

<<<<<<< HEAD
define('RAJ_INSTALL_PATH', dirname(__FILE__));
define('RAJ_SITE_PATH', RAJ_INSTALL_PATH . '/site');

require(RAJ_INSTALL_PATH.'/src/CRaj/bootstrap.php');

$raj = CRaj::Instance();
=======
define('LYDIA_INSTALL_PATH', dirname(__FILE__));
define('LYDIA_SITE_PATH', LYDIA_INSTALL_PATH . '/site');

require(LYDIA_INSTALL_PATH.'/src/CLydia/bootstrap.php');

$ly = CLydia::Instance();
>>>>>>> 18f8162ca307fff2f09a7621429d7af5f4a70daa

/* -------------------------------------------------
"frontController->route" tar hand om förfrågan och tolkar ut vilken kontroller och metod
som skall anropas. Därefter sker all bearbetning i kontrollern
------------------------------------------------- */
//
// PHASE: FRONTCONTROLLER ROUTE
//

<<<<<<< HEAD
$raj->FrontControllerRoute();
=======
$ly->FrontControllerRoute();
>>>>>>> 18f8162ca307fff2f09a7621429d7af5f4a70daa

/* -------------------------------------------------
"themeEngine->render" skapar själva slutresultatet, webbsidan. Allt innehåll finns tillgängligt
och med hjälp av template-filer överförs innehållet till HTML-filer.
------------------------------------------------- */
//
// PHASE: THEME ENGINE RENDER
//

<<<<<<< HEAD
$raj->ThemeEngineRender();
=======
$ly->ThemeEngineRender();
>>>>>>> 18f8162ca307fff2f09a7621429d7af5f4a70daa
