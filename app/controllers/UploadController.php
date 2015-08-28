<?php
namespace controllers;

use compact\mvvm\impl\ViewModel;
use compact\upload\UploadManager;
use compact\upload\UploadOptions;
use compact\Context;
use compact\upload\UploadException;
class UploadController
{
    public static function create(){
        return new UploadController();
    }
    
    /**
     * Present the upload form to the user
     * @return \compact\mvvm\impl\ViewModel
     */
    public function form(){
        return new ViewModel("upload.html");
    }
    
    /**
     * Upload the file and 
     * @return \compact\mvvm\impl\ViewModel
     */
    public function upload(){
        $options = new UploadOptions();
        $options->setMimetypes(['image/jpg','image/jpeg', 'image/gif','image/png'])
            ->setAllowOverwrite(false)
            ->setMaxFiles(20)
            ->setMaxSize(5000000)
            ->setUploadDir(Context::get()->basePath('app/img/'));
        $upload = new UploadManager($options);
        $view = $this->form();
        
        try {
            $files = $upload->upload();
        
            if ($files->count() > 0) {
                $file = $files->offsetGet(0);
                $view->{'imagename'} = $file->getFilename();
            }
        } catch (UploadException $ex) {
            $view->{'error'} = $ex->getMessage();
        }
        
        return $view;
    }
}