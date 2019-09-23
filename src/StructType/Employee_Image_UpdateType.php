<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Image_UpdateType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the following elements to update the Image (e.g. picture) for an existing Employee within the Workday system.
 * @subpackage Structs
 */
class Employee_Image_UpdateType extends AbstractStructBase
{
    /**
     * The Employee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Employee.
     * - choice: Employee_Reference | Employee_External_ID_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EmployeeObjectType
     */
    public $Employee_Reference;
    /**
     * The Employee_External_ID_Reference
     * Meta information extracted from the WSDL
     * - choice: Employee_Reference | Employee_External_ID_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\Employee_ReferenceType
     */
    public $Employee_External_ID_Reference;
    /**
     * The Employee_Image_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\Employee_Image_DataType[]
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
     * Constructor method for Employee_Image_UpdateType
     * @uses Employee_Image_UpdateType::setEmployee_Reference()
     * @uses Employee_Image_UpdateType::setEmployee_External_ID_Reference()
     * @uses Employee_Image_UpdateType::setEmployee_Image_Data()
     * @uses Employee_Image_UpdateType::setVersion()
     * @param \StructType\EmployeeObjectType $employee_Reference
     * @param \StructType\Employee_ReferenceType $employee_External_ID_Reference
     * @param \StructType\Employee_Image_DataType[] $employee_Image_Data
     * @param string $version
     */
    public function __construct(\StructType\EmployeeObjectType $employee_Reference = null, \StructType\Employee_ReferenceType $employee_External_ID_Reference = null, array $employee_Image_Data = array(), $version = null)
    {
        $this
            ->setEmployee_Reference($employee_Reference)
            ->setEmployee_External_ID_Reference($employee_External_ID_Reference)
            ->setEmployee_Image_Data($employee_Image_Data)
            ->setVersion($version);
    }
    /**
     * Get Employee_Reference value
     * @return \StructType\EmployeeObjectType|null
     */
    public function getEmployee_Reference()
    {
        return isset($this->Employee_Reference) ? $this->Employee_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEmployee_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmployee_ReferenceForChoiceConstraintsFromSetEmployee_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Employee_External_ID_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Employee_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Employee_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Employee_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\EmployeeObjectType $employee_Reference
     * @return \StructType\Employee_Image_UpdateType
     */
    public function setEmployee_Reference(\StructType\EmployeeObjectType $employee_Reference = null)
    {
        // validation for constraint: choice(Employee_Reference, Employee_External_ID_Reference)
        if ('' !== ($employee_ReferenceChoiceErrorMessage = self::validateEmployee_ReferenceForChoiceConstraintsFromSetEmployee_Reference($employee_Reference))) {
            throw new \InvalidArgumentException($employee_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($employee_Reference) || (is_array($employee_Reference) && empty($employee_Reference))) {
            unset($this->Employee_Reference);
        } else {
            $this->Employee_Reference = $employee_Reference;
        }
        return $this;
    }
    /**
     * Get Employee_External_ID_Reference value
     * @return \StructType\Employee_ReferenceType|null
     */
    public function getEmployee_External_ID_Reference()
    {
        return isset($this->Employee_External_ID_Reference) ? $this->Employee_External_ID_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEmployee_External_ID_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_External_ID_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmployee_External_ID_ReferenceForChoiceConstraintsFromSetEmployee_External_ID_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Employee_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Employee_External_ID_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Employee_External_ID_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Employee_External_ID_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_ReferenceType $employee_External_ID_Reference
     * @return \StructType\Employee_Image_UpdateType
     */
    public function setEmployee_External_ID_Reference(\StructType\Employee_ReferenceType $employee_External_ID_Reference = null)
    {
        // validation for constraint: choice(Employee_Reference, Employee_External_ID_Reference)
        if ('' !== ($employee_External_ID_ReferenceChoiceErrorMessage = self::validateEmployee_External_ID_ReferenceForChoiceConstraintsFromSetEmployee_External_ID_Reference($employee_External_ID_Reference))) {
            throw new \InvalidArgumentException($employee_External_ID_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($employee_External_ID_Reference) || (is_array($employee_External_ID_Reference) && empty($employee_External_ID_Reference))) {
            unset($this->Employee_External_ID_Reference);
        } else {
            $this->Employee_External_ID_Reference = $employee_External_ID_Reference;
        }
        return $this;
    }
    /**
     * Get Employee_Image_Data value
     * @return \StructType\Employee_Image_DataType[]|null
     */
    public function getEmployee_Image_Data()
    {
        return $this->Employee_Image_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee_Image_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Image_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee_Image_DataForArrayConstraintsFromSetEmployee_Image_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_Image_UpdateTypeEmployee_Image_DataItem) {
            // validation for constraint: itemType
            if (!$employee_Image_UpdateTypeEmployee_Image_DataItem instanceof \StructType\Employee_Image_DataType) {
                $invalidValues[] = is_object($employee_Image_UpdateTypeEmployee_Image_DataItem) ? get_class($employee_Image_UpdateTypeEmployee_Image_DataItem) : sprintf('%s(%s)', gettype($employee_Image_UpdateTypeEmployee_Image_DataItem), var_export($employee_Image_UpdateTypeEmployee_Image_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee_Image_Data property can only contain items of type \StructType\Employee_Image_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Employee_Image_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Image_DataType[] $employee_Image_Data
     * @return \StructType\Employee_Image_UpdateType
     */
    public function setEmployee_Image_Data(array $employee_Image_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($employee_Image_DataArrayErrorMessage = self::validateEmployee_Image_DataForArrayConstraintsFromSetEmployee_Image_Data($employee_Image_Data))) {
            throw new \InvalidArgumentException($employee_Image_DataArrayErrorMessage, __LINE__);
        }
        $this->Employee_Image_Data = $employee_Image_Data;
        return $this;
    }
    /**
     * Add item to Employee_Image_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Image_DataType $item
     * @return \StructType\Employee_Image_UpdateType
     */
    public function addToEmployee_Image_Data(\StructType\Employee_Image_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Image_DataType) {
            throw new \InvalidArgumentException(sprintf('The Employee_Image_Data property can only contain items of type \StructType\Employee_Image_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Employee_Image_Data[] = $item;
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
     * @return \StructType\Employee_Image_UpdateType
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
     * @return \StructType\Employee_Image_UpdateType
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
