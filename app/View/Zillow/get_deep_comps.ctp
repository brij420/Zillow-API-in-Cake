<?php
print_r($data);
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="GetDeepComps" method="POST">
            <table>
                <tr>
                    <td>zpid:</td>
                    <td><input type="text" id="zpid" name="zpid" value=""/></td>
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
                    <td>State:</td>
                    <td><input type="submit"  value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>