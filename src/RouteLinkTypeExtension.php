<?php namespace Anomaly\RouteLinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkInterface;
use Anomaly\NavigationModule\Link\Type\LinkTypeExtension;
use Anomaly\RouteLinkTypeExtension\Form\RouteLinkTypeFormBuilder;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class RouteLinkTypeExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RouteLinkTypeExtension extends LinkTypeExtension
{

    /**
     * This extension provides the URL
     * link type for the Navigation module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.navigation::link_type.url';

    /**
     * Return the entry URL.
     *
     * @param  LinkInterface $link
     * @return string
     */
    public function url(LinkInterface $link)
    {
        return url()->route($link->getEntry()->getRawAttribute('route'));
    }

    /**
     * Return the entry title.
     *
     * @param  LinkInterface $link
     * @return string
     */
    public function title(LinkInterface $link)
    {
        return $link->getEntry()->getTitle();
    }

    /**
     * Return the form builder for
     * the link type entry.
     *
     * @return FormBuilder
     */
    public function builder()
    {
        return app(RouteLinkTypeFormBuilder::class);
    }

}
