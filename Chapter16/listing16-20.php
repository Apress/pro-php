$pdf->pages[] = new Zend_Pdf_Page(Zend_Pdf_Page::SIZE_LETTER);

//Alternatively
$pdf->pages[] = $pdf->newPage(Zend_Pdf_Page::SIZE_LETTER);

//Make a copy of page 1 and add it to the PDF
$pdf->pages[] = new Zend_Pdf_Page($pdf->pages[0]);