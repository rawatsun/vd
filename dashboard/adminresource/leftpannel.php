 <?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');

   include_once(ADMIN_REQUEST_TO_DB_CONTROLLER);
?>
 <div class="leftpannel">

                <div class="links">

                        <a href="#" class="dashboard-button-class"  ><?php echo DASHBOARD; ?></a>
                        <a href="#" class="button-class deleteuser" onclick="viewAdminDelete()"><?php echo DELETE_USER; ?></a>
                        <a href="#" class="button-class adminpassword" onclick="viewadminPassword()"><?php echo CHANGE_PASSWORD1; ?></a>
                        <a href="#" class="button-class adminstats" onclick="viewAdminStats()"><?php echo STATS; ?></a>
                        <a href="#" class="button-class adminmail" onclick="viewadminMailSettings()"><?php echo MAIL_SETTINGS; ?></a>
                        <a href="#" class="button-class adminsend" onclick="viewadminSendMail()"><?php echo SEND_MAIL; ?></a>
                </div>
</div>
