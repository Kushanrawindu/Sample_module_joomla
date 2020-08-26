<?php
    defined('_JEXEC') or die;

    $input = new JInput;
    $check = $input->get('check', null);
    if($check==null)
    {
        $layout = $params->get('layout', 'default');
        require JModuleHelper::getLayoutPath('mod_samplemodule', $layout);
    }
    else
    {

        require_once (dirname(__FILE__).'/helper.php');
        $status = modSampleModuleHelper::sendMail($params);

        if($status == true)
        {
            $layout = $params->get('layout', 'form_success');
            require JModuleHelper::getLayoutPath('mod_samplemodule', $layout);
        }
        else
        {
            echo "Some fields are missing or invalid..";
        }
    }
?>
