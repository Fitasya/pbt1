<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="personal.css">
    <title>Aromatica Spa</title>
</head>

<body>
    <fieldset id="group1">
        <h1>Aromatica Spa</h1>
        <div>
            <ul>
                <li>Aromatica Spa</li>
                <li>Kangar, Perlis</li>
                <li>03-2003444</li>
            </ul>
            We locally owned and operated Aromatica Spa! Outstanding spa
            treatments in Facials, Massages, Body Treatment, Makeup,
            Waxing and Hair Threading. Come in and select one of our
            Spa Packages with our top professional Aestheticians and
            Massage Therapists. Aromatica Spa Massage & Skincare is a
            spacious haven of pampering.
        </div>
    </fieldset>
    <br>
    <div>
        <h1>
            Reserve Now!
        </h1>
        <form id="bookService" method="post" action="result.php">
            <table>
                <tr>
                    <td>
                        <input type="radio" name="rad" id="rad1" value="Massage RM50">
                        Massage RM50 +
                    </td>
                    <td>
                        <input type="checkbox" name="cb1" value="30" id="one">
                        <label>Organic Foot Scrub Rm30</label><br>
                        <input type="checkbox" name="cb2" value="30" id="two">
                        <label>Cold Stone Facial Massage RM30</label><br>
                        <input type="checkbox" name="cb3" value="30" id="three">
                        <label>Scalp Massage with Organic Apricot Oil RM30</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="rad" id="rad2" value="Facials RM70">
                        Facials RM70 +

                    </td>
                    <td>
                        <input type="checkbox" name="cb4" value="40" id="one">
                        <label>Lip & Eye Treatment Rm40</label><br>
                        <input type="checkbox" name="cb5" value="20" id="two">
                        <label>Lash Tinting RM20</label><br>
                        <input type="checkbox" name="cb6" value="20" id="three">
                        <label>Eyebrow Tinting RM20</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="rad" id="rad3" value="Waxing & Threading RM40">
                        Waxing & Threading RM40 +

                    </td>
                    <td>
                        <input type="checkbox" name="cb7" value="50" id="one">
                        <label>Arm RM50</label><br>
                        <input type="checkbox" name="cb8" value="100" id="two">
                        <label>Back RM100</label><br>
                        <input type="checkbox" name="cb9" value="60" id="three">
                        <label>Legs RM60</label><br>
                    </td>
                <tr>
                    <td>
                        <input type="radio" name="rad" id="rad4" value="Makeup RM60">
                        Makeup RM60 +

                    </td>
                    <td>
                        <input type="checkbox" name="cb10" value="20" id="one">
                        <label>Lash Tint Rm20</label><br>
                        <input type="checkbox" name="cb11" value="20" id="two">
                        <label>Eyebrow Tint RM20</label><br>
                        <input type="checkbox" name="cb12" value="35" id="three">
                        <label>Lip Tint RM35</label><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <button type="reset">Reset</button>
                        <button type="submit">Reserve</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <br><br>
</body>

</html>