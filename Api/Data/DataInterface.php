<?php
/*
 * SussexDev_Sample

 * @category   SussexDev
 * @package    SussexDev_Sample
 * @copyright  Copyright (c) 2019 Scott Parsons
 * @license    https://github.com/ScottParsons/module-sampleuicomponent/blob/master/LICENSE.md
 * @version    1.1.2
 */
namespace SussexDev\Sample\Api\Data;

interface DataInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const DATA_ID           = 'data_id';
    const DATA_TITLE        = 'data_title';
    const DATA_DESCRIPTION  = 'data_description';
    const IS_ACTIVE         = 'is_active';
    const CREATED_AT        = 'created_at';
    const UPDATED_AT        = 'updated_at';


    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID
     *
     * @param $id
     * @return DataInterface
     */
    public function setId($id);

    /**
     * Get Data Title
     *
     * @return string
     */
    public function getDataTitle();

    /**
     * Set Data Title
     *
     * @param $title
     * @return mixed
     */
    public function setDataTitle($title);

    /**
     * Get Data Description
     *
     * @return mixed
     */
    public function getDataDescription();

    /**
     * Set Data Description
     *
     * @param $description
     * @return mixed
     */
    public function setDataDescription($description);

    /**
     * Get is active
     *
     * @return bool|int
     */
    public function getIsActive();

    /**
     * Set is active
     *
     * @param $isActive
     * @return DataInterface
     */
    public function setIsActive($isActive);

    /**
     * Get created at
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * set created at
     *
     * @param $createdAt
     * @return DataInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated at
     *
     * @return string
     */
    public function getUpdatedAt();

    /**
     * set updated at
     *
     * @param $updatedAt
     * @return DataInterface
     */
    public function setUpdatedAt($updatedAt);
}
