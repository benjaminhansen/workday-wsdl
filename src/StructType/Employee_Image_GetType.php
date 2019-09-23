<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Image_GetType StructType
 * Meta information extracted from the WSDL
 * - documentation: The reference to the employee for which the photographic image is required
 * @subpackage Structs
 */
class Employee_Image_GetType extends AbstractStructBase
{
    /**
     * The Employee_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_ReferenceType[]
     */
    public $Employee_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Employee_Image_GetType
     * @uses Employee_Image_GetType::setEmployee_Reference()
     * @uses Employee_Image_GetType::setVersion()
     * @param \WorkdayWsdl\\StructType\Employee_ReferenceType[] $employee_Reference
     * @param string $version
     */
    public function __construct(array $employee_Reference = array(), $version = null)
    {
        $this
            ->setEmployee_Reference($employee_Reference)
            ->setVersion($version);
    }
    /**
     * Get Employee_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_ReferenceType[]|null
     */
    public function getEmployee_Reference()
    {
        return $this->Employee_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee_ReferenceForArrayConstraintsFromSetEmployee_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_Image_GetTypeEmployee_ReferenceItem) {
            // validation for constraint: itemType
            if (!$employee_Image_GetTypeEmployee_ReferenceItem instanceof \WorkdayWsdl\\StructType\Employee_ReferenceType) {
                $invalidValues[] = is_object($employee_Image_GetTypeEmployee_ReferenceItem) ? get_class($employee_Image_GetTypeEmployee_ReferenceItem) : sprintf('%s(%s)', gettype($employee_Image_GetTypeEmployee_ReferenceItem), var_export($employee_Image_GetTypeEmployee_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee_Reference property can only contain items of type \WorkdayWsdl\\StructType\Employee_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Employee_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_ReferenceType[] $employee_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Image_GetType
     */
    public function setEmployee_Reference(array $employee_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($employee_ReferenceArrayErrorMessage = self::validateEmployee_ReferenceForArrayConstraintsFromSetEmployee_Reference($employee_Reference))) {
            throw new \InvalidArgumentException($employee_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Employee_Reference = $employee_Reference;
        return $this;
    }
    /**
     * Add item to Employee_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Employee_Image_GetType
     */
    public function addToEmployee_Reference(\WorkdayWsdl\\StructType\Employee_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Employee_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Employee_Reference property can only contain items of type \WorkdayWsdl\\StructType\Employee_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Employee_Reference[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Employee_Image_GetType
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
     * @return \WorkdayWsdl\\StructType\Employee_Image_GetType
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
