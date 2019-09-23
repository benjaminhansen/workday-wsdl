<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Employee and its associated data.
 * @subpackage Structs
 */
class EmployeeType extends AbstractStructBase
{
    /**
     * The Employee_Reference
     * @var \StructType\Employee_ReferenceType
     */
    public $Employee_Reference;
    /**
     * The Employee_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_DataType[]
     */
    public $Employee_Data;
    /**
     * The As_Of_Date
     * Meta information extracted from the WSDL
     * - documentation: Defines the As Of Date to be used for any application effective dated data within the Workday system. For "Request" elements, the "As Of Date" determines what data is to be used within search logic or returned in a response. For
     * "Response" elements, this element will echo "As Of Date" entered in the "Request" element or the default "As Of Date" if omitted..
     * @var string
     */
    public $As_Of_Date;
    /**
     * The As_Of_Moment
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest moment (e.g. datetime) data was entered into the Workday system. For "Request" elements, the "As Of Moment" determines what data is to be used within search logic or returned in a response. For "Response" elements,
     * this element will echo "As Of Moment" entered in the "Request" element or the default "As Of Moment" if omitted.
     * @var string
     */
    public $As_Of_Moment;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for EmployeeType
     * @uses EmployeeType::setEmployee_Reference()
     * @uses EmployeeType::setEmployee_Data()
     * @uses EmployeeType::setAs_Of_Date()
     * @uses EmployeeType::setAs_Of_Moment()
     * @uses EmployeeType::setVersion()
     * @param \StructType\Employee_ReferenceType $employee_Reference
     * @param \StructType\Employee_DataType[] $employee_Data
     * @param string $as_Of_Date
     * @param string $as_Of_Moment
     * @param string $version
     */
    public function __construct(\StructType\Employee_ReferenceType $employee_Reference = null, array $employee_Data = array(), $as_Of_Date = null, $as_Of_Moment = null, $version = null)
    {
        $this
            ->setEmployee_Reference($employee_Reference)
            ->setEmployee_Data($employee_Data)
            ->setAs_Of_Date($as_Of_Date)
            ->setAs_Of_Moment($as_Of_Moment)
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
     * @return \StructType\EmployeeType
     */
    public function setEmployee_Reference(\StructType\Employee_ReferenceType $employee_Reference = null)
    {
        $this->Employee_Reference = $employee_Reference;
        return $this;
    }
    /**
     * Get Employee_Data value
     * @return \StructType\Employee_DataType[]|null
     */
    public function getEmployee_Data()
    {
        return $this->Employee_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee_DataForArrayConstraintsFromSetEmployee_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employeeTypeEmployee_DataItem) {
            // validation for constraint: itemType
            if (!$employeeTypeEmployee_DataItem instanceof \StructType\Employee_DataType) {
                $invalidValues[] = is_object($employeeTypeEmployee_DataItem) ? get_class($employeeTypeEmployee_DataItem) : sprintf('%s(%s)', gettype($employeeTypeEmployee_DataItem), var_export($employeeTypeEmployee_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee_Data property can only contain items of type \StructType\Employee_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Employee_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_DataType[] $employee_Data
     * @return \StructType\EmployeeType
     */
    public function setEmployee_Data(array $employee_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($employee_DataArrayErrorMessage = self::validateEmployee_DataForArrayConstraintsFromSetEmployee_Data($employee_Data))) {
            throw new \InvalidArgumentException($employee_DataArrayErrorMessage, __LINE__);
        }
        $this->Employee_Data = $employee_Data;
        return $this;
    }
    /**
     * Add item to Employee_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_DataType $item
     * @return \StructType\EmployeeType
     */
    public function addToEmployee_Data(\StructType\Employee_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_DataType) {
            throw new \InvalidArgumentException(sprintf('The Employee_Data property can only contain items of type \StructType\Employee_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Employee_Data[] = $item;
        return $this;
    }
    /**
     * Get As_Of_Date value
     * @return string|null
     */
    public function getAs_Of_Date()
    {
        return $this->As_Of_Date;
    }
    /**
     * Set As_Of_Date value
     * @param string $as_Of_Date
     * @return \StructType\EmployeeType
     */
    public function setAs_Of_Date($as_Of_Date = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Date) && !is_string($as_Of_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Date, true), gettype($as_Of_Date)), __LINE__);
        }
        $this->As_Of_Date = $as_Of_Date;
        return $this;
    }
    /**
     * Get As_Of_Moment value
     * @return string|null
     */
    public function getAs_Of_Moment()
    {
        return $this->As_Of_Moment;
    }
    /**
     * Set As_Of_Moment value
     * @param string $as_Of_Moment
     * @return \StructType\EmployeeType
     */
    public function setAs_Of_Moment($as_Of_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Moment) && !is_string($as_Of_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Moment, true), gettype($as_Of_Moment)), __LINE__);
        }
        $this->As_Of_Moment = $as_Of_Moment;
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
     * @return \StructType\EmployeeType
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
     * @return \StructType\EmployeeType
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
