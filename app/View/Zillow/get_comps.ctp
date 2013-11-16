<?php
print_r($data);
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="GetComps" method="POST">
            <table>
                <tr>
                    <td>zpid:</td>
                    <td><input type="text" id="zpid" name="zpid" value=""/></td>
                </tr>
                <tr>
                    <td>count(integer between 1 and 25):</td>
                    <td><input type="text" id="count" name="count" value=""/></td>
                </tr>
                <tr>
                    <td>rentzestimate(boolean true/false, default: false):</td>
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