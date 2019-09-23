<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_Process_ParametersType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the processing options for a business process. If no options are submitted (or the options are submitted as 'false') then the business process is simply initiated as if it where submitted on-line with approvals,
 * reviews, notifications and to-do's in place. If the Initiator is an Integration System User, any validations you configured on the Initiation step are ignored.
 * @subpackage Structs
 */
class Business_Process_ParametersType extends AbstractStructBase
{
    /**
     * The Auto_Complete
     * Meta information extracted from the WSDL
     * - documentation: When set to "true" or "1", the business process is automatically processed. This means that all approvals will be automatically approved in the system, all reviews and to-do's will be automatically by-passed, and all notifications
     * will be automatically suppressed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Auto_Complete;
    /**
     * The Run_Now
     * Meta information extracted from the WSDL
     * - documentation: Indicates the transaction should process to completion before the response is generated. Note: All < v12 operations will process with Run_Now = True for backwards compatibility but please review this setting in your environment for
     * performance conditions.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Run_Now;
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
     * The Comment_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Business_Process_Comment_DataType
     */
    public $Comment_Data;
    /**
     * The Business_Process_Attachment_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Business_Process_Attachment_DataType[]
     */
    public $Business_Process_Attachment_Data;
    /**
     * Constructor method for Business_Process_ParametersType
     * @uses Business_Process_ParametersType::setAuto_Complete()
     * @uses Business_Process_ParametersType::setRun_Now()
     * @uses Business_Process_ParametersType::setDiscard_On_Exit_Validation_Error()
     * @uses Business_Process_ParametersType::setComment_Data()
     * @uses Business_Process_ParametersType::setBusiness_Process_Attachment_Data()
     * @param bool $auto_Complete
     * @param bool $run_Now
     * @param bool $discard_On_Exit_Validation_Error
     * @param \StructType\Business_Process_Comment_DataType $comment_Data
     * @param \StructType\Business_Process_Attachment_DataType[] $business_Process_Attachment_Data
     */
    public function __construct($auto_Complete = null, $run_Now = null, $discard_On_Exit_Validation_Error = null, \StructType\Business_Process_Comment_DataType $comment_Data = null, array $business_Process_Attachment_Data = array())
    {
        $this
            ->setAuto_Complete($auto_Complete)
            ->setRun_Now($run_Now)
            ->setDiscard_On_Exit_Validation_Error($discard_On_Exit_Validation_Error)
            ->setComment_Data($comment_Data)
            ->setBusiness_Process_Attachment_Data($business_Process_Attachment_Data);
    }
    /**
     * Get Auto_Complete value
     * @return bool|null
     */
    public function getAuto_Complete()
    {
        return $this->Auto_Complete;
    }
    /**
     * Set Auto_Complete value
     * @param bool $auto_Complete
     * @return \StructType\Business_Process_ParametersType
     */
    public function setAuto_Complete($auto_Complete = null)
    {
        // validation for constraint: boolean
        if (!is_null($auto_Complete) && !is_bool($auto_Complete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($auto_Complete, true), gettype($auto_Complete)), __LINE__);
        }
        $this->Auto_Complete = $auto_Complete;
        return $this;
    }
    /**
     * Get Run_Now value
     * @return bool|null
     */
    public function getRun_Now()
    {
        return $this->Run_Now;
    }
    /**
     * Set Run_Now value
     * @param bool $run_Now
     * @return \StructType\Business_Process_ParametersType
     */
    public function setRun_Now($run_Now = null)
    {
        // validation for constraint: boolean
        if (!is_null($run_Now) && !is_bool($run_Now)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($run_Now, true), gettype($run_Now)), __LINE__);
        }
        $this->Run_Now = $run_Now;
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
     * @return \StructType\Business_Process_ParametersType
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
     * Get Comment_Data value
     * @return \StructType\Business_Process_Comment_DataType|null
     */
    public function getComment_Data()
    {
        return $this->Comment_Data;
    }
    /**
     * Set Comment_Data value
     * @param \StructType\Business_Process_Comment_DataType $comment_Data
     * @return \StructType\Business_Process_ParametersType
     */
    public function setComment_Data(\StructType\Business_Process_Comment_DataType $comment_Data = null)
    {
        $this->Comment_Data = $comment_Data;
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
        foreach ($values as $business_Process_ParametersTypeBusiness_Process_Attachment_DataItem) {
            // validation for constraint: itemType
            if (!$business_Process_ParametersTypeBusiness_Process_Attachment_DataItem instanceof \StructType\Business_Process_Attachment_DataType) {
                $invalidValues[] = is_object($business_Process_ParametersTypeBusiness_Process_Attachment_DataItem) ? get_class($business_Process_ParametersTypeBusiness_Process_Attachment_DataItem) : sprintf('%s(%s)', gettype($business_Process_ParametersTypeBusiness_Process_Attachment_DataItem), var_export($business_Process_ParametersTypeBusiness_Process_Attachment_DataItem, true));
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
     * @return \StructType\Business_Process_ParametersType
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
     * @return \StructType\Business_Process_ParametersType
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
     * @return \StructType\Business_Process_ParametersType
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
