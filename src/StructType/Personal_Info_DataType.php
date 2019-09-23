<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Personal_Info_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Personal Information for a Person.
 * @subpackage Structs
 */
class Personal_Info_DataType extends AbstractStructBase
{
    /**
     * The Business_Title
     * Meta information extracted from the WSDL
     * - documentation: The Business Title for the worker's primary position. This value cannot be updated in the Update Employee Personal Information or Update Contingent Worker Personal Information. It should be updated using the Edit Position operation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Business_Title;
    /**
     * The Person_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Person_DataType
     */
    public $Person_Data;
    /**
     * The Qualification_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Qualification_DataType
     */
    public $Qualification_Data;
    /**
     * Constructor method for Personal_Info_DataType
     * @uses Personal_Info_DataType::setBusiness_Title()
     * @uses Personal_Info_DataType::setPerson_Data()
     * @uses Personal_Info_DataType::setQualification_Data()
     * @param string $business_Title
     * @param \StructType\Person_DataType $person_Data
     * @param \StructType\Qualification_DataType $qualification_Data
     */
    public function __construct($business_Title = null, \StructType\Person_DataType $person_Data = null, \StructType\Qualification_DataType $qualification_Data = null)
    {
        $this
            ->setBusiness_Title($business_Title)
            ->setPerson_Data($person_Data)
            ->setQualification_Data($qualification_Data);
    }
    /**
     * Get Business_Title value
     * @return string|null
     */
    public function getBusiness_Title()
    {
        return $this->Business_Title;
    }
    /**
     * Set Business_Title value
     * @param string $business_Title
     * @return \StructType\Personal_Info_DataType
     */
    public function setBusiness_Title($business_Title = null)
    {
        // validation for constraint: string
        if (!is_null($business_Title) && !is_string($business_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($business_Title, true), gettype($business_Title)), __LINE__);
        }
        $this->Business_Title = $business_Title;
        return $this;
    }
    /**
     * Get Person_Data value
     * @return \StructType\Person_DataType|null
     */
    public function getPerson_Data()
    {
        return $this->Person_Data;
    }
    /**
     * Set Person_Data value
     * @param \StructType\Person_DataType $person_Data
     * @return \StructType\Personal_Info_DataType
     */
    public function setPerson_Data(\StructType\Person_DataType $person_Data = null)
    {
        $this->Person_Data = $person_Data;
        return $this;
    }
    /**
     * Get Qualification_Data value
     * @return \StructType\Qualification_DataType|null
     */
    public function getQualification_Data()
    {
        return $this->Qualification_Data;
    }
    /**
     * Set Qualification_Data value
     * @param \StructType\Qualification_DataType $qualification_Data
     * @return \StructType\Personal_Info_DataType
     */
    public function setQualification_Data(\StructType\Qualification_DataType $qualification_Data = null)
    {
        $this->Qualification_Data = $qualification_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Personal_Info_DataType
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
