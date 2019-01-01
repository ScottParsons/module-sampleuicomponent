<?php
/*
 * SussexDev_Sample

 * @category   SussexDev
 * @package    SussexDev_Sample
 * @copyright  Copyright (c) 2019 Scott Parsons
 * @license    https://github.com/ScottParsons/module-sampleuicomponent/blob/master/LICENSE.md
 * @version    1.1.2
 */
namespace SussexDev\Sample\Controller\Adminhtml\Data;

use SussexDev\Sample\Controller\Adminhtml\Data;

class Index extends Data
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
