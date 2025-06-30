<!doctype html>
<html lang="en">
    <head>
      <style>
        .error 
        {
          color: #FF0000; 
        }
.H1
{
   text-align: center;
   text-transform: uppercase;
   font-weight: bolder;
   margin-top: 20px;
   color:rgb(0, 0, 0); 
  font-size: 50px;
  padding: 15px;
}
h2
{
   text-align: center;
}
.container {
  background-color: #e3f2fd; /* Light Blue Background */
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 11px 7px rgba(0,0,0,0.75);
}
  .mma {
    background-color:rgb(211, 181, 9); /* Light blue background for full page */
  }

      </style>
        <title>FORM TASK</title>

        <!-- Bootstrap CSS v5.2.1 -->
         
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="styl.css">
    </head>

    <body class="mma">




    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
        

    <!-- body start -->




<?php 

$name = $email = $contact = $dob = $cover = $occup = $nic = $gender = "";
$nameerr = $emailerr = $contacterr = $doberr = $nicerr = $occuperr = $gendererr = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(empty($_POST["name"]))
  {
    $nameerr = "*Name is required";
  }
  else
  {
    $name = text_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
    {
      $nameerr = "Only letters and white space allowd";
    }
  }

  if(empty ($_POST["email"]))
  {
    $emailerr = "Email is required";
  }
  else
  {
    $email = text_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailerr = "Invalid email format";
    }
  }

  if(empty ($_POST["contact"]))
  {
    $contacterr = "contact number is required";
  }
  else
  {
    $contact = text_input($_POST["contact"]);
    if(!preg_match("/^(\+?\d{1,4}[\s-]?)?\d{10}$/", $contact))
    {
      $contacterr = "Invalid contact number";
    }
  }

  if(empty ($_POST["nic"]))
  {
    $nicerr = "Nic number is required";
  }
  else
  {
    $nic = text_input($_POST["nic"]);
    if(!preg_match("/^(\+?\d{1,4}[\s-]?)?\d{12}$/", $nic))
    {
      $nicerr = "Invalid Nic number";
    }
  }

  if(empty ($_POST["dob"]))
  {
    $doberr = "enter date of birth";
  }
   else
  {
       $dob = text_input($_POST["dob"]);
  }

  if(empty ($_POST["occup"]))
  {
    $occuperr = "Tell about Yourself";
  }
   else
  {
       $occup = text_input($_POST["occup"]);
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (empty($_POST["gender"])) {
    $gendererr = "Gender is required";
  } else {
    $gender = text_input($_POST["gender"]);
  }
}


}

function sanitize_url($data)                   // intha function edukka kaaranam text_input function il seithal athu stripslashes, htmlspecialchars enpavatrai remove pannum 
{                                              // athanal ithau use pannuhirom matrum preg_match il linkdin url mattum allow pannuvathal veru script vara vaaippillai
  return trim($data); // Only trim spaces — don’t modify slashes or characters
}

function text_input($data)
{
  $data =trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>



<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

    <h1 class = "H1">Registration Form</h1>


                                                                                                                
  <form method="post" class="container mt-4" enctype="multipart/form-data" action="regist.php">

<div class="mb-3">                                   
  <label for="fullname" class="form-label">Full Name</label>                                           <!-- ingu action enpathu form il idum details inai engu anuppavendum enpathai kurikkum -->
  <input type="text" class="form-control" id="fullname" name="fullname">                                    <!-- method post enpathu detail url il theriyamal anuppum method than post method aagum-->
  <span class="error"><?php echo $nameerr;?> </span>
</div>

<div class="mb-3">
  <label for="email" class="form-label">Email Address</label>
  <input type="email" class="form-control" id="email" name="email">
  <span class="error"> * <?php echo $emailerr;?></span>
</div>

<div class="mb-3">
  <label for="contact" class="form-label">Contact Number</label>
  <input type="text" class="form-control" id="contact" name="mobile">
  <span class="error"> * <?php echo $contacterr;?></span>
</div>

<div class="mb-3">
  <label for="nic" class="form-label">Nic Number</label>
  <input type="text" class="form-control" id="nic" name="nic_nbr">
  <span class="error"> * <?php echo $nicerr;?></span>
</div>

<div class="mb-3">
  <label for="dob" class="form-label">Date of Birth</label>
  <input type="date" class="form-control" id="dob" name="Dob">
  <span class="error"><?php echo $doberr;?></span>
</div>

<div class="mb-3">
  <label for="occup" class="form-label">Occupation</label>
  <input type="text" class="form-control" id="occup" name="occupation">
  <span class="error"><?php echo $occuperr;?></span>
</div>

<div class="mb-3">
  <label class="form-label">Gender</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
    <label class="form-check-label" for="male">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
    <label class="form-check-label" for="female">Female</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
    <label class="form-check-label" for="other">Other</label>
  </div>
  <br>
  <span class="error">* <?php echo $gendererr; ?></span>
</div>


<button type="submit" name="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto bttt">Submit</button>

<br><br><br>

<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

<br><br><br><br>

<!-- 
1.security concept htmlchar
2. make functin for this . athavathu backshalsh, trim, htmlchar ivatrukkaha oru function seithu athilirunthu vadikatti eduththal 
-->




    <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
