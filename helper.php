<?php
    defined('_JEXEC') or die;

    class modSampleModuleHelper
    {
        function sendMail($params)
        {
            $input = new JInput;
            $name = $input->get('name', null);
            $email = $input->get('email', null);
            $message = $input->get('message', null);
            if($name == null || $email == null || $message == null)
                return false;

            $message = "Name : ".$name."<br/>Email : ".$email."<br/>".$message;

            $mailer = & JFactory::getMailer();
            $mailer->setSender('kushanravindu96@gmail.com');
            $mailer->addRecipient('kushanrawindu@gmail.com');
            $mailer->setSubject('Mail from sample contact form');
            $mailer->setBody($message);
            $send = & $mailer->Send();
            if($send != true)
            {
                echo "Error sending email.." . $send->message;
                return false;
            }
            else
            {
                echo "Mail sent..";
                return true;
            }
        }
    }

?>