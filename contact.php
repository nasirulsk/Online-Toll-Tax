<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to online toll tax service</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="xres/images/logo.png" class="logo" alt="" /></a></h1>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li class="current"><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	
				<div id="contactleft">
        	<h1>Contact Information</h1>
			</br>
			<p4>
            Our Office Location :</p4></br>
			<p2>
            UIT, Burdwan University <br />
            Golapbag (North), Rajbati<br />
			Burdwan <br />
            Pin- 713101 <br /><br />
          <strong>Email:</strong> <a href="#">info@tolltax@gmail.com</a> </p2><br />
				</div><br>
				<div id="contactright">
					<p3>Feedback/Complain</p3>
					<form class="validate" action="save_feedback.php" method="post">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" pattern="^[a-zA-Z ]+$" required />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: john@gmail.com" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" pattern="^[a-zA-Z ]+$" required />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5" required></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="Submit" style="height: 35px;background-color:#b70384;color:#ffffff" />
                        </p>
                    </form>
				</div>
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    



<div id="footer">
	<h4>(+91)7384251024 &bull; UIT, Golapbag(North), Rajbati, Burdwan  </h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<a href="index.php"><img src="xres/images/footer-logo.jpg" alt="James Buchanan Pub and Restaurant" /></a>
	<p>&copy; Copyright 2013 Florida Bus | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
