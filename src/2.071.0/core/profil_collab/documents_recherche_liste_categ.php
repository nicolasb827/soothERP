<?php
//  ******************************************************
// [COLLABORRATEUR] RECHERCHE D'UN ARTICLE CATALOGUE
//  ******************************************************


require ("_dir.inc.php");
require ("_profil.inc.php");
require ($DIR."_session.inc.php");


//  ******************************************************
// TRAITEMENTS
//  ******************************************************

//  ******************************************************
// AFFICHAGE
//  ******************************************************

include ($DIR.$_SESSION['theme']->getDir_theme()."page_documents_recherche_liste_categ.inc.php");

?>