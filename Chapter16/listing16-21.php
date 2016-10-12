public function pdfAction() {
  //Disable the view renderer
  $this->getHelper('ViewRenderer')->setNoRender();

  //Get the response object and set content type http header
  $response = $this->getResponse();
  $response->setHeader('Content-Type', 'application/pdf');

  //Create a new PDF and add a letter-sized page
  $pdf = new Zend_Pdf();
  $pdf->pages[] = $pdf->newPage(Zend_Pdf_Page::SIZE_LETTER);

  //Get a reference to that page
  $page = $pdf->pages[0];

  //Create a graphics style and set options
  $style = new Zend_Pdf_Style();

  //Set the font color to black
  $style->setLineColor(new Zend_Pdf_Color_Rgb(0,0,0));

  //Load a font and add it to the style at size 12
  $font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_TIMES);
  $style->setFont($font, 12);

  //Apply the style
  $page->setStyle($style);

  //Draw text offset 100 x 100 from the top left of the page
  $page->drawText('Your first dynamic PDF', 100, ($page->getHeight()-100));

  /*
     Make sure there are no previous echoes or prior information
     to wreck the PDF output. You need a clean output buffer
     when outputting binary data.
  */
  $response->clearBody();

  //Output the PDF
  $response->setBody($pdf->render());
}