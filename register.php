<?php

include("includes/header.php");
?>

<meta name="Keywords" content="KEYWORD1, KEYWORD2, KEYWORD3">
<meta name="Description" content="BRIEF DESCRIPTION OF PAGE HERE.">
<title>Register with Bill Priority</title>

<?php
include("includes/nav.php"); 
?>

<div class="uk-container uk-container-center">
 <form action="bp_register.php" class="register" method="POST">
            <p class="regi-header">Register an Account</p>
    
	
	        <fieldset class="row1">
                <legend class="mainheading">Account Details
                </legend>
                <p>
                    <input placeholder="Email" type="email" required  name="email" id=""/><br>
                    
                    <input placeholder="Username" type="text"    name="username" id=""/>
                <br><br>
                    <input placeholder="Password" type="password"   name="u_password" id="pass"/><br>
                    <input placeholder="Repeat Password" type="password"  name="u_p_verify" id=""/>
                    
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend class="mainheading">Personal Details
                </legend>
                <p>
                    <input placeholder="First Name" type="text"  class="long" name="u_fname"/>
                    <br>
                    
                    <input placeholder="Last Name" type="text" class="long" name="u_lname"/>
                </p>
                <p>
                    
                    <input placeholder="Phone Number" type="text"  maxlength="10" name="u_phone"/>
                </p>
                <p>
                    <input placeholder="Address" type="text" class="long" name="u_address"/><br>
                    <input placeholder="Ste/Unit/Apt#" type="text" class="long" name="u_address2"/>
                <br>
                    <input placeholder="City" type="text"  class="long" name="u_city"/>
                    <br>
                    <input placeholder="State" type="text"  class="" name="u_state"/>
                    <br>
                    <input placeholder="Zip Code" type="text"  class="" name="u_zipcode"/>
                </p>
               
                
            </fieldset>
            <!--<fieldset class="row4">
                <legend class="mainheading">Terms and Conditions
                </legend>
                <p class="agreement">
                    <input type="checkbox" required value=""/>
                    <label>* I accept the <a href="rules.html" target="_blank">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>I want to receive personalized offers by your site</label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>Allow partners to send me personalized offers and related services</label>
                </p>
            </fieldset>-->
			
            <center><div><button class="btn" >Register</button></div></center>
			
        </form>
</div>

<?php
include("includes/footer.php");
?>