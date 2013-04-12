 <?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

 <dt><?php echo REGISTER; ?></dt>

        <dd class="register1">
            <div class=" val">
                <label class="label1"><?php echo USER_NAME; ?><input id="reg_user_name" type=
                "text" /></label>
                <span class ="user"> </span> 
                <br>
                <label class="label1"><?php echo PASSWORD; ?><input id=
                "reg_password" type="password" onkeyup="check()" class="loginc"/>
                <div class="strength">
               <img src="images/strength.png" class="imgps">

    </div>
       </label> 
       <span class ="reg_pass"> </span> <br>




                <label class="label1"><?php echo CONFIRM_PASSWORD; ?><input id="reg_confirm_password" type="password"
			class="loginc" /></label>
            <span class ="reg_conpass"> </span><br>

                <label class="label1"><?php echo FIRST_NAME; ?> <input id="reg_first_name" type=
                "text" /></label> 
                <span class ="reg_first"> </span><br>

                <label class="label1"><?php echo LAST_NAME; ?><input id="reg_last_name" type="text" /></label> 
                <span class ="reg_last"> </span><br>

                <label class="label1"><?php echo EMAIL; ?><input id="reg_email" type="text" /></label> 
                <span class ="reg_mail"> </span><br>

                 <label class="label1"><?php echo ADDRESS; ?><input id="reg_address" type="text" /></label>
                  <span class ="reg_addr"> </span><br>

                <label class="label1"><?php echo PHONE_NO; ?><input id="reg_phone" type="text" maxlength=10/></label>
                 <span class ="reg_num"> </span><br>

      <script>
$(function() {
    $( "#reg_dob" ).datepicker({
         dateFormat: 'mm/dd/yy',
           defaultDate: '-30yr',
           yearRange: 'c-25:c+15',
         changeMonth: true,
         changeYear: true,
         yearRange: '-110:-18',
             onClose: function(){
                 var today = new Date(), // today date object
                 birthday_val = $("#reg_dob").val().split('/'), // input value
                
                 birthday = new Date(birthday_val[2],birthday_val[0]-1,birthday_val[1]), // birthday date object
                 // calculate age
                 age = (today.getMonth() == birthday.getMonth() && today.getDate() > birthday.getDate()) ?
                       today.getFullYear() - birthday.getFullYear() : (today.getMonth() > birthday.getMonth()) ?
                             today.getFullYear() - birthday.getFullYear() :
                                   today.getFullYear() - birthday.getFullYear()-1;
       // alert(age);
                             $('#reg_age').val(age);
                   }
         });

            
     
         

     $( "#reg_dob,#reg_age" ).attr("readonly", "readonly");

    
     
});
</script>






               <label class="label1"><?php echo DOB; ?><input id="reg_dob"name="dob" type="text" /></label>
                <span class ="reg_date"> </span><br>

                <label class="label1"><?php echo AGE; ?><input id="reg_age" name="age" type="text" /></label>
                <span class ="reg_a"> </span><br>
                
                <label class="label1"><?php echo GENDER; ?>



            <select class="sel" id="reg_gender">
                    <option>
                       <?php echo MALE; ?>
                    </option>

                    <option>
                      <?php echo FEMALE; ?>
                    </option>
             </select>





            </label> <span class =""> </span><br>

                <label class="label1"><?php echo COUNTRY; ?>&nbsp;&nbsp;<select class="sel" id="reg_country">
                    <option>
                        India


                    

                    </option>

                    <option>
                        usa
                    </option>

                    <option>
                        uk
                    </option>

                    <option>
                        france
                    </option>
                </select></label> 



                 
                

                <div class="captcha" >

                <br><br><br>
<span style="float:right"> <img src="images/cap.php" >


                </span>
<span>
    <input type="text" name="t1" id="t1" style="width:60%; height:40px">


                </span>
   

 </div>
 <br><br><br>
 <input id="b1" onclick="register()" type=
                "button" value="<?php echo SAVE; ?>" />
                
<br>

 <span><label> <p id="p2"><p></label>


                </span>
            </div>

            
                <div class="para"></div>
        </dd>