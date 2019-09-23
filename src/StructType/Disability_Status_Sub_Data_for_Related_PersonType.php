<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Disability_Status_Sub_Data_for_Related_PersonType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for disability status data for the Personal Information Change business process.
 * @subpackage Structs
 */
class Disability_Status_Sub_Data_for_Related_PersonType extends AbstractStructBase
{
    /**
     * The Disability_Reference
     * Meta information extracted from the WSDL
     * - documentation: The person's disability
     * @var \WorkdayWsdl\\StructType\DisabilityObjectType
     */
    public $Disability_Reference;
    /**
     * The Disability_Status_Date
     * Meta information extracted from the WSDL
     * - documentation: The Disability Status Date cannot be before the Date of Birth | This person's disability status date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Status_Date;
    /**
     * The Date_Known
     * Meta information extracted from the WSDL
     * - documentation: The Disability Date Known cannot be before the Date of Birth. | The date you (the employer) first learned about the disability.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_Known;
    /**
     * The Disability_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The Disability End Date cannot be before the Date of Birth. | The date through which the Person is considered disabled. In some countries, this is the date through which the certification for the current level of disability is
     * effective.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_End_Date;
    /**
     * The Disability_Grade_Reference
     * Meta information extracted from the WSDL
     * - documentation: A code or number that identifies the level of disability.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Disability_GradeObjectType
     */
    public $Disability_Grade_Reference;
    /**
     * Constructor method for Disability_Status_Sub_Data_for_Related_PersonType
     * @uses Disability_Status_Sub_Data_for_Related_PersonType::setDisability_Reference()
     * @uses Disability_Status_Sub_Data_for_Related_PersonType::setDisability_Status_Date()
     * @uses Disability_Status_Sub_Data_for_Related_PersonType::setDate_Known()
     * @uses Disability_Status_Sub_Data_for_Related_PersonType::setDisability_End_Date()
     * @uses Disability_Status_Sub_Data_for_Related_PersonType::setDisability_Grade_Reference()
     * @param \WorkdayWsdl\\StructType\DisabilityObjectType $disability_Reference
     * @param string $disability_Status_Date
     * @param string $date_Known
     * @param string $disability_End_Date
     * @param \WorkdayWsdl\\StructType\Disability_GradeObjectType $disability_Grade_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\DisabilityObjectType $disability_Reference = null, $disability_Status_Date = null, $date_Known = null, $disability_End_Date = null, \WorkdayWsdl\\StructType\Disability_GradeObjectType $disability_Grade_Reference = null)
    {
        $this
            ->setDisability_Reference($disability_Reference)
            ->setDisability_Status_Date($disability_Status_Date)
            ->setDate_Known($date_Known)
            ->setDisability_End_Date($disability_End_Date)
            ->setDisability_Grade_Reference($disability_Grade_Reference);
    }
    /**
     * Get Disability_Reference value
     * @return \WorkdayWsdl\\StructType\DisabilityObjectType|null
     */
    public function getDisability_Reference()
    {
        return $this->Disability_Reference;
    }
    /**
     * Set Disability_Reference value
     * @param \WorkdayWsdl\\StructType\DisabilityObjectType $disability_Reference
     * @return \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType
     */
    public function setDisability_Reference(\WorkdayWsdl\\StructType\DisabilityObjectType $disability_Reference = null)
    {
        $this->Disability_Reference = $disability_Reference;
        return $this;
    }
    /**
     * Get Disability_Status_Date value
     * @return string|null
     */
    public function getDisability_Status_Date()
    {
        return $this->Disability_Status_Date;
    }
    /**
     * Set Disability_Status_Date value
     * @param string $disability_Status_Date
     * @return \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType
     */
    public function setDisability_Status_Date($disability_Status_Date = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Status_Date) && !is_string($disability_Status_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Status_Date, true), gettype($disability_Status_Date)), __LINE__);
        }
        $this->Disability_Status_Date = $disability_Status_Date;
        return $this;
    }
    /**
     * Get Date_Known value
     * @return string|null
     */
    public function getDate_Known()
    {
        return $this->Date_Known;
    }
    /**
     * Set Date_Known value
     * @param string $date_Known
     * @return \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType
     */
    public function setDate_Known($date_Known = null)
    {
        // validation for constraint: string
        if (!is_null($date_Known) && !is_string($date_Known)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_Known, true), gettype($date_Known)), __LINE__);
        }
        $this->Date_Known = $date_Known;
        return $this;
    }
    /**
     * Get Disability_End_Date value
     * @return string|null
     */
    public function getDisability_End_Date()
    {
        return $this->Disability_End_Date;
    }
    /**
     * Set Disability_End_Date value
     * @param string $disability_End_Date
     * @return \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType
     */
    public function setDisability_End_Date($disability_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($disability_End_Date) && !is_string($disability_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_End_Date, true), gettype($disability_End_Date)), __LINE__);
        }
        $this->Disability_End_Date = $disability_End_Date;
        return $this;
    }
    /**
     * Get Disability_Grade_Reference value
     * @return \WorkdayWsdl\\StructType\Disability_GradeObjectType|null
     */
    public function getDisability_Grade_Reference()
    {
        return $this->Disability_Grade_Reference;
    }
    /**
     * Set Disability_Grade_Reference value
     * @param \WorkdayWsdl\\StructType\Disability_GradeObjectType $disability_Grade_Reference
     * @return \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType
     */
    public function setDisability_Grade_Reference(\WorkdayWsdl\\StructType\Disability_GradeObjectType $disability_Grade_Reference = null)
    {
        $this->Disability_Grade_Reference = $disability_Grade_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType
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
