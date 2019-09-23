<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_Section_1_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information for Form I-9 Section 1 to assign to the worker.
 * @subpackage Structs
 */
class External_Form_I_9_Section_1_DataType extends AbstractStructBase
{
    /**
     * The Employee_Last_Name
     * Meta information extracted from the WSDL
     * - documentation: The Last Name to be assigned to the Worker.
     * - maxOccurs: 1
     * @var string
     */
    public $Employee_Last_Name;
    /**
     * The Employee_First_Name
     * Meta information extracted from the WSDL
     * - documentation: The First Name to be assigned to the Worker.
     * - maxOccurs: 1
     * @var string
     */
    public $Employee_First_Name;
    /**
     * The Employee_Middle_Initial
     * Meta information extracted from the WSDL
     * - documentation: The Middle Name to be assigned to the Worker.
     * - base: xsd:string
     * - maxLength: 3
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Employee_Middle_Initial;
    /**
     * The Employee_Other_Names_Used
     * Meta information extracted from the WSDL
     * - documentation: The Other Names Used to be assigned to the Worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Employee_Other_Names_Used;
    /**
     * The Citizenship_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Form I-9 Citizenship Status to be assigned to the Worker.
     * @var \WorkdayWsdl\\StructType\Form_I_9_Citizenship_Status__Workday_Owned_ObjectType
     */
    public $Citizenship_Status_Reference;
    /**
     * Constructor method for External_Form_I-9_Section_1_DataType
     * @uses External_Form_I_9_Section_1_DataType::setEmployee_Last_Name()
     * @uses External_Form_I_9_Section_1_DataType::setEmployee_First_Name()
     * @uses External_Form_I_9_Section_1_DataType::setEmployee_Middle_Initial()
     * @uses External_Form_I_9_Section_1_DataType::setEmployee_Other_Names_Used()
     * @uses External_Form_I_9_Section_1_DataType::setCitizenship_Status_Reference()
     * @param string $employee_Last_Name
     * @param string $employee_First_Name
     * @param string $employee_Middle_Initial
     * @param string $employee_Other_Names_Used
     * @param \WorkdayWsdl\\StructType\Form_I_9_Citizenship_Status__Workday_Owned_ObjectType $citizenship_Status_Reference
     */
    public function __construct($employee_Last_Name = null, $employee_First_Name = null, $employee_Middle_Initial = null, $employee_Other_Names_Used = null, \WorkdayWsdl\\StructType\Form_I_9_Citizenship_Status__Workday_Owned_ObjectType $citizenship_Status_Reference = null)
    {
        $this
            ->setEmployee_Last_Name($employee_Last_Name)
            ->setEmployee_First_Name($employee_First_Name)
            ->setEmployee_Middle_Initial($employee_Middle_Initial)
            ->setEmployee_Other_Names_Used($employee_Other_Names_Used)
            ->setCitizenship_Status_Reference($citizenship_Status_Reference);
    }
    /**
     * Get Employee_Last_Name value
     * @return string|null
     */
    public function getEmployee_Last_Name()
    {
        return $this->Employee_Last_Name;
    }
    /**
     * Set Employee_Last_Name value
     * @param string $employee_Last_Name
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType
     */
    public function setEmployee_Last_Name($employee_Last_Name = null)
    {
        // validation for constraint: string
        if (!is_null($employee_Last_Name) && !is_string($employee_Last_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_Last_Name, true), gettype($employee_Last_Name)), __LINE__);
        }
        $this->Employee_Last_Name = $employee_Last_Name;
        return $this;
    }
    /**
     * Get Employee_First_Name value
     * @return string|null
     */
    public function getEmployee_First_Name()
    {
        return $this->Employee_First_Name;
    }
    /**
     * Set Employee_First_Name value
     * @param string $employee_First_Name
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType
     */
    public function setEmployee_First_Name($employee_First_Name = null)
    {
        // validation for constraint: string
        if (!is_null($employee_First_Name) && !is_string($employee_First_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_First_Name, true), gettype($employee_First_Name)), __LINE__);
        }
        $this->Employee_First_Name = $employee_First_Name;
        return $this;
    }
    /**
     * Get Employee_Middle_Initial value
     * @return string|null
     */
    public function getEmployee_Middle_Initial()
    {
        return $this->Employee_Middle_Initial;
    }
    /**
     * Set Employee_Middle_Initial value
     * @param string $employee_Middle_Initial
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType
     */
    public function setEmployee_Middle_Initial($employee_Middle_Initial = null)
    {
        // validation for constraint: string
        if (!is_null($employee_Middle_Initial) && !is_string($employee_Middle_Initial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_Middle_Initial, true), gettype($employee_Middle_Initial)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($employee_Middle_Initial) && mb_strlen($employee_Middle_Initial) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($employee_Middle_Initial)), __LINE__);
        }
        $this->Employee_Middle_Initial = $employee_Middle_Initial;
        return $this;
    }
    /**
     * Get Employee_Other_Names_Used value
     * @return string|null
     */
    public function getEmployee_Other_Names_Used()
    {
        return $this->Employee_Other_Names_Used;
    }
    /**
     * Set Employee_Other_Names_Used value
     * @param string $employee_Other_Names_Used
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType
     */
    public function setEmployee_Other_Names_Used($employee_Other_Names_Used = null)
    {
        // validation for constraint: string
        if (!is_null($employee_Other_Names_Used) && !is_string($employee_Other_Names_Used)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_Other_Names_Used, true), gettype($employee_Other_Names_Used)), __LINE__);
        }
        $this->Employee_Other_Names_Used = $employee_Other_Names_Used;
        return $this;
    }
    /**
     * Get Citizenship_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Form_I_9_Citizenship_Status__Workday_Owned_ObjectType|null
     */
    public function getCitizenship_Status_Reference()
    {
        return $this->Citizenship_Status_Reference;
    }
    /**
     * Set Citizenship_Status_Reference value
     * @param \WorkdayWsdl\\StructType\Form_I_9_Citizenship_Status__Workday_Owned_ObjectType $citizenship_Status_Reference
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType
     */
    public function setCitizenship_Status_Reference(\WorkdayWsdl\\StructType\Form_I_9_Citizenship_Status__Workday_Owned_ObjectType $citizenship_Status_Reference = null)
    {
        $this->Citizenship_Status_Reference = $citizenship_Status_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType
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
