<?php
print_r($data);
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="GetChart" method="POST">
            <table>
                <tr>
                    <td>zpid:</td>
                    <td><input type="text" id="zpid" name="zpid" value=""/></td>
                </tr>
                <tr>
                    <td>unit-type(percent or dollar):</td>
                    <td><input type="text" id="unit-type" name="unit-type" value=""/></td>
                </tr>
                
                <tr>
                    <td>width(between 200 and 600):</td>
                    <td><input type="text" id="width" name="width" value=""/></td>
                </tr>
                
                <tr>
                    <td>height(between 100 and 300):</td>
                    <td><input type="text" id="height" name="height" value=""/></td>
                </tr>
               
                <tr>                  
                    <td><input type="submit"  value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>