<?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<dt><?php echo CONTACT_US; ?></dt>

        <dd class="contact1">
            <div class=" val">
                <label class="label1"><?php echo NAME; ?><input id="contact_name" class="contact_name" type="text" /></label> 
                <span class ="con_first"> </span><br><br>

                <label class="label1"><?php echo EMAIL; ?><input id="contact_email" type="text" /></label> 
                <span class ="con_email"> </span><br><br>

                <label class="label1"><?php echo QUERY_SUGGESTION; ?><textarea rows="4" cols="50" class="textarea" id="contact_suggestion"></textarea></label><br><br><br>
                <span class ="con_data"> </span><br>

                <input id="b1" onclick="contactUs()" type="button" value=
                "send" />

            </div>


                <div class="para"></div>
        </dd>
