<?php
/**
 * Implements a basic Controller
 * @package some config
 * http://doc.silverstripe.org/framework/en/3.1/topics/controller
 */
class ShariffController extends Controller {
	
	public static $url_topic = 'shariffbackend';
	
	public static $url_segment = 'shariffbackend';
	
	private static $allowed_actions = array( 
            'index'
	);
	
	public static $template = 'BlankPage';
	
	/**
	 * Template thats used to render the pages.
	 *
	 * @var string
	 */
	public static $template_main = 'Page';

	/**
	 * Returns a link to this controller.  Overload with your own Link rules if they exist.
	 */
	public function Link() {
		return self::$url_segment .'/';
	}
	
	/**
	 * Initialise the controller
	 */
	public function init() {
        parent::init();
            
        if(!isset($_GET['pageUrl'])) return $this->httpError(404, 'missing url parameter');
 	}
	
	public function index(){    
        $backend = new Heise\Shariff\Backend(json_decode(SHARIFF_OPTIONS, true));
            
        return $this->jsonResponse($backend->get($_GET['pageUrl']));
	}
        
    /**
     * @param type $array
     * @return json object
     */
    public function jsonResponse($array){
        Controller::curr()->response->addHeader("Content-Type", "application/json");
            
        return json_encode($array);
    }
}
