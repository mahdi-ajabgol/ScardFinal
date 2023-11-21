

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />

    <title>Document</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>

    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./main.js"></script>

</head>
<body>
<?php
session_start();
?>


    <?php
	if (isset($_SESSION["alert"])){
		if ($_SESSION["alert"] == "1"){
			echo "	<div class='popup' id='popup'>!با موفقیت وارد شدید<i class='fa fa-smile-o' id='smileicon' aria-hidden='true'></i></div>";
			$_SESSION["alert"] = "0";
		}else{
			echo "";
		}
	}else{
		echo "";
	}
	?>
	
		<div class="spinner-container" id="SpinnerContainer">
        <div class="spinner"></div>
    </div>
	


	<div class="card-container" id="cardcontainer">
        <div class="card" id="card1">
          <?php
          if (isset($_SESSION["login"])){
            if ($_SESSION["login"] == "no"){
              echo "<div class='card2' id='card2'><a href='../register/index.php'>وارد شوید</a><p>برای استفاده بهتر از برنامه وارد شوید</p></div>";
              echo"<p id='bl'>yes</p>";

          }else{
            session_start();
$servername = "localhost";
$username = "technonu_ad";
$password = "MHD2780qw";
$dbname = "technonu_pt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$usernamee = $_SESSION["username"];
$sql = "SELECT Username, Name, HumanID, Balance FROM users WHERE Username='$usernamee'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	$_SESSION["Username"] = $row["Username"];
	$_SESSION["Name"] = $row["Name"];
	$_SESSION["HumanID"] = $row["HumanID"];
	$_SESSION["Balance"] = $row["Balance"];
    $cookie_name = $row["Username"];
    $_COOKIE[$cookie_name];
  }
}
echo"<p id='bl'>no</p>";
          }
        }else{
          echo "<div class='card2' id='card2'><a href='../register/index.php'>وارد شوید</a><p>برای استفاده بهتر از برنامه وارد شوید</p></div>";
          echo"<p id='bl'>yes</p>";
        }

          ?>


<!-- <div class='card2' id='card2'><a href='../register/index.php'>وارد شوید</a><p>برای استفاده بهتر از برنامه وارد شوید</p></div> -->

            <div class="qr" id="qr">
            <canvas id="qr-code"></canvas>
    </div>



            <div class="person">
                <div class="photo"></div>
                <div class="description-container">
                    <p class="name text" id="name"><?php echo $_SESSION["Name"]; ?></p>
                </div>
            </div>

            <div class="description">
                <p class="card-name text">Scard</p>
                <p class="meli-code text">کد ملی: <?php echo $_SESSION["HumanID"]; ?></p>
                <p class="mojodi text">موجودی: <?php echo $_SESSION["Balance"]; ?></p>
            </div>
            
        </div>

    </div>


    <div class="buttons-container">
        <h1>خدمات</h1>
        <div class="button-container">
            <!-- <div><i class="fa fa-cutlery" id="icon"></i>خرید غذا</div> -->
            <a href="#" id="qs"><div><i class="fa fa-qrcode" id="icon"></i>جستجوی کارت</div></a>
            <a href="../charge/index.html"><div><i class="fa fa-money" id="icon"></i>شارژ حساب</div></a>
        </div>
        <div class="button-container">
            <!-- <div><i class="fa fa-subway" id="icon"></i>خدمات حمل و نقل</div>
            <div><i class="fa fa-qrcode" id="icon"></i>جستجوی کارت</div> -->
            <a href="../hamlonagl/haml.html"><div><i class="fa fa-subway" id="icon"></i>خدمات حمل و نقل</div></a>
            <a href="#" id="ab"><div><i class="fa fa-question-circle" id="icon"></i>درباره ی ما</div></a>

        </div>
    </div>

    <div class="mojodiyab"></div>

    <!-- <button id="bbt">click</button> -->
    <!-- <canvas id="qr-code"></canvas> -->
    <!-- <div class="ezafe"></div> -->

    <div class="menu" id="menu">
        <a href="#"><div><i class="fa fa-home" id="icon"></i></div></a>
        <a href="../search/index.html" style="text-decoration: none;"><div><i class="fa fa-search" id="icon"></i></div></a>
        <div id="setting"><i class="fa fa-cog" id="icon"></i></div>
    </div>

    <div class="ezafe">
        <div>خانه</div>
        <div>جستجو</div>
        <div>تنظیمات</div>
    </div>
    
    <div class="al-container" id="al">
        <p>!این قابلیت بزودی به برنامه اضافه میشود</p>
        <button id="okb">باشه</button>
    </div>
    
    <div class="al-container" id="al2">
        <p>کاری از گروه تگنونال</p>
        <p style="text-align:end">:توسعه دهندگان<br>  مانی پاپهن زاده و مهدی عجب گلی</p>
        <button id="okb2">باشه</button>
    </div>

    
</body>
</html>