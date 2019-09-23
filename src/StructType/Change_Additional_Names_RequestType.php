<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Additional_Names_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This web service allows updates to the additional names of a worker.
 * @subpackage Structs
 */
class Change_Additional_Names_RequestType extends AbstractStructBase
{
    /**
     * The Change_Additional_Names_Data
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Worker that the additional name data will be applied to.
     * @var \StructType\Change_Additional_Name_DataType
     */
    public $Change_Additional_Names_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Additional_Names_RequestType
     * @uses Change_Additional_Names_RequestType::setChange_Additional_Names_Data()
     * @uses Change_Additional_Names_RequestType::setVersion()
     * @param \StructType\Change_Additional_Name_DataType $change_Additional_Names_Data
     * @param string $version
     */
    public function __construct(\StructType\Change_Additional_Name_DataType $change_Additional_Names_Data = null, $version = null)
    {
        $this
            ->setChange_Additional_Names_Data($change_Additional_Names_Data)
            ->setVersion($version);
    }
    /**
     * Get Change_Additional_Names_Data value
     * @return \StructType\Change_Additional_Name_DataType|null
     */
    public function getChange_Additional_Names_Data()
    {
        return $this->Change_Additional_Names_Data;
    }
    /**
     * Set Change_Additional_Names_Data value
     * @param \StructType\Change_Additional_Name_DataType $change_Additional_Names_Data
     * @return \StructType\Change_Additional_Names_RequestType
     */
    public function setChange_Additional_Names_Data(\StructType\Change_Additional_Name_DataType $change_Additional_Names_Data = null)
    {
        $this->Change_Additional_Names_Data = $change_Additional_Names_Data;
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
     * @return \StructType\Change_Additional_Names_RequestType
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
     * @return \StructType\Change_Additional_Names_RequestType
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
