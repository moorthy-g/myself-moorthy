<?php

   //header( 'Location: https://dl-web.dropbox.com/get/moorthyCV.pdf?w=c5049326' ) ;
    //header( 'Location: http://moorthy.co.cc/cv/moorthyCV.pdf' );
	
	
    $file = 'moorthyCV.pdf';

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }



?>