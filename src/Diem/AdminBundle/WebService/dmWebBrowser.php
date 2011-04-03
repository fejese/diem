<?php

namespace Diem\AdminBundle\WebService;

use Symfony\Component\BrowserKit\Client;
use Symfony\Component\BrowserKit\Response;

class dmWebBrowser extends Client {

  protected function doRequest($request) {

    $zend_client = new \Zend\Http\Client($request->getUri());
    $zend_response = $zend_client->request($request->getMethod());

    return new Response($zend_response->getBody(), $zend_response->getStatus(), $zend_response->getHeaders());
  }

//  public function getDefaultOptions()
//  {
//    return array(
//      'default_headers' => array(),
//      'adapter_class'   => null,
//      'adapter_options' => array()
//    );
//  }
//
//  public function __construct(array $options)
//  {
//    $options = array_merge($this->getDefaultOptions(), $options);
//
//    parent::__construct($options['default_headers'], $options['adapter_class'], $options['adapter_options']);
//
//    $this->setUserAgent(sprintf('%s (%s) Diem/%s (%s)',
//      dmConfig::get('site_name'),
//      dmArray::get($_SERVER, 'HTTP_HOST', '?'),
//      DIEM_VERSION,
//      'http://diem-project.org'
//    ));
//  }
}