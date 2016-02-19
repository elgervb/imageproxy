<?php
namespace image\handler;

use imagemanipulation\ImageBuilder;
use handler\IHander;

class Imagehandler implements IHander
{

    public function handle($object)
    {
        /* @var $object ImageBuilder */
        $object->render(80);
    }

    public function accept($object)
    {
       return $object instanceof ImageBuilder;
    }
}