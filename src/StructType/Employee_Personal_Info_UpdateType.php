<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Personal_Info_UpdateType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the following elements to update the Personal Information for an existing Employee within the Workday system.
 * @subpackage Structs
 */
class Employee_Personal_Info_UpdateType extends AbstractStructBase
{
    /**
     * The Employee_Reference
     * @var \StructType\Employee_ReferenceType
     */
    public $Employee_Reference;
    /**
     * The Employee_Personal_Info_Data
     * @var \StructType\Worker_Personal_Info_DataType
     */
    public $Employee_Personal_Info_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Employee_Personal_Info_UpdateType
     * @uses Employee_Personal_Info_UpdateType::setEmployee_Reference()
     * @uses Employee_Personal_Info_UpdateType::setEmployee_Personal_Info_Data()
     * @uses Employee_Personal_Info_UpdateType::setVersion()
     * @param \StructType\Employee_ReferenceType $employee_Reference
     * @param \StructType\Worker_Personal_Info_DataType $employee_Personal_Info_Data
     * @param string $version
     */
    public function __construct(\StructType\Employee_ReferenceType $employee_Reference = null, \StructType\Worker_Personal_Info_DataType $employee_Personal_Info_Data = null, $version = null)
    {
        $this
            ->setEmployee_Reference($employee_Reference)
            ->setEmployee_Personal_Info_Data($employee_Personal_Info_Data)
            ->setVersion($version);
    }
    /**
     * Get Employee_Reference value
     * @return \StructType\Employee_ReferenceType|null
     */
    public function getEmployee_Reference()
    {
        return $this->Employee_Reference;
    }
    /**
     * Set Employee_Reference value
     * @param \StructType\Employee_ReferenceType $employee_Reference
     * @return \StructType\Employee_Personal_Info_UpdateType
     */
    public function setEmployee_Reference(\StructType\Employee_ReferenceType $employee_Reference = null)
    {
        $this->Employee_Reference = $employee_Reference;
        return $this;
    }
    /**
     * Get Employee_Personal_Info_Data value
     * @return \StructType\Worker_Personal_Info_DataType|null
     */
    public function getEmployee_Personal_Info_Data()
    {
        return $this->Employee_Personal_Info_Data;
    }
    /**
     * Set Employee_Personal_Info_Data value
     * @param \StructType\Worker_Personal_Info_DataType $employee_Personal_Info_Data
     * @return \StructType\Employee_Personal_Info_UpdateType
     */
    public function setEmployee_Personal_Info_Data(\StructType\Worker_Personal_Info_DataType $employee_Personal_Info_Data = null)
    {
        $this->Employee_Personal_Info_Data = $employee_Personal_Info_Data;
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
     * @return \StructType\Employee_Personal_Info_UpdateType
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
     * @return \StructType\Employee_Personal_Info_UpdateType
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
