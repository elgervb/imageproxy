<?php
namespace controllers;

use \SplFileInfo;

use imagemanipulation\thumbnail\Thumbalizer;
use imagemanipulation\thumbnail\pixelstrategy\IPixelStrategy;

use imagemanipulation\thumbnail\pixelstrategy\CenteredPixelStrategy;
use options\Options;
use imagemanipulation\ImageImageResource;
use imagemanipulation\ImageBuilder;

class ThumbnailController
{
    public function centered(SplFileInfo $image, array $options = null){
    
        // TODO cast to int workaround for https://github.com/elgervb/imagemanipulation/issues/25
        $width = (int) Options::option($options, 'width', '250');
        $height = (int) Options::option($options, 'height', '250');
    
        return ImageBuilder::create($image)->thumbCentered($width, $height);
    }
    
    public function max(SplFileInfo $image, array $options = null){
    
        // TODO cast to int workaround for https://github.com/elgervb/imagemanipulation/issues/25
        $width = (int) Options::option($options, 'width', '250');
        $height = (int) Options::option($options, 'height', '250');
    
        return ImageBuilder::create($image)->thumbMax($width, $height);
    }
    
    public function percentage(SplFileInfo $image, array $options = null){
    
        // TODO cast to int workaround for https://github.com/elgervb/imagemanipulation/issues/25
        $percentage = (int) Options::option($options, 'percentage', '50');
    
        return ImageBuilder::create($image)->thumbPercentage($percentage);
    }
    
    public function square(SplFileInfo $image, array $options = null){
    
        // TODO cast to int workaround for https://github.com/elgervb/imagemanipulation/issues/25
        $width = (int) Options::option($options, 'width', '250');
    
        return ImageBuilder::create($image)->thumbSquare($width);
    }
}