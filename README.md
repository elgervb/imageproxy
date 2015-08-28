# imageproxy
Proxy for images


## Usage

Upload your image and call it through the image proxy API:

Original without any filters
`/imageproxy/img/original/<imagename.jpg>`

![Original image](http://elgervanboxtel.nl/imageproxy/img/original/dog.jpg)
`http://elgervanboxtel.nl/imageproxy/img/original/dog.jpg`


Apply filter with defaults
`/imageproxy/img/<filtername>/<imagename.jpg>`

![Filtered image](http://elgervanboxtel.nl/imageproxy/img/pixelate/dog.jpg)
`http://elgervanboxtel.nl/imageproxy/img/pixelate/dog.jpg`

Apply filter with parameters
`/imageproxy/img/<filtername>/[<parameter=value>]/<imagename.jpg>`

![Filtered image with parameters](http://elgervanboxtel.nl/imageproxy/img/pixelate/rate=20/dog.jpg)
`http://elgervanboxtel.nl/imageproxy/img/pixelate/rate=20/dog.jpg`


## Available Filters