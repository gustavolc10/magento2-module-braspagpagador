<?php
/**
 * @author      Webjump Core Team <dev@webjump.com.br>
 * @copyright   2017 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 */

namespace Webjump\BraspagPagador\Gateway\Transaction\Auth\Resource\Token;

use Webjump\BraspagPagador\Gateway\Transaction\Auth\Config\Config;

class Request extends Config implements RequestInterface
{
    public function isTestEnvironment()
    {
        return $this->getIsTestEnvironment();
    }
}