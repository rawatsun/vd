<?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');

    include_once(SEND_REQUEST_TO_DB_CONTROLLER);
    
?>

 <div class="leftpannel">
 

                <div class="links">

                        <a href="#" class="dashboard-button-class"  ><?php echo DASHBOARD; ?></a>

                    <a href="#" class="button-class homeclick" onclick="home()" ><?php echo  HOME; ?></a> 
                        <a href="#" class="button-class profile" id="button-class" ><?php echo PROFILE; ?></a>
                        <div class="button-class-div">
                          <a href="#" class="button-class1 " id="button-class1" style="background-color:gray; color:white" ><?php echo PROFILE_MANAGEMENT; ?></a>
                    
                        <a href="#" class="button-class1 newprofile" id="button-class1" onclick="display()" ><?php echo VIEW_PROFILE; ?></a>
                        <a href="#" class="button-class1 editprofile" id="button-class1" onclick="vieweditProfile()" ><?php echo EDIT_PROFILE; ?></a>  
                        <a href="#" class="button-class1 changepassword" id="button-class1 " onclick="viewchangePassword()"><?php echo "Change Password"; ?></a>
                   		<a href="#" class="button-class1 deleteprofile" id="button-class1" onclick="viewdeleteProfile()"><?php echo DELETE_PROFILE; ?></a>
                  
                        </div>
<!-- 
                        <a href="#" class="button-class blogs" onclick="display()"><?php echo BLOGS; ?></a> -->
                        <a href="#" class="button-class createpage"   onclick="viewcreatePage()" ><?php echo CREATE_PAGE; ?></a>
                        <a href="#" class="button-class template" onclick="viewTemplate()"><?php echo CHOOSE_TEMPLATE; ?></a>
                        <a href="#" class="button-class comments" onclick="comment()"><?php echo COMMENTS; ?></a><!-- 
                        <a href="#" class="button-class feedbacks" ><?php echo FEEDBACK; ?></a> -->
                        <a href="#" class="button-class stats" onclick="stats()"><?php echo STATS; ?>  </a>
                        <a href="#" class="button-class mail"   onclick="viewmailSettings()"  ><?php echo MAIL_SETTINGS; ?></a>
                        <a href="#" class="button-class sendmail"   onclick="viewsendMail()" ><?php echo SEND_MAIL; ?></a>
                        <a href="#" class="button-class notification" onclick="notifications()" ><?php echo NOTIFICATIONS; ?></a>
                        <a href="#" class="button-class share" ><?php echo SHARE; ?></a>         
                        <a href="#" class="button-class donate" onclick="donate()"><?php echo USE_DONATION_BUTTON; ?></a>


                       </div>
        </div>
