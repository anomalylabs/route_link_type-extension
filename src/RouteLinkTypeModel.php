<?php namespace Anomaly\RouteLinkTypeExtension;

use Anomaly\Streams\Platform\Model\RouteLinkType\RouteLinkTypeLinksEntryModel;

/**
 * Class RouteLinkTypeModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RouteLinkTypeModel extends RouteLinkTypeLinksEntryModel
{

    /**
     * Eager load these relations.
     *
     * @var array
     */
    protected $with = [
        'translations',
    ];

    /**
     * Get the route.
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

}
