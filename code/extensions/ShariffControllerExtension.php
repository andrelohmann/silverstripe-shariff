<?php
/**
 * Created by Nivanka Fonseka (nivanka@silverstripers.com).
 * Date: 10/24/14
 * Time: 7:00 PM
 * 
 * This script minifies the HTML which silverstripe outputs, if you want to format your HTMLs 
 * this can be a handy snippet of code to use.
 * 
 * To get it to work, download this file to your project folder and add this configs to the config.yml 
 * 
 * Controller:
 *  extensions:
 *   - SS_MinifiedResponseExtension
 * 
 * This uses 
 * https://code.google.com/p/minify/source/browse/min/lib/Minify/HTML.php
 * and changed in a way to work with SilverStripe 
 * 
 * 
 */

class ShariffControllerExtension extends Extension {

	public function onAfterInit(){
		Requirements::css('shariff/css/shariff.min.css');
		Requirements::javascript('shariff/javascript/shariff.min.js');
	}

}