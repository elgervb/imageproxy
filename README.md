# imageproxy
Proxy for images


## Usage

Upload your image and call it through the image proxy API:

**Original without any filters**<br />
`/imageproxy/img/original/<imagename.jpg>`<br />
`http://elgervanboxtel.nl/imageproxy/img/original/dog.jpg`<br />

![Original image](http://elgervanboxtel.nl/imageproxy/img/original/dog.jpg)



**Apply filter with defaults**<br />
`/imageproxy/img/<filtername>/<imagename.jpg>`<br />
`http://elgervanboxtel.nl/imageproxy/img/pixelate/dog.jpg`<br />

![Filtered image](http://elgervanboxtel.nl/imageproxy/img/pixelate/dog.jpg)


**Apply filter with parameters**<br />
`/imageproxy/img/<filtername>/[<parameter=value>]/<imagename.jpg>`<br />
`http://elgervanboxtel.nl/imageproxy/img/pixelate/rate=20/dog.jpg`<br />

![Filtered image with parameters](http://elgervanboxtel.nl/imageproxy/img/pixelate/rate=20/dog.jpg)



## Available Filters


### blocks
Add random blocks to an image with custom size and color

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*number*        | 100       | The number of blocks
*size*          | 25        | The size of the blocks in pixels
*color*         | ffffff    | The color of the blocks

**Examples** <br />
![Blocks Filter](http://elgervanboxtel.nl/imageproxy/img/blocks/dog.jpg)
![Blocks Filter](http://elgervanboxtel.nl/imageproxy/img/blocks/color=8D8942;size=10/dog.jpg)
![Blocks Filter](http://elgervanboxtel.nl/imageproxy/img/blocks/color=000;size=60/dog.jpg)



### brightness
Adjust the brightness of the image, either lighter or darker

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*rate*          | 20        | The brightness level from -255 to 255, from darker to lighter

**Examples** <br />
![Brightness Filter](http://elgervanboxtel.nl/imageproxy/img/brightness/dog.jpg)
![Brightness Filter Darker](http://elgervanboxtel.nl/imageproxy/img/brightness/rate=-40/dog.jpg)
![Brightness Filter Lighter](http://elgervanboxtel.nl/imageproxy/img/brightness/rate=100/dog.jpg)



### colorize
Blends a fill color with the image

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*color*         | ffffff    | The color to blend
*opacity*       | null      | The color opacity from 0 to 127

**Examples** <br />
![Colorize Filter](http://elgervanboxtel.nl/imageproxy/img/colorize/dog.jpg)
![Colorize Filter red](http://elgervanboxtel.nl/imageproxy/img/colorize/color=ff0000;opacity=100/dog.jpg)
![Colorize Filter green](http://elgervanboxtel.nl/imageproxy/img/colorize/color=00ff00;opacity=40/dog.jpg)



### comic
Apply a sketchy comic filter to an image

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*opacity*       | 40        | The opacity from 0 to 127

**Examples** <br />
![Comic Filter](http://elgervanboxtel.nl/imageproxy/img/comic/dog.jpg)
![Comic Filter](http://elgervanboxtel.nl/imageproxy/img/comic/opacity=40/dog.jpg)
![Comic Filter](http://elgervanboxtel.nl/imageproxy/img/comic/opacity=100/dog.jpg)



### contrast
Changes the contrast of the image

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*rate*          | 5         | The opacity from -100 to 100, from minimal contrast to high constrast

**Examples** <br />
![Contrast Filter](http://elgervanboxtel.nl/imageproxy/img/contrast/dog.jpg)
![Contrast Filter](http://elgervanboxtel.nl/imageproxy/img/contrast/rate=40/dog.jpg)
![Contrast Filter](http://elgervanboxtel.nl/imageproxy/img/contrast/rate=-10/dog.jpg)

###darken
Adjust the brightness of the image, either darker or lighter

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*rate*          | 20        | The brightness level from -255 to 255, from lighter to darker

**Examples** <br />
![Darken Filter](http://elgervanboxtel.nl/imageproxy/img/darken/dog.jpg)
![Darken Filter Lighter](http://elgervanboxtel.nl/imageproxy/img/darken/rate=-40/dog.jpg)
![Darken Filter Darker](http://elgervanboxtel.nl/imageproxy/img/darken/rate=100/dog.jpg)

###dodge
Dodge an image, resulting in a darker image

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*rate*          | 75        | The dodge level between 0 and 100

**Examples** <br />
![Dodge Filter](http://elgervanboxtel.nl/imageproxy/img/dodge/dog.jpg)
![Dodge Filter Lighter](http://elgervanboxtel.nl/imageproxy/img/dodge/rate=40/dog.jpg)
![Dodge Filter Darker](http://elgervanboxtel.nl/imageproxy/img/dodge/rate=10/dog.jpg)

###edgedetect

###emboss

###findedges

###flip

###gammacorrection

###gaussianblur

###grayscale

###meanremove

###motionblur

###negative

###noise

###opacity

###pixelate

###rotate

###scatter

###selectiveblur

###sepia

###sepiafast

###sharpen

###smooth

###sobel

###vignette
