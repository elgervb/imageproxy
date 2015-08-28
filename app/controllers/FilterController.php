<?php
namespace controllers;

use imagemanipulation\ImageBuilder;
use imagemanipulation\filter\ImageFilterFlip;

class FilterController {

    public function blocks(\SplFileInfo $img, array $options = null){
        $number = $this->option($options, 'number', 100);
        $size = $this->option($options, 'size', 25);
        $color = $this->option($options, 'color', 'ffffff');
        
        return ImageBuilder::create($img)->randomBlocks($number, $size, $color);
    }
    
    public function brightness(\SplFileInfo $img, array $options = null){
        $rate = $this->option($options, 'rate', 20);
        return ImageBuilder::create($img)->brightness($rate);
    }
    
    public function comic(\SplFileInfo $img, array $options){
        $opacity = $this->option($options, 'opacity', 50);
        return ImageBuilder::create($img)->comic($opacity);
    }
    
    public function colorize(\SplFileInfo $img, array $options = null){
        $color = $this->option($options, 'color', '342ABF');
        $opacity = $this->option($options, 'opacity', 80);
        
        return ImageBuilder::create($img)->colorize($color, $opacity);
    }
    
    public function contrast(\SplFileInfo $img, array $options = null){
        $rate = $this->option($options, 'rate', 20);
        return ImageBuilder::create($img)->contrast($rate);
    }
    
    public function darken(\SplFileInfo $img, array $options = null){
        $rate = $this->option($options, 'rate', 20);
        return ImageBuilder::create($img)->darken(20);
    }
    
    public function dodge(\SplFileInfo $img){
        return ImageBuilder::create($img)->dodge();
    }
    
    public function edgedetect(\SplFileInfo $img){
        return ImageBuilder::create($img)->edgeDetect();
    }
    
    public function emboss(\SplFileInfo $img){
        return ImageBuilder::create($img)->grayscale()->emboss();
    }
    
    public function findedges(\SplFileInfo $img){
        return ImageBuilder::create($img)->findEdges();
    }
    
    public function flip(\SplFileInfo $img, array $options = null){
        $mode = ImageFilterFlip::FLIP_BOTH;
        if (isset($options['mode'])){
            if ($options['mode'] === 'vertical'){
                $mode = ImageFilterFlip::FLIP_VERTICALLY;
            }else if ($options['mode'] === 'horizontal'){
                $mode = ImageFilterFlip::FLIP_HORIZONTALLY;
            }
        }
        return ImageBuilder::create($img)->flip($mode);
    }
    
    public function gammacorrection(\SplFileInfo $img, array $options = null){
        $input = $this->option($options, 'input', '1.0');
        $output = $this->option($options, 'output', '1.537');
        
        return ImageBuilder::create($img)->gammaCorrection($input, $output);
    }
    
    public function gaussianblur(\SplFileInfo $img){
        return ImageBuilder::create($img)->gaussianBlur();
    }
    
    public function grayscale(\SplFileInfo $img){
        return ImageBuilder::create($img)->grayscale();
    }
    
    public function meanremove(\SplFileInfo $img){
        return ImageBuilder::create($img)->meanremove();
    }
    
    public function motionblur(\SplFileInfo $img){
        return ImageBuilder::create($img)->motionBlur();
    }
    
    public function negative(\SplFileInfo $img){
        return ImageBuilder::create($img)->negative();
    }
    
    public function noise(\SplFileInfo $img, array $options = null){
        $rate = $this->option($options, 'rate', '20');
        
        return ImageBuilder::create($img)->noise($rate);
    }
    
    public function opacity(\SplFileInfo $img, array $options = null){
        $opacity = $this->option($options, 'opacity', '50');
    
        return ImageBuilder::create($img)->opacity($opacity);
    }
    
    public function original(\SplFileInfo $img){
        return ImageBuilder::create($img);
    }
    
    public function pixelate(\SplFileInfo $img, array $options = null){
        $rate = $this->option($options, 'rate', '10');
    
        return ImageBuilder::create($img)->pixelate($rate);
    }
    
    public function rotate(\SplFileInfo $img, array $options = null){
        $degrees = $this->option($options, 'degrees', '90');
        $color = $this->option($options, 'color', 'ffffff');
        
        return ImageBuilder::create($img)->rotate($degrees, $color);
    }
    
    public function scatter(\SplFileInfo $img, array $options = null){
        $rate = $this->option($options, 'rate', 5);
        return ImageBuilder::create($img)->scatter($rate);
    }
    
    /**
     * Retrieve the desired option, fallback to a default when it does not exist
     * 
     * @param array $options The options array
     * @param string $name The name of the option
     * @param string|int $default the fallback
     * 
     * @return string
     */
    private function option(array $options, $name, $default){
        if (!$options){return $default;}
        if (isset($options[$name])){
            return $options[$name];
        }
        return $default;
    }
}
