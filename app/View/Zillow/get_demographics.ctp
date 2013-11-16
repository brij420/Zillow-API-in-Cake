<?php
print_r($data);
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="GetDemographics" method="POST">
            <table>
                <tr>
                    <td>State:</td>
                    <td><input type="text" id="state" name="state" value=""/></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" id="city" name="city" value=""/></td>
                </tr>
                <tr>
                    <td>Neighborhood:</td>
                    <td><input type="text" id="neighborhood" name="neighborhood" value=""/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"  value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>