<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                        <label for="rad1">Massage RM50 +</label><br>
                    </td>
                    <td>
                        <input type="checkbox" name="cb1" value="30" id="cb1">
                        <label for="cb1">Organic Foot Scrub Rm30</label><br>
                        <input type="checkbox" name="cb2" value="30" id="cb2">
                        <label for="cb2">Cold Stone Facial Massage RM30</label><br>
                        <input type="checkbox" name="cb3" value="30" id="cb3">
                        <label for="cb3">Scalp Massage with Organic Apricot Oil RM30</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="rad" id="rad2" value="Facials RM70">
                        <label for="rad2">Facials RM70 +</label><br>

                    </td>
                    <td>
                        <input type="checkbox" name="cb4" value="40" id="cb4">
                        <label for="cb4">Lip & Eye Treatment Rm40</label><br>
                        <input type="checkbox" name="cb5" value="20" id="cb5">
                        <label for="cb5">Lash Tinting RM20</label><br>
                        <input type="checkbox" name="cb6" value="20" id="cb6">
                        <label for="cb6">Eyebrow Tinting RM20</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="rad" id="rad3" value="Waxing & Threading RM40">
                        <label for="rad3">Waxing & Threading RM40 +</label><br>

                    </td>
                    <td>
                        <input type="checkbox" name="cb7" value="50" id="cb7">
                        <label for="cb7">Arm RM50</label><br>
                        <input type="checkbox" name="cb8" value="100" id="cb8">
                        <label for="cb8">Back RM100</label><br>
                        <input type="checkbox" name="cb9" value="60" id="cb9">
                        <label for="cb9">Legs RM60</label><br>
                    </td>
                <tr>
                    <td>
                        <input type="radio" name="rad" id="rad4" value="Makeup RM60">
                        <label for="rad4"> Makeup RM60 +</label><br>

                    </td>
                    <td>
                        <input type="checkbox" name="cb10" value="20" id="cb10">
                        <label for="cb10">Lash Tint Rm20</label><br>
                        <input type="checkbox" name="cb11" value="20" id="cb11">
                        <label for="cb11">Eyebrow Tint RM20</label><br>
                        <input type="checkbox" name="cb12" value="35" id="cb12">
                        <label for="cb12">Lip Tint RM35</label><br>
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