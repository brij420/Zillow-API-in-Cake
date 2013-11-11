<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Image Upload</title>

        <script type="text/javascript">
            /********************************
             In this example, we toggle which photo to edit. There is a
             seperate "display" version of the photo and the full size
             image we will pass into the editor. Notice, we use the id
             of the image tag to store the actual image url -- this is
             only one possible way of implementing this.
             *********************************/

            var ff_image_url;
            var ff_callback_url;
            var ff_cancel_url;
            var ff_lang;

            function ff_setup(img_src) {
                ff_image_url = img_src;
                ff_callback_url = "http://fotoflexer.com/API/callbackTest.php";
                ff_cancel_url = "http://fotoflexer.com";
                ff_lang = "en-US";
                ff_activate();
            }
        </script>	

        <script type="text/javascript"
                src="http://fotoflexer.com/API/ff_api_v1_01.js">
        </script>
    </head>

    <body style="text-align: center;">
        <div style="width: 650px; margin: 0 auto;">

            <h4>Or, Upload An Image To Edit:</h4>

            <!--Pass the Callback URL as "CB" and the logo URL as "Logo"-->
            <form enctype="multipart/form-data"
                  action="http://fotoflexer.com/API/API_Upload.php" method="post">

                <p><input name="userfile" type="file" /><br />
                    <input type="hidden" name="Logo" value="http://www.fotoflexer.com/images/header.gif" />
                    <input type="hidden" name="CB" value="http://www.fotoflexer.com/API/callbackTest.php" /> 
                    <input type="submit" value="Upload" /></p>

            </form>

        </div>
    </body>
</html>