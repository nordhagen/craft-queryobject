<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class QueryObjectTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'queryobject';
    }

    public function getFilters()
    {
        return array(
            'queryobject' => new Twig_Filter_Method($this, 'queryobject'),
        );
    }

    public function queryobject($qs)
    {
        if ($qs{0} == '?') {
          $qs = substr($qs, 1);
        }

        $pairs = explode('&', $qs);
        $output = array();
        while (count($pairs) > 0) {
          $parts = explode('=', array_pop($pairs));
          $output[$parts[0]] = $parts[1];
        }

        return $output;
    }
}
