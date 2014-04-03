<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package     ExpressionEngine
 * @author      ExpressionEngine Dev Team
 * @copyright   Copyright (c) 2003 - <%= currentYear %>, EllisLab, Inc.
 * @license     http://expressionengine.com/user_guide/license.html
 * @link        http://expressionengine.com
 * @since       Version 2.0
 * @filesource
 */

/**
 * <%= addonName %> Accessory
 *
 * @package     ExpressionEngine
 * @subpackage  Addons
 * @category    Accessory
 * @author      <%= authorName %>
 * @link        <%= authorUrl %>
 */
class <%= _.capitalize(addonSlug) %>_acc
{
    public $name        = '<%= addonName %>';
    public $id          = '<%= addonSlug %>';
    public $version     = '1.0.0';
    public $description = '<%= addonDescription %>';
    public $sections    = array();

    /**
     * Set Sections
     */
    public function set_sections()
    {
        $this->sections['<%= addonName %>'] = 'I made an accessory!';
    }
}

/* End of file acc.<%= addonSlug %>.php */
/* Location: /system/expressionengine/third_party/<%= addonSlug %>/acc.<%= addonSlug %>.php */