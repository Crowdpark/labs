<?php

namespace Application\JsonRpc\V1\App
{
    class Server extends \Processus\Abstracts\JsonRpc\AbstractJsonRpcServer
    {

        protected $_config = array(
            'validClasses' => array(
                'User'
            )
        );
    }
}

?>