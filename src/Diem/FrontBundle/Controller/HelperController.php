<?php

namespace Diem\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelperController extends Controller {

   /*
   * get a tag name for a given area, depending on the document type
   */
  private function getAreaTypeTagName($areaType)
  {
    $tagName = 'div';

    if ($this->isHtml5())
    {
      switch(substr($areaType, strpos($areaType, '.')+1))
      {
        case 'top':     $tagName = 'header';  break;
        case 'left':    $tagName = 'aside';   break;
        case 'content': $tagName = 'section'; break;
        case 'right':   $tagName = 'aside';   break;
        case 'bottom':  $tagName = 'footer';  break;
      }
    }


    return $tagName;
  }

    private function isHtml5()
  {
    return $this->container->getParameter('is_html5');
  }

  public function renderAreaAction($name, $class = array('clearfix')) {
//    $options = dmString::toArray($options);

    $tagName = $this->getAreaTypeTagName($name);

//    $area = $this->getArea($name);
//
//    list($prefix, $type) = explode('.', $name);

    $options['class'] = implode(' ', $class);
//    $options['class'] = dmArray::get($options, 'class', array());
//    $options['class'][] = 'dm_area';
//    $options['class'][] = 'dm_' . $prefix . '_' . $type;
//
//    $options['id'] = dmArray::get($options, 'id', 'dm_area_' . $area['id']);
//
//    $html = '';
//
//    /*
//     * Add a content id for accessibility purpose ( access link )
//     */
//    if ('content' === $type) {
//      $html .= '<div id="dm_content">';
//    }
//
//    $html .= $this->helper->open($tagName, $options);
//
//    $html .= '<div class="dm_zones clearfix">';
//
//    $html .= $this->renderAreaInner($area);
//
//    $html .= '</div>';
//
//    $html .= sprintf('</%s>', $tagName);
//
//    /*
//     * Add a content id for accessibility purpose ( access links )
//     */
//    if ('content' === $type) {
//      $html .= '</div>';
//    }
//
//    return $html;
    return $this->render('DiemFront:Helper:area.html.twig', array('tag_name' => $tagName, 'options' => $options));
  }

}
