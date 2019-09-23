<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_ImageType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Employee photographic image data for a specified employee reference
 * @subpackage Structs
 */
class Employee_ImageType extends AbstractStructBase
{
    /**
     * The Employee_Reference
     * @var \StructType\Employee_ReferenceType
     */
    public $Employee_Reference;
    /**
     * The Employee_Image_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Employee_Image_DataType
     */
    public $Employee_Image_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Employee_ImageType
     * @uses Employee_ImageType::setEmployee_Reference()
     * @uses Employee_ImageType::setEmployee_Image_Data()
     * @uses Employee_ImageType::setVersion()
     * @param \StructType\Employee_ReferenceType $employee_Reference
     * @param \StructType\Employee_Image_DataType $employee_Image_Data
     * @param string $version
     */
    public function __construct(\StructType\Employee_ReferenceType $employee_Reference = null, \StructType\Employee_Image_DataType $employee_Image_Data = null, $version = null)
    {
        $this
            ->setEmployee_Reference($employee_Reference)
            ->setEmployee_Image_Data($employee_Image_Data)
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
     * @return \StructType\Employee_ImageType
     */
    public function setEmployee_Reference(\StructType\Employee_ReferenceType $employee_Reference = null)
    {
        $this->Employee_Reference = $employee_Reference;
        return $this;
    }
    /**
     * Get Employee_Image_Data value
     * @return \StructType\Employee_Image_DataType|null
     */
    public function getEmployee_Image_Data()
    {
        return $this->Employee_Image_Data;
    }
    /**
     * Set Employee_Image_Data value
     * @param \StructType\Employee_Image_DataType $employee_Image_Data
     * @return \StructType\Employee_ImageType
     */
    public function setEmployee_Image_Data(\StructType\Employee_Image_DataType $employee_Image_Data = null)
    {
        $this->Employee_Image_Data = $employee_Image_Data;
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
     * @return \StructType\Employee_ImageType
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
     * @return \StructType\Employee_ImageType
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
