<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Difficulty_to_Fill_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request component of the Put Difficulty to Fill web service task.
 * @subpackage Structs
 */
class Put_Difficulty_to_Fill_RequestType extends AbstractStructBase
{
    /**
     * The Difficulty_to_Fill_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the difficulty to fill.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType
     */
    public $Difficulty_to_Fill_Reference;
    /**
     * The Difficulty_to_Fill_Data
     * @var \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType
     */
    public $Difficulty_to_Fill_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update. If an existing instance is found and this flag is set there will be an error.
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
     * Constructor method for Put_Difficulty_to_Fill_RequestType
     * @uses Put_Difficulty_to_Fill_RequestType::setDifficulty_to_Fill_Reference()
     * @uses Put_Difficulty_to_Fill_RequestType::setDifficulty_to_Fill_Data()
     * @uses Put_Difficulty_to_Fill_RequestType::setAdd_Only()
     * @uses Put_Difficulty_to_Fill_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     * @param \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType $difficulty_to_Fill_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null, \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType $difficulty_to_Fill_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setDifficulty_to_Fill_Reference($difficulty_to_Fill_Reference)
            ->setDifficulty_to_Fill_Data($difficulty_to_Fill_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Difficulty_to_Fill_Reference value
     * @return \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType|null
     */
    public function getDifficulty_to_Fill_Reference()
    {
        return $this->Difficulty_to_Fill_Reference;
    }
    /**
     * Set Difficulty_to_Fill_Reference value
     * @param \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     * @return \WorkdayWsdl\\StructType\Put_Difficulty_to_Fill_RequestType
     */
    public function setDifficulty_to_Fill_Reference(\WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null)
    {
        $this->Difficulty_to_Fill_Reference = $difficulty_to_Fill_Reference;
        return $this;
    }
    /**
     * Get Difficulty_to_Fill_Data value
     * @return \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType|null
     */
    public function getDifficulty_to_Fill_Data()
    {
        return $this->Difficulty_to_Fill_Data;
    }
    /**
     * Set Difficulty_to_Fill_Data value
     * @param \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType $difficulty_to_Fill_Data
     * @return \WorkdayWsdl\\StructType\Put_Difficulty_to_Fill_RequestType
     */
    public function setDifficulty_to_Fill_Data(\WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType $difficulty_to_Fill_Data = null)
    {
        $this->Difficulty_to_Fill_Data = $difficulty_to_Fill_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Difficulty_to_Fill_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Difficulty_to_Fill_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Difficulty_to_Fill_RequestType
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
