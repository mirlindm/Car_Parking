<html>
<head>
<meta charset="UTF-8">
<title>Parkimi i veturave </title>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>
<section class="container">
<header>
<section class="logo">
<p><center> MULTIPLEX - SISTEMI ONLINE I REZERVIMIT TË PARKINGUT </center></p>
</section>
    <nav>
      <ul class="nav">
        <li><a href="index.php" class="icon home"><span>Home</span></a></li>
        <li class="dropdown">
          <a> Shërbimet &amp; Personeli jonë </a>
          <ul>
            <li><a href="online-booking.php">Online Booking</a></li>
            <li><a href="on-street-booking.php">On-street Parking</a></li>
			<li><a href="off-street-parking.php">Off-street Parking</a></li>
            <li><a href="payment-methods.php">Payment Methods</a></li>
            <li><a href="parking-personnel.php">Park Attendants</a></li>
			<li><a href="security.php">Security</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="">Zonat e parkimit</a>
          <ul class="large">
            <li><a href="region-1.php">JINJA ROAD - Cars Only</a></li>
            <li><a href="region-2.php">WANDEGEYA - Cars Only</a></li>
            <li><a href="region-3.php">6TH STREET INDUSTRIAL AREA -  Cars and Lorries</a></li>
            <li><a href="region-4.php">7TH STREET - Lorries Only</a></li>
			<li><a href="region-5.php">NAKUMART - Cars Only</a></li>
			<li><a href="region-6.php">ARUA PARK  - PSV Only</a></li>
          </ul>
        </li>
		 
		<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
   {
   echo  "<li><a href=\"your-car.php\">Reserve</a></li>";
   }
   else
   {
    echo "<li><a href=\"admin/index.php\">Admin Panel</a></li>";
   }
    ?>
     <li><a href="contact.php">Kontakti</a></li> 	
       
      </ul>
    </nav>
	<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
      {
	   $name = $_SESSION["name"];
   echo "<p class=\"LogOut\">". $name. " "."<a href=\"process-log-out.php\">Log Out</a></p>";
   }
    
?>
	

  </header>
</section>
</body>

</html>