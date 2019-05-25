<?php

namespace Webjump\BraspagPagador\Gateway\Transaction\DebitCard\Config;

/**
 * 
 *
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 */
interface  ConfigInterface
{
    const CONFIG_XML_BRASPAG_PAGADOR_DEBIT_REDIRECT_AFTER_PLACE_ORDER = 'payment/braspag_pagador_debitcard/redirect_after_place_order';
    const CONFIG_XML_BRASPAG_PAGADOR_DEBIT_3DS_20_AUTHENTICATE = 'payment/braspag_pagador_debitcard/authenticate_3ds_20';
    const CONFIG_XML_BRASPAG_PAGADOR_DEBIT_3DS_20_AUTHORIZE_ON_FAILURE = 'payment/braspag_pagador_debitcard/authenticate_3ds_20_authorize_on_failure';
    const CONFIG_XML_BRASPAG_PAGADOR_DEBIT_3DS_20_AUTHORIZE_ON_UNENROLLED = 'payment/braspag_pagador_debitcard/authenticate_3ds_20_authorize_on_unenrolled';
    const CONFIG_XML_BRASPAG_PAGADOR_DEBIT_3DS_20_MDD1 = 'payment/braspag_pagador_debitcard/authenticate_3ds_20_mdd1';
    const CONFIG_XML_BRASPAG_PAGADOR_DEBIT_3DS_20_MDD2 = 'payment/braspag_pagador_debitcard/authenticate_3ds_20_mdd2';
    const CONFIG_XML_BRASPAG_PAGADOR_DEBIT_3DS_20_MDD3 = 'payment/braspag_pagador_debitcard/authenticate_3ds_20_mdd3';
    const CONFIG_XML_BRASPAG_PAGADOR_DEBIT_3DS_20_MDD4 = 'payment/braspag_pagador_debitcard/authenticate_3ds_20_mdd4';
    const CONFIG_XML_BRASPAG_PAGADOR_DEBIT_3DS_20_MDD5 = 'payment/braspag_pagador_debitcard/authenticate_3ds_20_mdd5';

    public function getMerchantId();

	public function getMerchantKey();

	public function getPaymentReturnUrl();

	public function isSuperDebitoActive();

	public function getIsTestEnvironment();

    public function getRedirectAfterPlaceOrder();

    public function isAuthenticate3Ds20Active();

    public function isAuthenticate3Ds20AuthorizeOnFailure();

    public function isAuthenticate3Ds20AuthorizeOnUnenrolled();

    public function getAuthenticate3Ds20Mdd1();

    public function getAuthenticate3Ds20Mdd2();

    public function getAuthenticate3Ds20Mdd3();

    public function getAuthenticate3Ds20Mdd4();

    public function getAuthenticate3Ds20Mdd5();
}