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

	// Default parameters
	protected $_default = array(
		'PAYMENTACTION' => 'Sale',
	);

	/**
	 * Make an SetExpressCheckout call.
	 *
	 * @param   array   NVP parameters
	 * @return  array   Token
	 */
	public function set(array $params = NULL)
	{
		if ($params === NULL)
		{
			// Use the default parameters
			$params = $this->_default;
		}
		else
		{
			// Add the default parameters
			$params += $this->_default;
		}

		if ( ! isset($params['AMT']))
		{
			throw new Kohana_Exception('You must provide a :param parameter for :method',
				array(':param' => 'AMT', ':method' => __METHOD__));
		}

		return $this->_post('SetExpressCheckout', $params);
	}
	
	/**
	 * Make an GetExpressCheckoutDetails call.
	 * 
	 * @param   array   NVP parameters
	 * @return  array   Express Checkout Details
	 */
	 public function get_details(array $params = NULL)
	 {
	 	if ($params === NULL)
		{
			// Use the default parameters
			$params = $this->_default;
		}
		else
		{
			// Add the default parameters
			$params += $this->_default;
		}

		if ( ! isset($params['TOKEN']))
		{
			throw new Kohana_Exception('You must provide a :param parameter for :method',
				array(':param' => 'TOKEN', ':method' => __METHOD__));
		}
		
		return $this->_post('GetExpressCheckoutDetails', $params);
	 }
	
	/**
	 * Make an DoExpressCheckoutPayment call.
	 * 
	 * @param   array   NVP parameters
	 * @return  array   Transaction success
	 */
	 public function do_payment(array $params = NULL)
	 {
	 	if ($params === NULL)
		{
			// Use the default parameters
			$params = $this->_default;
		}
		else
		{
			// Add the default parameters
			$params += $this->_default;
		}

		foreach (array('AMT', 'TOKEN', 'PAYERID') as $key)
		{
			if ( ! isset($params[$key]))
			{
				throw new Kohana_Exception('You must provide a :param parameter for :method',
					array(':param' => $key, ':method' => __METHOD__));
			}
		}
		
		return $this->_post('DoExpressCheckoutPayment', $params);
	 }

} // End PayPal_ExpressCheckout
