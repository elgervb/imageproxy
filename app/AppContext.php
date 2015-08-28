<?php
namespace app;

use compact\Context;
use compact\IAppContext;
use compact\routing\Router;

use image\Imagehandler;

use controllers\UploadController;

/**
 * The Application Context for elgervanboxtel.nl
 *
 * @author eaboxt
 */
class AppContext implements IAppContext
{

    /**
     * (non-PHPdoc)
     * 
     * @see \compact\IAppContext::routes()
     */
    public function routes(Router $router)
    {
        /**
         * Show the upload form (with optionally uploaded image)
         */
        $router->add("^/upload$", function ()
        {
            return UploadController::create()->form();
        }, 'GET');
        
        /**
         * Handle the upload via POST
         */
        $router->add("^/upload$", function ()
        {
            return UploadController::create()->upload();
        }, 'POST');
        
        
        /**
         * Returns the requested image
         * 
         * Options: rate:5|opacity:10
         */
        $router->add('^/img/([a-z]+)/?(.*)?/(.*\.[a-z]+)', function($filter, $optionsString, $image){
        	$image = new \SplFileInfo(__DIR__ . '/img/' . $image);
        	$controller = new \controllers\FilterController();
        	$method = str_replace(['-','_'], [''], $filter);
        	$options = $this->parseOptions($optionsString);
        	
        	if (method_exists($controller, $method)) {
        	    return $controller->$method($image, $options);
        	}
        	throw new \Exception("Method " . $method . " not found on " . get_class($controller));
        });
    }
    
    /**
     * Parse the options string: rate:5;opacity:10
     * 
     * @param string $optionsString
     * 
     * @return array
     */
    private function parseOptions($optionsString = null){
        if (!$optionsString){
            return [];
        }
        $options = explode(";", $optionsString);
        if (count($options) === 0){
            $options[] = $optionsString;
        }
        
        $result = array();
        foreach ($options as $value){
            $o = explode(':', $value);
            $result[$o[0] ] = $o[1];
        }
        
        return $result;
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \compact\IAppContext::handlers()
     */
    public function handlers(Context $ctx)
    {
        $ctx->addHandler(new Imagehandler());
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \compact\IAppContext::services()
     */
    public function services(Context $ctx)
    {
        //
    }
}
