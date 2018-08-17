<?php
/**
 * Dans ce fichier je vais gérer mes différentes routes
 */



//  Création d’une route
// ->get correspond à un appel HTTP en method GET
// ici “/” correspond à la page d’accueil (index.php) 
// et donc à l’url
// MyApp\controllers\Homepage correspond à 
// la classe (controller) visée
// httpGetMethod est la méthode qui sera appelée
$app->get('/', 'MyApp\controllers\Homepage::httpGetMethod')
// bind permet de nommer cette route et vous permettra de générer l’url depuis ce nom
->bind('home');
