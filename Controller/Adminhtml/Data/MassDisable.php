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

use SussexDev\Sample\Model\Data;

class MassDisable extends MassAction
{
    /**
     * @param Data $data
     * @return $this
     */
    protected function massAction(Data $data)
    {
        $data->setIsActive(false);
        $this->dataRepository->save($data);
        return $this;
    }
}
