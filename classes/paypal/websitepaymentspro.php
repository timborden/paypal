<?php defined('SYSPATH') or die('No direct script access.');
/**
 * PayPal DirectPayment integration.
 *
 * @see  https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_WPDPGettingStarted
 *
 * @package    Kohana
 * @author     Kohana Team
 * @copyright  (c) 2009 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
class PayPal_WebsitePaymentsPro extends PayPal {

	/**
	 * DoDirectPayment method with a Sale action.
	 *
	 * @param  array   NVP parameters
	 * required parameters: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_r_DoDirectPayment
	 * @return  array   NVP response
	 */
	public function Sale(array $params = NULL)
	{
		// Add the PaymentAction parameter
		$params['PAYMENTACTION'] = 'Sale';

		return $this->_post('DoDirectPayment', $params);
	}

	/**
	 * DoDirectPayment method with a Authorization action.
	 *
	 * @param  array   NVP parameters
	 * required parameters: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_r_DoDirectPayment
	 * @return  array   NVP response
	 */
	public function Authorization(array $params = NULL)
	{
		// Add the PaymentAction parameter
		$params['PAYMENTACTION'] = 'Authorization';

		return $this->_post('DoDirectPayment', $params);
	}

	/**
	 * DoCapture method.
	 *
	 * @param  array   NVP parameters
	 * required parameters: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_r_DoCapture
	 * @return  array   NVP response
	 */
	public function Capture(array $params = NULL)
	{
		return $this->_post('DoCapture', $params);
	}

	/**
	 * DoReauthorization method.
	 *
	 * @param  array   NVP parameters
	 * required parameters: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_r_DoReauthorization
	 * @return  array   NVP response
	 */
	public function Reauthorization(array $params = NULL)
	{
		return $this->_post('DoReauthorization', $params);
	}

	/**
	 * DoVoid method.
	 *
	 * @param  array   NVP parameters
	 * required parameters: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_r_DoVoid
	 * @return  array   NVP response
	 */
	public function Void(array $params = NULL)
	{
		return $this->_post('DoVoid', $params);
	}

	/**
	 * RefundTransaction method.
	 *
	 * @param  array   NVP parameters
	 * required parameters: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_r_RefundTransaction
	 * @return  array   NVP response
	 */
	public function Refund(array $params = NULL)
	{
		return $this->_post('RefundTransaction', $params);
	}

} // End PayPal_DirectPayment

