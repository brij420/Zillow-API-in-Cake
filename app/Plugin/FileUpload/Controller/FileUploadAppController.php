<?php

class FileUploadAppController extends AppController {

    public function index() {


// Parse paramters to get Image and thumbnail urls
        $image = isset($_GET['image']) && ($_GET['image']) ? $_GET['image'] : NULL;


        if (strpos($image, "http://fotos.fotoflexer.com") != 0) {
            //Handle the error:
            echo "Invalid Origin";
            exit;
        }


// Grab the image type (png or jpeg)
        $file_type = $content_type[1];

// Set the local file path for the image and thumbnail
        $image_path = $this->Html->img("test" . $file_type);

// Image source and content have been verified, and a location has been set.
// Now copy the images to the local server.
        copy($image, $image_path);
    }

}
?>
