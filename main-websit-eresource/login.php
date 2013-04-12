<?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<dt><?php echo LOGIN; ?></dt>

   <dd class="login1">
        <div class=" val">
            <label class="label1"><?php echo USER_NAME; ?><input id="user_name" name="user_name" type="text" /></label>

                    
                    <label class="label1"><?php echo PASSWORD; ?><input class="loginc" id="password" name="password" type="password"   />
                      </label>
                      <span class ="log_data"> </span>

                    <label class="label1" style="color:red"></label>
                                
              <input id="b1"  type="button" value=
                "Login"  onclick="checklogin()" />
                <span><label> <p id="p1"><p></label>


                </span>
            </div>

            
                <div class="para"></div>
        </dd>
