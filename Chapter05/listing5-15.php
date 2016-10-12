<?php

//Instantiate and set indentation options
$xml = new XMLWriter();
$xml->openURI('php://output');
$xml->setIndentString(' ');
$xml->setIndent(true);

//Start the document and set the DTD
$xml->startDocument('1.0', 'UTF-8');
$xml->startDtd('html', '-//W3C//DTD XHTML 1.0 Strict//EN', 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd');
$xml->endDtd();

//Create the HTML document

$xml->startElement('html');
$xml->writeAttribute('xmlns', 'http://www.w3.org/1999/xhtml');
$xml->writeAttribute('xml:lang', 'en');
$xml->writeAttribute('lang', 'en');

$xml->startElement('head');
$xml->writeElement('title', 'An example XHTML document.');
$xml->endElement();

$xml->startElement('body');

$xml->writeElement('p', 'Hello, World!');
$xml->startElement('p');
$xml->text('This paragraph contains an inline ');
$xml->startElement('a');
$xml->writeAttribute('href','http://www.example.org');
$xml->text('link.');
$xml->endElement(); //a
$xml->endElement(); //p

$xml->endElement(); //body
$xml->endElement(); //html

$xml->endDocument();
$xml->flush();
