<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="viewport-fit=cover, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />

    <script src="https://cdn.tailwindcss.com"></script>
    <title data-translate="title">Login</title>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top text-center" >
        <a class="navbar-brand text-center text-3xl font-bold underline text-clifford" href="#" style="float: unset; margin-top: 5px;"  data-translate="title">Login</a>
        <select onchange="selectLang(this,'login')" id="language-chooser">
            <option value="en">English</option>
            <option value="hi">हिंदी</option>
            <option value="pa">ਪੰਜਾਬੀ</option>
        </select>
    </nav>
  <div class="container " style="margin-top:10px ">
    <div class="row">
        <div class="col-md-12">
        <center><img src="img/logo.png" style="margin-bottom:10px; height: 75px;"/></center>
            <div class="form-group">
                <label for="exampleInputEmail1" data-translate="email-username">Email address / Phone number</label>
                <input type="text" class="form-control" id="loginEmail" aria-describedby="emailHelp"  data-translate-placeholder="email-username-placeholder" placeholder="Enter email or phone number">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" data-translate="password">Password</label>
                <input type="password" class="form-control" id="loginPassword" data-translate-placeholder="password-placeholder" placeholder="Password">
            </div>

           <div class="text-center"> <button type="submit" class="btn btn-primary center-class" id="login_btn" data-translate="submit-button">Login</button>
           </div>
            <div class="text-center" style="margin-top:14px ">
               <a href="signup.html" data-translate="signup-label">Don't have account?</a>
               &nbsp;&nbsp; | &nbsp;&nbsp; 
               <a href="#" data-translate="forgot-password-label">Forgot Password?</a>
           </div>

       </form>
   </div>
</div>
</div>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/translate.js"></script>
    <script>
        let selectedLang = localStorage.getItem("lng") ? localStorage.getItem("lng") : 'en';
        getLanguage('login',selectedLang)
    </script>

</body>

</html>
