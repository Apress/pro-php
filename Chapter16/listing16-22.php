//Create an image object
$imageFile = dirname(__FILE__) . '/test.jpg';
$image = Zend_Pdf_Resource_ImageFactory::factory($imageFile);

//Set calculation variables
$dpi = 300; //The image DPI is important
$pointsPerInch = 72; //PDF standard points per inch is 72

//Calculate image width and height in points
$imageWidth = ($image->getPixelWidth() / $dpi) * $pointsPerInch;
$imageHeight = ($image->getPixelHeight() / $dpi) * $pointsPerInch;

//Set the drawing offset
$x = 100;
$y = ($page->getHeight()-150); //Find page top and go down 150 points

//Draw the image to the PDF (x1,y1,x2,y2) [bottom left coordinate system]
$page->drawImage($image, $x, ($y - $imageHeight), ($x + $imageWidth), $y);