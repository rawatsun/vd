<?php
  class loadindexfileController{
   function __construct() {

   }
   function mainViewOfPage(){
      loadView('main.php');    
   }

   function loadDasboard(){
      loadDasboardtemplate('user-dashboard.php');
         }

          function loadAdminDasboard(){
      loadDasboardtemplate('admin-dashboard.php');
         }

   
   public function home() {   	
   	loadView("./ud-model/ud-home.php");

   }
      public function stats() {      
      loadView("./ud-model/stats.php");

   }

   public function display() {
   	loadView("./ud-model/profile.php");
   
   }
   public function vieweditProfile() {
   	loadView("./ud-edit/editprofile.php");
   	 
   }
 public function viewsendMail() {
      loadView("./ud-edit/sendmail.php");
       
   }
    public function viewmailSettings() {
      loadView("./ud-edit/mailsettings.php");
       
   }
 public function sendMail() {
      loadView("./ud-model/sendmail.php");
       
   }
    public function mailSettings() {
      loadView("./ud-model/mailsettings.php");
       
   }


   public function editProfile() {
   	loadView("./ud-model/editprofile.php");
   	 
   } public function viewchangePassword() {
   	loadView("./ud-edit/changepassword.php");
   	 
   }
   public function changePassword() {
   	loadView("./ud-model/changepw.php");
   	 
   }

   public function viewdeleteProfile() {
   	loadView("./ud-edit/deleteprofile.php");
   	 
   }

     public function viewcreatePage() {
      loadView("./ud-edit/createpage.php");
       
   }
   public function createPage() {
      loadView("./ud-model/createprocess.php");
       
   }

  public function createblogPage() {
      loadView("./ud-model/createblog.php");
       
   }

     public function notifications() {
      loadView("./ud-model/notification.php");
       
   }
   public function  readnotification() {
      loadView("./ud-model/notification2.php");
       
   }
 public function  insertComment() {
      loadView("./ud-model/insertcomment.php");
       
   }
public function  loadComment() {
  
      loadView("./ud-model/selectcomments.php");
       
   }


     public function viewTemplate() {
      loadView("./ud-edit/choosetemplate.php");
       
   }
   public function chooseTemplate() {
      loadView("./ud-model/choosetemplate.php");
       
   }
public function  deletePage() {
  
      loadView("./ud-model/deletepage.php");
       
   }

public function  deleteBlog() {
  
      loadView("./ud-model/deleteblog.php");
       
   }

public function  deleteAccount() {
  
      loadView("./ud-model/deleteaccount.php");
       
   }

public function  donate(){
   
   loadView("./ud-model/donation.php");    
   
   }

public function  comment(){
   
   loadView("./ud-model/comment.php");    
   
   }

public function  viewuser(){
   
   loadView("./admin-model/viewusers.php");    
   
   }

   public function  viewadminPassword(){
   
   loadView("./admin-html/admin_password.php");    
   
   }

   public function  adminChangePassword(){
   
   loadView("./admin-model/adminchangepwd.php");    
   
   }

   public function  viewadminMailSettings(){
   
   loadView("./admin-html/adminmail.php");    
   
   }

   public function  adminMailSettings(){
   
   loadView("./admin-model/adminmail.php");    
   
   }

 public function  viewadminSendMail(){
   
   loadView("./admin-html/adminsend.php");    
   
   }

   public function  adminSendMail(){
   
   loadView("./admin-model/adminsend.php");    
   
   }

public function  viewAdminDelete(){
   
   loadView("./admin-html/admindelete.php");    
   
   }

public function  viewAdminStats(){
   
   loadView("./admin-model/adminstats.php");    
   
   }

   public function  selectAdminDelete(){
   
   loadView("./admin-model/adminstats.php");    
   
   }

}
?>
