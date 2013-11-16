<?php
print_r($data);
?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="GetRateSummary" method="POST">
            <table>
                <tr>
                    <td>State(AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, DC, WI, WV, WY):</td>
                    <td><input type="text" id="state" name="state" value=""/></td>
                </tr>
                <tr>
                    <td>output(json or xml):</td>
                    <td><input type="text" id="output" name="output" value=""/></td>
                </tr>
                <tr>
                    <td>callback:</td>
                    <td><input type="text" id="callback" name="callback" value=""/></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><input type="submit"  value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>