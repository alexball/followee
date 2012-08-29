<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * FollowEE Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Alex Ball
 * @link		http://alexball.tv
 */

$plugin_info = array(
	'pi_name'		=> 'FollowEE',
	'pi_version'	=> '0.0.1',
	'pi_author'		=> 'Alex Ball',
	'pi_author_url'	=> 'http://alexball.tv',
	'pi_description'=> 'This is my first attempt at a plugin. We\'ll see how it goes. Wish me luck!',
	'pi_usage'		=> Followee::usage()
);


class Followee {

	public $return_data = "";
	public $html 		= "";
	public $TMPL 		= NULL;

	// Default values for Follow button
	public $username 	= 'AlexBall12';
	public $class 		= 'twitter-follow-button';
	// public $show_count 	= FALSE;
	// public $data_lang 	= 'en';
	public $js 			= '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
    
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();

		// Alter the variables above with whatever is in the params
		// For this first iteration, only trying with username
		$this->username = ($this->EE->TMPL->fetch_param('username')) ? $this->EE->TMPL->fetch_param('username') : $this->username;

		// Following along with Focus Lab's examples, I'll start building the links here
		$this->html .= '<a href="https://twitter.com/';

		// Add in the follow username (from params)
		$this->html .= $this->username . '"';

		// Add the follow class
		$this->html .= ' class="' . $this->class . '"';

		// Add the data-show-count - not customizable now
		$this->html .= ' data-show-count="false" data-lang="en">';

		// The body of the follow button and closing the anchor tag
		$this->html .= 'Follow @' . $this->username . '</a>';

		// Finally attach the javascript reference
		$this->html .= $this->js;

		// Done building, now assign to the return data for use in EE template
		return $this->return_data = $this->html;
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
?>

Future.
<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.followee.php */
/* Location: /system/expressionengine/third_party/followee/pi.followee.php */