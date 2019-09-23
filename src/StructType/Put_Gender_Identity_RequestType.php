<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Gender_Identity_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request to edit gender identity data for a worker.
 * @subpackage Structs
 */
class Put_Gender_Identity_RequestType extends AbstractStructBase
{
    /**
     * The Gender_Identity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the gender identity of the person.
     * - minOccurs: 0
     * @var \StructType\Gender_IdentityObjectType
     */
    public $Gender_Identity_Reference;
    /**
     * The Gender_Identity_Data
     * @var \StructType\Gender_Identity_DataType
     */
    public $Gender_Identity_Data;
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
     * Constructor method for Put_Gender_Identity_RequestType
     * @uses Put_Gender_Identity_RequestType::setGender_Identity_Reference()
     * @uses Put_Gender_Identity_RequestType::setGender_Identity_Data()
     * @uses Put_Gender_Identity_RequestType::setAdd_Only()
     * @uses Put_Gender_Identity_RequestType::setVersion()
     * @param \StructType\Gender_IdentityObjectType $gender_Identity_Reference
     * @param \StructType\Gender_Identity_DataType $gender_Identity_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Gender_IdentityObjectType $gender_Identity_Reference = null, \StructType\Gender_Identity_DataType $gender_Identity_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setGender_Identity_Reference($gender_Identity_Reference)
            ->setGender_Identity_Data($gender_Identity_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Gender_Identity_Reference value
     * @return \StructType\Gender_IdentityObjectType|null
     */
    public function getGender_Identity_Reference()
    {
        return $this->Gender_Identity_Reference;
    }
    /**
     * Set Gender_Identity_Reference value
     * @param \StructType\Gender_IdentityObjectType $gender_Identity_Reference
     * @return \StructType\Put_Gender_Identity_RequestType
     */
    public function setGender_Identity_Reference(\StructType\Gender_IdentityObjectType $gender_Identity_Reference = null)
    {
        $this->Gender_Identity_Reference = $gender_Identity_Reference;
        return $this;
    }
    /**
     * Get Gender_Identity_Data value
     * @return \StructType\Gender_Identity_DataType|null
     */
    public function getGender_Identity_Data()
    {
        return $this->Gender_Identity_Data;
    }
    /**
     * Set Gender_Identity_Data value
     * @param \StructType\Gender_Identity_DataType $gender_Identity_Data
     * @return \StructType\Put_Gender_Identity_RequestType
     */
    public function setGender_Identity_Data(\StructType\Gender_Identity_DataType $gender_Identity_Data = null)
    {
        $this->Gender_Identity_Data = $gender_Identity_Data;
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
     * @return \StructType\Put_Gender_Identity_RequestType
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
     * @return \StructType\Put_Gender_Identity_RequestType
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
     * @return \StructType\Put_Gender_Identity_RequestType
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
