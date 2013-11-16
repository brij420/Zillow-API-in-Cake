<?php
print_r($data);
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="GetDeepSearchResults" method="POST">
            <table>
                <tr>
                    <td>address:</td>
                    <td><input type="text" id="address" name="address" value=""/></td>
                </tr>
                <tr>
                    <td>citystatezip:</td>
                    <td><input type="text" id="citystatezip" name="citystatezip" value=""/></td>
                </tr>
                <tr>
                    <td>rentzestimate (boolean true/false, default: false):</td>
                    <td><input type="text" id="rentzestimate" name="rentzestimate" value=""/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"  value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>