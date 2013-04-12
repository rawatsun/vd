<?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');

?>
 <script src="../jquery-lib/jquery-1.8.3.js" type="text/javascript"></script>
   <link href="../ud-css/reset.css" rel="stylesheet" />  
    <link href="../css/reset.css" rel="stylesheet" />  
 <script src="../js/JScript.js" type="text/javascript"></script>
<dt><?php echo LOGIN; ?></dt>

   <dd class="login1">
        <div class=" val">
            <label class="label1"><?php echo USER_NAME; ?><input id="admin_username" name="user_name" type="text" /></label>

                    
                    <label class="label1"><?php echo PASSWORD; ?><input class="loginc" id="admin_password" name="password" type="password"   />
                      </label>
                      <span class ="log_data"> </span>

                    <label class="label1" style="color:red"></label>
                                
              <input id="b1"  type="button" value="Login"  onclick="checkAdminlogin()" />
                <span><label> <p id="p1"><p></label>


                </span>
            </div>

            
                <div class="para"></div>
        </dd>
