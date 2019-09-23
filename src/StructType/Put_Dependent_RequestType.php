<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Dependent_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Put Dependent Request Information.
 * @subpackage Structs
 */
class Put_Dependent_RequestType extends AbstractStructBase
{
    /**
     * The Dependent_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the Dependent being updated. For new Dependents, this reference will not exist.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\DependentObjectType
     */
    public $Dependent_Reference;
    /**
     * The Dependent_Data
     * @var \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public $Dependent_Data;
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
     * Constructor method for Put_Dependent_RequestType
     * @uses Put_Dependent_RequestType::setDependent_Reference()
     * @uses Put_Dependent_RequestType::setDependent_Data()
     * @uses Put_Dependent_RequestType::setAdd_Only()
     * @uses Put_Dependent_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\DependentObjectType $dependent_Reference
     * @param \WorkdayWsdl\\StructType\Put_Dependent_DataType $dependent_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\DependentObjectType $dependent_Reference = null, \WorkdayWsdl\\StructType\Put_Dependent_DataType $dependent_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setDependent_Reference($dependent_Reference)
            ->setDependent_Data($dependent_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Dependent_Reference value
     * @return \WorkdayWsdl\\StructType\DependentObjectType|null
     */
    public function getDependent_Reference()
    {
        return $this->Dependent_Reference;
    }
    /**
     * Set Dependent_Reference value
     * @param \WorkdayWsdl\\StructType\DependentObjectType $dependent_Reference
     * @return \WorkdayWsdl\\StructType\Put_Dependent_RequestType
     */
    public function setDependent_Reference(\WorkdayWsdl\\StructType\DependentObjectType $dependent_Reference = null)
    {
        $this->Dependent_Reference = $dependent_Reference;
        return $this;
    }
    /**
     * Get Dependent_Data value
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType|null
     */
    public function getDependent_Data()
    {
        return $this->Dependent_Data;
    }
    /**
     * Set Dependent_Data value
     * @param \WorkdayWsdl\\StructType\Put_Dependent_DataType $dependent_Data
     * @return \WorkdayWsdl\\StructType\Put_Dependent_RequestType
     */
    public function setDependent_Data(\WorkdayWsdl\\StructType\Put_Dependent_DataType $dependent_Data = null)
    {
        $this->Dependent_Data = $dependent_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Dependent_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Dependent_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Dependent_RequestType
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
