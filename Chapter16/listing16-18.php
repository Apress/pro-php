$mail = new Zend_Mail();
$mail->addTo('user@example.com', 'Firstname Lastname');
$mail->setFrom('noreply@example.com', 'example.com messaging system');
$mail->setSubject('The subject');
$mail->setBodyText('The content');
$mail->send();