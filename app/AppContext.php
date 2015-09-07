<?php
namespace app;

use compact\Context;
use compact\IAppContext;
use compact\routing\Router;

use image\Imagehandler;

use controllers\UploadController;
use imagemanipulation\ImageBuilder;

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
            
            ini_set('max_execution_time', 180);
            
        	$image = Context::get()->basePath('/img/original/' . $image);
        	$controller = new \controllers\FilterController();
        	$method = str_replace(['-','_'], [''], $filter);
        	$options = $this->parseOptions($optionsString);
        	
        	if (method_exists($controller, $method)) {
        	    // apply filters
        	    $builder = $controller->$method($image, $options);
        	    
        	    // cache image
        	    $this->cacheImage($builder, $filter, $optionsString, $image);
        	    
        	    return $builder;
        	}
        	throw new \Exception("Method " . $method . " not found on " . get_class($controller));
        });
    }
    
    /**
     * Store the image in the static cache
     * 
     * @param ImageBuilder $builder
     * @param string $filter
     * @param string $options
     * @param \SplFileInfo $image
     */
    private function cacheImage(ImageBuilder $builder, $filter, $options, \SplFileInfo $image){
        $cache = Context::get()->basePath('img');
        
        $filterDir = $cache . DIRECTORY_SEPARATOR . $filter;
        if ( ! is_dir($filterDir)){
            mkdir($filterDir, 0777);
        }
        
        if ($options){
            $filterOptionsDir = $filterDir . DIRECTORY_SEPARATOR . $options;
            if ( ! is_dir($filterOptionsDir)){
                mkdir($filterOptionsDir, 0777);
            }
        } else {
            $filterOptionsDir = $filterDir;
        }
        
        $builder->save(new \SplFileInfo($filterOptionsDir . DIRECTORY_SEPARATOR . $image->getFilename()));
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
            $o = explode('=', $value);
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
