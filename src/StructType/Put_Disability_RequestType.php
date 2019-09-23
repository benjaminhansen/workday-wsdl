<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Disability_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put Disability
 * @subpackage Structs
 */
class Put_Disability_RequestType extends AbstractStructBase
{
    /**
     * The Disability_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an Disability.
     * - minOccurs: 0
     * @var \StructType\DisabilityObjectType
     */
    public $Disability_Reference;
    /**
     * The Disability_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Disability data.
     * @var \StructType\Disability_DataType
     */
    public $Disability_Data;
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
     * Constructor method for Put_Disability_RequestType
     * @uses Put_Disability_RequestType::setDisability_Reference()
     * @uses Put_Disability_RequestType::setDisability_Data()
     * @uses Put_Disability_RequestType::setAdd_Only()
     * @uses Put_Disability_RequestType::setVersion()
     * @param \StructType\DisabilityObjectType $disability_Reference
     * @param \StructType\Disability_DataType $disability_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\DisabilityObjectType $disability_Reference = null, \StructType\Disability_DataType $disability_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setDisability_Reference($disability_Reference)
            ->setDisability_Data($disability_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Disability_Reference value
     * @return \StructType\DisabilityObjectType|null
     */
    public function getDisability_Reference()
    {
        return $this->Disability_Reference;
    }
    /**
     * Set Disability_Reference value
     * @param \StructType\DisabilityObjectType $disability_Reference
     * @return \StructType\Put_Disability_RequestType
     */
    public function setDisability_Reference(\StructType\DisabilityObjectType $disability_Reference = null)
    {
        $this->Disability_Reference = $disability_Reference;
        return $this;
    }
    /**
     * Get Disability_Data value
     * @return \StructType\Disability_DataType|null
     */
    public function getDisability_Data()
    {
        return $this->Disability_Data;
    }
    /**
     * Set Disability_Data value
     * @param \StructType\Disability_DataType $disability_Data
     * @return \StructType\Put_Disability_RequestType
     */
    public function setDisability_Data(\StructType\Disability_DataType $disability_Data = null)
    {
        $this->Disability_Data = $disability_Data;
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
     * @return \StructType\Put_Disability_RequestType
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
     * @return \StructType\Put_Disability_RequestType
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
     * @return \StructType\Put_Disability_RequestType
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
