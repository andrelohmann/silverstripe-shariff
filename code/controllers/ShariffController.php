<?php
/**
 * Implements a basic Controller
 * @package some config
 * http://doc.silverstripe.org/framework/en/3.1/topics/controller
 */
class ShariffController extends Controller {
	
	public static $url_topic = 'shariff';
	
	public static $url_segment = 'shariff';
	
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
	 * Initialise the controller
	 */
	public function init() {
            parent::init();
            
            if(!isser($_GET['url'])) return $this->httpError(404, 'missing url parameter');
 	}
        
        public function index(){
            
            $backend = new Heise\Shariff\Backend(SHARIFF_OPTIONS);
            
            return $this->jsonResponse($backend->get($_GET['url']));
	}
}
