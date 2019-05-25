<?php

namespace Webjump\BraspagPagador\Gateway\Transaction\Base\Config;

/**
 * Braspag Transaction Base Config
 *
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 */
class Config extends AbstractConfig implements ConfigInterface
{
	public function getMerchantId($scopeId = null, $scopeType = \Magento\Store\Model\ScopeInterface::SCOPE_STORE)
	{
		if (!empty($scopeId)) {
			return $this->getConfig()->getValue(self::CONFIG_XML_BRASPAG_PAGADOR_GLOBAL_MERCHANT_ID, $scopeType, $scopeId);
		}

		return $this->_getConfig(self::CONFIG_XML_BRASPAG_PAGADOR_GLOBAL_MERCHANT_ID);
	}

	public function getMerchantKey($scopeId = null, $scopeType = \Magento\Store\Model\ScopeInterface::SCOPE_STORE)
	{
		if (!empty($scopeId)) {
			return $this->getConfig()->getValue(self::CONFIG_XML_BRASPAG_PAGADOR_GLOBAL_MERCHANT_KEY, $scopeType, $scopeId);
		}

		return $this->_getConfig(self::CONFIG_XML_BRASPAG_PAGADOR_GLOBAL_MERCHANT_KEY);
	}

	public function getAuthenticationBasicToken()
	{
		return $this->_getConfig(self::CONFIG_XML_BRASPAG_PAGADOR_GLOBAL_AUTHENTICATION_TOKEN);
	}

	public function getIsTestEnvironment()
    {
        return $this->_getConfig(self::CONFIG_XML_BRASPAG_PAGADOR_GLOBAL_IS_TEST_ENVIRONMENT);
    }
}
