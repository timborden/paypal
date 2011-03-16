<?php defined('SYSPATH') or die('No direct script access.');
/**
 * PayPal ExpressCheckout integration.
 *
 * @see  https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_ECGettingStarted
 *
 * @package    Kohana
 * @author     Kohana Team
 * @copyright  (c) 2009 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
class PayPal_ExpressCheckout extends PayPal {

	/**
	 * SetExpressCheckout method with a Sale.
	 *
	 * @param   array   NVP parameters
	 * required parameters: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_r_SetExpressCheckout
	 * @return  array   Token
	 */
	public function set(array $params = NULL)
	{
		// Add the PaymentAction parameter
		$params['PAYMENTACTION'] = 'Sale';
		
		return $this->_post('SetExpressCheckout', $params);
	}
	
	/**
	 * GetExpressCheckoutDetails method with a Sale.
	 * 
	 * @param   array   NVP parameters
	 * required parameters: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_r_GetExpressCheckoutDetails
	 * @return  array   Express Checkout Details
	 */
	 public function get_details(array $params = NULL)
	 {
		// Add the PaymentAction parameter
		$params['PAYMENTACTION'] = 'Sale';
		
		return $this->_post('GetExpressCheckoutDetails', $params);
	 }
	
	/**
	 * Make an DoExpressCheckoutPayment call.
	 * 
	 * @param   array   NVP parameters
	 * required parameters: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_r_DoExpressCheckoutPayment
	 * @return  array   Transaction success
	 */
	 public function do_payment(array $params = NULL)
	 {
		// Add the PaymentAction parameter
		$params['PAYMENTACTION'] = 'Sale';
		
		return $this->_post('DoExpressCheckoutPayment', $params);
	 }

} // End PayPal_ExpressCheckout
