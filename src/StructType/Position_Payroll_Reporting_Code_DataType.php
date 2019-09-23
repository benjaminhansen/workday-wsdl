<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Position_Payroll_Reporting_Code_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains each payroll reporting code for the position.
 * @subpackage Structs
 */
class Position_Payroll_Reporting_Code_DataType extends AbstractStructBase
{
    /**
     * The Payroll_Reporting_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the payroll reporting code.
     * @var \StructType\Payroll_Reporting_Code__All_ObjectType
     */
    public $Payroll_Reporting_Code_Reference;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The payroll reporting code's value.
     * - maxOccurs: 1
     * @var string
     */
    public $Code;
    /**
     * The Formatted_Code
     * Meta information extracted from the WSDL
     * - documentation: The payroll reporting code with formatting applied.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Formatted_Code;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the payroll reporting code.
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Payroll_Reporting_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the payroll reporting type for the payroll reporting code.
     * @var \StructType\Payroll_Reporting_TypeObjectType
     */
    public $Payroll_Reporting_Type_Reference;
    /**
     * Constructor method for Position_Payroll_Reporting_Code_DataType
     * @uses Position_Payroll_Reporting_Code_DataType::setPayroll_Reporting_Code_Reference()
     * @uses Position_Payroll_Reporting_Code_DataType::setCode()
     * @uses Position_Payroll_Reporting_Code_DataType::setFormatted_Code()
     * @uses Position_Payroll_Reporting_Code_DataType::setName()
     * @uses Position_Payroll_Reporting_Code_DataType::setPayroll_Reporting_Type_Reference()
     * @param \StructType\Payroll_Reporting_Code__All_ObjectType $payroll_Reporting_Code_Reference
     * @param string $code
     * @param string $formatted_Code
     * @param string $name
     * @param \StructType\Payroll_Reporting_TypeObjectType $payroll_Reporting_Type_Reference
     */
    public function __construct(\StructType\Payroll_Reporting_Code__All_ObjectType $payroll_Reporting_Code_Reference = null, $code = null, $formatted_Code = null, $name = null, \StructType\Payroll_Reporting_TypeObjectType $payroll_Reporting_Type_Reference = null)
    {
        $this
            ->setPayroll_Reporting_Code_Reference($payroll_Reporting_Code_Reference)
            ->setCode($code)
            ->setFormatted_Code($formatted_Code)
            ->setName($name)
            ->setPayroll_Reporting_Type_Reference($payroll_Reporting_Type_Reference);
    }
    /**
     * Get Payroll_Reporting_Code_Reference value
     * @return \StructType\Payroll_Reporting_Code__All_ObjectType|null
     */
    public function getPayroll_Reporting_Code_Reference()
    {
        return $this->Payroll_Reporting_Code_Reference;
    }
    /**
     * Set Payroll_Reporting_Code_Reference value
     * @param \StructType\Payroll_Reporting_Code__All_ObjectType $payroll_Reporting_Code_Reference
     * @return \StructType\Position_Payroll_Reporting_Code_DataType
     */
    public function setPayroll_Reporting_Code_Reference(\StructType\Payroll_Reporting_Code__All_ObjectType $payroll_Reporting_Code_Reference = null)
    {
        $this->Payroll_Reporting_Code_Reference = $payroll_Reporting_Code_Reference;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \StructType\Position_Payroll_Reporting_Code_DataType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Formatted_Code value
     * @return string|null
     */
    public function getFormatted_Code()
    {
        return $this->Formatted_Code;
    }
    /**
     * Set Formatted_Code value
     * @param string $formatted_Code
     * @return \StructType\Position_Payroll_Reporting_Code_DataType
     */
    public function setFormatted_Code($formatted_Code = null)
    {
        // validation for constraint: string
        if (!is_null($formatted_Code) && !is_string($formatted_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatted_Code, true), gettype($formatted_Code)), __LINE__);
        }
        $this->Formatted_Code = $formatted_Code;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\Position_Payroll_Reporting_Code_DataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Payroll_Reporting_Type_Reference value
     * @return \StructType\Payroll_Reporting_TypeObjectType|null
     */
    public function getPayroll_Reporting_Type_Reference()
    {
        return $this->Payroll_Reporting_Type_Reference;
    }
    /**
     * Set Payroll_Reporting_Type_Reference value
     * @param \StructType\Payroll_Reporting_TypeObjectType $payroll_Reporting_Type_Reference
     * @return \StructType\Position_Payroll_Reporting_Code_DataType
     */
    public function setPayroll_Reporting_Type_Reference(\StructType\Payroll_Reporting_TypeObjectType $payroll_Reporting_Type_Reference = null)
    {
        $this->Payroll_Reporting_Type_Reference = $payroll_Reporting_Type_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Position_Payroll_Reporting_Code_DataType
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
