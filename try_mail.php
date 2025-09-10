<?php
require 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Azhar Abeid',
    'mail_from' => 'azhar.abeid@strathmore.edu',
    'name_to' => 'Devyan Jethwa',
    'mail_to' => 'devyan.jethwa@strathmore.edu',
    'subject' => 'Hello From GYM',
    'body' => 'Get your membership now',
];

$ObjSendMail->Send_Mail($conf, $mailCnt);