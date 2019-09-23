<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Workers_Compensation_Code_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data for adding or updating a Workers' Compensation Code.
 * @subpackage Structs
 */
class Put_Workers_Compensation_Code_RequestType extends AbstractStructBase
{
    /**
     * The Workers_Compensation_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Workers' Compensation Code. Only needed when updating the Reference ID for the Workers' Compensation Code.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType
     */
    public $Workers_Compensation_Code_Reference;
    /**
     * The Workers_Compensation_Code_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains data for a Worker's Compensation Code.
     * @var \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
     */
    public $Workers_Compensation_Code_Data;
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
     * Constructor method for Put_Workers_Compensation_Code_RequestType
     * @uses Put_Workers_Compensation_Code_RequestType::setWorkers_Compensation_Code_Reference()
     * @uses Put_Workers_Compensation_Code_RequestType::setWorkers_Compensation_Code_Data()
     * @uses Put_Workers_Compensation_Code_RequestType::setAdd_Only()
     * @uses Put_Workers_Compensation_Code_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType $workers_Compensation_Code_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null, \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType $workers_Compensation_Code_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setWorkers_Compensation_Code_Reference($workers_Compensation_Code_Reference)
            ->setWorkers_Compensation_Code_Data($workers_Compensation_Code_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Workers_Compensation_Code_Reference value
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType|null
     */
    public function getWorkers_Compensation_Code_Reference()
    {
        return $this->Workers_Compensation_Code_Reference;
    }
    /**
     * Set Workers_Compensation_Code_Reference value
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference
     * @return \WorkdayWsdl\\StructType\Put_Workers_Compensation_Code_RequestType
     */
    public function setWorkers_Compensation_Code_Reference(\WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null)
    {
        $this->Workers_Compensation_Code_Reference = $workers_Compensation_Code_Reference;
        return $this;
    }
    /**
     * Get Workers_Compensation_Code_Data value
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType|null
     */
    public function getWorkers_Compensation_Code_Data()
    {
        return $this->Workers_Compensation_Code_Data;
    }
    /**
     * Set Workers_Compensation_Code_Data value
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType $workers_Compensation_Code_Data
     * @return \WorkdayWsdl\\StructType\Put_Workers_Compensation_Code_RequestType
     */
    public function setWorkers_Compensation_Code_Data(\WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType $workers_Compensation_Code_Data = null)
    {
        $this->Workers_Compensation_Code_Data = $workers_Compensation_Code_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Workers_Compensation_Code_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Workers_Compensation_Code_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Workers_Compensation_Code_RequestType
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
