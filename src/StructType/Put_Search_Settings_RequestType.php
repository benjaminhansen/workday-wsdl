<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Search_Settings_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put search settings request.
 * @subpackage Structs
 */
class Put_Search_Settings_RequestType extends AbstractStructBase
{
    /**
     * The Search_Settings_Data
     * @var \StructType\Search_Settings_DataType
     */
    public $Search_Settings_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Search_Settings_RequestType
     * @uses Put_Search_Settings_RequestType::setSearch_Settings_Data()
     * @uses Put_Search_Settings_RequestType::setAdd_Only()
     * @uses Put_Search_Settings_RequestType::setVersion()
     * @param \StructType\Search_Settings_DataType $search_Settings_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Search_Settings_DataType $search_Settings_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setSearch_Settings_Data($search_Settings_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Search_Settings_Data value
     * @return \StructType\Search_Settings_DataType|null
     */
    public function getSearch_Settings_Data()
    {
        return $this->Search_Settings_Data;
    }
    /**
     * Set Search_Settings_Data value
     * @param \StructType\Search_Settings_DataType $search_Settings_Data
     * @return \StructType\Put_Search_Settings_RequestType
     */
    public function setSearch_Settings_Data(\StructType\Search_Settings_DataType $search_Settings_Data = null)
    {
        $this->Search_Settings_Data = $search_Settings_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \StructType\Put_Search_Settings_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Put_Search_Settings_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Put_Search_Settings_RequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
