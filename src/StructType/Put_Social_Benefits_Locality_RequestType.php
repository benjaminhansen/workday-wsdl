<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Social_Benefits_Locality_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put Social Benefits Locality
 * @subpackage Structs
 */
class Put_Social_Benefits_Locality_RequestType extends AbstractStructBase
{
    /**
     * The Social_Benefits_Locality_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Social Benefits Locality
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType
     */
    public $Social_Benefits_Locality_Reference;
    /**
     * The Social_Benefits_Locality_Data
     * @var \WorkdayWsdl\\StructType\Social_Benefits_Locality_DataType
     */
    public $Social_Benefits_Locality_Data;
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
     * Constructor method for Put_Social_Benefits_Locality_RequestType
     * @uses Put_Social_Benefits_Locality_RequestType::setSocial_Benefits_Locality_Reference()
     * @uses Put_Social_Benefits_Locality_RequestType::setSocial_Benefits_Locality_Data()
     * @uses Put_Social_Benefits_Locality_RequestType::setAdd_Only()
     * @uses Put_Social_Benefits_Locality_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @param \WorkdayWsdl\\StructType\Social_Benefits_Locality_DataType $social_Benefits_Locality_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null, \WorkdayWsdl\\StructType\Social_Benefits_Locality_DataType $social_Benefits_Locality_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setSocial_Benefits_Locality_Reference($social_Benefits_Locality_Reference)
            ->setSocial_Benefits_Locality_Data($social_Benefits_Locality_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Social_Benefits_Locality_Reference value
     * @return \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType|null
     */
    public function getSocial_Benefits_Locality_Reference()
    {
        return $this->Social_Benefits_Locality_Reference;
    }
    /**
     * Set Social_Benefits_Locality_Reference value
     * @param \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @return \WorkdayWsdl\\StructType\Put_Social_Benefits_Locality_RequestType
     */
    public function setSocial_Benefits_Locality_Reference(\WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null)
    {
        $this->Social_Benefits_Locality_Reference = $social_Benefits_Locality_Reference;
        return $this;
    }
    /**
     * Get Social_Benefits_Locality_Data value
     * @return \WorkdayWsdl\\StructType\Social_Benefits_Locality_DataType|null
     */
    public function getSocial_Benefits_Locality_Data()
    {
        return $this->Social_Benefits_Locality_Data;
    }
    /**
     * Set Social_Benefits_Locality_Data value
     * @param \WorkdayWsdl\\StructType\Social_Benefits_Locality_DataType $social_Benefits_Locality_Data
     * @return \WorkdayWsdl\\StructType\Put_Social_Benefits_Locality_RequestType
     */
    public function setSocial_Benefits_Locality_Data(\WorkdayWsdl\\StructType\Social_Benefits_Locality_DataType $social_Benefits_Locality_Data = null)
    {
        $this->Social_Benefits_Locality_Data = $social_Benefits_Locality_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Social_Benefits_Locality_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Social_Benefits_Locality_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Social_Benefits_Locality_RequestType
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
