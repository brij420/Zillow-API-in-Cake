<?php
print_r($data);
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="GetUpdatedPropertyDetails" method="POST">
            <table>
                 <tr>
                    <td>zpid:</td>
                    <td><input type="text" id="zpid" name="zpid" value=""/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"  value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>