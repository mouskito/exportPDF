<?php 
// die('test');
// require_once('WkHtmlToPdf.php');


// $pdf = new WkHtmlToPdf();

// // Add a page from a URL
// $pdf->addPage("chat.php","F");

// // Send to client as file download
// //echo $pdf->send('export.pdf');
// $pdf->Output();


 //    // convert in PDF
 //    require_once('html2pdf_v4.03/html2pdf.class.php');
 // // get the HTML
 //    ob_start();
 //    include(dirname(__FILE__).'/res/about.php');
 //    $content = ob_get_clean();

 //    //die('test');
 //    try
 //    {
 //          // init HTML2PDF
 //        $html2pdf = new HTML2PDF('P', 'A4', 'fr');

 //        // display the full page
 //        $html2pdf->pdf->SetDisplayMode('fullpage');
 //        //$html2pdf->setDefaultFont('Arial');
 //        //$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 //        $html2pdf->writeHTML($content);
 //        $html2pdf->Output('exemple.pdf');
 //    }
 //    catch(HTML2PDF_exception $e) {
 //        echo $e;
 //        exit;
 //    }



// Create a new Pdf object with some global PDF options
$pdf = new Pdf(array(
    'no-outline',         // Make Chrome not complain
    'margin-top'    => 0,
    'margin-right'  => 0,
    'margin-bottom' => 0,
    'margin-left'   => 0,

    // Default page options
    'disable-smart-shrinking',
    'user-style-sheet' => 'pdf.css',
));

// Add a page. To override above page defaults, you could add
// another $options array as second argument.
$pdf->addPage('chat.html');

$pdf->send();

?>