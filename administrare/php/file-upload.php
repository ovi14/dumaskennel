<?php
// print_r('<pre>');
// print_r($_POST);
// print_r($_FILES['userfile']);
// print_r( reArrayFiles($_FILES['userfile']) );

if ($_FILES['userfile']) {
    $file_ary = reArrayFiles($_FILES['userfile']);

    foreach ($file_ary as $key => $file) {
        // print_r( $file );
        if ($file['error'] == 0) {
        	include('upload.php');

            $_POST['poza'.$key] = $uploaded == 1 ? basename($file["name"]) : "";
        }
        
    }
}

function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

?>