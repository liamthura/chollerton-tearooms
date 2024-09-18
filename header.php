<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <script src="ham-trigger.js"></script>
    <!-- dynamic naming of page title based on current page -->
    <title><?php if(empty($title)) {$title = "Home";} echo htmlspecialchars($title); ?> - Chollerton Tearooms</title>
</head>
<body>
<header class="navbar">
    <div class="hf-container">
        <div class="logo-area">
            <!-- use span tag for logo title to avoid duplicate h1 in page title-->
            <a class="logo-title" href="/"><span>Chollerton Tearooms</span></a>
        </div>
        <nav>
            <a href="javascript:void(0)" id="ham-icon">&#9776;</a>
            <ul id="main-nav">
                <!-- using php to dynamically identify active page on all pages-->
                <li><a <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>  class="active"   <?php   }  ?> href="/">Home</a></li>
                <li><a <?php if($_SERVER['SCRIPT_NAME']=="/our-facilities.php") { ?>  class="active"   <?php   }  ?> href="/our-facilities.php">Our facilities</a></li>
                <li><a <?php if($_SERVER['SCRIPT_NAME']=="/view-request.php") { ?>  class="active"   <?php   }  ?> href="/view-request.php">View requests</a></li>
                <li><a <?php if($_SERVER['SCRIPT_NAME']=="/credits.php") { ?>  class="active"   <?php   }  ?> href="/credits.php">Credits</a></li>
                <li><a class="nav-button" href="/find-out-more.php">Find out more</a></li>
            </ul>
        </nav>
    </div>
    <div class="mobile-nav-container">
        <nav>
            <ul id="mobile-nav">
                <li><a <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>  class="active"   <?php   }  ?> href="/">Home</a></li>
                <li><a <?php if($_SERVER['SCRIPT_NAME']=="/our-facilities.php") { ?>  class="active"   <?php   }  ?> href="/our-facilities.php">Our facilities</a></li>
                <li><a <?php if($_SERVER['SCRIPT_NAME']=="/view-request.php") { ?>  class="active"   <?php   }  ?> href="/view-request.php">View requests</a></li>
                <li><a <?php if($_SERVER['SCRIPT_NAME']=="/credits.php") { ?>  class="active"   <?php   }  ?> href="/credits.php">Credits</a></li>
                <li><a class="nav-button" href="/find-out-more.php">Find out more</a></li>
            </ul>
        </nav>
    </div>
</header>
