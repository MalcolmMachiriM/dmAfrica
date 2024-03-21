<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="UTF-8">
    <meta name="description" content="DM Africa">
    <meta name="author" content="Gwizzdot">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM Africa</title>
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="stylesheet" href="{{ asset('css/form.css')}}">
    <link rel="stylesheet" href="{{ asset('css/loader.css')}}">
    <script src="{{ asset('js/loader.js') }}"></script>

   
  </head>
<body>

<div id="loading-overlay">
    <div class="loader"></div>
</div>

 <form action="{{ route('combined-business-insurance.store') }}" method="post" name="combined" id="combined" onsubmit="MM_validateForm('email','','RisEmail','people','','NisNum'); submitForm(event);"> 

  <h1>Quote For Combined Business</h1>


<h2>Please Provide Details For The Policy Holder</h2>
<h3>Savings Are Just A Click Quote Away.</h3>
@if (session('success'))
            <div class="alert alert-success"  style="color: yellow;">{{ session('success') }}</div>
        @endif
        <form action="{{ route('combined-business-insurance.store') }}" method="POST">
    @csrf
  <!--   1  -->
  <div class="form form5">
    <input type="text" name="full_name" id="full_name" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">Full Name</span>
    </label>
  </div> 
  


  <!--   2  -->
 <div class="form form5"> 
   
    <select id="gender" name="gender">
                    <option value="Male" id="gender" selected>Male</option>
                    <option value="Female" id="gender">Female</option>
                </select> <label for="name" class="label-name">
      <span class="content-name select">Gender</span>
    </label>
  </div> 

  <!--   3  -->
 <div class="form form5"> 
    <select id="marital_status" name="marital_status">
                  <option value="Single" selected>Single</option>
                  <option value="Married">Married</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Widowed">Widowed</option>
                </select> <label for="name" class="label-name">
      <span class="content-name select">Marital Status</span>
    </label>
  </div>

  <!--   4  -->
   <div class="form form5"> 
    <select id="title" name="title">
                    <option value="Miss">Miss</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Mr" selected>Mr</option>
                    <option value="Dr">Dr</option>
                </select> <label for="name" class="label-name">
      <span class="content-name select">Title</span>
    </label>
  </div>


     <!--   5 -->
   <div class="form form5">
    <input type="text" name="rsa_id" id="rsa_id" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">RSA ID Number</span>
    </label>
  </div> 

<!--   6 -->
 <div class="form form4">
    <input type="text" name="country" id="country" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">Issuing Country</span>
    </label>
  </div>

<!--   7 -->
 <div class="form form4">
    <input type="text" name="code" id="code" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">Postal Code</span>
    </label>
  </div>

<!--   8 -->
 <div class="form form4">
    <input type="email" name="email" id="email" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">Email Address</span>
    </label>
  </div>

<!--   9 -->
 <div class="form form4">
    <input type="number" name="contact" id="contact" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">Contact Number</span>
    </label>
  </div>

<p>DISCLAIMER: DM Africa is a registered financial services provider. This message, including attachements, are intended for the named addressee only and may contain confidential or proprietary information. Access to its contents and any review, retransmission, dissemination, copy, disclosure of all or any part of this message and its contents, or taking, or omitting to take, any other action in reliance upon the content by anyone other than the intended recipient is unauthorized. If you are not the intended recipient, notify the sender immediately and delete the message from your computer systems. Views and opinions expressed in this message are those of the sender and do not necessarily represent the views and opinions of Dm Africa nor do they constitute any commitment by or obligation on agreements concluded by means of electronic communincations by any of its employees or intermediaries, unless so permitted in writing by a duly authorised representative Dm Africa cannot guarantee that this message is secure or free of errors or viruses, nor does it accept any responsibility for the contents of this message, its late delivery, non-delivery or incorrect delivery for whatever reason or its effect on.</p>


              <div class="wire"><input type="submit" name="button" id="button" class="sendbtn" value="Submit">

               <button type="button">Let Us Help You</button></div>



</form>
  











</div>
  
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

</body>
</html>
