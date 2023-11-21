<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <title>ثبت نام</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <link rel="stylesheet" href="./signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./signup.js"></script>
</head>
<body>

<?php 

session_start();
if (isset($_SESSION["error"])){
$error = $_SESSION["error"];
echo "<p id='po'>$error</p>";
$_SESSION["error"] = "";
}

?>

    <div class="spinner-container" id="SpinnerContainer">
        <div class="spinner"></div>
    </div>

    <a href="../main/main.php" class="goback">برگشت</a>

    <div class="change-button">
        <div id="changebtn2">ورود</div>
        <div id="changebtn1">ثبت نام</div>
        <div class="changer" id="changer"></div>
    </div>

    <!-- <div class="scrolli"> -->
    <div class="go-container">
        <div class="login-container login1" id="login1">
            <h1>ثبت نام</h1>
            <form action="setting.php" method="post">
                <input type="hidden" name="logORsign" value="signup">
                <div class="input-container">
                    <input class="inputs" id="nameinput" style="margin-top: 25px;" type="text" name="name" aria-autocomplete="false" required>
                    <label id="namelabel" for="name">نام:</label>
                    <div></div>
                </div>
                <div class="input-container">
                    <input class="inputs" id="lastnameinput" style="margin-top: 25px;" type="text" name="lastname" aria-autocomplete="false" required>
                    <label id="lastnamelabel" for="lastname">نام خانوادگی:</label>
                    <div></div>
                </div>
                <div class="input-container">
                    <input class="inputs" id="usernameinput" style="margin-top: 25px;" type="text" name="username" aria-autocomplete="false" required>
                    <label id="usernamelabel" for="username">نام کاربری:</label>
                    <div></div>
                </div>
                <div class="input-container">
                    <input class="inputs" id="passinput" type="password" name="password" aria-autocomplete="false" required>
                    <label for="password" id="passlabel">رمز عبور:</label>
                    <div></div>
                </div>
                <div class="input-container">
                    <input class="inputs" id="phoneinput" type="number" name="phonenumber" aria-autocomplete="false" required>
                    <label for="phonenumber" id="phonelabel">شماره موبایل:</label>
                    <div></div>
                </div>
                <div class="input-container">
                    <input class="inputs" id="humanidinput" type="number" name="humanid" aria-autocomplete="false" required>
                    <label for="humanid" id="humanlabel">کد ملی:</label>
                    <div></div>
                </div>
                <div class="input-container">
                    <!-- <input class="inputs" id="cityinput" type="text" name="address" aria-autocomplete="false" required> -->
                    <!-- <label for="address" id="citylabel">شهر:</label> -->

                    <select name="address" style="padding-top: 0;" class="inputs" id="city">
                        <option value="تهران">تهران</option>
                        <option value="اصفهان">اصفهان</option>
                        <option value="مشهد">مشهد</option>
                        <option value="تبریز">تبریز</option>
                      </select>

                    <div></div>
                </div>
                <input class="sub-input" type="submit" value="ثبت">
            </form>
        </div>

        <div class="login-container login2" id="login2">
            <h1>ورود</h1>
            <form action="./setting.php" method="post">
                <input type="hidden" name="logORsign" value="login">
                <div class="input-container">
                    <input class="inputs" id="usernameinput2" style="margin-top: 25px;" type="text" name="username" aria-autocomplete="false" required>
                    <label id="usernamelabel2" for="username">نام کاربری:</label>
                    <div></div>
                </div>
                <div class="input-container">
                    <input class="inputs" id="passinput2" type="password" name="password" aria-autocomplete="false" required>
                    <label for="pass-s" id="passlabel2">رمز عبور:</label>
                    <div></div>
                </div>
                <input class="sub-input" type="submit" value="ورود">
            </form>
        </div>
    </div>
    <!-- </div> -->


    <div class="erret-container" id="erret">
        <i class="fa fa-exclamation-circle" aria-hidden="true" id="icon"></i>
        <p id="ep"></p>
        <button id="okbtn">باشه</button>
    </div>
</body>
</html>


