<?php
/**
 * This file is part of the Hal library
 *
 * (c) Ben Longden <ben@nocarrier.co.uk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Nocarrier
 */
namespace Nocarrier;

/**
 * The HalLink class
 *
 * @package Nocarrier
 * @author Ben Longden <ben@nocarrier.co.uk>
 */
class HalLink
{
    /**
     * The URI represented by this HalLink
     *
     * @value string
     */
    protected $uri;

    /**
     * Any attributes on this link
     * array(
     *  'templated' => 0,
     *  'type' => 'application/hal+json',
     *  'deprecation' => 1,
     *  'name' => 'latest',
     *  'profile' => 'http://.../profile/order',
     *  'title' => 'The latest order',
     *  'hreflang' => 'en'
     * )
     */
    protected $attributes;

    /**
     * The HalLink object. Supported attributes in Hal (specification section 5)
     *
     * @param $uri the uri represented by this link
     * @param $attributes any additional attributes
     */
    public function __construct($uri, $attributes)
    {
        $this->uri = $uri;
        $this->attributes = $attributes;
    }

    /**
     * Return the URI from this link
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Return the title attribute for this link
     *
     * @deprecated
     * @return string
     */
    public function getTitle()
    {
        return isset($this->attributes['title']) ? $this->attributes['title'] : null;
    }

    /**
     * Returns the attributes for this link
     *
     * return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * The string representation of this link (the URI)
     *
     * return string
     */
    public function __toString()
    {
        return $this->uri;
    }
}
