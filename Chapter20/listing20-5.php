$client = new SoapClient(
            'service.wsdl',
            array(
             'login'=>'username',
             'password'=>'secret'
            )
          );