<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_External_URL_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This URL is already in use | Element containing URL reference with URL data
 * @subpackage Structs
 */
class Put_External_URL_RequestType extends AbstractStructBase
{
    /**
     * The External_URL_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Instance ID or Reference ID.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_URLObjectType
     */
    public $External_URL_Reference;
    /**
     * The External_URL_Data
     * Meta information extracted from the WSDL
     * - documentation: External URL Data
     * @var \WorkdayWsdl\\StructType\External_URL_DataType
     */
    public $External_URL_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only
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
     * Constructor method for Put_External_URL_RequestType
     * @uses Put_External_URL_RequestType::setExternal_URL_Reference()
     * @uses Put_External_URL_RequestType::setExternal_URL_Data()
     * @uses Put_External_URL_RequestType::setAdd_Only()
     * @uses Put_External_URL_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @param \WorkdayWsdl\\StructType\External_URL_DataType $external_URL_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null, \WorkdayWsdl\\StructType\External_URL_DataType $external_URL_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setExternal_URL_Reference($external_URL_Reference)
            ->setExternal_URL_Data($external_URL_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get External_URL_Reference value
     * @return \WorkdayWsdl\\StructType\External_URLObjectType|null
     */
    public function getExternal_URL_Reference()
    {
        return $this->External_URL_Reference;
    }
    /**
     * Set External_URL_Reference value
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @return \WorkdayWsdl\\StructType\Put_External_URL_RequestType
     */
    public function setExternal_URL_Reference(\WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null)
    {
        $this->External_URL_Reference = $external_URL_Reference;
        return $this;
    }
    /**
     * Get External_URL_Data value
     * @return \WorkdayWsdl\\StructType\External_URL_DataType|null
     */
    public function getExternal_URL_Data()
    {
        return $this->External_URL_Data;
    }
    /**
     * Set External_URL_Data value
     * @param \WorkdayWsdl\\StructType\External_URL_DataType $external_URL_Data
     * @return \WorkdayWsdl\\StructType\Put_External_URL_RequestType
     */
    public function setExternal_URL_Data(\WorkdayWsdl\\StructType\External_URL_DataType $external_URL_Data = null)
    {
        $this->External_URL_Data = $external_URL_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_External_URL_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_External_URL_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_External_URL_RequestType
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
