<?php
$MSG_KEY='msg';
$MSG_TYPE_KEY='msg_type';
$MSG_TYPE_ERROR='msg_type_error';
$MSG_TYPE_SUCCESS='msg_type_success';

function printMsgIfExists(){
    $MSG_KEY='msg';
    $MSG_TYPE_KEY='msg_type';
    $MSG_TYPE_ERROR='msg_type_error';
    $MSG_TYPE_SUCCESS='msg_type_success';
    
    if(isset($_GET[$MSG_KEY])){
        ?>
            <div class="alert alert-<?= $_GET[$MSG_TYPE_KEY]==$MSG_TYPE_ERROR?'danger':'success' ?>">
                <?= $_GET[$MSG_KEY]?>
            </div>
            
        <?php
    }
}
function redirectWithMsg($url,$msgType,$msgText){
    
$MSG_KEY='msg';
$MSG_TYPE_KEY='msg_type';
$MSG_TYPE_ERROR='msg_type_error';
$MSG_TYPE_SUCCESS='msg_type_success';

    header("location:$url?$MSG_KEY=$msgText&$MSG_TYPE_KEY=$msgType");
    exit();
}

