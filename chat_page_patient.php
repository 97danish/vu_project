<?php session_start(); if(empty($_SESSION['patient']) && empty($_SESSION['doctor'])){
  header('location: index.php');
} ?>
<?php require 'header.php' ?>
<link rel="stylesheet" type="text/css" href="css/chat.css">
<?php require 'connection.php';
echo mysqli_error($con);
if(!empty($_SESSION['patient'])){
    
    if(!empty($_GET['doc_id'])){
        $id = $_GET['doc_id'];    
        $result = mysqli_query($con, "SELECT * from doctor where doc_id = '$id'");    
    }
    
    $chat_result = mysqli_query($con, "SELECT * from chat where chat_pat_id = ".$_SESSION['patient']['pat_id']." and chat_doc_id = '$id'") or die(mysqli_error($con));

    
}
$user = mysqli_fetch_assoc($result);

 ?>
<br><br>
<div class="container">

<div class="messaging">
    <div class="row chat-head">
        <div class="col-md-1">
            <img src="<?php echo "img/doctor/".$user['doc_image'];?>" width="100px">
        </div>
        <div class="col-md-10">
            <h1><?php echo $user['doc_firstname']; ?></h1>            
        </div>
    </div>
      <div class="inbox_msg">
        <div class="mesgs">
          <div class="msg_history">
            <?php 
            while($chat_row = mysqli_fetch_assoc($chat_result))
            { 
                if($chat_row['chat_reciever'] == 'patient' ){
                    ?>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="<?php echo "img/doctor/".$user['doc_image']; ?>" alt=""> </div>

                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p><?php echo $chat_row['chat_message'] ?></p>
                          <span class="time_date"> <?php echo date('h:i a', strtotime($chat_row['chat_time']))." | ".date("F", strtotime($chat_row['chat_time']))." ".date('d', strtotime($chat_row['chat_time'])); ?></span></div>
                      </div>
                    </div>
        <?php   }
              
                  if($chat_row['chat_reciever'] == 'doctor' ){
                    ?>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p><?php echo $chat_row['chat_message'] ?></p>
                        <span class="time_date"><?php echo date('h:i a', strtotime($chat_row['chat_time']))." | ".date("F", strtotime($chat_row['chat_time']))." ".date('d', strtotime($chat_row['chat_time'])); ?></span> </div>
                    </div>
        <?php     }
              ?>

      <?php } ?>
          </div>
          <div class="type_msg">
            <form method="post">
            <div class="input_msg_write">
              <input type="text" name="message" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="submit" name="send"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
            </form>
          </div>
        </div>
      </div>
      
      
    </div></div>


<?php require 'footer.php' ?>

<?php if(isset($_POST['send'])){
    $message = mysqli_real_escape_string($con, $_POST['message']);

        mysqli_query($con, "INSERT into chat(chat_sender, chat_reciever, chat_message, chat_doc_id, chat_pat_id) VALUES('patient', 'doctor', '$message', '$id', ".$_SESSION['patient']['pat_id'].")") or die(mysqli_error($con));    
    
    echo "<meta http-equiv='refresh' content='0'>";

    
} ?>