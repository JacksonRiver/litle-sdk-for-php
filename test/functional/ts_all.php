<?php
/*
* Copyright (c) 2011 Litle & Co.
*
* Permission is hereby granted, free of charge, to any person
* obtaining a copy of this software and associated documentation
* files (the "Software"), to deal in the Software without
* restriction, including without limitation the rights to use,
* copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the
* Software is furnished to do so, subject to the following
* conditions:
*
* The above copyright notice and this permission notice shall be
* included in all copies or substantial portions of the Software.
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND
* EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
* OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
* NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
* HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
* WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
* FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
* OTHER DEALINGS IN THE SOFTWARE.
*/

require_once realpath(dirname(__FILE__)) . '/../../lib/LitleOnline.php';

require realpath(dirname(__FILE__)) . '/test_XmlFields.php';
require realpath(dirname(__FILE__)) .  '/test_sale.php';
require realpath(dirname(__FILE__)) .  '/test_auth.php';
require realpath(dirname(__FILE__)) .  '/test_authReversal.php';
require realpath(dirname(__FILE__)) .  '/test_credit.php';
require realpath(dirname(__FILE__)) .  '/test_token.php';
require realpath(dirname(__FILE__)) .  '/test_forceCapture.php';
require realpath(dirname(__FILE__)) .  '/test_capture.php';
require realpath(dirname(__FILE__)) .  '/test_captureGivenAuth.php';
require realpath(dirname(__FILE__)) .  '/test_void.php';
require realpath(dirname(__FILE__)) .  '/test_echeckRedeposit.php';
require realpath(dirname(__FILE__)) .  '/test_echeckSale.php';
require realpath(dirname(__FILE__)) .  '/test_echeckCredit.php';
require realpath(dirname(__FILE__)) .  '/test_echeckVerification.php';
require realpath(dirname(__FILE__)) .  '/test_echeckVoid.php';
require realpath(dirname(__FILE__)) .  '/test_treeResponse.php';
require realpath(dirname(__FILE__)) .  '/test_updateCardValidationNumOnToken.php';
require realpath(dirname(__FILE__)) .  '/test_batchRequest.php';
require realpath(dirname(__FILE__)) .  '/test_litleRequest.php';
require realpath(dirname(__FILE__)) .  '/test_litleResponseProcessor.php';
require realpath(dirname(__FILE__)) .  '/test_cancelSubscription.php';
require realpath(dirname(__FILE__)) .  '/test_updateSubscription.php';
require realpath(dirname(__FILE__)) .  '/test_createPlan.php';
require realpath(dirname(__FILE__)) .  '/test_updatePlan.php';
require realpath(dirname(__FILE__)) .  '/test_activate.php';
require realpath(dirname(__FILE__)) .  '/test_deactivate.php';
require realpath(dirname(__FILE__)) .  '/test_load.php';
require realpath(dirname(__FILE__)) .  '/test_unload.php';
require realpath(dirname(__FILE__)) .  '/test_balanceInquiry.php';
require realpath(dirname(__FILE__)) .  '/test_depositReversal.php';
require realpath(dirname(__FILE__)) .  '/test_refundReversal.php';
require realpath(dirname(__FILE__)) .  '/test_activateReversal.php';
require realpath(dirname(__FILE__)) .  '/test_deactivateReversal.php';
require realpath(dirname(__FILE__)) .  '/test_loadReversal.php';
require realpath(dirname(__FILE__)) .  '/test_unloadReversal.php';
class FunctionalTests
{
	public static function suite()
	{
		$suite = new PHPUnit_Framework_TestSuite('PHPUnit');
		$suite->addTestSuite('auth_FunctionalTest');
		$suite->addTestSuite('authReversal_FunctionalTest');
		$suite->addTestSuite('capture_FunctionalTest');
		$suite->addTestSuite('captureGivenAuth_FunctionalTest');
		$suite->addTestSuite('credit_FunctionalTest');
		$suite->addTestSuite('echeckCredit_FunctionalTest');
		$suite->addTestSuite('echeckRedeopist_FunctionalTest');
		$suite->addTestSuite('echeckSale_FunctionalTest');
		$suite->addTestSuite('echeckVerification_FunctionalTest');
		$suite->addTestSuite('echeckVoid_FunctionalTest');
		$suite->addTestSuite('forceCapture_FunctionalTest');
		$suite->addTestSuite('sale_FunctionalTest');
		$suite->addTestSuite('token_FunctionalTest');
		$suite->addTestSuite('void_FunctionalTest');
		$suite->addTestSuite('XmlFields_FunctionalTest');
		$suite->addTestSuite('treeResponse_FunctionalTest');
		$suite->addTestSuite('updateCardValidationNumOnToken_FunctionalTest');
		$suite->addTestSuite('batchRequest_FunctionalTest');
		$suite->addTestSuite('litleRequest_FunctionalTest');
		$suite->addTestSuite('litleResponseProcessor_FunctionalTest');
		$suite->addTestSuite('updateSubscription_FunctionalTest');
		$suite->addTestSuite('cancelSubscription_FunctionalTest');
		$suite->addTestSuite('createPlan_FunctionalTest');
		$suite->addTestSuite('updatePlan_FunctionalTest');
        $suite->addTestSuite('activate_FunctionalTest');
        $suite->addTestSuite('deactivate_FunctionalTest');
        $suite->addTestSuite('load_FunctionalTest');
        $suite->addTestSuite('unload_FunctionalTest');
        $suite->addTestSuite('balanceInquiry_FunctionalTest');
        $suite->addTestSuite('depositReversal_FunctionalTest');
        $suite->addTestSuite('refundReversal_FunctionalTest');
        $suite->addTestSuite('activateReversal_FunctionalTest');
        $suite->addTestSuite('deactivateReversal_FunctionalTest');
        $suite->addTestSuite('loadReversal_FunctionalTest');
        $suite->addTestSuite('unloadReversal_FunctionalTest');
		return $suite;
	}
}
