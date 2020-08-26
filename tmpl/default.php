<?php
    defined('_JEXEC') or die;
?>

<div class="<?php echo $params->get('moduleclass_sfx');?>">
    <div><?php echo $params->get('pretext');?></div>
        
        <form method="post" name="samplecontact_frm">
            <fieldset>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" style="width:95%;"/>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" style="width:95%;"/>

                <label for="message">Message</label>
                <textarea cols="30" rows="5" name="message" style="width:95%;"></textarea>

                <button type="submit">Submit</button>
            </fieldset>

            <input type="hidden" name="check" value="1"/>
        </form>

    <div><?php echo $params->get('posttext');?></div>
</div>