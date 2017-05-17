<?php
header("Content-type: text/css; charset: UTF-8");
?>
/* Style Sheet
----------------------------------------------------------------*/

body {
	margin: 0px;
	padding: 0px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #AEC7E3;
	margin-top:0px;
	padding-top:0px;
}

html {


        background: #00618A; /* for non-css3 browsers */
    background: -webkit-gradient(linear, left top, left bottom, from(#00618A), to(#00618A));
    background: -moz-linear-gradient(top,  #00618A,  #00618A);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00618A', endColorstr='#00618A');

    	background-position:top center;
}

.highlight { color:#FFFFFF; }
.pad { padding:10px; }
.back { margin-bottom:20px; display:block }

/* LINKS
----------------------------------------------------------------*/

a:link, a:active { color:#FFFFFF; text-decoration: underline;}
a:visited { color:#FFFFFF; text-decoration:underline}
a:hover { color:#2F9FEE; text-decoration:underline}
a img {border:0 !important;}

/* TOP NAVIGATION LINKS
----------------------------------------------------------------*/


/* sub levels link hover */
#nav ul li:hover a, #nav li:hover li a { background: none; border: none; color: #666; z-index:100; -webkit-box-shadow: none; -moz-box-shadow: none;  }
#nav ul a:hover { background:  url(../../images/gradient.png) repeat-x 0 -100px !important; color: #fff !important; -webkit-border-radius: 0; -moz-border-radius: 0; text-shadow: 0 1px 1px rgba(0,0,0, .1); }

/* dropdown */
#nav li:hover > ul { display: block; z-index:100;}

/* level 2 list */
#nav ul { display: none; z-index:100; margin: 0; padding: 0; width: 220px; position: absolute; top: 35px; left: 0; background: #ddd url(../../images/gradient.png) repeat-x 0 0; border: solid 1px #b4b4b4; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; -webkit-box-shadow: 0 1px 3px rgba(0,0,0, .3); -moz-box-shadow: 0 1px 3px rgba(0,0,0, .3); box-shadow: 0 1px 3px rgba(0,0,0, .3); z-index:1000; }
#nav ul li { float: none; margin: 0; padding: 0; z-index:100; text-align:left; z-index:1000;}
#nav ul a { font-weight: normal; text-shadow: 0 1px 0 #fff; z-index:100;}

/* rounded corners of first and last link */
#nav ul li:first-child > a { -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; }
#nav ul li:last-child > a { -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; }

/* clearfix */
#nav:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;}
#nav { display: inline-block; }
html[xmlns] #nav { display: block; }
* html #nav { height: 1%; }


#nav { margin: 0; padding: 7px 6px 0; line-height: 100%; z-index:100; }
#nav li { margin: 0 5px; padding: 0 0 8px; float: left; position: relative; list-style: none;}

/* main level link */
#nav a { font-weight: bold; color: #FFFFFF; text-decoration: none; display: block; padding:  8px 15px; margin: 0; z-index:100; }
#nav a:hover { color: #FFFFFF; }

/* main level link hover */
#nav .current a, #nav li:hover > a { color: #FFFFFF; z-index:100; }


#nav ul ul {
left:100%;
top: 0;
}




























/* sub levels link hover */
#nav2 ul li:hover a, #nav2 li:hover li a { background: none; border: none; color: #666; z-index:100; -webkit-box-shadow: none; -moz-box-shadow: none;  }
#nav2 ul a:hover { background:  url(../../images/gradient.png) repeat-x 0 -100px !important; color: #fff !important; -webkit-border-radius: 0; -moz-border-radius: 0; text-shadow: 0 1px 1px rgba(0,0,0, .1); }

/* dropdown */
#nav2 li:hover > ul { display: block; z-index:100;}

/* level 2 list */
#nav2 ul { display: none; z-index:100; margin: 0; padding: 0; width: 220px; position: absolute; top: 35px; left: 0; background: #ddd url(../../images/gradient.png) repeat-x 0 0; border: solid 1px #b4b4b4; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; -webkit-box-shadow: 0 1px 3px rgba(0,0,0, .3); -moz-box-shadow: 0 1px 3px rgba(0,0,0, .3); box-shadow: 0 1px 3px rgba(0,0,0, .3); z-index:1000; }
#nav2 ul li { float: none; margin: 0; padding: 0; z-index:100; text-align:left; z-index:1000;}
#nav2 ul a { font-weight: normal; text-shadow: 0 1px 0 #fff; z-index:100;}

/* rounded corners of first and last link */
#nav2 ul li:first-child > a { -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; }
#nav2 ul li:last-child > a { -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; }

/* clearfix */
#nav2:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;}
#nav2 { display: inline-block; }
html[xmlns] #nav2 { display: block; }
* html #nav2 { height: 1%; }


#nav2 { margin: 0; padding: 7px 6px 0; line-height: 100%; z-index:100; }
#nav2 li { margin: 0 5px; padding: 0 0 8px; float: left; position: relative; list-style: none;}

/* main level link */
#nav2 a { font-weight: bold; color: #FFFFFF; text-decoration: none; display: block; padding:  8px 15px; margin: 0; z-index:100; }
#nav2 a:hover { color: #FFFFFF; }

/* main level link hover */
#nav2 .current a, #nav2 li:hover > a { color: #FFFFFF; z-index:100; }


#nav2 ul ul {
left:100%;
top: 0;
}



/* MENU NAVIGATION
----------------------------------------------------------------*/

#nav_menu {}
#nav_menu ul { margin:0px; padding:0px; margin-left:15px;}
#nav_menu li { margin:0px; padding:3px; list-style:none; }
#nav_menu li a { color:#AEC7E3; text-decoration:none; float: left; width: 100%; padding:3px; border-bottom: 1px solid #ccc; }
#nav_menu .current a, #nav_menu li:hover > a { color:#FFFFFF; }

#nav_menu ul {
display:none;
}
#nav_menu li:hover > ul {
display:block;
}




/* HEADER NAVIGATION
----------------------------------------------------------------*/

#header_nav_menu {}
#header_nav_menu ul { margin:10px; padding:0px; }
#header_nav_menu li { margin:0px; padding:6px; list-style:none; }
#header_nav_menu li a { color:#FFFFFF; text-decoration:none; text-decoration: none; }
#header_nav_menu li a:hover { color:#FFFFFF; text-decoration: none;}

/* HEADING TAGS
----------------------------------------------------------------*/

h1 { font-size:10px; font-weight:normal; margin:0px; padding:5px;}
h2 { font-size:10px; font-weight:normal;  }
h6 { font-size:14px; font-weight:normal; margin:0px; padding:0px; margin-bottom:3px;  }

/* REGISTER
----------------------------------------------------------------*/

.register_box { width:250px; float:left; margin-right:20px; padding-right:20px; border-right:1px solid #ccc; }

/* FEEDBACK
----------------------------------------------------------------*/

#feedback {margin:0px; padding:0px; padding-bottom:10px; padding-top:10px; display:block; height:100%; }
#feedback strong { font-size:14px; }
#feedback_left { height:87px; margin:0px; padding-left:40px; padding-bottom:18px; border-bottom:1px solid #ccc; margin-top:10px; }
.vacancies {margin:0px; padding:5px; display:block; height:100%; border:1px solid #eee; margin-top:20px; }
.vacancies_details {margin:0px; padding:5px; display:block; height:100%; background:#eee; margin-top:10px; }
.reviews	{margin:0px; padding:0px; padding-bottom:10px; padding-top:10px; display:block; height:100%; background:#F4F4F4; border:1px solid #eee; padding:10px; margin-bottom:15px; }
.reviews strong { font-size:14px; }


/* PRODUCTS
----------------------------------------------------------------*/
.products {margin:0px; padding:0px; padding-bottom:10px; padding-top:10px; display:block; height:100%; border-bottom:1px solid #eee; overflow:auto; }
.products img { padding:0px; margin:0px; padding-right:20px; float:left; width:200px;}

/* MAIN
----------------------------------------------------------------*/

#main {width: 1000px; margin: 0 auto; position: relative; padding:0px;}
#header { height:123px; background:url(http://cms.pm/uploads/) left no-repeat ; margin:0px; padding:0px; text-align:right; padding-right:20px; color:#FFFFFF; }
#header h5 { font-size:26px; font-weight:normal; padding:0px; margin:0px; letter-spacing:-1px; margin-right:10px;  }
#header h6 { font-size:22px; font-weight:normal; padding:0px; margin:0px; letter-spacing:-1px; margin-right:10px;  }
#header h6 a { color:#FFFFFF;  }
#navigation { height:44px;  margin:0px; }
#navigation2 { height:44px;  margin:0px; float:right; margin-top:20px; }

#header_right { width:650px; margin-right:15px; margin-left:35px; float:left; height:100%; overflow:auto; margin-top:40px;}
#header_left { width:250px; margin-left:15px; float:left; height:100% overflow:auto; margin-top:40px; color:#FFFFFF;}
#header_left h5 { font-size:24px; font-weight:normal; padding:0px; margin:0px; letter-spacing:-1px; margin-top:10px;  }

#header_banner_right { width:525px; margin-left:25px; float:left; height:100% overflow:auto; margin-top:20px; }
#header_banner_left { width:450px; float:left; height:100% overflow:auto; margin-top:20px; clear:left;}

.headersearch { padding-top:20px; padding-bottom:10px; }

        #body {padding:0px; margin:0px; line-height:22px; height:100%; overflow:auto; padding-bottom:20px; padding-top:40px; background:#;}

	    #body_text {height:100%; width:980px; margin-right:15px; margin-left:15px;}

	#body_text_inner { padding:10px; }
    #body h1 {font-size:24px; font-weight:normal; padding:0px; margin:0px; color:#FFFFFF;  letter-spacing:-1px; margin-bottom:20px;}
    #body h2 {font-size:18px; font-weight:normal; padding:0px; margin:0px; color:#FFFFFF;  letter-spacing:-1px;  margin-bottom:20px;}
	#body h3 {font-size:24px; font-weight:normal; padding:0px; margin:0px; padding-top:5px; padding-bottom:5px; color:#FFFFFF; letter-spacing:-1px; margin-bottom:20px;}
    #body h4 {font-size:18px; font-weight:normal; padding:0px; margin:0px; padding-top:5px; padding-bottom:5px; color:#FFFFFF; letter-spacing:-1px; margin-bottom:20px;}
    #body h5 {font-size:18px; font-weight:normal; padding:0px; margin:0px; padding-top:5px; padding-bottom:5px; color:#FFFFFF; letter-spacing:-1px; margin-bottom:20px;}


	       #menu { width:250px; float:left; padding:0px; margin:0px; margin-left:15px; }
            #carousel { padding:20px; margin-bottom:20px; }
        .head_space {height:45px; }
        #menu_box { padding:0px; margin:0px; background:#; border:1px solid #e7e4e4; margin-left:20px; margin-bottom:10px; -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; height:100%; overflow:auto; color: #FFFFFF}
    #menu_box h4 { background:; color:#FFFFFF; padding:10px; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; margin-bottom:0px; padding-bottom:10px;}


#footer {height:100px; text-align:center; clear:both; background:#; font-size:11px; padding:0px; margin-top:0px; line-height:20px; color:#FFFFFF; border-top:1px solid #eee;}
#footer a { color:#FFFFFF; }
#footer a:hover { color:#FFFFFF; }
#footer_inner {  padding-top:25px; padding-bottom:10px;  }



.subfooter { width:100%; background:#; height:100%; display:block; overflow:auto}
.subfooter_inner { width: 1000px; margin: 0 auto; position: relative; padding:0px; color:#FFFFFF;  height:100%; display:block; overflow:auto }
.subfooter_box { float:left; width:290px; padding:20px; line-height:18px; height:100%; display:block; overflow:auto}
.subfooter_box h5 { font-size:16px; font-weight:normal; padding:0px; margin:0px; padding-bottom:5px; border-bottom:1px dashed #FFFFFF }
.subfooter_box h5 a { color:#FFFFFF; text-decoration: none; }
.subfooter_box h3 { font-size:16px; font-weight:normal; padding:0px; margin:0px; padding-bottom:5px; border-bottom:1px dashed #FFFFFF }
.subfooter_box h3 a { color:#FFFFFF; text-decoration: none; }
.subfooter_box img { margin-top:10px; margin-bottom:10px; border:1px solid #FFFFFF }
.subfooter_box li { list-style:none; padding:8px; border-bottom:1px solid #666; }

.subfooter_button { cursor:pointer; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; padding:5px; font-weight:bold; background: #FFFFFF url(../../images/gradient.png) repeat-x 0 -130px;; color:#fff; border: 1px solid #2F9FEE;}




.subfootert { width:100%; background:#; margin-bottom:20px;}
.subfooter_innert { width: 1000px; margin: 0 auto; position: relative; padding:0px; color:#FFFFFF; height:100%; overflow:auto }
.subfooter_boxt .button { margin-top: 28px; display:block; }
.subfooter_boxt { float:left; width:290px; padding:20px; line-height:18px; }
.subfooter_boxt h5 { font-size:16px; font-weight:normal; padding:0px; margin:0px; padding-bottom:5px; border-bottom:1px dashed #FFFFFF; }
.subfooter_boxt h5 a { color:#FFFFFF; text-decoration: none;}
.subfooter_boxt h3 { font-size:16px; font-weight:normal; padding:0px; margin:0px; padding-bottom:5px; border-bottom:1px dashed #FFFFFF }
.subfooter_boxt h3 a { color:#FFFFFF; text-decoration: none; }
.subfooter_boxt img { margin-top:10px; margin-bottom:10px; border:1px solid #FFFFFF; border:0px; }
.subfooter_boxt li { list-style:none; padding:8px; border-bottom:1px solid #666; }

.subfooter_buttont { cursor:pointer; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; padding:5px; font-weight:bold; background: #FFFFFF url(../../images/gradient.png) repeat-x 0 -130px;; color:#fff; border: 1px solid #2F9FEE;}

#clearer { clear:both; line-height: 1px;font-size: 1px; }
.gal_thumb {  width: 60px;  height: 60px; border: 2px solid #666; background-position: center center; display:block; margin:3px; float:left; }

.gal_thumbs {  width: 150px;  height: 150px; border: 2px solid #666; background-position: center center; display:block; margin:5px; float:left; }
.prods { float:right; padding-left:30px; }

.stars1 { background:url(../../images/stars.png); height:15px; width:21px; display:block; }
.stars2 { background:url(../../images/stars.png); height:15px; width:46px; display:block; }
.stars3 { background:url(../../images/stars.png); height:15px; width:63px; display:block; }
.stars4 { background:url(../../images/stars.png); height:15px; width:80px; display:block; }
.stars5 { background:url(../../images/stars.png); height:15px; width:97px; display:block; }

#prod_image { width:250px; float:left; padding:0px; margin:0px; margin-right:15px; }
#prod_description { height:100%; width:570px; float:left;}
#prod_description td { border-bottom:1px solid #000;}



.social_media { width:100%; background:; height:100%; display:block; overflow:auto; line-height:32px; padding-top:20px; padding-bottom:20px;}
.social_media img { float:left; }
.social_media_inner { width: 1000px; margin: 0 auto; position: relative; padding:0px; color:#FFFFFF;  height:100%; display:block; overflow:auto }

#navcontainer ul { margin: 0; padding: 10; list-style-type: none; text-align: center; background:#f5f5f5; border:1px solid #eee; padding:5px;}

#navcontainer ul li { display: inline; }

#topbar { background:; color:#FFFFFF; display:block; padding:2px; overflow:auto; text-align:right;}

.topbar {width: 1000px; margin: 0 auto; position: relative; padding:0px;}

#top_cart { background:; color:; float:right; width:300px; padding:7px; margin-bottom:10px; text-align:center; }
#top_cart a { color:;}


input#show, input#hide {
    display:none;
}

span#content {
    display: block;
    -webkit-transition: opacity 1s ease-out;
    transition: opacity 1s ease-out;
    opacity: 0;
    height: 0;
    font-size: 0;
    overflow: hidden;
}

input#show:checked ~ .show:before {
    content: ""
}

input#show:checked ~ .hide:before {
    content: "+ Hide Additional Notes"
}
input#hide:checked ~ .show:before {
    content: "+ Add Additional Notes"
}

input#hide:checked ~ .hide:before {
    content: ""
}
input#show:checked ~ span#content {
    opacity: 1;
    font-size: 100%;
    height: auto;
}
input#hide:checked ~ span#content {
    display: block;
    -webkit-transition: opacity 1s ease-out;
    transition: opacity 1s ease-out;
    opacity: 0;
    height: 0;
    font-size: 0;
    overflow: hidden;
}

/* FORM
----------------------------------------------------------------*/

#header form {
width:35%;
margin-left:65%;
}

INPUT {padding-top:3px; margin-top:5px; margin-bottom:5px; border: 1px solid #ccc; background:url(../../images/input.jpg) repeat-x bottom #fff; font-size:11px; color:#807F80; padding:3px; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; padding:6px;}
.input {padding-top:3px; margin-top:5px; margin-bottom:5px; border: 1px solid #ccc; background:url(../../images/input.jpg) repeat-x bottom #fff; font-size:11px; color:#807F80; padding:3px; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; padding:6px;}
TEXTAREA { margin:0px; margin-top:5px; margin-bottom:5px; border: 1px solid #ccc; background:url(../../images/input.jpg) repeat-x bottom #fff; font-size:11px; color:#807F80; padding:2px; padding-left:5px; padding-top:5px; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px;}
FORM { padding:0px; margin:0px; }
fieldset { margin-bottom:10px; border:1px solid #ccc; padding:10px; margin-top:20px; }

select {padding-top:3px; margin-top:5px; margin-bottom:5px; border: 1px solid #ccc; background:url(../../images/input.jpg) repeat-x bottom #fff; font-size:11px; color:#807F80; padding:3px; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; padding:6px;}

legend { color: #fff; background: #2d2d2d; border: 1px solid #0f0f0f; padding: 2px 6px; font-size:14px; font-weight:bold; margin-left:10px; }
.button { background: #FFFFFF url(../../images/gradient.png) repeat-x 0 -130px; border: 1px solid #2F9FEE; color:#fff; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; padding:3px; font-weight:bold;  padding:6px; display:block;}

.sbutton { background: #FFFFFF url(../../images/gradient.png) repeat-x 0 -130px; border: 1px solid #2F9FEE; color:#fff; -webkit-border-top-left-radius: 9px; -moz-border-radius-topleft: 9px; -webkit-border-top-right-radius: 9px; -moz-border-radius-topright: 9px; -webkit-border-bottom-left-radius: 9px; -moz-border-radius-bottomleft: 9px; -webkit-border-bottom-right-radius: 9px; -moz-border-radius-bottomright: 9px; padding:3px; font-weight:bold;  padding:6px;}

.button { background: #FFFFFF url(../../images/gradient.png) repeat-x 0 -130px; border: 1px solid #2F9FEE; color:#fff; -webkit-border-top-left-radius: 8px; -moz-border-radius-topleft: 8px; -webkit-border-top-right-radius: 8px; -moz-border-radius-topright: 8px; -webkit-border-bottom-left-radius: 8px; -moz-border-radius-bottomleft: 8px; -webkit-border-bottom-right-radius: 8px; -moz-border-radius-bottomright: 8px; font-weight:bold;  padding:6px; box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2); text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);}

.button:hover { background: #FFFFFF url(../../images/black-bg2.png);  border: solid 1px #2F9FEE; text-decoration: none; }

.btn4 { padding: 8px 12px; background: #FFFFFF; color: #FFF !important; -webkit-border-radius: 8px; -moz-border-radius: 8px; border-radius: 8px; border: solid 1px #2F9FEE; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2); -webkit-transition-duration: 0.2s; -moz-transition-duration: 0.2s; transition-duration: 0.2s; text-decoration:none; font-size:14px; }
.btn4 a { text-decoration:none !important; }
.btn3:hover, .btn4:hover { background: #FFFFFF url(../../images/black-bg2.png);  border: solid 1px #2F9FEE; text-decoration: none; }

.btn4 { -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none; cursor: pointer }
.btn4:active { background: #FFFFFF; border: solid 1px #2F9FEE; -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6); -moz-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6); box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6); }

#contact_form { float:right; margin:20px; }

/* BULLET POINTS
----------------------------------------------------------------*/

.UL { margin:0px; padding:20px; }
.LI { margin:0px; padding:0px; margin-left:15px; list-style-image:url(../../images/icon.png) }

/* LIGHTBOX
----------------------------------------------------------------*/

#lightbox{ background-color:#eee; padding: 10px; border-bottom: 2px solid #666; border-right: 2px solid #666;  }
#lightboxDetails{ font-size: 0.8em; padding-top: 0.4em; }
#lightboxCaption{ float: left; }
#keyboardMsg{ float: right; }
#closeButton{ top: 5px; right: 5px; }

#lightbox img{ border: none; clear: both;}
#overlay img{ border: none; }

#overlay{ background-image: url(../../overlay.png); }

* html #overlay{ background-color: #333; back\ground-color: transparent; background-image: url(../../blank.gif); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="../../overlay.png", sizingMethod="scale"); }


/* TABS
----------------------------------------------------------------*/

.etabs { margin: 0; padding: 0; margin-top:30px; }
.tab { display: inline-block; zoom:1; *display:inline; background: #eee; border: solid 1px #ccc; border-bottom: none; -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; }
.tab a { font-size: 14px; line-height: 2em; display: block; padding: 0 10px; outline: none; }
.tab a:hover { text-decoration: underline; }
.tab.active { background: #fff; padding-top: 6px; position: relative; top: 1px; border-color: #ccc; }
.tab a.active { font-weight: bold; }
.tab-container .panel-container { background: #fff; border: solid #ccc 1px; padding: 10px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; }

.itabs { background: #fff; border: solid #ccc 1px; padding: 10px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; }


/* The Nivo Slider styles */
.nivoSlider {
	position:relative;
	width:100%;
	height:auto;
	overflow: hidden;
}
.nivoSlider img {
	position:absolute;
	top:0px;
	left:0px;
	max-width: none;
}
.nivo-main-image {
	display: block !important;
	position: relative !important;
	width: 100% !important;
}

/* If an image is wrapped in a link */
.nivoSlider a.nivo-imageLink {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	border:0;
	padding:0;
	margin:0;
	z-index:6;

	background:white;
	filter:alpha(opacity=0);
	opacity:0;
}
/* The slices and boxes in the Slider */
.nivo-slice {
	display:block;
	position:absolute;
	z-index:5;
	height:100%;
	top:0;
}
.nivo-box {
	display:block;
	position:absolute;
	z-index:5;
	overflow:hidden;
}
.nivo-box img { display:block; }


.nivo-caption { position:absolute; left:450px; bottom:0px; background:url(../../images/black-bg.png); color:#fff; width:100%; z-index:8; width:55%;  margin-bottom:40px; font-size:18px;  text-shadow: 0 1px 0 rgba(0,0,0, 1); letter-spacing:-1px; line-height:26px; }
.nivo-caption b { font-size:30px; opacity:1; font-weight:normal}
.nivo-caption p { padding:10px; margin:0;  }
.nivo-caption a { display:inline !important;}



.nivo-html-caption {
    display:none;
}

/* Direction nav styles (e.g. Next & Prev) */
.nivo-directionNav a {
	position:absolute;
	top:45%;
	z-index:9;
	cursor:pointer;
    display:block; width:30px; height:30px; text-indent:-9999px; border:0;
}
.nivo-prevNav {
	left:15px;
    background:url(../../images/arrows.png) no-repeat;
}
.nivo-nextNav {
    background:url(../../images/arrows-right.png) no-repeat; right:15px;
}
/* Control nav styles (e.g. 1,2,3...) */
.nivo-controlNav {
	display:none;
}


/* Map Fine Tuner CSS */
#mapText { padding: 0px; margin: 0px 2px 5px 2px; font-size: 0.8em; border: #777 1px solid; border-top: none; width: 650px; }
#mapText p { margin: 0px; padding: 0px 5px 0px 5px; line-height: 1.6em; text-align: center; }
#mapFineTuner { width: 650px; position: relative; display: block; }
#mapFineTuner .gmapsFineTuner-gmapDiv { width: 650px; height: 300px; margin: 5px 2px 0px 2px; border: #777 1px solid; }
#mapFineTuner .gmapsFineTuner-formDiv{ display: none;}


div.shr-bookmarks{margin:20px 0 8px;clear:both !important;display:block !important}div.shr-bookmarks ul.shr-socials{width:100% !important;margin:0 !important;padding:0 !important;float:left !important}div.shr-bookmarks ul.shr-socials{background:transparent none !important;border:0 none !important;outline:0 none !important}div.shr-bookmarks ul.shr-socials li{display:inline !important;float:left !important;list-style-type:none !important;padding:0 !important;height:29px !important;width:60px !important;cursor:pointer !important;margin:3px 0 0 !important;background-color:transparent !important;border:0 none !important;outline:0 none !important;clear:none !important}div.shr-bookmarks ul.shr-socials li:before,div.shr-bookmarks ul.shr-socials li:after,div.shr-bookmarks ul.shr-socials li a:before,div.shr-bookmarks ul.shr-socials li a:after{content:'' !important;}div.shr-bookmarks ul.shr-socials a,div.shr-bookmarks ul.shr-socials a:hover{display:block !important;width:60px !important;height:29px !important;text-indent:-9999px !important;background-color:transparent !important;text-decoration:none !important;border:0 none !important}div.shr-bookmarks ul.shr-socials a:hover,div.shr-bookmarks ul.shr-socials li:hover{background-color:transparent !important;border:0 none !important;outline:0 none !important}.shareaholic-show-on-load{display: block !important;}div.shr-bookmarks div.shr-getshr{line-height:20px !important;padding-left:8px !important;float:left !important;}div.shr-bookmarks div.shr-getshr a{width:auto !important;font-size:10px !important; text-indent:0px !important;text-decoration:none !important;}div.shr-count{font:12px bold,arial !important;position: relative !important;}div.shr-count-outline{position: absolute !important;color: white !important;}div.shr-count-center{position: absolute !important;color: blue !important;}li.shr-5{background-position:-300px bottom !important}li.shr-5:hover{background-position:-300px top !important}li.shr-7{background-position:-420px bottom !important}li.shr-7:hover{background-position:-420px top !important}li.shr-88{background-position:-5280px bottom !important}li.shr-88:hover{background-position:-5280px top !important}li.shr-304{background-position:-18240px bottom !important}li.shr-304:hover{background-position:-18240px top !important}

.error { color: #db0202; font-size:11px; }
.small { font-size:11px; }

.item {
    width:160px;
    height:100px;
    border:2px solid #f2f2f2;
    /* required to hide the image after resized */
    overflow:hidden;
    /* for child absolute position */
    position:relative;
    /* display div in line */
    float:left;
}

.item a {  text-decoration:none; }
.item img {
    border:0;
    /* allow javascript moves the img position*/
    position:relative;
}

.clear {
    clear:both;
}

.jcarousel-skin-tango .jcarousel-direction-rtl {direction: rtl;}
.jcarousel-skin-tango .jcarousel-container-horizontal {width: 245px;}
.jcarousel-skin-tango .jcarousel-clip { overflow: hidden; }
.jcarousel-skin-tango .jcarousel-clip-horizontal { width:  900px; margin-left:30px; height:100%; }
.jcarousel-skin-tango .jcarousel-clip-vertical { width:  75px; height: 245px;}
.jcarousel-skin-tango .jcarousel-item { width: 170px; }
.jcarousel-skin-tango .jcarousel-item-horizontal { margin-left: 0; margin-right: 10px;}


/**
 *  Horizontal Buttons
 */
.jcarousel-skin-tango .jcarousel-next-horizontal {
    position: absolute;
    top: 32px;
    right: -695px;
    width: 23px;
    height: 44px;
    cursor: pointer;
    background: transparent url(../../images/right-arrow.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-next-horizontal {
    left: 5px;
    right: auto;
    background-image: url(../../images/left-arrow.png);
}

.jcarousel-skin-tango .jcarousel-next-horizontal:active {
    background-position: -64px 0;
}

.jcarousel-skin-tango .jcarousel-next-disabled-horizontal,
.jcarousel-skin-tango .jcarousel-next-disabled-horizontal:hover,
.jcarousel-skin-tango .jcarousel-next-disabled-horizontal:focus,
.jcarousel-skin-tango .jcarousel-next-disabled-horizontal:active {
    cursor: default;
    background-position: -96px 0;
}

.jcarousel-skin-tango .jcarousel-prev-horizontal {
    position: absolute;
    top: 32px;
    left: -10px;
    width: 23px;
    height: 44px;
    cursor: pointer;
    background: transparent url(../../images/left-arrow.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-prev-horizontal {
    left: auto;
    right: 5px;
    background-image: url(../../images/right-arrow.png);
}


.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal,
.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal:hover,
.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal:focus,
.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal:active {
    cursor: default;
    background-position: -96px 0;
}



#toTop {
		width:57px;
        height:57px;
        text-align:center;
        padding:5px;
        position:fixed; /* this is the magic */
        bottom:10px; /* together with this to put the div at the bottom*/
        right:10px;
        cursor:pointer;
        display:none;
        color:#333;
        font-size:11px;
        background: url(../../images/top.png) no-repeat;
        margin-bottom:20px;
        z-index:999;
}


.ad-gallery {
  width: 650px;
}

.ad-gallery, .ad-gallery * {
  margin: 0;
  padding: 0;
}
  .ad-gallery .ad-image-wrapper {
    width: 100%;
    height: 400px;
    margin-bottom: 10px;
    position: relative;
    overflow: hidden;
  }
    .ad-gallery .ad-image-wrapper .ad-loader {
      position: absolute;
      z-index: 10;
      top: 48%;
      left: 48%;
      border: 1px solid #CCC;
    }
    .ad-gallery .ad-image-wrapper .ad-next {
      position: absolute;
      right: 0;
      top: 0;
      width: 25%;
      height: 100%;
      cursor: pointer;
      display: block;
      z-index: 200;
    }
    .ad-gallery .ad-image-wrapper .ad-prev {
      position: absolute;
      left: 0;
      top: 0;
      width: 25%;
      height: 100%;
      cursor: pointer;
      display: block;
      z-index: 200;
    }
    .ad-gallery .ad-image-wrapper .ad-prev, .ad-gallery .ad-image-wrapper .ad-next {
      /* Or else IE will hide it */
      background: url(../../images/trans.gif);
    }
      .ad-gallery .ad-image-wrapper .ad-prev .ad-prev-image, .ad-gallery .ad-image-wrapper .ad-next .ad-next-image {
        background: url(../../images/ad_prev.png);
        width: 30px;
        height: 30px;
        display: none;
        position: absolute;
        top: 47%;
        left: 0;
        z-index: 101;
      }
      .ad-gallery .ad-image-wrapper .ad-next .ad-next-image {
        background: url(../../images/ad_next.png);
        width: 30px;
        height: 30px;
        right: 0;
        left: auto;
      }
    .ad-gallery .ad-image-wrapper .ad-image {
      position: absolute;
      overflow: hidden;
      top: 0;
      left: 0;
      z-index: 9;
    }
      .ad-gallery .ad-image-wrapper .ad-image a img {
        border: 0;
      }
      .ad-gallery .ad-image-wrapper .ad-image .ad-image-description {
        position: absolute;
        bottom: 0px;
        left: 0px;
        padding: 7px;
        text-align: left;
        width: 100%;
        z-index: 2;
        background: url(../../images/opa75.png);
        color: #000;
      }
      * html .ad-gallery .ad-image-wrapper .ad-image .ad-image-description {
        background: none;
        filter:progid:DXImageTransform.Microsoft.AlphaImageLoader (enabled=true, sizingMethod=scale, src='opa75.png');
      }
        .ad-gallery .ad-image-wrapper .ad-image .ad-image-description .ad-description-title {
          display: block;
        }
  .ad-gallery .ad-controls {
    height: 20px;
  }
    .ad-gallery .ad-info {
      float: left;
    }
    .ad-gallery .ad-slideshow-controls {
      float: right;
    }
      .ad-gallery .ad-slideshow-controls .ad-slideshow-start, .ad-gallery .ad-slideshow-controls .ad-slideshow-stop {
        padding-left: 5px;
        cursor: pointer;
      }
      .ad-gallery .ad-slideshow-controls .ad-slideshow-countdown {
        padding-left: 5px;
        font-size: 0.9em;
      }
    .ad-gallery .ad-slideshow-running .ad-slideshow-start {
      cursor: default;
      font-style: italic;
    }
  .ad-gallery .ad-nav {
    width: 100%;
    position: relative;
  }
    .ad-gallery .ad-forward, .ad-gallery .ad-back {
      position: absolute;
      top: 0;
      height: 100%;
      z-index: 10;
    }
    /* IE 6 doesn't like height: 100% */
    * html .ad-gallery .ad-forward, .ad-gallery .ad-back {
      height: 100px;
    }
    .ad-gallery .ad-back {
      cursor: pointer;
      left: -20px;
      width: 13px;
      display: block;
      background: url(../../images/ad_scroll_back.png) 0px 42px no-repeat;
    }
    .ad-gallery .ad-forward {
      cursor: pointer;
      display: block;
      right: -20px;
      width: 13px;
      background: url(../../images/ad_scroll_forward.png) 0px 42px no-repeat;
    }
    .ad-gallery .ad-nav .ad-thumbs {
      overflow: hidden;
      width: 100%;
    }
      .ad-gallery .ad-thumbs .ad-thumb-list {
        float: left;
        width: 9000px;
        list-style: none;
      }
        .ad-gallery .ad-thumbs li {
          float: left;
          padding-right: 5px;
        }
          .ad-gallery .ad-thumbs li a {
            display: block;
          }
            .ad-gallery .ad-thumbs li a img {
              border: 3px solid #CCC;
              display: block;
            }
            .ad-gallery .ad-thumbs li a.ad-active img {
              border: 3px solid #616161;
            }
/* Can't do display none, since Opera won't load the images then */
.ad-preloads {
  position: absolute;
  left: -9000px;
  top: -9000px;
}




#s3slider {
   width: 1000px; /* important to be same as image width */
   height: 300px; /* important to be same as image height */
   position: relative; /* important */
   overflow: hidden; /* important */

}
#s3slider ul {
   margin:0px;

   padding:0px;
    list-style:none;
}
#s3slider li {

   margin:0px;
   padding:0px;
   list-style:none;
}

#s3sliderContent {
   width: 400px; /* important to be same as image width or wider */
   position: absolute; /* important */
   top: 0; /* important */
   margin-left: 0; /* important */
   height:100%;
   margin:40px;
}

.s3sliderImage {
   float: left; /* important */
   position: relative; /* important */
   display: none; /* important */

}

.s3sliderImage span {
   position: absolute; /* important */
   left: 655px;
	height:100%;
   padding: 10px 13px;
   padding-top:20px;
   line-height:24px;
   width: 320px;
   background:url(../../images/black-bg.png);
   color: #fff;
   display: none; /* important */
   font-size:16px;
   top: 0;

   /*
       if you put
       top: 0; -> the box with text will be shown at the top of the image
       if you put
       bottom: 0; -> the box with text will be shown at the bottom of the image
   */
}

.s3sliderImage span a {

   color: #fff;
}

.s3sliderImage span b {
font-size:26px;
letter-spacing:-1px;
}







.evoslider .slideWrapper
{
	position: relative;
}

.evoslider dl
{
	position :relative ;
    width : 100%;
    list-style :none ;
    overflow: hidden ;
    margin: 0;
    padding: 0;
    border: 0;
}

/*
Title bar.
*/
.evoslider dt
{
	position: absolute;
	top: 0px;
	margin: 0px;
	padding: 0px;
	border: 0px;

}

/* The hover state of the title bar */
.evoslider dt:hover
{
	cursor :pointer ;
}

/* The active state of the title bar */
.evoslider dt.active
{
	cursor :default;
}

.evoslider dt .ieFix
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	border: 0;
}

.evoslider dt .ieFix .box
{
	position: absolute;
	width: 100%;
	height: 100%;
	background-color: Gray;
	opacity: 0;
	filter: alpha(opacity=0);
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
}

/*
The slide content area
*/
.evoslider dd
{
	position: absolute;
	top: 0;
	margin: 0;
	padding: 10px;
	border: 0;
    overflow: hidden;

}



/* Container / frame surrounding the slider */
.evoslider.default
{
	position: relative;
	width :1000px; /* set width via option */
	height :301px; /* set height via option */
    margin: 0 auto;
	padding: 5px;
	background :#4e4e4e;
	overflow : visible ;

	/* shadow */
	-moz-box-shadow: 0 0 10px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.2);
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Color=#4e4e4e, direction=120, strength=5)";
    filter: progid:DXImageTransform.Microsoft.Shadow(Color=#4e4e4e, direction=120, strength=5);

}

.evoslider.default dt
{
	height : 40px;
    color :;
    font-size: 14px;
	font-weight: bold;
	line-height: 15px;
	text-align : left;
	padding-left: 20px;
    border:0px;
    background: ;
    margin-right:0px;
    padding-top:12px;

}

/* The hover state of the title bar */

/* The active state of the title bar */
.evoslider.default dt.active
{
	color :;
	background: #4e4e4e;
	cursor :default;
}

/*
The slide content area

The width and height will automatically be defined by the plugin.
*/
.evoslider.default dd
{
	background: #666;
    paddding:20px;
    padding-top:30px;
}

/* Shopping Cart */

.simpleCart_items table{
			border:1px solid #ccc;
            margin-top:10px;
            margin-bottom:10px;
		}
		.simpleCart_items th{
			color:#333;
			text-align:left;
			padding:10px 30px;
			border-bottom:1px solid #ccc;
			background:; color:;
		}
		.simpleCart_items td{
			padding:10px 30px;
			vertical-align:middle;
			border-bottom:1px solid #ccc;

		}
		.item-image,
		.item-image img{width:72px;}
		.item-name{width:50%;}
		.item-quantity,
		.item-quantity input{
			width:30px;
			text-align:center;
		}
		.item-price,
		.item-subtotal{width:50px;}

.clear {
   clear: both;
}

a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url('http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/16.png');}
a.gflag img {border:0;}
a.gflag:hover {background-image:url('http://joomla-gtranslate.googlecode.com/svn/trunk/mod_gtranslate/tmpl/lang/16a.png');}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}


/* line 88, ../scss/_lw-datepicker.scss */
.lw-dp {
  position: absolute;
  z-index: 100;
  overflow: hidden;
  cursor: default;
  width: 141px;
  background: #f9f9f9;
  border-width: 1px;
  border-style: solid;
  border-color: #e0e0e0;
  padding: 4px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  -ms-border-radius: 4px;
  -khtml-border-radius: 4px;
  border-radius: 4px;
  -moz-box-shadow: rgba(0, 0, 0, 0.3) 0 2px 8px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.3) 0 2px 8px;
  -o-box-shadow: rgba(0, 0, 0, 0.3) 0 2px 8px;
  box-shadow: rgba(0, 0, 0, 0.3) 0 2px 8px;
  -moz-user-select: none;
  -webkit-user-select: none;
  -o-user-select: none;
  user-select: none;
}

.lw-dp-hidden {
  display: none;
  box-shadow: none;
}

.lw-dp-toolbar {
  text-align: center;
  overflow: hidden;
  font-size: 12px;
  line-height: 18px;
  color: #797979;
  padding: 0 0 2.2px;
}

.lw-dp-month {
  display: inline-block;
  width: 103px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* line 127, ../scss/_lw-datepicker.scss */
.lw-dp-previous, .lw-dp-next {
  position: absolute;
  top: 4px;
  width: 19px;
  height: 18px;
  color: #b9b9b9;
  cursor: pointer;
}

/* line 136, ../scss/_lw-datepicker.scss */
.lw-dp-previous:hover, .lw-dp-next:hover {
  color: #797979;
}

/* line 140, ../scss/_lw-datepicker.scss */
.lw-dp-previous:active, .lw-dp-next:active {
  color: #acacac;
}

/* line 144, ../scss/_lw-datepicker.scss */
.lw-dp-previous {
  left: 4px;
}

/* line 148, ../scss/_lw-datepicker.scss */
.lw-dp-next {
  right: 4px;
}

/* line 152, ../scss/_lw-datepicker.scss */
.lw-dp-dows {
  padding: 0;
  margin: 0;
  overflow: hidden;
}

/* line 158, ../scss/_lw-datepicker.scss */
.lw-dp-dows li, .lw-dp-week li {
  display: block;
  float: left;
  padding: 0;
  margin: 0;
  text-align: center;
  color: #797979;
}

/* line 167, ../scss/_lw-datepicker.scss */
.lw-dp-dows li {
  font-size: 7.7px;
  line-height: 7.7px;
  width: 19px;
  height: 8.47px;
  background: #f9f9f9;
  border-width: 0;
  border-left-width: 1px;
  border-style: solid;
  border-color: #f9f9f9;
  padding: 0;
  margin: 0;
}

/* line 181, ../scss/_lw-datepicker.scss */
.lw-dp-week {
  padding: 0;
  margin: 0;
  overflow: hidden;
}

/* line 187, ../scss/_lw-datepicker.scss */
.lw-dp-week li {
  padding: 0;
  margin: 0;
  border-width: 0;
  font-size: 11px;
  width: 19px;
  height: 19px;
  line-height: 19px;
  background: #e0e0e0;
  border-left-width: 1px;
  border-top-width: 1px;
  border-style: solid;
  border-color: #f9f9f9;
  cursor: pointer;
}

/* line 203, ../scss/_lw-datepicker.scss */
.lw-dp-dows-last-column, .lw-dp-week-last-column {
  border-right-width: 1px;
}

/* line 207, ../scss/_lw-datepicker.scss */
.lw-dp-lastweek li {
  padding: 0;
  margin: 0;
  border-bottom-width: 1px;
}

/* line 214, ../scss/_lw-datepicker.scss */
.lw-dp-firstweek li:first-child {
  -moz-border-radius: 4px 0 0 0;
  -webkit-border-radius: 4px 0 0 0;
  -o-border-radius: 4px 0 0 0;
  -ms-border-radius: 4px 0 0 0;
  -khtml-border-radius: 4px 0 0 0;
  border-radius: 4px 0 0 0;
}

/* line 218, ../scss/_lw-datepicker.scss */
.lw-dp-firstweek li:last-child {
  -moz-border-radius: 0 4px 0 0;
  -webkit-border-radius: 0 4px 0 0;
  -o-border-radius: 0 4px 0 0;
  -ms-border-radius: 0 4px 0 0;
  -khtml-border-radius: 0 4px 0 0;
  border-radius: 0 4px 0 0;
}

/* line 222, ../scss/_lw-datepicker.scss */
.lw-dp-lastweek li:first-child {
  -moz-border-radius: 0 0 0 4px;
  -webkit-border-radius: 0 0 0 4px;
  -o-border-radius: 0 0 0 4px;
  -ms-border-radius: 0 0 0 4px;
  -khtml-border-radius: 0 0 0 4px;
  border-radius: 0 0 0 4px;
}

/* line 226, ../scss/_lw-datepicker.scss */
.lw-dp-lastweek li:last-child {
  -moz-border-radius: 0 0 4px 0;
  -webkit-border-radius: 0 0 4px 0;
  -o-border-radius: 0 0 4px 0;
  -ms-border-radius: 0 0 4px 0;
  -khtml-border-radius: 0 0 4px 0;
  border-radius: 0 0 4px 0;
}

/* line 230, ../scss/_lw-datepicker.scss */
.lw-dp-week li:hover {
  background: #f4f4f4;
}

/* line 234, ../scss/_lw-datepicker.scss */
li.lw-dp-weekend {
  background: #d0d0d0;
}

/* line 238, ../scss/_lw-datepicker.scss */
li.lw-dp-today {
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -o-border-radius: 2px;
  -ms-border-radius: 2px;
  -khtml-border-radius: 2px;
  border-radius: 2px;
}

/* line 242, ../scss/_lw-datepicker.scss */
li.lw-dp-today span {
  display: block;
  width: 17px;
  height: 17px;
  line-height: 17px;
  border: 1px solid #acacac;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -o-border-radius: 2px;
  -ms-border-radius: 2px;
  -khtml-border-radius: 2px;
  border-radius: 2px;
}

/* line 251, ../scss/_lw-datepicker.scss */
li.lw-dp-today:hover span {
  color: #797979;
}

/* line 255, ../scss/_lw-datepicker.scss */
li.lw-dp-active-day, li.lw-dp-active-day:hover {
  position: relative;
  color: #f9f9f9;
  background: #797979;
}
/* line 260, ../scss/_lw-datepicker.scss */
li.lw-dp-active-day:nth-child(n), li.lw-dp-active-day:hover:nth-child(n) {
  background: none;
}
/* line 263, ../scss/_lw-datepicker.scss */
li.lw-dp-active-day::before, li.lw-dp-active-day:hover::before {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  content: '';
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -o-border-radius: 2px;
  -ms-border-radius: 2px;
  -khtml-border-radius: 2px;
  border-radius: 2px;
  background: #797979;
  z-index: -1;
}

/* line 276, ../scss/_lw-datepicker.scss */
li.lw-dp-active-day:hover span {
  background: #e0e0e0;
}

/* line 280, ../scss/_lw-datepicker.scss */
li.lw-dp-neighbour-month-day {
  color: #b9b9b9;
}

/* line 284, ../scss/_lw-datepicker.scss */
li.lw-dp-out-of-interval, li.lw-dp-out-of-interval:hover {
  background: #ececec;
  cursor: default;
}




.full_width { width: 1000px; margin: 0 auto; position: relative; padding:0px; }
.full_width h1 { font-size:44px; color:#fff; padding-top:50px; padding-bottom:50px; }


.sl-slider-wrapper {
	width: 800px;
	height: 400px;
	margin: 0 auto;
	position: relative;
	overflow: hidden;
}

.sl-slider {
	position: absolute;
	top: 0;
	left: 0;
}

/* Slide wrapper and slides */

.sl-slide,
.sl-slides-wrapper,
.sl-slide-inner {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
}

.sl-slide {
	z-index: 1;
}

/* The duplicate parts/slices */

.sl-content-slice {
	overflow: hidden;
	position: absolute;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	background: #fff;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-o-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	backface-visibility: hidden;
	opacity : 1;
}

/* Horizontal slice */

.sl-slide-horizontal .sl-content-slice {
	width: 100%;
	height: 50%;
	left: -200px;
	-webkit-transform: translateY(0%) scale(1);
	-moz-transform: translateY(0%) scale(1);
	-o-transform: translateY(0%) scale(1);
	-ms-transform: translateY(0%) scale(1);
	transform: translateY(0%) scale(1);
}

.sl-slide-horizontal .sl-content-slice:first-child {
	top: -200px;
	padding: 200px 200px 0px 200px;
}

.sl-slide-horizontal .sl-content-slice:nth-child(2) {
	top: 50%;
	padding: 0px 200px 200px 200px;
}

/* Vertical slice */

.sl-slide-vertical .sl-content-slice {
	width: 50%;
	height: 100%;
	top: -200px;
	-webkit-transform: translateX(0%) scale(1);
	-moz-transform: translateX(0%) scale(1);
	-o-transform: translateX(0%) scale(1);
	-ms-transform: translateX(0%) scale(1);
	transform: translateX(0%) scale(1);
}

.sl-slide-vertical .sl-content-slice:first-child {
	left: -200px;
	padding: 200px 0px 200px 200px;
}

.sl-slide-vertical .sl-content-slice:nth-child(2) {
	left: 50%;
	padding: 200px 200px 200px 0px;
}

/* Content wrapper */
/* Width and height is set dynamically */
.sl-content-wrapper {
	position: absolute;
}

.sl-content {
	width: 100%;
	height: 100%;
	background: #fff;
}

/* Default styles for background colors */

.demo-2 .sl-slider-wrapper {
	width: 100%;
	height: 350px;
	overflow: hidden;
	position: relative;
}

.demo-2 .sl-slider h2,
.demo-2 .sl-slider blockquote {
	padding: 70px 30px 10px 30px;
	width: 80%;
	max-width: 960px;
	color: #fff;
	margin: 0 auto;
	position: relative;
	z-index: 100;
}

.demo-2 .sl-slider h2 {
	font-size: 70px;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.2);
}

.demo-2 .sl-slider blockquote {
	font-size: 22px;
	padding-top: 10px;
	font-weight: 300;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.2);
}

.demo-2 .sl-slider blockquote cite {
	font-size: 16px;
	font-weight: 700;
	font-style: normal;
	padding-top: 30px;
	display: inline-block;
}
.demo-2 .sl-slider blockquote cite a {
	text-decoration:none;
}

.demo-2 .bg-img {
	padding: 0;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	position: absolute;
	top:0px;
	left: 0;
	width: 100%;
	background-size: 100% !important;
	height:100% !important;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-position: center center;
}

/* Custom navigation arrows */

.nav-arrows span {
	position: absolute;
	z-index: 2000;
	top: 50%;
	width: 40px;
	height: 40px;
	border: 8px solid #ddd;
	border: 8px solid rgba(150,150,150,0.4);
	text-indent: -90000px;
	margin-top: -40px;
	cursor: pointer;

	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}

.nav-arrows span:hover {
	border-color: rgba(150,150,150,0.9);
}

.nav-arrows span.nav-arrow-prev {
	left: 5%;
	border-right: none;
	border-top: none;
}

.nav-arrows span.nav-arrow-next {
	right: 5%;
	border-left: none;
	border-bottom: none;
}

/* Custom background colors for slides in first demo */

/* Animations for content elements */

.container {
max-width: 100%;
margin: 0 auto;
}

.sl-trans-elems .deco{
	-webkit-animation: roll 1s ease-out both, fadeIn 1s ease-out both;
	-moz-animation: roll 1s ease-out both, fadeIn 1s ease-out both;
	-o-animation: roll 1s ease-out both, fadeIn 1s ease-out both;
	-ms-animation: roll 1s ease-out both, fadeIn 1s ease-out both;
	animation: roll 1s ease-out both, fadeIn 1s ease-out both;
}
.sl-trans-elems h2{
	-webkit-animation: moveUp 1s ease-in-out both;
	-moz-animation: moveUp 1s ease-in-out both;
	-o-animation: moveUp 1s ease-in-out both;
	-ms-animation: moveUp 1s ease-in-out both;
	animation: moveUp 1s ease-in-out both;
}
.sl-trans-elems blockquote{
	-webkit-animation: fadeIn 0.5s linear 0.5s both;
	-moz-animation: fadeIn 0.5s linear 0.5s both;
	-o-animation: fadeIn 0.5s linear 0.5s both;
	-ms-animation: fadeIn 0.5s linear 0.5s both;
	animation: fadeIn 0.5s linear 0.5s both;
}
.sl-trans-back-elems .deco{
	-webkit-animation: scaleDown 1s ease-in-out both;
	-moz-animation: scaleDown 1s ease-in-out both;
	-o-animation: scaleDown 1s ease-in-out both;
	-ms-animation: scaleDown 1s ease-in-out both;
	animation: scaleDown 1s ease-in-out both;
}
.sl-trans-back-elems h2{
	-webkit-animation: fadeOut 1s ease-in-out both;
	-moz-animation: fadeOut 1s ease-in-out both;
	-o-animation: fadeOut 1s ease-in-out both;
	-ms-animation: fadeOut 1s ease-in-out both;
	animation: fadeOut 1s ease-in-out both;
}
.sl-trans-back-elems blockquote{
	-webkit-animation: fadeOut 1s linear both;
	-moz-animation: fadeOut 1s linear both;
	-o-animation: fadeOut 1s linear both;
	-ms-animation: fadeOut 1s linear both;
	animation: fadeOut 1s linear both;
}

.slider-wrapper {
margin: 0 auto;
}



.carousel-container {
  position:relative;
  width:1000px;
}
#carousels {
  height:320px;
  width:1000px;
  padding:0 !important;
  background-color:#fff;
  position:relative;
  margin-bottom:0.5em;
  font-size:12px;
  font-family: Arial;
}
.carousel-image {
  border:0;
  display:block;
    -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.carousel-feature {
  position:absolute;
  top:-1000px;
  left:-1000px;
  border:none;
  cursor:pointer;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.carousel-feature .carousel-caption {
  position:absolute;
  bottom:-75px;
  width:100%;
  -moz-border-radius-bottomleft: 15px;
  border-bottom-left-radius: 15px;
  -moz-border-radius-bottomright: 15px;
  border-bottom-right-radius: 15px;
}
.carousel-feature .carousel-caption p {
  color:#8c8c8c !important;
  text-align:center;
  margin:0;
  padding:5px;
  font-weight:bold;
  font-size:12px;
  color:white;
}
.tracker-summation-container {
  position:absolute;
  color:white;
  left:48px;
  top:295px;
  padding:3px;
  margin:3px;
  background-color:#000;
}
.tracker-individual-container {
  position:absolute;
  color:white;
  right:48px;
  top:290px;
  padding:0;
  margin:0;
}
.tracker-individual-container li {
  list-style:none;
}
.tracker-individual-container .tracker-individual-blip {
  margin:0 3px;
  padding:0 3px;
  color:white;
  text-align:center;
  background-color:#DDD;
}
.tracker-individual-container .tracker-individual-blip-selected {
  color:white;
  font-weight:bold;
  background-color:#000;
}
.prev-bar {
width:898px;
height:40px;
margin:30px 50px 5px;
border:1px solid #e2e2e2;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
background: #ececec;
background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ececec));
background: -moz-linear-gradient(top,  #fff,  #ececec);
background: -o-linear-gradient(top,  #fff,  #ececec);
background: linear-gradient(top,  #fff,  #ececec);
}
.prev-bar img {
margin:0;
-moz-border-radius: 0;
-webkit-border-radius: 0;
border-radius: 0;
}
#carousel-left {
  position: absolute;
  bottom: 0;
  left: 51px;
  cursor: pointer;
  height: 40px;
  width: 100px;
  margin-bottom:1px;
  background: #0b0b0b;
  -moz-border-radius-bottomleft: 5px;
  border-bottom-left-radius: 5px;
  -moz-border-radius-topleft: 5px;
  border-top-left-radius: 5px;
}
#carousel-right {
  position: absolute;
  bottom: 0;
  right: 51px;
  cursor: pointer;
  height: 40px;
  width: 100px;
  margin-bottom:1px;
  background: #0b0b0b;
  -moz-border-radius-bottomright: 5px;
  border-bottom-right-radius: 5px;
  -moz-border-radius-topright: 5px;
  border-top-right-radius: 5px;
}


#sliders {
  position: relative;
  overflow: hidden;
  margin: 10px auto 0 auto;
  border-radius: 4px;
}

#sliders ul {
  position: relative;
  margin: 0;
  padding: 0;
  height: 200px;
  list-style: none;
}

#sliders ul li {
  position: relative;
  display: block;
  float: left;
  margin: 0;
  padding: 0;
  width: 200px;
  height: 200px;
}

a.control_prev, a.control_next {
  position: absolute;
  top: 80%;
  z-index: 999;
  display: block;
  padding-left: 4px;
  padding-right: 4px;
  background: #FFFFFF;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  font-size: 16px;
  opacity: 0.9;
  cursor: pointer;
}

a.control_prev:hover, a.control_next:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease;
}

a.control_next {
  right: 0;
}

.star{
    background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAABQCAYAAAAZQFV3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABOFJREFUeNrsmEFoHFUYx9/MdHfTJRKzUhBaFiL1YghZCFQUIV6UQJuLWCgr8eKpIoiFSqsHQYrmYj14KHqxKAl6MbA5eCgKRVAMBhpCwIJQCETRQzTsNtnO7s74+17fbGc3M7OzZhUsHfjzdvd97/++973vff99Y/m+rwb5WL0Idz60h2nckTc8Nw2hncLmAnhtIB7i3VGan8VD8Dhebh+U8FOaX8Bh4EB48R8TQlai+QnkgMTxD/AYpFt9EULk0EyBD8Dn4BPT9TZ4CrwD6Wos4V+XrUdpXzQk4tUEkAFXwNUu+1fAWWO7anADLDLJTkCYpf0K3DQe3Ui5oUI6B8ShlyBstZfMMiXoX4MV8GZKQgnJcXA6nKPtGJoE/gZ8Cy6mIJPwnIJsL3ZTIB2h+U6WANZjyE6Aj8Cz3WT7TooJ7HUwneDdc+BaFFnc0SuCzQTCTWOT+iwfN6cjWJ6clo9NzOS5Bcb6IZTZj5pU+syEYNV8XzA2Y6lOCptyhGbDeDFPnJa6TlGZ5rxJ/nxkSRPCACR5EUyHf4sCNjOgENVn/ecVe+CEy8vLWgJmZ2fd1IRra2vxSbe5eYlmu1gsXo6zmZycTKcpkEn6vC61kM+FQYiUeDdvauP5Ay0ZjyIlgKVv9bVkiBwQVJRX2YwWkKLxrhxB+qYSPaxUKrESANHVrh2PlQAzqSbskAA6UkkA5B0SICvRSzb5ddrMWu4jh8umSLwckLVjSKClWJ6SwsrM76fwLpCAM4x1I9OGjhrN8+AkAyYSyGTDnhEHjCPxeYhBagmIIvtXJOBQkgSY5Z01/76umAy4lbpiG5IqzQuG6Alz9LLmf+IP5hh+AfmxnoSQdUgAg5a6JuuQgMiSFi7fJHkR9JQAbGbA/SoBi4uLWgLK5XIqCdBpkyQBZne3sTm4BGxsbLQlgM+DkYBsNjucyWQKaSXATvCuZFnWHIQqlxMVUOeMx/0RMsgBWgIgcyBVgqwwIwH0JUvAwsJChwQwuOQ4jrJtO/CsfQBc11We56lWqyXfOySALNgJdlmuWzNSB/P5vBKyyJnxMjxBs9mc2tvbEye+DN1l7uYhuaZvAXg1LaQyOOkRL3d3d8XLishHOEd1DMfHx7UEYLjCrCop2aXP2Mht4QxjoyWADi0BxGddZm80GjpWYSL5TfpkYnHAOBK/yxhoCZAl1et1PbharWrUajX9m/SJBESRJUlAr6fvW0CvZyyxOIQPN4kbnv1mlwQERGPhMbHli/Q5Yv5lSdDnSYelrlLWIQGRJS1cvjk1RdBTArCZAferBPT7IkjvcuP7t3pKADaxEpB5+r10FXv3x3kKqqUlgM+DkQB76OFhKzdycAnAo5KynTlraFTZQ4/gqH3ursd9EjLIAVoC7KGCAxFWNqSjWgLoS5aAfS+C7EzJcrLKOjSkrNwoFu0ToPz6n8pv3dFQXjPyRdA9CbDsk/ZDx5SQxWiAsg4X7vE361NedQsn/P0SELwIgmzaHiZMtpMcKK+pWlUuVF6j0v0iSMcw/+QFLQF+y13xbv/GpF4CWUt5tV+FTEsAY6MlgA4tASxlnaUo362yLGLlh2Lo1iCjj4nFAeNI/H9sDHbYxesEfcK//XvSoq9Fkf0/JCDqDWfV3I+TJGCLne19CzAvgtoS8OBF0APC6OdvAQYAj2xzC/IfXBsAAAAASUVORK5CYII=');
    background-position:left -2px;
    display:block;
    width:20px;
    height:16px;
    line-height:16px;
    float:left;
    cursor: pointer;
    zoom:1;
}

.fullStar{ background-position:left -59px; }
.stars{overflow: hidden;}
.tmp_es{background-position:left -21px;}
.tmp_fs{background-position:left -40px;}

#vatExemptForm label input {
width: 96%;
}
#vatExemptForm label {
display: block;
}

#nav > li.firstel:hover ul{
	display:none;
}
.seo-pin {
width: 50px;
height: 100%;
position: absolute;
top: 0;
left: 0;
display: block;
z-index: 10000;
background: url(http://cms.pm/uploads/prem01.seesites.biz_--_232740379.png) center center no-repeat;
background-size: 50%;
background-position: 10px 10px;
}
.seo-pin img {
display: none;
}
.seo-pin ul {
width: 260px;
margin:0;
padding: 20px;
position: absolute;
top: -4000%;
left:0;
background: rgba(0, 0, 0, 0.8);
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}
.seo-pin:hover ul {
top: 50px;
}
.seo-pin ul li {
padding: 10px;
list-style-type: none;
}
.seo-pin ul li a {
text-decoration: none;
}
.seo-pin ul li:hover {
padding-bottom:9px;
border-bottom: 1px solid #f1f1f1;
}


.calendar {
    text-align: center;
}

.calendar header {
    position: relative;
}

.calendar h2 {
    text-transform: uppercase;
}

.calendar thead {
    font-weight: 600;
    text-transform: uppercase;
}

.calendar tbody {
    color: #7c8a95;
}

.calendar tbody td:hover {
    border: 2px solid #c0392b;
    border-radius: 50%;
    position: absolute;
    height: 40px;
    width: 40px;
}

.calendar tbody td.active {
    border: 2px solid #c0392b;
}

.calendar td {
    border: 2px solid transparent;
    border-radius: 50%;
    height: 40px;
    line-height: 40px;
    text-align: center;
    width: 40px;
    padding: 2px;
}

.current-day {
    background: #c0392b;
    color: #f9f9f9;
}

.event {
    cursor: pointer;
    position: relative;
}

.event:after {
    background: #c0392b;
    border-radius: 50%;
    bottom: 8px;
    display: block;
    content: '';
    height: 8px;
    left: 50%;
    margin: -4px 0 0 -4px;
    position: absolute;
    width: 8px;
}

.event.green-event:after {
    background: #009E82;
}

.event.blue-event:after {
    background: #0078AB;
}

.event.current-day:after {
    background: #f9f9f9;
}

.btn-prev,
.btn-next {
	border: 2px solid #cbd1d2;
	border-radius: 50%;
	color: #cbd1d2;
	height: 32px;
	font-size: 22px;
	line-height: 28px;
	margin: -16px;
	position: absolute;
	top: 50%;
	width: 32px;
}

.btn-prev:hover,
.btn-next:hover {
    background: #cbd1d2;
    color: #f9f9f9;
}

.btn-prev {
    left: 30px;
}

.btn-next {
    right: 35px;
}




.day-event {
    background-color: #F2F2F2 ;
    width: 100%;
    padding-top: 20px;
    padding-bottom: 0px;
    margin-bottom: 50px;
    display:none;

}

.day-event p{
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
}

.day-event span{
    font-size: 12px;
}

.day-event button {
    position: relative;
    vertical-align: top;
    width: 100%;
    height: 50px;
    padding: 0;
    font-size: 18px;
    color: white;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
    background: #c0392b;
    border: 0;
    border-bottom: 2px solid #b53224;
    cursor: pointer;
    -webkit-box-shadow: inset 0 -2px #b53224;
    box-shadow: inset 0 -2px #b53224;
}

.check-btn {
    width: 100%;
}


.morebut {
    background-color:#373740;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    font-weight:700;
    color:#FFF;
    font-size:.85em;
    letter-spacing:2px;
    text-decoration:none;
    font-family:'PT Sans', sans-serif;
    text-align:center;
    width:100%;
    height:50px;
    line-height:50px;
    cursor:pointer;
    display:block;
    margin: 0 auto;
    -webkit-transition:background-color 150ms ease-in;
    -moz-transition:background-color 150ms ease-in;
    -ms-transition:background-color 150ms ease-in;
    -o-transition:background-color 150ms ease-in;
    transition:background-color 150ms ease-in;
}

.morebut:hover {
    background-color:#c0392b;
}










.eventDate {
    display: inline-block;
    margin-right: 10px;
    padding: 10px;
    background-color: white;
    margin-top: 15px;
    border-top-right-radius: 15px;
    border: 1px solid;
}
.eventDate:hover {
    cursor: pointer;
}

.eventDate h1 {
    display: inline;
	font-size: 16px !important;
}

.eventDate.active {
    border-bottom: 0px;
    z-index: 2;
    position: relative;
}

.eventTimes {
    width: 50%;
    border: 1px solid black;
    position: relative;
    top: -2px;
    background-color: white;
    display: none;
}

.eventTime a {
float: right;
display: block;
width: 20%;
background-color: #86754E;
/* height: 100%; */
color: white;
text-align: center;
text-decoration: none;
padding: 12px 0;
margin: 2px;
}


.eventTimes.active {
    display: block;
}

.eventTime {
    /* padding: 5px; */
    border-bottom: 1px solid;
    height: 50px;
}

.eventTime h2 {
    float: left;
    display: block;
    padding: 14px 20px !important;
    margin: 0 !important;
}

.clearFloat {
    clear: both;
}

.eventTimes > .eventTime:last-child {
    border-bottom: none;
}

.infoIcon img{
	display: none;
}



.navArrow{
	position: relative;
}
.navArrow:after{
	content: "";
	width: 20px;
	height: 20px;
	background-image: url("http://cms.pm/uploads/files/prem03.seesites.biz_--_568688134.png");
	background-size: cover;
	background-position: center;
	position: absolute;
	right: 0;
	top: 50%;
	transform: translateY(-50%);
}
.navArrow.white:after{
	background-image: url("http://cms.pm/uploads/files/prem03.seesites.biz_--_483704653.png");
}


.
