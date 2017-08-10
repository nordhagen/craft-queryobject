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
        $output = array();
        if (strlen($qs) > 0) {
          if ($qs{0} == '?') {
            $qs = substr($qs, 1);
          }
          $pairs = explode('&', $qs);
          while (count($pairs) > 0) {
            $parts = explode('=', array_pop($pairs));
            $name = $parts[0];
            $value = $parts[1];
            if($name && $value) {
                if (strrpos($value, '+')) {
                    $value = explode('+', $value);
                }
                $output[$name] = $value;
            }
          }
        }

        return $output;
    }
}
