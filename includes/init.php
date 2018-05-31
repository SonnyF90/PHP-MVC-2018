<?php
/* Gestion de l'url (page, action, router)*/
include SITE_PATH . '/includes/Bootstrap.php';
Bootstrap::url();

/* Connexion à la base de donées */
include SITE_PATH . '/includes/Db.php';


/* Session */
session_start();


/* Load common classes */
include SITE_PATH . '/includes/components/CommonController.php';

/* Gestion des Templates & des Controllers */
include SITE_PATH . '/includes/Template.php';

Template::page();

/*



include SITE_PATH . '/view/page.php'; 
 
 */