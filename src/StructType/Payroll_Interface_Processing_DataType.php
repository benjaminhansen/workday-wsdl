<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payroll_Interface_Processing_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg all Payroll Interface Processing data.
 * @subpackage Structs
 */
class Payroll_Interface_Processing_DataType extends AbstractStructBase
{
    /**
     * The Pay_Rate_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the pay rate type for the position.
     * - minOccurs: 0
     * @var \StructType\Pay_Rate_Type_ReferenceType
     */
    public $Pay_Rate_Type_Reference;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Frequency.
     * - minOccurs: 0
     * @var \StructType\Frequency_Reference_DataType
     */
    public $Frequency_Reference;
    /**
     * The Pay_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: The external pay group for the position.
     * - minOccurs: 0
     * @var \StructType\External_Pay_Group_ReferenceType
     */
    public $Pay_Group_Reference;
    /**
     * The Payroll_Entity_Reference
     * Meta information extracted from the WSDL
     * - documentation: The external payroll entity for the position.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\External_Payroll_Entity_ReferenceType[]
     */
    public $Payroll_Entity_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date for Payroll Interface Processing.
     * @var string
     */
    public $Effective_Date;
    /**
     * Constructor method for Payroll_Interface_Processing_DataType
     * @uses Payroll_Interface_Processing_DataType::setPay_Rate_Type_Reference()
     * @uses Payroll_Interface_Processing_DataType::setFrequency_Reference()
     * @uses Payroll_Interface_Processing_DataType::setPay_Group_Reference()
     * @uses Payroll_Interface_Processing_DataType::setPayroll_Entity_Reference()
     * @uses Payroll_Interface_Processing_DataType::setEffective_Date()
     * @param \StructType\Pay_Rate_Type_ReferenceType $pay_Rate_Type_Reference
     * @param \StructType\Frequency_Reference_DataType $frequency_Reference
     * @param \StructType\External_Pay_Group_ReferenceType $pay_Group_Reference
     * @param \StructType\External_Payroll_Entity_ReferenceType[] $payroll_Entity_Reference
     * @param string $effective_Date
     */
    public function __construct(\StructType\Pay_Rate_Type_ReferenceType $pay_Rate_Type_Reference = null, \StructType\Frequency_Reference_DataType $frequency_Reference = null, \StructType\External_Pay_Group_ReferenceType $pay_Group_Reference = null, array $payroll_Entity_Reference = array(), $effective_Date = null)
    {
        $this
            ->setPay_Rate_Type_Reference($pay_Rate_Type_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setPay_Group_Reference($pay_Group_Reference)
            ->setPayroll_Entity_Reference($payroll_Entity_Reference)
            ->setEffective_Date($effective_Date);
    }
    /**
     * Get Pay_Rate_Type_Reference value
     * @return \StructType\Pay_Rate_Type_ReferenceType|null
     */
    public function getPay_Rate_Type_Reference()
    {
        return $this->Pay_Rate_Type_Reference;
    }
    /**
     * Set Pay_Rate_Type_Reference value
     * @param \StructType\Pay_Rate_Type_ReferenceType $pay_Rate_Type_Reference
     * @return \StructType\Payroll_Interface_Processing_DataType
     */
    public function setPay_Rate_Type_Reference(\StructType\Pay_Rate_Type_ReferenceType $pay_Rate_Type_Reference = null)
    {
        $this->Pay_Rate_Type_Reference = $pay_Rate_Type_Reference;
        return $this;
    }
    /**
     * Get Frequency_Reference value
     * @return \StructType\Frequency_Reference_DataType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \StructType\Frequency_Reference_DataType $frequency_Reference
     * @return \StructType\Payroll_Interface_Processing_DataType
     */
    public function setFrequency_Reference(\StructType\Frequency_Reference_DataType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Pay_Group_Reference value
     * @return \StructType\External_Pay_Group_ReferenceType|null
     */
    public function getPay_Group_Reference()
    {
        return $this->Pay_Group_Reference;
    }
    /**
     * Set Pay_Group_Reference value
     * @param \StructType\External_Pay_Group_ReferenceType $pay_Group_Reference
     * @return \StructType\Payroll_Interface_Processing_DataType
     */
    public function setPay_Group_Reference(\StructType\External_Pay_Group_ReferenceType $pay_Group_Reference = null)
    {
        $this->Pay_Group_Reference = $pay_Group_Reference;
        return $this;
    }
    /**
     * Get Payroll_Entity_Reference value
     * @return \StructType\External_Payroll_Entity_ReferenceType[]|null
     */
    public function getPayroll_Entity_Reference()
    {
        return $this->Payroll_Entity_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPayroll_Entity_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayroll_Entity_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePayroll_Entity_ReferenceForArrayConstraintsFromSetPayroll_Entity_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $payroll_Interface_Processing_DataTypePayroll_Entity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$payroll_Interface_Processing_DataTypePayroll_Entity_ReferenceItem instanceof \StructType\External_Payroll_Entity_ReferenceType) {
                $invalidValues[] = is_object($payroll_Interface_Processing_DataTypePayroll_Entity_ReferenceItem) ? get_class($payroll_Interface_Processing_DataTypePayroll_Entity_ReferenceItem) : sprintf('%s(%s)', gettype($payroll_Interface_Processing_DataTypePayroll_Entity_ReferenceItem), var_export($payroll_Interface_Processing_DataTypePayroll_Entity_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payroll_Entity_Reference property can only contain items of type \StructType\External_Payroll_Entity_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Payroll_Entity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\External_Payroll_Entity_ReferenceType[] $payroll_Entity_Reference
     * @return \StructType\Payroll_Interface_Processing_DataType
     */
    public function setPayroll_Entity_Reference(array $payroll_Entity_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($payroll_Entity_ReferenceArrayErrorMessage = self::validatePayroll_Entity_ReferenceForArrayConstraintsFromSetPayroll_Entity_Reference($payroll_Entity_Reference))) {
            throw new \InvalidArgumentException($payroll_Entity_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Payroll_Entity_Reference = $payroll_Entity_Reference;
        return $this;
    }
    /**
     * Add item to Payroll_Entity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\External_Payroll_Entity_ReferenceType $item
     * @return \StructType\Payroll_Interface_Processing_DataType
     */
    public function addToPayroll_Entity_Reference(\StructType\External_Payroll_Entity_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\External_Payroll_Entity_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Payroll_Entity_Reference property can only contain items of type \StructType\External_Payroll_Entity_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Payroll_Entity_Reference[] = $item;
        return $this;
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
     * @return \StructType\Payroll_Interface_Processing_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Payroll_Interface_Processing_DataType
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
