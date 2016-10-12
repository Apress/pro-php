//Create a log
$log = new Zend_Log();

//Filter out noise [optional]
$log->addFilter(new Zend_Log_Filter_Priority(Zend_Log::ERR));

//Create a writer
$logWriter = new Zend_Log_Writer_Stream(APP_PATH . '/application.log');

//Create a formatter [optional]
$logFormat = '%timestamp% %priorityName% %message%' . "\n";
$logWriter->setFormatter(new Zend_Log_Formatter_Simple($logFormat));

//Add the writer to the log
$log->addWriter($logWriter);

//Store it in the registry for easy access
Zend_Registry::set('log', $log);