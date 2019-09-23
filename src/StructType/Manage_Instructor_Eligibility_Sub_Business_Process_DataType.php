<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Manage_Instructor_Eligibility_Sub_Business_Process_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Manage Instructor Eligibility Sub Business Process Data
 * @subpackage Structs
 */
class Manage_Instructor_Eligibility_Sub_Business_Process_DataType extends AbstractStructBase
{
    /**
     * The Business_Sub_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Container for the processing options for sub-business processes within a business process. If no options are submitted (or the options are submitted as 'false') then the sub-business process is simply initiated as if it where
     * submitted on-line with approvals, reviews, notifications and to-do's in place. If the Initiator is an Integration System User, any validations you configured on the Initiation step are ignored.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Business_Sub_Process_ParametersType[]
     */
    public $Business_Sub_Process_Parameters;
    /**
     * The Instructor_Eligibility_Line_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Instructor_Eligibility_Line_DataType[]
     */
    public $Instructor_Eligibility_Line_Data;
    /**
     * Constructor method for
     * Manage_Instructor_Eligibility_Sub_Business_Process_DataType
     * @uses Manage_Instructor_Eligibility_Sub_Business_Process_DataType::setBusiness_Sub_Process_Parameters()
     * @uses Manage_Instructor_Eligibility_Sub_Business_Process_DataType::setInstructor_Eligibility_Line_Data()
     * @param \StructType\Business_Sub_Process_ParametersType[] $business_Sub_Process_Parameters
     * @param \StructType\Instructor_Eligibility_Line_DataType[] $instructor_Eligibility_Line_Data
     */
    public function __construct(array $business_Sub_Process_Parameters = array(), array $instructor_Eligibility_Line_Data = array())
    {
        $this
            ->setBusiness_Sub_Process_Parameters($business_Sub_Process_Parameters)
            ->setInstructor_Eligibility_Line_Data($instructor_Eligibility_Line_Data);
    }
    /**
     * Get Business_Sub_Process_Parameters value
     * @return \StructType\Business_Sub_Process_ParametersType[]|null
     */
    public function getBusiness_Sub_Process_Parameters()
    {
        return $this->Business_Sub_Process_Parameters;
    }
    /**
     * This method is responsible for validating the values passed to the setBusiness_Sub_Process_Parameters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusiness_Sub_Process_Parameters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBusiness_Sub_Process_ParametersForArrayConstraintsFromSetBusiness_Sub_Process_Parameters(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $manage_Instructor_Eligibility_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem) {
            // validation for constraint: itemType
            if (!$manage_Instructor_Eligibility_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem instanceof \StructType\Business_Sub_Process_ParametersType) {
                $invalidValues[] = is_object($manage_Instructor_Eligibility_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem) ? get_class($manage_Instructor_Eligibility_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem) : sprintf('%s(%s)', gettype($manage_Instructor_Eligibility_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem), var_export($manage_Instructor_Eligibility_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Business_Sub_Process_Parameters property can only contain items of type \StructType\Business_Sub_Process_ParametersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Business_Sub_Process_Parameters value
     * @throws \InvalidArgumentException
     * @param \StructType\Business_Sub_Process_ParametersType[] $business_Sub_Process_Parameters
     * @return \StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType
     */
    public function setBusiness_Sub_Process_Parameters(array $business_Sub_Process_Parameters = array())
    {
        // validation for constraint: array
        if ('' !== ($business_Sub_Process_ParametersArrayErrorMessage = self::validateBusiness_Sub_Process_ParametersForArrayConstraintsFromSetBusiness_Sub_Process_Parameters($business_Sub_Process_Parameters))) {
            throw new \InvalidArgumentException($business_Sub_Process_ParametersArrayErrorMessage, __LINE__);
        }
        $this->Business_Sub_Process_Parameters = $business_Sub_Process_Parameters;
        return $this;
    }
    /**
     * Add item to Business_Sub_Process_Parameters value
     * @throws \InvalidArgumentException
     * @param \StructType\Business_Sub_Process_ParametersType $item
     * @return \StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType
     */
    public function addToBusiness_Sub_Process_Parameters(\StructType\Business_Sub_Process_ParametersType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Business_Sub_Process_ParametersType) {
            throw new \InvalidArgumentException(sprintf('The Business_Sub_Process_Parameters property can only contain items of type \StructType\Business_Sub_Process_ParametersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Business_Sub_Process_Parameters[] = $item;
        return $this;
    }
    /**
     * Get Instructor_Eligibility_Line_Data value
     * @return \StructType\Instructor_Eligibility_Line_DataType[]|null
     */
    public function getInstructor_Eligibility_Line_Data()
    {
        return $this->Instructor_Eligibility_Line_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setInstructor_Eligibility_Line_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInstructor_Eligibility_Line_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInstructor_Eligibility_Line_DataForArrayConstraintsFromSetInstructor_Eligibility_Line_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $manage_Instructor_Eligibility_Sub_Business_Process_DataTypeInstructor_Eligibility_Line_DataItem) {
            // validation for constraint: itemType
            if (!$manage_Instructor_Eligibility_Sub_Business_Process_DataTypeInstructor_Eligibility_Line_DataItem instanceof \StructType\Instructor_Eligibility_Line_DataType) {
                $invalidValues[] = is_object($manage_Instructor_Eligibility_Sub_Business_Process_DataTypeInstructor_Eligibility_Line_DataItem) ? get_class($manage_Instructor_Eligibility_Sub_Business_Process_DataTypeInstructor_Eligibility_Line_DataItem) : sprintf('%s(%s)', gettype($manage_Instructor_Eligibility_Sub_Business_Process_DataTypeInstructor_Eligibility_Line_DataItem), var_export($manage_Instructor_Eligibility_Sub_Business_Process_DataTypeInstructor_Eligibility_Line_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Instructor_Eligibility_Line_Data property can only contain items of type \StructType\Instructor_Eligibility_Line_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Instructor_Eligibility_Line_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Instructor_Eligibility_Line_DataType[] $instructor_Eligibility_Line_Data
     * @return \StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType
     */
    public function setInstructor_Eligibility_Line_Data(array $instructor_Eligibility_Line_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($instructor_Eligibility_Line_DataArrayErrorMessage = self::validateInstructor_Eligibility_Line_DataForArrayConstraintsFromSetInstructor_Eligibility_Line_Data($instructor_Eligibility_Line_Data))) {
            throw new \InvalidArgumentException($instructor_Eligibility_Line_DataArrayErrorMessage, __LINE__);
        }
        $this->Instructor_Eligibility_Line_Data = $instructor_Eligibility_Line_Data;
        return $this;
    }
    /**
     * Add item to Instructor_Eligibility_Line_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Instructor_Eligibility_Line_DataType $item
     * @return \StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType
     */
    public function addToInstructor_Eligibility_Line_Data(\StructType\Instructor_Eligibility_Line_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Instructor_Eligibility_Line_DataType) {
            throw new \InvalidArgumentException(sprintf('The Instructor_Eligibility_Line_Data property can only contain items of type \StructType\Instructor_Eligibility_Line_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Instructor_Eligibility_Line_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType
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
