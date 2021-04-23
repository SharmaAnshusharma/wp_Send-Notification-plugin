<?php
   global $wpdb;
   $all_users = $wpdb->get_results($wpdb->prepare("SELECT * FROM `wp_users`"));
$message="";
if(isset($_POST['submit']))
{
   global $wpdb;
   foreach ($_POST['users'] as $user)
   {
      $query = $wpdb->insert('wp_notification',array(
      'User'=>$user,
      'Title'=>$_POST['title'],
      'Message'=>$_POST['message']
      ));     
   }  
   if($query == true)
   {
      $message ="Inserted Successfully!";
   }
   else
   {
    $message ="Failed To Insert!";
   }

}

   
?>
<section class="page-section">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="page-title">
               Send Notification
            </div>
         </div>
      </div>
   </div>
</section>
<section class="certificate">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="certificate-form">
               <form class="form-horizontal" method="post">
                  <?php 
                     if(isset($message) && $message != ''){
                  ?>
			<p class="alert alert-success"><?php echo $message; ?></p>
                  <?php
		}
                  ?>
                  
                  <div class="form-group">
                     <label class="control-label col-sm-2">User:</label>
                     <div class="col-sm-10">
                        <select id="select_box" name="users[]" class="form-control" multiple>
                        <!-- <option>Select User</option> -->
                        <option value="select_all">-- select all --</option>
                     <?php
                     foreach ($all_users as $key => $value) {
                        ?>
                        
                        <option value="<?php echo $value->user_login; ?>"><?php echo $value->user_login; ?></option>
                        <?php
                        }

                      ?> 
                     </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-2">Title:</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Enter Notification Title">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-2">Message:</label>
                     <div class="col-sm-10">
                        <textarea class="form-control" name="message" placeholder="Enter Notification Message" ></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit"class="btn btn-info custom-btn" value="Save" name="submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<script type="text/javascript">
$('#select_box').change(function() {
        $('#select_box option').prop('selected', true);
        $('#select_box option[value="select_all"]').prop('selected', false);

    });
   
</script>