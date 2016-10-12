$contextDetails = array(
  'ssl'=> array(
    'local_cert'=>'/var/www/ssl/services.pem',
    'cafile'=>'/usr/lib/ssl/misc/demoCA/cacert.pem',
    'verify_peer'=>true,
    'allow_self_signed'=>false,
    'CN_match'=>'localhost',
    'passphrase'=>'password'
  )
);

$streamContext = stream_context_create($contextDetails);

$client = new SoapClient(
                'PhoneCompany.wsdl',
                array(
                  'classmap'=>$classmap,
                  'stream_context'=>$streamContext,
                )
              );