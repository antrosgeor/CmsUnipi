<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- jQuery CSS -->
<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui-custom.css"> -->

<!-- FontAwesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>

		
<!--css-->
<style>
	
html,body {
  	min-height: 100%;
}
#wrap{
    min-height: 100%;
}

/* Sticky footer styles */

html {
  position: relative;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 50px;
  /*background-color: #f5f5f5;*/
  color: #777;
  border-top: 1px solid #e5e5e5;
  padding-top: 50px;
}

/*debug console and button*/
#btn-debug{
  position: absolute;
}
#console-debug{
  position: absolute;
  top: 50px;
  left: 0px;
  width: 30%;
  height: 700px;
  overflow-y:scroll; 
  background-color: #FFFFFF;
  box-shadow: 2px 2px 5px #CCCCCC;
}


/*
 * Blog posts
 */

.blog-post {
  margin-bottom: 60px;
}
.blog-post-title {
  margin-bottom: 5px;
  font-size: 40px;
}
.blog-post-meta {
  margin-bottom: 20px;
  color: #999;
}
 

/* Pagination */
.pager {
  margin-bottom: 60px;
  text-align: left;
}
.pager > li > a {
  width: 140px;
  padding: 10px 20px;
  text-align: center;
  border-radius: 30px;
}


/*
 * Override Bootstrap's default container.
 */

@media (min-width: 1200px) {
  .container {
    width: 970px;
  }
}


h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6 {
  margin-top: 0;
}

/*
 * Blog name and description
 */

.blog-header {
  padding-top: 20px;
  padding-bottom: 20px;
}
.blog-title {
  margin-top: 30px;
  margin-bottom: 0;
  font-size: 60px;
  font-weight: normal;
}
.blog-description {
  font-size: 20px;
  color: #999;
}

/*
 * Main column and sidebar layout
 */

.blog-main {
  /*font-size: 18px;*/
  line-height: 1.5;
}


/* Sidebar modules for boxing content */
.sidebar-module {
  padding: 15px;
  margin: 0 -15px 15px;
}
.sidebar-module-inset {
  padding: 15px;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.sidebar-module-inset p:last-child,
.sidebar-module-inset ul:last-child,
.sidebar-module-inset ol:last-child {
  margin-bottom: 0;
}
  

/* Intro Header */
.intro-header {
  background-color: #808080;
  background: no-repeat center center;
  background-attachment: scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
  margin-bottom: 50px;
}
.intro-header .site-heading,
.intro-header .post-heading,
.intro-header .page-heading {
  padding: 100px 0 50px;
  color: white;
}
@media only screen and (min-width: 768px) {
  .intro-header .site-heading,
  .intro-header .post-heading,
  .intro-header .page-heading {
    padding: 150px 0;
  }
}
.intro-header .site-heading,
.intro-header .page-heading {
  text-align: center;
}
.intro-header .site-heading h1,
.intro-header .page-heading h1 {
  margin-top: 0;
  font-size: 50px;
}
.intro-header .site-heading .subheading,
.intro-header .page-heading .subheading {
  font-size: 24px;
  line-height: 1.1;
  display: block;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-weight: 300;
  margin: 10px 0 0;
}


.intro-header .site-heading h1, .intro-header .page-heading h1 {
    font-size: 80px;
    font-weight: 800;
}

.intro-header .site-heading .subheading, .intro-header .page-heading .subheading {
    font-size: 24px;
    line-height: 1.1;
    display: block;
    font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
    font-weight: 300;
    margin: 10px 0 0;
  }

.bg {
background: url('images/home-bg-3.jpg') no-repeat center center ;
position: fixed;
width: 100%;
height: 500px; /*same height as jumbotron */
top:0;
left:0;
z-index: -1;
background-size:cover;

}

.jumbotron {
height: 500px;
color: white;
text-shadow: #444 0 1px 1px;
background:transparent;
}


.navbar-custom {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 3;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}
.navbar-custom .navbar-brand {
  font-weight: 800;
}
.navbar-custom .nav li a {
  text-transform: uppercase;
  font-size: 12px;
  font-weight: 800;
  letter-spacing: 1px;
}
@media only screen and (min-width: 768px) {
  .navbar-custom {
    background: transparent;
    border-bottom: 1px solid transparent;
  }
  .navbar-custom .navbar-brand {
    color: white;
    padding: 20px;
  }
  .navbar-custom .navbar-brand:hover,
  .navbar-custom .navbar-brand:focus {
    color: rgba(255, 255, 255, 0.8);
  }
  .navbar-custom .nav li a {
    color: white;
    padding: 20px;
  }
  .navbar-custom .nav li a:hover,
  .navbar-custom .nav li a:focus {
    color: rgba(255, 255, 255, 0.8);
  }
}
@media only screen and (min-width: 1170px) {
  .navbar-custom {
    -webkit-transition: background-color 0.3s;
    -moz-transition: background-color 0.3s;
    transition: background-color 0.3s;
    /* Force Hardware Acceleration in WebKit */
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }
  .navbar-custom.is-fixed {
    /* when the user scrolls down, we hide the header right above the viewport */
    position: fixed;
    top: -61px;
    background-color: rgba(255, 255, 255, 0.9);
    border-bottom: 1px solid #f2f2f2;
    -webkit-transition: -webkit-transform 0.3s;
    -moz-transition: -moz-transform 0.3s;
    transition: transform 0.3s;
  }
  .navbar-custom.is-fixed .navbar-brand {
    color: #404040;
  }
  .navbar-custom.is-fixed .navbar-brand:hover,
  .navbar-custom.is-fixed .navbar-brand:focus {
    color: #0085a1;
  }
  .navbar-custom.is-fixed .nav li a {
    color: #404040;
  }
  .navbar-custom.is-fixed .nav li a:hover,
  .navbar-custom.is-fixed .nav li a:focus {
    color: #0085a1;
  }
  .navbar-custom.is-visible {
    /* if the user changes the scrolling direction, we show the header */
    -webkit-transform: translate3d(0, 100%, 0);
    -moz-transform: translate3d(0, 100%, 0);
    -ms-transform: translate3d(0, 100%, 0);
    -o-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}



p {
    line-height: 1.5;
    margin: 30px 0;
    font-family: Lora,'Times New Roman',serif;
    font-size: 18px;
    color: #404040;
}

h1 {
    font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
}




footer .list-inline {
  margin: 0;
  padding: 0;
}
footer .copyright {
  font-size: 14px;
  text-align: center;
  margin-bottom: 0;
}
</style>	