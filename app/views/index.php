<!doctype html>
<html lang="en" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Scraper</title>
    <link rel="stylesheet" href="//rafled.com/down-box.css">
<link rel="stylesheet" href="//rafled.com/s-s-ver1.css?v=2.2">
<link rel="stylesheet" href="//rafled.com/search.css?v=9" async>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" async>
    <link rel="stylesheet" href="/static/dist/app.css">
    <link rel="stylesheet" href="//static.rafled.com/rafled.com.css">
    <script async src="//rafled.com/js/nav.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://rafled.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://rafled.com/search/?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
<!--animate on scroll-->
<script>
  AOS.init();
</script>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","/search/search.php?q="+str,true);
  xmlhttp.send();
}
</script>
<!----Mobile Menu Selector---->
<script src="//rafled.com/js/touch.js"></script>
    <base href="/">
    <noscript>
  <p style="color:red; font-size: larger; background-color: white; position: fixed;"><b>Most of the functionality of this website will be broken if you do not turn on JavaScript. Please turn on JavaScript to view this web page.</b> </p>
</noscript>
</head>
<body>
    <!-----Desktop----->
            <div class="topnav" id="top-nav">
            <a href="/" class="topnav rep"><div class="logo">
  <svg class="text" viewBox="0 0 425 62">
    <text
          fill="none"
          stroke="#525252"
          transform="translate(2 55)"
          stroke-width="2"
          font-size="55px"
          font-family="Poppins"
          font-weight="0,400;1,200"
          class="is-active">
      <tspan>rafled.com</tspan>
    </text>
  </svg>
</div></a>
<!---mobile menu init-->
<a href="#" class="icon" onclick="openNav()">
<img src="/ass/menu-24px.svg" alt="menu" height="25px" width="22px" style="padding:0;">
</a>
<!-- Toggle -->
<a href="#cant-find-that-item" class="sb sb-open">
  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="icon3">
    <rect class="fill-none" width="32" height="32"/>
    <path class="fill-currentcolor" d="M29.82861,24.17139,25.56519,19.908A13.0381,13.0381,0,1,0,19.908,25.56525l4.26343,4.26337a4.00026,4.00026,0,0,0,5.65723-5.65723ZM5,14a9,9,0,1,1,9,9A9.00984,9.00984,0,0,1,5,14Z"/>
  </svg>
</a>
                <a href="https://rafled.com/downloaders/">Downloaders</a>
                <a href="https://rafled.com/gfd/">DownGit</a>
                <a href="https://ftp.app.rafled.com/">FTP Client</a>
                <a href="https://rafled.com/ip/">IP tools</a>

              </div>
                          <!--Mobile menu (in close) --->
            <div id="menu-opn" class="nav-overlay">
                <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="nav-overlay-content"><b>
                  <a href="https://rafled.com/downloaders/">Downloaders</a>
                  <a href="https://ftp.app.rafled.com/">FTP Client</a>
                  <a href="https://rafled.com/ip/">IP Tools</a>
                  <a href="https://rafled.com/text-converters/">Text Converters</a></b>
                </div>
              </div>
              <script>
  AOS.init();
</script>
<script type="text/javascript">
$(document).on("click", "a", function () {


    var newUrl = $(this).attr("href");

    if (!newUrl || newUrl[0] === "#") {
        location.hash = newUrl;
        return;
    }
    $("html").fadeOut(function () {
        location = newUrl;
    });
    return false;
});
</script>

<div class="container" id="content">

    <div class="row" ng-show="$root.hasErrors" ng-cloak>
        <div class="col col-md-8 col-md-offset-2">
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert" ng-click="$root.hasErrors = false">×</button>
                Oops, Something went wrong. Try again later.
            </div>
        </div>
    </div>

    <div class="height-100-percents" ng-view></div>
</div>
<div class="hidden" id="ajax-loader">
    <div class="overlay"></div>
    <i></i>
</div>
<script src="/static/dist/app.js"></script>
</body>
</html>
