<?php 
include 'config.php';
include 'connection.php';


session_start();

$route =  base_url."auth.php";

if(isset($_SESSION['uid'])) {
    
  }else{
    header("location: $route");
  }

// fetching the user details
$userId = $_SESSION['uid'];

$query = "SELECT * FROM users WHERE id = '$userId' ";
$sql = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($sql);
$name = ucwords($result['name']);
$username = ucwords($result['username']);
$email = $result['email'];
$phone = $result['phone'];
$dob = $result['dob'];
$gender = $result['gender'];
$city = $result['city'];
$country = $result['country'];
$about_me = $result['about_me'];
$profile_pic = $result['profile_pic'];
$cover_pic = $result['cover_pic'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network</title>
    <link rel="icon" href="<?php echo base_url ?>images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="<?php echo base_url ?>css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url ?>css/main.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url ?>css/color.css">
    <link rel="stylesheet" href="<?php echo base_url ?>css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
    
    <div class="responsive-header">
        <div class="mh-head first Sticky">
            <span class="mh-btns-left">
                <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
            </span>
            <span class="mh-text">
                <a href="<?php echo base_url ?>" title=""><img src="images/logo2.png" alt=""></a>
            </span>
            <span class="mh-btns-right">
                <a class="fa fa-sliders" href="#shoppingbag"></a>
            </span>
        </div>
        <div class="mh-head second">
            <form class="mh-form">
                <input placeholder="search" />
                <a href="#/" class="fa fa-search"></a>
            </form>
        </div>
        <nav id="menu" class="res-menu">
            <ul>
                <li><span><a href="index-2.html" title="">Home</a></span>
                    
                </li>
                <li><span><a href="<?php echo base_url ?>timeline/" title="">timeline</a></span>

                </li>
                <li><span><a href="<?php echo base_url ?>findPeople/" title="">Find People</a></span>

                </li>
                <li><span><a href="edit-account-setting.html" title="">Account Setting</a></span>
                    
                </li>
                <li><span><a href="forum.html" title="">Forum Page</a></span>
                    
                </li>
                <li><span><a href="">Our Shop</a></span>
                    
                </li>
                <li><span><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></span>
                    
                </li>
                <li><span><a href="portfolio-2colm.html" title="">Portfolio</a></span>
                    
                </li>
                <li><span><a href="support-and-help.html" title="">Support & Help</a></span>
                    
                </li>
                <li><span>More pages</span>
                    
                </li>
                <li><a href="about.html" title="">about</a></li>
                <li><a href="about-company.html" title="">About Us2</a></li>
                <li><a href="contact.html" title="">contact</a></li>
                <li><a href="contact-branches.html" title="">Contact Us2</a></li>
                <li><a href="widgets.html" title="">Widgts</a></li>
            </ul>
        </nav>
        <nav id="shoppingbag">
            <div>
                <div class="">
                    <form method="post">
                        <div class="setting-row">
                            <span>use night mode</span>
                            <input type="checkbox" id="nightmode"/> 
                            <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>Notifications</span>
                            <input type="checkbox" id="switch2"/> 
                            <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>Notification sound</span>
                            <input type="checkbox" id="switch3"/> 
                            <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>My profile</span>
                            <input type="checkbox" id="switch4"/> 
                            <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>Show profile</span>
                            <input type="checkbox" id="switch5"/> 
                            <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                    </form>
                    <h4 class="panel-title">Account Setting</h4>
                    <form method="post">
                        <div class="setting-row">
                            <span>Sub users</span>
                            <input type="checkbox" id="switch6" /> 
                            <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>personal account</span>
                            <input type="checkbox" id="switch7" /> 
                            <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>Business account</span>
                            <input type="checkbox" id="switch8" /> 
                            <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>Show me online</span>
                            <input type="checkbox" id="switch9" /> 
                            <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>Delete history</span>
                            <input type="checkbox" id="switch10" /> 
                            <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>Expose author name</span>
                            <input type="checkbox" id="switch11" /> 
                            <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div><!-- responsive header -->
        <div class="topbar stick">
        <div class="logo">
            <a title="" href="<?php echo base_url ?>"><img src="images/logo.png" alt=""></a>
        </div>
        
        <div class="top-area">
            <ul class="main-menu">
                <li>
                    <a href="<?php echo base_url ?>" title="">Home</a>
                    
                </li>
                <li>
                    <a href="<?php echo base_url ?>timeline/" title="">timeline</a>
                </li>
                <li>
                    <a href="<?php echo base_url ?>findPeople/" title="">Find People</a>
                </li>
                <li>
                    <a href="edit-account-setting.html" title="">Account Setting</a>
                    
                </li>
                <li>
                    <a href="#" title="">more pages</a>
                    <ul>
                        <li><a href="<?php echo base_url ?>logout.php" title="">Log out</a></li>
                    </ul>
                    
                </li>
            </ul>
            <ul class="setting-area">
                <li>
                    <a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
                    <div class="searched">
                        <form method="post" class="form-search">
                            <input type="text" placeholder="Search Friend">
                            <button data-ripple><i class="ti-search"></i></button>
                        </form>
                    </div>
                </li>
                <li><a href="<?php echo base_url ?>" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
                <li>
                    <a href="#" title="Notification" data-ripple="">
                        <i class="ti-bell"></i><span>20</span>
                    </a>
                    <div class="dropdowns">
                        <span>4 New Notifications</span>
                        <ul class="drops-menu">
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-1.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>sarah Loren</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag green">New</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-2.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Jhon doe</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag red">Reply</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-3.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Andrew</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag blue">Unseen</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-4.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Tom cruse</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-5.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Amy</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                        </ul>
                        <a href="notifications.html" title="" class="more-mesg">view more</a>
                    </div>
                </li>
                <li>
                    <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                    <div class="dropdowns">
                        <span>5 New Messages</span>
                        <ul class="drops-menu">
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-1.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>sarah Loren</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag green">New</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-2.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Jhon doe</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag red">Reply</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-3.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Andrew</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag blue">Unseen</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-4.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Tom cruse</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="images/resources/thumb-5.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Amy</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                        </ul>
                        <a href="messages.html" title="" class="more-mesg">view more</a>
                    </div>
                </li>
                <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                    <div class="dropdowns languages">
                        <a href="#" title=""><i class="ti-check"></i>English</a>
                        <a href="#" title="">Arabic</a>
                        <a href="#" title="">Dutch</a>
                        <a href="#" title="">French</a>
                    </div>
                </li>
            </ul>
            <div class="user-img">
                <img style="width: 60px; height: 60px" src="<?php echo base_url ?>uploads/displaypics/<?php echo $profile_pic ?>" alt="">
                <span class="status f-online"></span>
                <div class="user-setting">
                    <a href="#" title=""><span class="status f-online"></span>online</a>
                    <a href="#" title=""><span class="status f-away"></span>away</a>
                    <a href="#" title=""><span class="status f-off"></span>offline</a>
                    <a href="#" title=""><i class="ti-user"></i> view profile</a>
                    <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                    <a href="#" title=""><i class="ti-target"></i>activity log</a>
                    <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                    <a href="#" title=""><i class="ti-power-off"></i>log out</a>
                </div>
            </div>
            <span class="ti-menu main-menu" data-ripple=""></span>
        </div>
    </div><!-- topbar -->