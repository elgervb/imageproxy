# imageproxy
Proxy for images


## Usage

Upload your image and call it through the image proxy API:

Original without any filters<br />
`/imageproxy/img/original/<imagename.jpg>`<br />
`http://elgervanboxtel.nl/imageproxy/img/original/dog.jpg`<br />

![Original image](http://elgervanboxtel.nl/imageproxy/img/original/dog.jpg)



Apply filter with defaults<br />
`/imageproxy/img/<filtername>/<imagename.jpg>`<br />
`http://elgervanboxtel.nl/imageproxy/img/pixelate/dog.jpg`<br />

![Filtered image](http://elgervanboxtel.nl/imageproxy/img/pixelate/dog.jpg)


Apply filter with parameters<br />
`/imageproxy/img/<filtername>/[<parameter=value>]/<imagename.jpg>`<br />
`http://elgervanboxtel.nl/imageproxy/img/pixelate/rate=20/dog.jpg`<br />

![Filtered image with parameters](http://elgervanboxtel.nl/imageproxy/img/pixelate/rate=20/dog.jpg)



## Available Filters
