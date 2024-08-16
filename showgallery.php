<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="zxx">
  <head>
	<title>Photographere</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photographer html template">
	<meta name="keywords" content="photographer, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/mallogo.png" rel="shortcut icon"/>
  <!---style sheet---->

  </head>

  <body>
    
    <!-- Header End -->  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style> 
        
.header-section {
	padding-top: 15px;
	padding-bottom: 27px;
	position: relative;
	z-index: 99;
	background-color: #185C36;
}

.header-section.hs-bd {
	clear: both;
	border-bottom: 1px solid #e8e8e8;
}

.site-logo {
	display: inline-block;
	padding-top: 18px;
	padding-left: 60px;
}

.header-controls {
	float: right;
	padding: 16px 25px 0 50px;
}

.header-controls button {
	background: transparent;
	border: none;
	font-size: 19px;
}

.header-controls button.nav-switch-btn {
	font-size: 21px;
	margin-right: 25px;
}

.slicknav_menu {
	display: none;
}

.main-menu {
	list-style: none;
	float: right;
	display: none;
	font-size: 600;
}

.main-menu li {
	display: inline-block;
	position: relative;
}

.main-menu li.search-mobile {
	display: none;
}

.main-menu li a {
	display: block;
	font-size: 15px;
	color: white;
	font-weight: 600;
	text-transform: uppercase;
	padding: 6px 15px;
	margin: 0 10px;
	font-weight: 600;
	border-radius: 20px;
}

.main-menu li a:hover{
	background-color: white;
	color: black;
}

.main-menu li .sub-menu {
	position: absolute;
	top: 100%;
	left: 0;
	width: 220px;
	background: black;
	visibility: hidden;
	opacity: 0;
	margin-top: 50px;
	padding: 10px 0 5px;
	-webkit-box-shadow: 0 15px 50px 1px rgba(0, 0, 0, 0.13);
	box-shadow: 0 15px 50px 1px rgba(0, 0, 0, 0.13);
	-webkit-transition: all 0.4s;
	transition: all 0.4s;
}

.main-menu li .sub-menu li {
	display: block;
}

.main-menu li .sub-menu li a {
	padding: 10px 15px;
	text-transform: none;
}

.main-menu li:hover .sub-menu {
	visibility: visible;
	opacity: 1;
	margin-top: 0;
}

.search-mobile button {
	background: transparent;
	border: none;
	color: #fff;
	padding: 15px;
}

        
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            padding-top: 20px;
            background-color: #EFCE7C;
            justify-content: center;
            gap: 10px;
        }

        .gallery-item {
            width: 400px; /* Set a fixed width */
            height: 450px; /* Set a fixed height */
            overflow: hidden;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio, cover the entire area */
            display: block;
        }
    </style>
</head>
<body>
      <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>
    <!-- Header section  -->
	<header class="header-section">
		<a href="index.html" class="site-logo"><img src="img/Newlogo2.png" alt="logo"></a>
		<div class="header-controls">
			<button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
			<button class="search-btn"><i class="fa fa-search"></i></button>
		</div>
		<ul class="main-menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Me </a></li>
			<li>
				<a href="#">Gallery</a>
				<ul class="sub-menu">
					<li><a href="portfolio.html">All</a></li>
					<li><a href="portfolio-1.html">Nature</a></li>
					<li><a href="portfolio-2.html">Weddings</a></li>
					<li><a href="portfolio-3.html">Other events</a></li>
					<li><a href="portfolio-4.html">Portraits</a></li>
				</ul>
			</li>
			<li><a href="blog.html">Pricing</a></li>
			<li><a href="contact.html">Enquiries</a></li>
			<li>
				<a href="#">Login</a>
				<ul class="sub-menu">
					<li><a href="login.html">Admin Login</a></li>
					<li><a href="user signup.html">User signup</a></li>
					<li><a href="userlogin.html">User Login</a></li>
				</ul>
			</li>
			<li class="search-mobile">
				<button class="search-btn"><i class="fa fa-search"></i></button>
			</li>
		</ul>
	</header>
  <div class="portfolio-section" style="padding-top: none; background-color: transparent;">
    <ul class="portfolio-filter controls text-center" style=" text-align:center;">
        <ul class="sub-menu">
            <li style="display: inline-block; font-size: 14px; color: #212121; font-weight: 500; margin-right: 46px; text-transform: uppercase; cursor: pointer;"><a href="portfolio.html" style="color: black;">All</a></li>
            <li style="display: inline-block; font-size: 14px; color: #212121; font-weight: 500; margin-right: 46px; text-transform: uppercase; cursor: pointer;"><a href="portfolio-1.html" style="color: black;">Nature</a></li>
            <li style="display: inline-block; font-size: 14px; color: #212121; font-weight: 500; margin-right: 46px; text-transform: uppercase; cursor: pointer;"><a href="portfolio-2.html" style="color: black;">Weddings</a></li>
            <li style="display: inline-block; font-size: 14px; color: #212121; font-weight: 500; margin-right: 46px; text-transform: uppercase; cursor: pointer;"><a href="portfolio-3.html" style="color: black;">Other events</a></li>
            <li style="display: inline-block; font-size: 14px; color: #212121; font-weight: 500; text-transform: uppercase; cursor: pointer;"><a href="portfolio-4.html" style="color: black;">Portraits</a></li>
        </ul>
    </ul>
</div>

    <div class="gallery-container">
        <?php
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "photo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch photos from the database
        $sql = "SELECT image_path FROM galleryy ";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            // Output each photo
            while ($row = $result->fetch_assoc()) {
                echo '<div class="gallery-item">';
                echo '<img src="' . htmlspecialchars($row["image_path"], ENT_QUOTES, 'UTF-8') . '" alt="Photo">';
                echo '</div>';
            }
        } else {
            echo "No photos available.";
        }

        $conn->close();
        ?>
    </div>

    <script>
        // JavaScript for filtering images by category
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>


   

    

    <!-- Footer Section Begin -->
    <footer class="footer-section">
      <div class="container">
        <div class="row justify-content-center"> <!-- Center the column within the row -->
          <div class="col-lg-3 col-md-6 col-sm-6 text-center"> <!-- Center-align the text within the column -->
            <div class="fs-about">
              <div class="fa-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

          <div class="col-lg-12">
            <div class="copyright-text">
              <p><b>
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved
                <i class="" aria-hidden="true"></i>
              </p></b>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

  </body>
</html>



