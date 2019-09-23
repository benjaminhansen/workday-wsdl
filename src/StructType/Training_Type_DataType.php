<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Training_Type_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put Training
 * @subpackage Structs
 */
class Training_Type_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID (Training_Type_ID)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Training_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the Training Type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Training_Type_Name;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the training type is inactive. If a training type is inactive, it will no longer be allowed to be selected when a user enters or updates their training.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Training_Type_DataType
     * @uses Training_Type_DataType::setID()
     * @uses Training_Type_DataType::setTraining_Type_Name()
     * @uses Training_Type_DataType::setInactive()
     * @param string $iD
     * @param string $training_Type_Name
     * @param bool $inactive
     */
    public function __construct($iD = null, $training_Type_Name = null, $inactive = null)
    {
        $this
            ->setID($iD)
            ->setTraining_Type_Name($training_Type_Name)
            ->setInactive($inactive);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Training_Type_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Training_Type_Name value
     * @return string|null
     */
    public function getTraining_Type_Name()
    {
        return $this->Training_Type_Name;
    }
    /**
     * Set Training_Type_Name value
     * @param string $training_Type_Name
     * @return \StructType\Training_Type_DataType
     */
    public function setTraining_Type_Name($training_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($training_Type_Name) && !is_string($training_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($training_Type_Name, true), gettype($training_Type_Name)), __LINE__);
        }
        $this->Training_Type_Name = $training_Type_Name;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \StructType\Training_Type_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Training_Type_DataType
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
