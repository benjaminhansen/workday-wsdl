<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_Sub_Process_ParametersType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the processing options for sub-business processes within a business process. If no options are submitted (or the options are submitted as 'false') then the sub-business process is simply initiated as if it where
 * submitted on-line with approvals, reviews, notifications and to-do's in place. If the Initiator is an Integration System User, any validations you configured on the Initiation step are ignored.
 * @subpackage Structs
 */
class Business_Sub_Process_ParametersType extends AbstractStructBase
{
    /**
     * The Auto_Complete
     * Meta information extracted from the WSDL
     * - documentation: When set to "true" or "1", the business process is automatically processed. This means that all approvals will be automatically approved in the system, all reviews and to-do's will be automatically by-passed, and all notifications
     * will be automatically suppressed.
     * - choice: Auto_Complete | Skip
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Auto_Complete;
    /**
     * The Skip
     * Meta information extracted from the WSDL
     * - documentation: When set to "true" or "1", the business process is automatically skipped (if it is defined as "skippable" within the business process definition).
     * - choice: Auto_Complete | Skip
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Skip;
    /**
     * The Discard_On_Exit_Validation_Error
     * Meta information extracted from the WSDL
     * - documentation: Enforces all validation conditions defined on the initiation step. If any condition is true, the validation error blocks the step from exiting and a business process event isn't created.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Discard_On_Exit_Validation_Error;
    /**
     * The Business_Process_Comment_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Business_Process_Comment_DataType
     */
    public $Business_Process_Comment_Data;
    /**
     * The Business_Process_Attachment_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Business_Process_Attachment_DataType[]
     */
    public $Business_Process_Attachment_Data;
    /**
     * Constructor method for Business_Sub_Process_ParametersType
     * @uses Business_Sub_Process_ParametersType::setAuto_Complete()
     * @uses Business_Sub_Process_ParametersType::setSkip()
     * @uses Business_Sub_Process_ParametersType::setDiscard_On_Exit_Validation_Error()
     * @uses Business_Sub_Process_ParametersType::setBusiness_Process_Comment_Data()
     * @uses Business_Sub_Process_ParametersType::setBusiness_Process_Attachment_Data()
     * @param bool $auto_Complete
     * @param bool $skip
     * @param bool $discard_On_Exit_Validation_Error
     * @param \StructType\Business_Process_Comment_DataType $business_Process_Comment_Data
     * @param \StructType\Business_Process_Attachment_DataType[] $business_Process_Attachment_Data
     */
    public function __construct($auto_Complete = null, $skip = null, $discard_On_Exit_Validation_Error = null, \StructType\Business_Process_Comment_DataType $business_Process_Comment_Data = null, array $business_Process_Attachment_Data = array())
    {
        $this
            ->setAuto_Complete($auto_Complete)
            ->setSkip($skip)
            ->setDiscard_On_Exit_Validation_Error($discard_On_Exit_Validation_Error)
            ->setBusiness_Process_Comment_Data($business_Process_Comment_Data)
            ->setBusiness_Process_Attachment_Data($business_Process_Attachment_Data);
    }
    /**
     * Get Auto_Complete value
     * @return bool|null
     */
    public function getAuto_Complete()
    {
        return isset($this->Auto_Complete) ? $this->Auto_Complete : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAuto_Complete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAuto_Complete method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAuto_CompleteForChoiceConstraintsFromSetAuto_Complete($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Skip',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Auto_Complete can\'t be set as the property %s is already set. Only one property must be set among these properties: Auto_Complete, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Auto_Complete value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param bool $auto_Complete
     * @return \StructType\Business_Sub_Process_ParametersType
     */
    public function setAuto_Complete($auto_Complete = null)
    {
        // validation for constraint: boolean
        if (!is_null($auto_Complete) && !is_bool($auto_Complete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($auto_Complete, true), gettype($auto_Complete)), __LINE__);
        }
        // validation for constraint: choice(Auto_Complete, Skip)
        if ('' !== ($auto_CompleteChoiceErrorMessage = self::validateAuto_CompleteForChoiceConstraintsFromSetAuto_Complete($auto_Complete))) {
            throw new \InvalidArgumentException($auto_CompleteChoiceErrorMessage, __LINE__);
        }
        if (is_null($auto_Complete) || (is_array($auto_Complete) && empty($auto_Complete))) {
            unset($this->Auto_Complete);
        } else {
            $this->Auto_Complete = $auto_Complete;
        }
        return $this;
    }
    /**
     * Get Skip value
     * @return bool|null
     */
    public function getSkip()
    {
        return isset($this->Skip) ? $this->Skip : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSkip method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkip method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSkipForChoiceConstraintsFromSetSkip($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Auto_Complete',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Skip can\'t be set as the property %s is already set. Only one property must be set among these properties: Skip, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Skip value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param bool $skip
     * @return \StructType\Business_Sub_Process_ParametersType
     */
    public function setSkip($skip = null)
    {
        // validation for constraint: boolean
        if (!is_null($skip) && !is_bool($skip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skip, true), gettype($skip)), __LINE__);
        }
        // validation for constraint: choice(Auto_Complete, Skip)
        if ('' !== ($skipChoiceErrorMessage = self::validateSkipForChoiceConstraintsFromSetSkip($skip))) {
            throw new \InvalidArgumentException($skipChoiceErrorMessage, __LINE__);
        }
        if (is_null($skip) || (is_array($skip) && empty($skip))) {
            unset($this->Skip);
        } else {
            $this->Skip = $skip;
        }
        return $this;
    }
    /**
     * Get Discard_On_Exit_Validation_Error value
     * @return bool|null
     */
    public function getDiscard_On_Exit_Validation_Error()
    {
        return $this->Discard_On_Exit_Validation_Error;
    }
    /**
     * Set Discard_On_Exit_Validation_Error value
     * @param bool $discard_On_Exit_Validation_Error
     * @return \StructType\Business_Sub_Process_ParametersType
     */
    public function setDiscard_On_Exit_Validation_Error($discard_On_Exit_Validation_Error = null)
    {
        // validation for constraint: boolean
        if (!is_null($discard_On_Exit_Validation_Error) && !is_bool($discard_On_Exit_Validation_Error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($discard_On_Exit_Validation_Error, true), gettype($discard_On_Exit_Validation_Error)), __LINE__);
        }
        $this->Discard_On_Exit_Validation_Error = $discard_On_Exit_Validation_Error;
        return $this;
    }
    /**
     * Get Business_Process_Comment_Data value
     * @return \StructType\Business_Process_Comment_DataType|null
     */
    public function getBusiness_Process_Comment_Data()
    {
        return $this->Business_Process_Comment_Data;
    }
    /**
     * Set Business_Process_Comment_Data value
     * @param \StructType\Business_Process_Comment_DataType $business_Process_Comment_Data
     * @return \StructType\Business_Sub_Process_ParametersType
     */
    public function setBusiness_Process_Comment_Data(\StructType\Business_Process_Comment_DataType $business_Process_Comment_Data = null)
    {
        $this->Business_Process_Comment_Data = $business_Process_Comment_Data;
        return $this;
    }
    /**
     * Get Business_Process_Attachment_Data value
     * @return \StructType\Business_Process_Attachment_DataType[]|null
     */
    public function getBusiness_Process_Attachment_Data()
    {
        return $this->Business_Process_Attachment_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setBusiness_Process_Attachment_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusiness_Process_Attachment_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBusiness_Process_Attachment_DataForArrayConstraintsFromSetBusiness_Process_Attachment_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $business_Sub_Process_ParametersTypeBusiness_Process_Attachment_DataItem) {
            // validation for constraint: itemType
            if (!$business_Sub_Process_ParametersTypeBusiness_Process_Attachment_DataItem instanceof \StructType\Business_Process_Attachment_DataType) {
                $invalidValues[] = is_object($business_Sub_Process_ParametersTypeBusiness_Process_Attachment_DataItem) ? get_class($business_Sub_Process_ParametersTypeBusiness_Process_Attachment_DataItem) : sprintf('%s(%s)', gettype($business_Sub_Process_ParametersTypeBusiness_Process_Attachment_DataItem), var_export($business_Sub_Process_ParametersTypeBusiness_Process_Attachment_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Business_Process_Attachment_Data property can only contain items of type \StructType\Business_Process_Attachment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Business_Process_Attachment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Business_Process_Attachment_DataType[] $business_Process_Attachment_Data
     * @return \StructType\Business_Sub_Process_ParametersType
     */
    public function setBusiness_Process_Attachment_Data(array $business_Process_Attachment_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($business_Process_Attachment_DataArrayErrorMessage = self::validateBusiness_Process_Attachment_DataForArrayConstraintsFromSetBusiness_Process_Attachment_Data($business_Process_Attachment_Data))) {
            throw new \InvalidArgumentException($business_Process_Attachment_DataArrayErrorMessage, __LINE__);
        }
        $this->Business_Process_Attachment_Data = $business_Process_Attachment_Data;
        return $this;
    }
    /**
     * Add item to Business_Process_Attachment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Business_Process_Attachment_DataType $item
     * @return \StructType\Business_Sub_Process_ParametersType
     */
    public function addToBusiness_Process_Attachment_Data(\StructType\Business_Process_Attachment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Business_Process_Attachment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Business_Process_Attachment_Data property can only contain items of type \StructType\Business_Process_Attachment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Business_Process_Attachment_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Business_Sub_Process_ParametersType
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
