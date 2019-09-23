<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Person_Photo_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data for adding or updating a person's photo.
 * @subpackage Structs
 */
class Change_Person_Photo_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Person_Photo_Data
     * @var \StructType\Change_Person_Photo_DataType
     */
    public $Person_Photo_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Person_Photo_RequestType
     * @uses Change_Person_Photo_RequestType::setBusiness_Process_Parameters()
     * @uses Change_Person_Photo_RequestType::setPerson_Photo_Data()
     * @uses Change_Person_Photo_RequestType::setVersion()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\Change_Person_Photo_DataType $person_Photo_Data
     * @param string $version
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \StructType\Change_Person_Photo_DataType $person_Photo_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setPerson_Photo_Data($person_Photo_Data)
            ->setVersion($version);
    }
    /**
     * Get Business_Process_Parameters value
     * @return \StructType\Business_Process_ParametersType|null
     */
    public function getBusiness_Process_Parameters()
    {
        return $this->Business_Process_Parameters;
    }
    /**
     * Set Business_Process_Parameters value
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @return \StructType\Change_Person_Photo_RequestType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Person_Photo_Data value
     * @return \StructType\Change_Person_Photo_DataType|null
     */
    public function getPerson_Photo_Data()
    {
        return $this->Person_Photo_Data;
    }
    /**
     * Set Person_Photo_Data value
     * @param \StructType\Change_Person_Photo_DataType $person_Photo_Data
     * @return \StructType\Change_Person_Photo_RequestType
     */
    public function setPerson_Photo_Data(\StructType\Change_Person_Photo_DataType $person_Photo_Data = null)
    {
        $this->Person_Photo_Data = $person_Photo_Data;
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
     * @return \StructType\Change_Person_Photo_RequestType
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
     * @return \StructType\Change_Person_Photo_RequestType
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
