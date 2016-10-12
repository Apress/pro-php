<?php

//The user's name is stored in the certificate's Common Name field.
echo 'Hello, '. $_SERVER['SSL_CLIENT_S_DN_CN'];
