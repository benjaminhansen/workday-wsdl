<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_LGBT_Identification_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put LGBT Identification
 * @subpackage Structs
 */
class Put_LGBT_Identification_RequestType extends AbstractStructBase
{
    /**
     * The LGBT_Identification_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a LGBT Identification
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType
     */
    public $LGBT_Identification_Reference;
    /**
     * The LGBT_Identification_Data
     * @var \WorkdayWsdl\\StructType\LGBT_Identification_DataType
     */
    public $LGBT_Identification_Data;
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
     * Constructor method for Put_LGBT_Identification_RequestType
     * @uses Put_LGBT_Identification_RequestType::setLGBT_Identification_Reference()
     * @uses Put_LGBT_Identification_RequestType::setLGBT_Identification_Data()
     * @uses Put_LGBT_Identification_RequestType::setAdd_Only()
     * @uses Put_LGBT_Identification_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference
     * @param \WorkdayWsdl\\StructType\LGBT_Identification_DataType $lGBT_Identification_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference = null, \WorkdayWsdl\\StructType\LGBT_Identification_DataType $lGBT_Identification_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setLGBT_Identification_Reference($lGBT_Identification_Reference)
            ->setLGBT_Identification_Data($lGBT_Identification_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get LGBT_Identification_Reference value
     * @return \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType|null
     */
    public function getLGBT_Identification_Reference()
    {
        return $this->LGBT_Identification_Reference;
    }
    /**
     * Set LGBT_Identification_Reference value
     * @param \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference
     * @return \WorkdayWsdl\\StructType\Put_LGBT_Identification_RequestType
     */
    public function setLGBT_Identification_Reference(\WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference = null)
    {
        $this->LGBT_Identification_Reference = $lGBT_Identification_Reference;
        return $this;
    }
    /**
     * Get LGBT_Identification_Data value
     * @return \WorkdayWsdl\\StructType\LGBT_Identification_DataType|null
     */
    public function getLGBT_Identification_Data()
    {
        return $this->LGBT_Identification_Data;
    }
    /**
     * Set LGBT_Identification_Data value
     * @param \WorkdayWsdl\\StructType\LGBT_Identification_DataType $lGBT_Identification_Data
     * @return \WorkdayWsdl\\StructType\Put_LGBT_Identification_RequestType
     */
    public function setLGBT_Identification_Data(\WorkdayWsdl\\StructType\LGBT_Identification_DataType $lGBT_Identification_Data = null)
    {
        $this->LGBT_Identification_Data = $lGBT_Identification_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_LGBT_Identification_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_LGBT_Identification_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_LGBT_Identification_RequestType
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
