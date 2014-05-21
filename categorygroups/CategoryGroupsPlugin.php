<?php
namespace Craft;

class CategoryGroupsPlugin extends BasePlugin
{
    public function getName()
    {
        return 'Category Groups';
    }

    public function getVersion()
    {
        return '0.1.0';
    }

    public function getDeveloper()
    {
        return 'Mike Pepper';
    }

    public function getDeveloperUrl()
    {
        return 'http://www.enovate.co.uk';
    }

    public function hasCpSection()
    {
        return false;
    }

}
