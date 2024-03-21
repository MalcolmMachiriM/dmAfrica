<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="UTF-8">
    <meta name="description" content="DM Africa">
    <meta name="author" content="Gwizzdot">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM Africa</title>

    <link rel="stylesheet" href="{{ asset('css/form.css')}}">
    <link rel="stylesheet" href="{{ asset('css/loader.css')}}">
    <script src="{{ asset('js/loader.js') }}"></script>

   
  </head>
<body>

<div id="loading-overlay">
    <div class="loader"></div>
</div>





 <form action="{{ route('medical-insurance.store') }}" method="post" name="medical" id="medical" onsubmit="MM_validateForm('email','','RisEmail','people','','NisNum'); submitForm(event);"> 

  <h1>Quote For Medical Insurance</h1>


<h2>Please Provide Details For The Policy Holder</h2>
<h3>Savings Are Just A Click Quote Away.</h3>

@if (session('success'))
            <div class="alert alert-success"  style="color: yellow;">{{ session('success') }}</div>
        @endif
@csrf
  <!--   1  -->
  <div class="form form3">
    <input type="text" name="firstname" id="firstname" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">First Name</span>
    </label>
  </div> 
  


  <!--   2  -->
  <div class="form form3">
    <input type="text" name="lastname" id="lastname" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">Last Name</span>
    </label>
  </div> 

  <!--   3  -->
 <div class="form form3">
    <input type="number" name="phone" id="phone" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">Contact Number</span>
    </label>
  </div>

  <!--   4  -->
 <div class="form form3">
    <input type="email" name="email" id="email" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">Email Address</span>
    </label>
  </div>


     <!--   5 -->
   <div class="form form3">
    <input type="text" name="rsaid" id="rsaid" value="" required autocomplete="off">
    <label for="name" class="label-name">
      <span class="content-name">RSA ID Number</span>
    </label>
  </div> 

<!--   6 -->
  <div class="form form3"> 
    <select id="income" name="income">
                    <option value="Less than R5 000">Less than R5 000</option>
  <option value="R5 000 - R10 000">R5 000 - R10 000</option>
  <option value="R10 000 - R15 000">R10 000 - R15 000</option>
  <option value="R15 000 - R20 000">R15 000 - R20 000</option>
  <option value="More than R20 000">More than R20 000</option>
                </select> <label for="name" class="label-name">
      <span class="content-name select">What is your monthly income (before deductions)?</span>
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
