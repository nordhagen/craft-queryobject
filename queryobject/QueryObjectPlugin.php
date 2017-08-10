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
        return '1.1.0';
    }

    public function getDeveloper()
    {
        return 'Øyvind Nordhagen';
    }

    public function getDeveloperUrl()
    {
        return 'https://twitter.com/nordhagen';
    }
    public function getDocumentationUrl()
    {
        return 'https://github.com/nordhagen/craft-queryobject';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function getReleaseFeedUrl()
    {
        return 'https://github.com/nordhagen/craft-queryobject/history.json';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.queryobject.twigextensions.QueryObjectTwigExtension');

        return new QueryObjectTwigExtension();
    }
}
