<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Position_Payroll_Interface_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg all Payroll Interface Processing data.
 * @subpackage Structs
 */
class Position_Payroll_Interface_Detail_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date for Payroll Interface Processing.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Pay_Rate_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the pay rate type for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType
     */
    public $Pay_Rate_Type_Reference;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Frequency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * The Pay_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: The external pay group for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Pay_GroupObjectType
     */
    public $Pay_Group_Reference;
    /**
     * The Payroll_Entity_Reference
     * Meta information extracted from the WSDL
     * - documentation: The external payroll entity for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Payroll_EntityObjectType
     */
    public $Payroll_Entity_Reference;
    /**
     * The External_Employee_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the external employee type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Payroll_Employee_TypeObjectType
     */
    public $External_Employee_Type_Reference;
    /**
     * The Payroll_File_Number
     * Meta information extracted from the WSDL
     * - documentation: The external payroll file number for the position.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Payroll_File_Number;
    /**
     * Constructor method for Position_Payroll_Interface_Detail_DataType
     * @uses Position_Payroll_Interface_Detail_DataType::setEffective_Date()
     * @uses Position_Payroll_Interface_Detail_DataType::setPay_Rate_Type_Reference()
     * @uses Position_Payroll_Interface_Detail_DataType::setFrequency_Reference()
     * @uses Position_Payroll_Interface_Detail_DataType::setPay_Group_Reference()
     * @uses Position_Payroll_Interface_Detail_DataType::setPayroll_Entity_Reference()
     * @uses Position_Payroll_Interface_Detail_DataType::setExternal_Employee_Type_Reference()
     * @uses Position_Payroll_Interface_Detail_DataType::setPayroll_File_Number()
     * @param string $effective_Date
     * @param \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @param \WorkdayWsdl\\StructType\External_Pay_GroupObjectType $pay_Group_Reference
     * @param \WorkdayWsdl\\StructType\External_Payroll_EntityObjectType $payroll_Entity_Reference
     * @param \WorkdayWsdl\\StructType\External_Payroll_Employee_TypeObjectType $external_Employee_Type_Reference
     * @param string $payroll_File_Number
     */
    public function __construct($effective_Date = null, \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference = null, \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null, \WorkdayWsdl\\StructType\External_Pay_GroupObjectType $pay_Group_Reference = null, \WorkdayWsdl\\StructType\External_Payroll_EntityObjectType $payroll_Entity_Reference = null, \WorkdayWsdl\\StructType\External_Payroll_Employee_TypeObjectType $external_Employee_Type_Reference = null, $payroll_File_Number = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setPay_Rate_Type_Reference($pay_Rate_Type_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setPay_Group_Reference($pay_Group_Reference)
            ->setPayroll_Entity_Reference($payroll_Entity_Reference)
            ->setExternal_Employee_Type_Reference($external_Employee_Type_Reference)
            ->setPayroll_File_Number($payroll_File_Number);
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Pay_Rate_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType|null
     */
    public function getPay_Rate_Type_Reference()
    {
        return $this->Pay_Rate_Type_Reference;
    }
    /**
     * Set Pay_Rate_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType
     */
    public function setPay_Rate_Type_Reference(\WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference = null)
    {
        $this->Pay_Rate_Type_Reference = $pay_Rate_Type_Reference;
        return $this;
    }
    /**
     * Get Frequency_Reference value
     * @return \WorkdayWsdl\\StructType\FrequencyObjectType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Pay_Group_Reference value
     * @return \WorkdayWsdl\\StructType\External_Pay_GroupObjectType|null
     */
    public function getPay_Group_Reference()
    {
        return $this->Pay_Group_Reference;
    }
    /**
     * Set Pay_Group_Reference value
     * @param \WorkdayWsdl\\StructType\External_Pay_GroupObjectType $pay_Group_Reference
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType
     */
    public function setPay_Group_Reference(\WorkdayWsdl\\StructType\External_Pay_GroupObjectType $pay_Group_Reference = null)
    {
        $this->Pay_Group_Reference = $pay_Group_Reference;
        return $this;
    }
    /**
     * Get Payroll_Entity_Reference value
     * @return \WorkdayWsdl\\StructType\External_Payroll_EntityObjectType|null
     */
    public function getPayroll_Entity_Reference()
    {
        return $this->Payroll_Entity_Reference;
    }
    /**
     * Set Payroll_Entity_Reference value
     * @param \WorkdayWsdl\\StructType\External_Payroll_EntityObjectType $payroll_Entity_Reference
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType
     */
    public function setPayroll_Entity_Reference(\WorkdayWsdl\\StructType\External_Payroll_EntityObjectType $payroll_Entity_Reference = null)
    {
        $this->Payroll_Entity_Reference = $payroll_Entity_Reference;
        return $this;
    }
    /**
     * Get External_Employee_Type_Reference value
     * @return \WorkdayWsdl\\StructType\External_Payroll_Employee_TypeObjectType|null
     */
    public function getExternal_Employee_Type_Reference()
    {
        return $this->External_Employee_Type_Reference;
    }
    /**
     * Set External_Employee_Type_Reference value
     * @param \WorkdayWsdl\\StructType\External_Payroll_Employee_TypeObjectType $external_Employee_Type_Reference
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType
     */
    public function setExternal_Employee_Type_Reference(\WorkdayWsdl\\StructType\External_Payroll_Employee_TypeObjectType $external_Employee_Type_Reference = null)
    {
        $this->External_Employee_Type_Reference = $external_Employee_Type_Reference;
        return $this;
    }
    /**
     * Get Payroll_File_Number value
     * @return string|null
     */
    public function getPayroll_File_Number()
    {
        return $this->Payroll_File_Number;
    }
    /**
     * Set Payroll_File_Number value
     * @param string $payroll_File_Number
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType
     */
    public function setPayroll_File_Number($payroll_File_Number = null)
    {
        // validation for constraint: string
        if (!is_null($payroll_File_Number) && !is_string($payroll_File_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payroll_File_Number, true), gettype($payroll_File_Number)), __LINE__);
        }
        $this->Payroll_File_Number = $payroll_File_Number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType
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
