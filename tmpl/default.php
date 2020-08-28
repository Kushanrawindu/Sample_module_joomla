<?php
    defined('_JEXEC') or die;
    JFactory::getDocument()->addStylesheet('media/mod_samplemodule/style.css');
?>

<div class="<?php echo $params->get('moduleclass_sfx');?>">
    <div><?php echo $params->get('pretext');?></div>
        
        <!-- <form method="post" name="samplecontact_frm">
            <fieldset>
                <label for="name" style="color:blue;">Name</label>
                <input type="text" id="name" name="name" style="width:95%; height:50px;"/>

                <label for="email" style="color:red;">E-mail</label>
                <input type="email" id="email" name="email" style="width:95%; height:60px;"/>

                <label for="message" style="color:green;">Message</label>
                <textarea cols="30" rows="5" name="message" style="width:95%;"></textarea>

                <button type="submit">Submit</button>
            </fieldset>

            <input type="hidden" name="check" value="1"/>
        </form> -->
        <br/>
        <button class="btn btn1" type="submit">Read More</button>

    <div><?php echo $params->get('posttext');?></div>
</div>