<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<meta name="description" content="DM Africa">
<meta name="author" content="Gwizzdot">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DM Africa</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/header.css">
<link rel="stylesheet" href="../css/toggle.css">
<link rel="stylesheet" href="../css/tabs.css">
<link rel="stylesheet" href="../css/moreless.css">
<link rel="stylesheet" href="../css/slider.css">
<link rel="stylesheet" href="../css/cards.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body> 
<div class="rot"><img src="../img/auth.png" border="0"></div>
<!-- header --> 
<header class="header"><menu> 
<div class="halfwire fltlt"> 
  <div id="lebs"></div> 
</div> 
<div class="halfwire fltrt txrt"><a class="login wht" href="../login/index.htm">Login <i class="fas fa-user-circle"></i></a></div> 
</menu> 
<div class="headwrap"> <a href="../index.htm" class="logo"><img src="../img/logo.png" border="0"></a> 
  <input class="menu-btn" type="checkbox" id="menu-btn" /> 
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label> 
  <ul class="menu"> 
    <li><a href="../products/index.htm">Products</a></li> 
    <li><a href="../policy/index.htm">My Policy</a></li> 
    <li><a href="../claims/index.htm">Claims</a></li> 
    <li><a href="../careers/index.htm">Careers</a></li> 
    <li><a href="../contact/index.htm">Contact Us</a></li>
    <li class="mob"><a href="#">Get A Quote</a></li>  
    <li class="mob"> <span>Call: <b>032 866 0362</b> or <b>010 109 8080</b></span></li> 
  </ul> 
  <div class="quote"> 
    <p>032 866 0362</p> 
    <p>010 109 8080</p> 
    <button class="quotebtn"> 
    <div class="quote"><a href="#">Get A Quote</a></div> 
    </button> 
  </div> 
</div> 
</header> 
<!-- end header --> 
<!-- banner --> 
<div class="warpper bannertp careers"> 
  <h1>DM AFRICA HOLDINGS <br/><span>Financial Results</span></h1> 
  <button class="bnrbtn">Get A Quote</button> 
</div> 
<!-- end banner --> 
<!-- section --> 
<section> 
<h3> Content </h3>
</section> <footer> 
<!--***** fotter top*****--> 
<div class="foottop"> 
  <div class="footsign"> 
    <div class="nlwrap"> 
      <h4 class="text lft">Try DM Africa Today</h4> 
      <div class="wire"> 
        <div class="halfwire"> 
          <p class="ftsign"><img src="../img/icon-tick.png" border="0">Reliable <img src="../img/icon-tick.png" border="0">Fast <img src="../img/icon-tick.png" border="0">Efficient</p> 
        </div> 
        <div class="halfwire txrt"> 
          <button class="whtbtn">Sign Up For Free</button> 
          <button class="blkbtn">Contact Sales</button> 
        </div> 
      </div> 
    </div> 
  </div> 
  <div class="wire"> 
    <div class="footer-logo"><img src="../img/logo-icon.png" border="0"></div> 
    <div class="footer-social-icon"> <span>Connect With Us</span> <a href="#"><i class="fab fa-twitter twitter-bg"></i></a> <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a> <a href="#"><i class="fab fa-instagram google-bg"></i></a> <a href="#"><i class="fab fa-youtube google-bg"></i></a> <a href="#"><i class="fab fa-linkedin google-bg"></i></a> </div> 
  </div> 
  <ul class="footlinks"> 
    <h5>Insurance Offering</h5> 
    <li><a href="../insurance/car.htm">Car Insurance</a></li> 
    <li><a href="../insurance/home.htm">Home Insurance</a></li> 
    <li><a href="../insurance/life.htm">Life Insurance</a></li> 
    <li><a href="../insurance/business.htm">Business Insurance</a></li> 
  </ul> 
  <ul class="footlinks"> 
    <h5>Help@DMAfrica</h5> 
    <li><a href="../insurance/roadside.htm">Roadside Assistance</a></li> 
    <li><a href="../insurance/home.htm">Home Assistance</a></li> 
  </ul> 
  <ul class="footlinks"> 
    <h5>Why DM Africa</h5> 
    <li><a href="../refer/index.htm">Refer-And-Earn</a></li> 
    <li><a href="../campaign/index.htm">Campaign</a></li> 
    <li><a href="../testimonials/index.htm">Testimonials</a></li> 
  </ul> 
  <ul class="footlinks"> 
    <h5>About Us</h5> 
    <li><a href="../about/index.htm">Who We Are</a></li> 
    <li><a href="../careers/index.htm">Careers</a></li> 
    <li><a href="index.htm">Financial Results</a></li> 
  </ul> 
</div> 
<!--***** end footer top *****--> 
<div class="footbtm"> 
  <div class="halfwire fltlt copy">Copyright &copy; <span id="yads"></span></div> 
  <div class="halfwire fltrt txrt"> 
    <button class="blkbtn"><a href="../terms/index.htm">T's &amp; C's</a></button> 
  </div> 
</div> 
</footer> 
<!-- end section --> 
<script language="javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script> 
<script  src="../js/time.js"></script> 
</body>
</html>
