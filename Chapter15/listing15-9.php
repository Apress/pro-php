public function jsonAction() {
  //Don't render a template
  $this->getHelper('ViewRenderer')->setNoRender();

  //Set content type headers in the response object
  $this->getResponse()->setHeader('Content-Type', 'application/json');

  //Manually assign the response body, instead of rendering a template
  $json = '{"Name":"Kevin"}';
  $this->getResponse()->setBody($json);
}