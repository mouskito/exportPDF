<?php 

require_once('WkHtmlToPdf.php');
require_once('cnx/rvi.php');

session_start();

$options = array(
		'post1' => array('login', escapeshellarg($_SESSION['usr_login'])),
		'post2' => array('mdp', escapeshellarg($_SESSION['usr_password'])),
		'post3' => array('annee', $_SESSION['annee']),
		'post4' => array('semestre', $_SESSION['semestre'])
);

$f = $_GET['f'];
$m = $_GET['m'];
$s = $_GET['s'];
$r = $_GET['r'];
$w = $_GET['w'];

$pdf = new WkHtmlToPdf($options);

// Add a page from a URL
$pdf->addPage('"'.URL_APPLI.'fiche_rvi_col.php?f='.$f.'&m='.$m.'&s='.$s.'&r='.$r.'&w='.$w.'&output=pdf"');

// Send to client as file download
echo $pdf->send('export.pdf');

?>