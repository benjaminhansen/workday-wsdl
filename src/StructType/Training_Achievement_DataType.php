<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Training_Achievement_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only one change can be in progress (the event in progress and not complete or canceled) for a training for a particular worker. | Wrapper element for Training information.
 * @subpackage Structs
 */
class Training_Achievement_DataType extends AbstractStructBase
{
    /**
     * The Training_ID
     * Meta information extracted from the WSDL
     * - documentation: Training ID. If no value is provided, a new training will be created. If a value is passed in and a corresponding training is not found, a new training will be created with the provided id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Training_ID;
    /**
     * The Remove_Training
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the training should be removed for the person. Will always return false for outbound operations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_Training;
    /**
     * The Training
     * Meta information extracted from the WSDL
     * - documentation: The Name of the Training. Required unless the training is being removed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Training;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Description of the training.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Training_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Enter the Training Type ID specified in Training Types report.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Training_TypeObjectType
     */
    public $Training_Type_Reference;
    /**
     * The Completion_Date
     * Meta information extracted from the WSDL
     * - documentation: The date of completion of the training.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Completion_Date;
    /**
     * The Training_Duration
     * Meta information extracted from the WSDL
     * - documentation: The length of the course in days.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Training_Duration;
    /**
     * Constructor method for Training_Achievement_DataType
     * @uses Training_Achievement_DataType::setTraining_ID()
     * @uses Training_Achievement_DataType::setRemove_Training()
     * @uses Training_Achievement_DataType::setTraining()
     * @uses Training_Achievement_DataType::setDescription()
     * @uses Training_Achievement_DataType::setTraining_Type_Reference()
     * @uses Training_Achievement_DataType::setCompletion_Date()
     * @uses Training_Achievement_DataType::setTraining_Duration()
     * @param string $training_ID
     * @param bool $remove_Training
     * @param string $training
     * @param string $description
     * @param \WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference
     * @param string $completion_Date
     * @param string $training_Duration
     */
    public function __construct($training_ID = null, $remove_Training = null, $training = null, $description = null, \WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference = null, $completion_Date = null, $training_Duration = null)
    {
        $this
            ->setTraining_ID($training_ID)
            ->setRemove_Training($remove_Training)
            ->setTraining($training)
            ->setDescription($description)
            ->setTraining_Type_Reference($training_Type_Reference)
            ->setCompletion_Date($completion_Date)
            ->setTraining_Duration($training_Duration);
    }
    /**
     * Get Training_ID value
     * @return string|null
     */
    public function getTraining_ID()
    {
        return $this->Training_ID;
    }
    /**
     * Set Training_ID value
     * @param string $training_ID
     * @return \WorkdayWsdl\\StructType\Training_Achievement_DataType
     */
    public function setTraining_ID($training_ID = null)
    {
        // validation for constraint: string
        if (!is_null($training_ID) && !is_string($training_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($training_ID, true), gettype($training_ID)), __LINE__);
        }
        $this->Training_ID = $training_ID;
        return $this;
    }
    /**
     * Get Remove_Training value
     * @return bool|null
     */
    public function getRemove_Training()
    {
        return $this->Remove_Training;
    }
    /**
     * Set Remove_Training value
     * @param bool $remove_Training
     * @return \WorkdayWsdl\\StructType\Training_Achievement_DataType
     */
    public function setRemove_Training($remove_Training = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_Training) && !is_bool($remove_Training)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_Training, true), gettype($remove_Training)), __LINE__);
        }
        $this->Remove_Training = $remove_Training;
        return $this;
    }
    /**
     * Get Training value
     * @return string|null
     */
    public function getTraining()
    {
        return $this->Training;
    }
    /**
     * Set Training value
     * @param string $training
     * @return \WorkdayWsdl\\StructType\Training_Achievement_DataType
     */
    public function setTraining($training = null)
    {
        // validation for constraint: string
        if (!is_null($training) && !is_string($training)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($training, true), gettype($training)), __LINE__);
        }
        $this->Training = $training;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \WorkdayWsdl\\StructType\Training_Achievement_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Training_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Training_TypeObjectType|null
     */
    public function getTraining_Type_Reference()
    {
        return $this->Training_Type_Reference;
    }
    /**
     * Set Training_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference
     * @return \WorkdayWsdl\\StructType\Training_Achievement_DataType
     */
    public function setTraining_Type_Reference(\WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference = null)
    {
        $this->Training_Type_Reference = $training_Type_Reference;
        return $this;
    }
    /**
     * Get Completion_Date value
     * @return string|null
     */
    public function getCompletion_Date()
    {
        return $this->Completion_Date;
    }
    /**
     * Set Completion_Date value
     * @param string $completion_Date
     * @return \WorkdayWsdl\\StructType\Training_Achievement_DataType
     */
    public function setCompletion_Date($completion_Date = null)
    {
        // validation for constraint: string
        if (!is_null($completion_Date) && !is_string($completion_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completion_Date, true), gettype($completion_Date)), __LINE__);
        }
        $this->Completion_Date = $completion_Date;
        return $this;
    }
    /**
     * Get Training_Duration value
     * @return string|null
     */
    public function getTraining_Duration()
    {
        return $this->Training_Duration;
    }
    /**
     * Set Training_Duration value
     * @param string $training_Duration
     * @return \WorkdayWsdl\\StructType\Training_Achievement_DataType
     */
    public function setTraining_Duration($training_Duration = null)
    {
        // validation for constraint: string
        if (!is_null($training_Duration) && !is_string($training_Duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($training_Duration, true), gettype($training_Duration)), __LINE__);
        }
        $this->Training_Duration = $training_Duration;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Training_Achievement_DataType
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
