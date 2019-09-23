<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Worker (e.g. Employee or Contingent Worker).
 * @subpackage Structs
 */
class Worker_ReferenceType extends AbstractStructBase
{
    /**
     * The Employee_Reference
     * Meta information extracted from the WSDL
     * - choice: Employee_Reference | Contingent_Worker_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\Employee_ReferenceType
     */
    public $Employee_Reference;
    /**
     * The Contingent_Worker_Reference
     * Meta information extracted from the WSDL
     * - choice: Employee_Reference | Contingent_Worker_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\Contingent_Worker_Reference_DataType
     */
    public $Contingent_Worker_Reference;
    /**
     * Constructor method for Worker_ReferenceType
     * @uses Worker_ReferenceType::setEmployee_Reference()
     * @uses Worker_ReferenceType::setContingent_Worker_Reference()
     * @param \StructType\Employee_ReferenceType $employee_Reference
     * @param \StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference
     */
    public function __construct(\StructType\Employee_ReferenceType $employee_Reference = null, \StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null)
    {
        $this
            ->setEmployee_Reference($employee_Reference)
            ->setContingent_Worker_Reference($contingent_Worker_Reference);
    }
    /**
     * Get Employee_Reference value
     * @return \StructType\Employee_ReferenceType|null
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
            'Contingent_Worker_Reference',
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
     * @param \StructType\Employee_ReferenceType $employee_Reference
     * @return \StructType\Worker_ReferenceType
     */
    public function setEmployee_Reference(\StructType\Employee_ReferenceType $employee_Reference = null)
    {
        // validation for constraint: choice(Employee_Reference, Contingent_Worker_Reference)
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
     * Get Contingent_Worker_Reference value
     * @return \StructType\Contingent_Worker_Reference_DataType|null
     */
    public function getContingent_Worker_Reference()
    {
        return isset($this->Contingent_Worker_Reference) ? $this->Contingent_Worker_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setContingent_Worker_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContingent_Worker_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateContingent_Worker_ReferenceForChoiceConstraintsFromSetContingent_Worker_Reference($value)
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
                    throw new \InvalidArgumentException(sprintf('The property Contingent_Worker_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Contingent_Worker_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Contingent_Worker_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference
     * @return \StructType\Worker_ReferenceType
     */
    public function setContingent_Worker_Reference(\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null)
    {
        // validation for constraint: choice(Employee_Reference, Contingent_Worker_Reference)
        if ('' !== ($contingent_Worker_ReferenceChoiceErrorMessage = self::validateContingent_Worker_ReferenceForChoiceConstraintsFromSetContingent_Worker_Reference($contingent_Worker_Reference))) {
            throw new \InvalidArgumentException($contingent_Worker_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($contingent_Worker_Reference) || (is_array($contingent_Worker_Reference) && empty($contingent_Worker_Reference))) {
            unset($this->Contingent_Worker_Reference);
        } else {
            $this->Contingent_Worker_Reference = $contingent_Worker_Reference;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_ReferenceType
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
