<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Ethnicity_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put Ethnicity
 * @subpackage Structs
 */
class Put_Ethnicity_RequestType extends AbstractStructBase
{
    /**
     * The Ethnicity_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an Ethnicity.
     * - minOccurs: 0
     * @var \StructType\EthnicityObjectType
     */
    public $Ethnicity_Reference;
    /**
     * The Ethnicity_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the detailed information about an Ethnicity.
     * - minOccurs: 0
     * @var \StructType\Ethnicity_DataType
     */
    public $Ethnicity_Data;
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
     * Constructor method for Put_Ethnicity_RequestType
     * @uses Put_Ethnicity_RequestType::setEthnicity_Reference()
     * @uses Put_Ethnicity_RequestType::setEthnicity_Data()
     * @uses Put_Ethnicity_RequestType::setAdd_Only()
     * @uses Put_Ethnicity_RequestType::setVersion()
     * @param \StructType\EthnicityObjectType $ethnicity_Reference
     * @param \StructType\Ethnicity_DataType $ethnicity_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\EthnicityObjectType $ethnicity_Reference = null, \StructType\Ethnicity_DataType $ethnicity_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setEthnicity_Reference($ethnicity_Reference)
            ->setEthnicity_Data($ethnicity_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Ethnicity_Reference value
     * @return \StructType\EthnicityObjectType|null
     */
    public function getEthnicity_Reference()
    {
        return $this->Ethnicity_Reference;
    }
    /**
     * Set Ethnicity_Reference value
     * @param \StructType\EthnicityObjectType $ethnicity_Reference
     * @return \StructType\Put_Ethnicity_RequestType
     */
    public function setEthnicity_Reference(\StructType\EthnicityObjectType $ethnicity_Reference = null)
    {
        $this->Ethnicity_Reference = $ethnicity_Reference;
        return $this;
    }
    /**
     * Get Ethnicity_Data value
     * @return \StructType\Ethnicity_DataType|null
     */
    public function getEthnicity_Data()
    {
        return $this->Ethnicity_Data;
    }
    /**
     * Set Ethnicity_Data value
     * @param \StructType\Ethnicity_DataType $ethnicity_Data
     * @return \StructType\Put_Ethnicity_RequestType
     */
    public function setEthnicity_Data(\StructType\Ethnicity_DataType $ethnicity_Data = null)
    {
        $this->Ethnicity_Data = $ethnicity_Data;
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
     * @return \StructType\Put_Ethnicity_RequestType
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
     * @return \StructType\Put_Ethnicity_RequestType
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
     * @return \StructType\Put_Ethnicity_RequestType
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
