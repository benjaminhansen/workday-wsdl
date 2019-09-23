<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Sexual_Orientation_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The web service is set to add only, but the Sexual Orientation already exists. | The request to edit sexual orientation data for a worker.
 * @subpackage Structs
 */
class Put_Sexual_Orientation_RequestType extends AbstractStructBase
{
    /**
     * The Sexual_Orientation_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the sexual orientation of the person.
     * - minOccurs: 0
     * @var \StructType\Sexual_OrientationObjectType
     */
    public $Sexual_Orientation_Reference;
    /**
     * The Sexual_Orientation_Data
     * @var \StructType\Sexual_Orientation_DataType
     */
    public $Sexual_Orientation_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only flag
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
     * Constructor method for Put_Sexual_Orientation_RequestType
     * @uses Put_Sexual_Orientation_RequestType::setSexual_Orientation_Reference()
     * @uses Put_Sexual_Orientation_RequestType::setSexual_Orientation_Data()
     * @uses Put_Sexual_Orientation_RequestType::setAdd_Only()
     * @uses Put_Sexual_Orientation_RequestType::setVersion()
     * @param \StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference
     * @param \StructType\Sexual_Orientation_DataType $sexual_Orientation_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference = null, \StructType\Sexual_Orientation_DataType $sexual_Orientation_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setSexual_Orientation_Reference($sexual_Orientation_Reference)
            ->setSexual_Orientation_Data($sexual_Orientation_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Sexual_Orientation_Reference value
     * @return \StructType\Sexual_OrientationObjectType|null
     */
    public function getSexual_Orientation_Reference()
    {
        return $this->Sexual_Orientation_Reference;
    }
    /**
     * Set Sexual_Orientation_Reference value
     * @param \StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference
     * @return \StructType\Put_Sexual_Orientation_RequestType
     */
    public function setSexual_Orientation_Reference(\StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference = null)
    {
        $this->Sexual_Orientation_Reference = $sexual_Orientation_Reference;
        return $this;
    }
    /**
     * Get Sexual_Orientation_Data value
     * @return \StructType\Sexual_Orientation_DataType|null
     */
    public function getSexual_Orientation_Data()
    {
        return $this->Sexual_Orientation_Data;
    }
    /**
     * Set Sexual_Orientation_Data value
     * @param \StructType\Sexual_Orientation_DataType $sexual_Orientation_Data
     * @return \StructType\Put_Sexual_Orientation_RequestType
     */
    public function setSexual_Orientation_Data(\StructType\Sexual_Orientation_DataType $sexual_Orientation_Data = null)
    {
        $this->Sexual_Orientation_Data = $sexual_Orientation_Data;
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
     * @return \StructType\Put_Sexual_Orientation_RequestType
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
     * @return \StructType\Put_Sexual_Orientation_RequestType
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
     * @return \StructType\Put_Sexual_Orientation_RequestType
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
