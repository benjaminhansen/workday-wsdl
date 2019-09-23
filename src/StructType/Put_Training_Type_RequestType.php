<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Training_Type_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put Training
 * @subpackage Structs
 */
class Put_Training_Type_RequestType extends AbstractStructBase
{
    /**
     * The Training_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Training Type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Training_TypeObjectType
     */
    public $Training_Type_Reference;
    /**
     * The Training_Type_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the detailed information about a Training Type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Training_Type_DataType
     */
    public $Training_Type_Data;
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
     * Constructor method for Put_Training_Type_RequestType
     * @uses Put_Training_Type_RequestType::setTraining_Type_Reference()
     * @uses Put_Training_Type_RequestType::setTraining_Type_Data()
     * @uses Put_Training_Type_RequestType::setAdd_Only()
     * @uses Put_Training_Type_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference
     * @param \WorkdayWsdl\\StructType\Training_Type_DataType $training_Type_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference = null, \WorkdayWsdl\\StructType\Training_Type_DataType $training_Type_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setTraining_Type_Reference($training_Type_Reference)
            ->setTraining_Type_Data($training_Type_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
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
     * @return \WorkdayWsdl\\StructType\Put_Training_Type_RequestType
     */
    public function setTraining_Type_Reference(\WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference = null)
    {
        $this->Training_Type_Reference = $training_Type_Reference;
        return $this;
    }
    /**
     * Get Training_Type_Data value
     * @return \WorkdayWsdl\\StructType\Training_Type_DataType|null
     */
    public function getTraining_Type_Data()
    {
        return $this->Training_Type_Data;
    }
    /**
     * Set Training_Type_Data value
     * @param \WorkdayWsdl\\StructType\Training_Type_DataType $training_Type_Data
     * @return \WorkdayWsdl\\StructType\Put_Training_Type_RequestType
     */
    public function setTraining_Type_Data(\WorkdayWsdl\\StructType\Training_Type_DataType $training_Type_Data = null)
    {
        $this->Training_Type_Data = $training_Type_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Training_Type_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Training_Type_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Training_Type_RequestType
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
