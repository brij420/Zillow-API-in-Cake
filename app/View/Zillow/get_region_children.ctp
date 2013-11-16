<?php
print_r($data);
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="GetRegionChildren" method="POST">
            <table>
                <tr>
                    <td>regionId:</td>
                    <td><input type="text" id="regionId" name="regionId" value=""/></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><input type="text" id="state" name="state" value=""/></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" id="city" name="city" value=""/></td>
                </tr>
                <tr>
                    <td>county:</td>
                    <td><input type="text" id="county" name="county" value=""/></td>
                </tr>
                  <tr>
                    <td>childtype (available types: state, county, city, zipcode, and neighborhood):</td>
                    <td><input type="text" id="childtype" name="childtype" value=""/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"  value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>