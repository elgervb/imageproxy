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
Uses edge detection to highlight the edges in the image

**Examples** <br />
![Edge detect Filter](http://elgervanboxtel.nl/imageproxy/img/edgedetect/dog.jpg)

###emboss
Embosses the image

**Examples** <br />
![Edge detect Filter](http://elgervanboxtel.nl/imageproxy/img/emboss/dog.jpg)

###findedges
Find the edges in an image without color loss

**Examples** <br />
![Edge detect Filter](http://elgervanboxtel.nl/imageproxy/img/findedges/dog.jpg)

###flip
Flips an image

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*mode*          | both      | Direction to fip: vertical, horizontal or both

**Examples** <br />
![Flip Filter](http://elgervanboxtel.nl/imageproxy/img/flip/dog.jpg)
![Flip Filter Vertical](http://elgervanboxtel.nl/imageproxy/img/flip/mode=vertical/dog.jpg)
![Flip Filter Horizontal](http://elgervanboxtel.nl/imageproxy/img/flip/mode=horizontal/dog.jpg)

###gammacorrection
Applies gamma correction

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*input*         | 1.0       | Input
*output*        | 1.537     | Output

**Examples** <br />
![Gamma Correction Filter](http://elgervanboxtel.nl/imageproxy/img/gammacorrection/dog.jpg)
![Gamma Correction Vertical](http://elgervanboxtel.nl/imageproxy/img/gammacorrection/input=0.5;output=1/dog.jpg)
![FlipGamma Correction Horizontal](http://elgervanboxtel.nl/imageproxy/img/gammacorrection/input=2;output=1/dog.jpg)

###gaussianblur
Blurs the image using the Gaussian method.

**Examples** <br />
![Gaussian Blur Filter](http://elgervanboxtel.nl/imageproxy/img/gaussianblur/dog.jpg)


###grayscale
Converts the colors to grayscale

**Examples** <br />
![Gaussian Blur Filter](http://elgervanboxtel.nl/imageproxy/img/grayscale/dog.jpg)

###meanremove
Uses mean removal to achieve a "sketchy" effect

**Examples** <br />
![Gaussian Blur Filter](http://elgervanboxtel.nl/imageproxy/img/meanremove/dog.jpg)

###motionblur
Motion blurs the image

**Examples** <br />
![Gaussian Blur Filter](http://elgervanboxtel.nl/imageproxy/img/motionblur/dog.jpg)

###negative
Create a negative of an image

**Examples** <br />
![Gaussian Blur Filter](http://elgervanboxtel.nl/imageproxy/img/negative/dog.jpg)

###noise
add noise to the image

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*rate*          | 20        | The amount of noise to apply

**Examples** <br />
![Noise Filter](http://elgervanboxtel.nl/imageproxy/img/noise/dog.jpg)
![Noise Filter](http://elgervanboxtel.nl/imageproxy/img/noise/rate=40/dog.jpg)
![Noise Filter](http://elgervanboxtel.nl/imageproxy/img/noise/rate=80/dog.jpg)

###opacity
Sets the opacity of an image

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*opacity*       | 80        | A value between 0 and 127. 0 indicates completely opaque while 127 indicates completely transparent.

**Examples** <br />
![Opacity Filter](http://elgervanboxtel.nl/imageproxy/img/opacity/dog.jpg)
![Opacity Filter](http://elgervanboxtel.nl/imageproxy/img/opacity/opacity=40/dog.jpg)
![Opacity Filter](http://elgervanboxtel.nl/imageproxy/img/opacity/opacity=100/dog.jpg)

###pixelate
Pixelate an image

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*rate*          | 20        | the blocksize in pixels

**Examples** <br />
![Pixelate Filter](http://elgervanboxtel.nl/imageproxy/img/pixelate/rate=5/dog.jpg)
![Pixelate Filter](http://elgervanboxtel.nl/imageproxy/img/pixelate/dog.jpg)
![Pixelate Filter](http://elgervanboxtel.nl/imageproxy/img/pixelate/rate=60/dog.jpg)

###rotate
Rotate an image over an angle

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*degrees*       | 90        | The degrees to rotate the image
*color*         | null      | The background color to apply 

**Examples** <br />
![Rotate Filter](http://elgervanboxtel.nl/imageproxy/img/rotate//dog.jpg)
![Rotate Filter](http://elgervanboxtel.nl/imageproxy/img/rotate/degrees=180/dog.jpg)
![Rotate Filter](http://elgervanboxtel.nl/imageproxy/img/rotate//degrees=45;color=f00/dog.jpg)

###scatter
Scatter pixels around in a random way

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*rate*          | 5         | the scatter size in pixels

**Examples** <br />
![Scatter Filter](http://elgervanboxtel.nl/imageproxy/img/scatter/dog.jpg)
![Scatter Filter](http://elgervanboxtel.nl/imageproxy/img/scatter/rate=10/dog.jpg)
![Scatter Filter](http://elgervanboxtel.nl/imageproxy/img/scatter/rate=20/dog.jpg)

###selectiveblur
Image filter Selective Blur

**Examples** <br />
![Selective blur Filter](http://elgervanboxtel.nl/imageproxy/img/selectiveblur/dog.jpg)

###sepia
Apply sepia to the image

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*rate*          | 15        | the darken rate

**Examples** <br />
![Sepia Filter](http://elgervanboxtel.nl/imageproxy/img/sepia/dog.jpg)
![Sepia Filter](http://elgervanboxtel.nl/imageproxy/img/sepia/rate=30/dog.jpg)
![Sepia Filter](http://elgervanboxtel.nl/imageproxy/img/sepia/rate=60/dog.jpg)

###sepiafast
Apply sepia to the image (fast)

**Examples** <br />
![Sepia fast Filter](http://elgervanboxtel.nl/imageproxy/img/sepiafast/dog.jpg)
![Sepia fast Filter](http://elgervanboxtel.nl/imageproxy/img/sepiafast/rate=30/dog.jpg)
![Sepia fast Filter](http://elgervanboxtel.nl/imageproxy/img/sepiafast/rate=60/dog.jpg)

###sharpen
Sharpens the image

**Examples** <br />
![Sepia fast Filter](http://elgervanboxtel.nl/imageproxy/img/sharpen/dog.jpg)

###smooth
Makes the image smoother.

Parameter       |  Default  | Description
----------------|-----------|---------------------------
*rate*          | 5         | the darken rate

**Examples** <br />
![Smooth Filter](http://elgervanboxtel.nl/imageproxy/img/smooth/dog.jpg)
![Smooth Filter](http://elgervanboxtel.nl/imageproxy/img/smooth/rate=15/dog.jpg)
![Smooth Filter](http://elgervanboxtel.nl/imageproxy/img/smooth/rate=30/dog.jpg)

###sobel
Sobel edge detect (extremely slow...)

**Examples** <br />
![Smooth Filter](http://elgervanboxtel.nl/imageproxy/img/sobel/dog.jpg)

###vignette
Applies a darker mask around the edges of the image

**Examples** <br />
![Smooth Filter](http://elgervanboxtel.nl/imageproxy/img/vignette/dog.jpg)


