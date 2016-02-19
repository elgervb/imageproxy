<?php
namespace image\options;

class Options
{
    /**
     * Retrieve the desired option, fallback to a default when it does not exist
     *
     * @param array $options The options array
     * @param string $name The name of the option
     * @param string|int $default the fallback
     *
     * @return string
     */
    public static final function option(array $options, $name, $default){
        if (!$options){return $default;}
        if (isset($options[$name])){
            return $options[$name];
        }
        return $default;
    }
}