<?php

class EmailTemplateAppController extends AppController {
     
    // Email constant which we can use into email template to replace with dynamic values. or 
    var $emailconstants = array(
        '[USERNAME]' => '',
        '[PASSWORD]' => '',
        '[FIRSTNAME]' => '',
        '[LASTNAME]' => '',
        '[COLLEGENAME]' => '',
        '[WEBURL]' => '',
        '[APPNAME]' => '',
        '[ADMINMESSAGE]'=>'',
        '[REGARDTEXT]'=>'',
        '[ACTIVATIONLINK]' => '',
        '[VERIFICATIONLINK]' => '',
        '[RESETPASSWORDLINK]' => '',
        '[TODAYDATE]' => '',
        '[CONTACTDATA]' => '',
        '[CONTACTNAME]' => '',
        '[ADMINGREETING]' => ''
    );
}

?>
