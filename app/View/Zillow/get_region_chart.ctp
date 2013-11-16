<?php
print_r($data);
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="GetRegionChart" method="POST">
            <table>
                <tr>
                    <td>neighborhood:</td>
                    <td><input type="text" id="neighborhood" name="neighborhood" value=""/></td>
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
                    <td>zip:</td>
                    <td><input type="text" id="zip" name="zip" value=""/></td>
                </tr>
                <tr>
                    <td>unit-type(percent or dollar):</td>
                    <td><input type="text" id="unit-type" name="unit-type" value=""/></td>
                </tr>
                <tr>
                    <td>chartDuration(Valid values are "1year", "5years" and "10years".):</td>
                    <td><input type="text" id="chartDuration" name="chartDuration" value=""/></td>
                </tr>
                <tr>
                    <td>width( between 200 and 600):</td>
                    <td><input type="text" id="width" name="width" value=""/></td>
                </tr>
                <tr>
                    <td>height(between 100 and 300):</td>
                    <td><input type="text" id="height" name="height" value=""/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"  value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>