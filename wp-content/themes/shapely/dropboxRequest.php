<?php

$request = new HttpRequest();
$request->setUrl('https://api.dropboxapi.com/2/file_requests/get');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'Content-Type' => 'application/x-www-form-urlencoded',
  'Authorization' => 'Bearer 1Ok6Azy5guAAAAAAAAAKAvbifj-15U8QcWQO5BudpH-im6r7oN0gfoGWcPTts3Xl'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
?>