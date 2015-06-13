<?php 
// die('test');
// require_once('WkHtmlToPdf.php');


// $pdf = new WkHtmlToPdf();

// // Add a page from a URL
// $pdf->addPage("chat.php","F");

// // Send to client as file download
// //echo $pdf->send('export.pdf');
// $pdf->Output();


    // convert in PDF
    require_once('html2pdf_v4.03/html2pdf.class.php');
 // get the HTML
    ob_start();
    include(dirname(__FILE__).'/res/about.php');
    $content = ob_get_clean();

    //die('test');
    try
    {
          // init HTML2PDF
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(0, 0, 0, 0));

        // display the full page
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>