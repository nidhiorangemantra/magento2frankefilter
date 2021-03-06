<?php
/**
 * Copyright © 2015 ebizmarts. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Ebizmarts\SagePaySuite\Block\Adminhtml\Template\Reports\Tokens\Grid;

/**
 * Sage Pay tokens reports grid block
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Container extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Prepare grid container, add additional buttons
     *
     * @return void
     */
    // @codingStandardsIgnoreStart
    protected function _construct()
    {
        $this->_blockGroup = 'Ebizmarts_SagePaySuite';
        $this->_controller = 'adminhtml_reports_tokens';
        $this->_headerText = __('Sage Pay Credit Card Tokens Report');
        parent::_construct();
        $this->buttonList->remove('add');
    }
    // @codingStandardsIgnoreEnd
}
