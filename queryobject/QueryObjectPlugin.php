<?php
namespace Craft;

class QueryObjectPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('QueryObject');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Øyvind Nordhagen';
    }

    public function getDeveloperUrl()
    {
        return 'http://oyvindnordhagen.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.queryobject.twigextensions.QueryObjectTwigExtension');

        return new QueryObjectTwigExtension();
    }
}
