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
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class Delete extends Data
{
    /**
     * Delete the data entity
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $dataId = $this->getRequest()->getParam('data_id');
        if ($dataId) {
            try {
                $this->dataRepository->deleteById($dataId);
                $this->messageManager->addSuccessMessage(__('The data has been deleted.'));
                $resultRedirect->setPath('sample/data/index');
                return $resultRedirect;
            } catch (NoSuchEntityException $e) {
                $this->messageManager->addErrorMessage(__('The data no longer exists.'));
                return $resultRedirect->setPath('sample/data/index');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
                return $resultRedirect->setPath('sample/data/index', ['data_id' => $dataId]);
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('There was a problem deleting the data'));
                return $resultRedirect->setPath('sample/data/edit', ['data_id' => $dataId]);
            }
        }
        $this->messageManager->addErrorMessage(__('We can\'t find the data to delete.'));
        $resultRedirect->setPath('sample/data/index');
        return $resultRedirect;
    }
}
