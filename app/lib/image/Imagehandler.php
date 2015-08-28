<?php
namespace image;

use compact\handler\IHander;
use imagemanipulation\ImageBuilder;

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