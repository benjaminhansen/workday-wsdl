<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Benefit_Enrollment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the worker's benefits information.Security Note: This element is secured to the following domains: Self Service: Benefit Elections; Worker Data: Benefit Elections
 * @subpackage Structs
 */
class Worker_Benefit_Enrollment_DataType extends AbstractStructBase
{
    /**
     * The Health_Care_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the health care data for an employee.
     * - minOccurs: 0
     * @var \StructType\Worker_Health_Care_DataType
     */
    public $Health_Care_Data;
    /**
     * The Health_Savings_Account_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the health savings account information for an employee.
     * - minOccurs: 0
     * @var \StructType\Worker_Health_Savings_Account_DataType
     */
    public $Health_Savings_Account_Data;
    /**
     * The Spending_Account_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the spending account information for an employee.
     * - minOccurs: 0
     * @var \StructType\Worker_Spending_Account_DataType
     */
    public $Spending_Account_Data;
    /**
     * The Insurance_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Insurance_DataType
     */
    public $Insurance_Data;
    /**
     * The Retirement_Savings_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Retirement_Savings_DataType
     */
    public $Retirement_Savings_Data;
    /**
     * The Additional_Benefits_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the additional benefits data for an employee.
     * - minOccurs: 0
     * @var \StructType\Worker_Additional_Benefits_DataType
     */
    public $Additional_Benefits_Data;
    /**
     * The COBRA_Eligibility_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains COBRA Eligibility detail for a participant. If this element is not populated then the participant is assumed to not be COBRA eligible.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\COBRA_Eligibility_DataType[]
     */
    public $COBRA_Eligibility_Data;
    /**
     * Constructor method for Worker_Benefit_Enrollment_DataType
     * @uses Worker_Benefit_Enrollment_DataType::setHealth_Care_Data()
     * @uses Worker_Benefit_Enrollment_DataType::setHealth_Savings_Account_Data()
     * @uses Worker_Benefit_Enrollment_DataType::setSpending_Account_Data()
     * @uses Worker_Benefit_Enrollment_DataType::setInsurance_Data()
     * @uses Worker_Benefit_Enrollment_DataType::setRetirement_Savings_Data()
     * @uses Worker_Benefit_Enrollment_DataType::setAdditional_Benefits_Data()
     * @uses Worker_Benefit_Enrollment_DataType::setCOBRA_Eligibility_Data()
     * @param \StructType\Worker_Health_Care_DataType $health_Care_Data
     * @param \StructType\Worker_Health_Savings_Account_DataType $health_Savings_Account_Data
     * @param \StructType\Worker_Spending_Account_DataType $spending_Account_Data
     * @param \StructType\Worker_Insurance_DataType $insurance_Data
     * @param \StructType\Retirement_Savings_DataType $retirement_Savings_Data
     * @param \StructType\Worker_Additional_Benefits_DataType $additional_Benefits_Data
     * @param \StructType\COBRA_Eligibility_DataType[] $cOBRA_Eligibility_Data
     */
    public function __construct(\StructType\Worker_Health_Care_DataType $health_Care_Data = null, \StructType\Worker_Health_Savings_Account_DataType $health_Savings_Account_Data = null, \StructType\Worker_Spending_Account_DataType $spending_Account_Data = null, \StructType\Worker_Insurance_DataType $insurance_Data = null, \StructType\Retirement_Savings_DataType $retirement_Savings_Data = null, \StructType\Worker_Additional_Benefits_DataType $additional_Benefits_Data = null, array $cOBRA_Eligibility_Data = array())
    {
        $this
            ->setHealth_Care_Data($health_Care_Data)
            ->setHealth_Savings_Account_Data($health_Savings_Account_Data)
            ->setSpending_Account_Data($spending_Account_Data)
            ->setInsurance_Data($insurance_Data)
            ->setRetirement_Savings_Data($retirement_Savings_Data)
            ->setAdditional_Benefits_Data($additional_Benefits_Data)
            ->setCOBRA_Eligibility_Data($cOBRA_Eligibility_Data);
    }
    /**
     * Get Health_Care_Data value
     * @return \StructType\Worker_Health_Care_DataType|null
     */
    public function getHealth_Care_Data()
    {
        return $this->Health_Care_Data;
    }
    /**
     * Set Health_Care_Data value
     * @param \StructType\Worker_Health_Care_DataType $health_Care_Data
     * @return \StructType\Worker_Benefit_Enrollment_DataType
     */
    public function setHealth_Care_Data(\StructType\Worker_Health_Care_DataType $health_Care_Data = null)
    {
        $this->Health_Care_Data = $health_Care_Data;
        return $this;
    }
    /**
     * Get Health_Savings_Account_Data value
     * @return \StructType\Worker_Health_Savings_Account_DataType|null
     */
    public function getHealth_Savings_Account_Data()
    {
        return $this->Health_Savings_Account_Data;
    }
    /**
     * Set Health_Savings_Account_Data value
     * @param \StructType\Worker_Health_Savings_Account_DataType $health_Savings_Account_Data
     * @return \StructType\Worker_Benefit_Enrollment_DataType
     */
    public function setHealth_Savings_Account_Data(\StructType\Worker_Health_Savings_Account_DataType $health_Savings_Account_Data = null)
    {
        $this->Health_Savings_Account_Data = $health_Savings_Account_Data;
        return $this;
    }
    /**
     * Get Spending_Account_Data value
     * @return \StructType\Worker_Spending_Account_DataType|null
     */
    public function getSpending_Account_Data()
    {
        return $this->Spending_Account_Data;
    }
    /**
     * Set Spending_Account_Data value
     * @param \StructType\Worker_Spending_Account_DataType $spending_Account_Data
     * @return \StructType\Worker_Benefit_Enrollment_DataType
     */
    public function setSpending_Account_Data(\StructType\Worker_Spending_Account_DataType $spending_Account_Data = null)
    {
        $this->Spending_Account_Data = $spending_Account_Data;
        return $this;
    }
    /**
     * Get Insurance_Data value
     * @return \StructType\Worker_Insurance_DataType|null
     */
    public function getInsurance_Data()
    {
        return $this->Insurance_Data;
    }
    /**
     * Set Insurance_Data value
     * @param \StructType\Worker_Insurance_DataType $insurance_Data
     * @return \StructType\Worker_Benefit_Enrollment_DataType
     */
    public function setInsurance_Data(\StructType\Worker_Insurance_DataType $insurance_Data = null)
    {
        $this->Insurance_Data = $insurance_Data;
        return $this;
    }
    /**
     * Get Retirement_Savings_Data value
     * @return \StructType\Retirement_Savings_DataType|null
     */
    public function getRetirement_Savings_Data()
    {
        return $this->Retirement_Savings_Data;
    }
    /**
     * Set Retirement_Savings_Data value
     * @param \StructType\Retirement_Savings_DataType $retirement_Savings_Data
     * @return \StructType\Worker_Benefit_Enrollment_DataType
     */
    public function setRetirement_Savings_Data(\StructType\Retirement_Savings_DataType $retirement_Savings_Data = null)
    {
        $this->Retirement_Savings_Data = $retirement_Savings_Data;
        return $this;
    }
    /**
     * Get Additional_Benefits_Data value
     * @return \StructType\Worker_Additional_Benefits_DataType|null
     */
    public function getAdditional_Benefits_Data()
    {
        return $this->Additional_Benefits_Data;
    }
    /**
     * Set Additional_Benefits_Data value
     * @param \StructType\Worker_Additional_Benefits_DataType $additional_Benefits_Data
     * @return \StructType\Worker_Benefit_Enrollment_DataType
     */
    public function setAdditional_Benefits_Data(\StructType\Worker_Additional_Benefits_DataType $additional_Benefits_Data = null)
    {
        $this->Additional_Benefits_Data = $additional_Benefits_Data;
        return $this;
    }
    /**
     * Get COBRA_Eligibility_Data value
     * @return \StructType\COBRA_Eligibility_DataType[]|null
     */
    public function getCOBRA_Eligibility_Data()
    {
        return $this->COBRA_Eligibility_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCOBRA_Eligibility_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCOBRA_Eligibility_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCOBRA_Eligibility_DataForArrayConstraintsFromSetCOBRA_Eligibility_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Benefit_Enrollment_DataTypeCOBRA_Eligibility_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Benefit_Enrollment_DataTypeCOBRA_Eligibility_DataItem instanceof \StructType\COBRA_Eligibility_DataType) {
                $invalidValues[] = is_object($worker_Benefit_Enrollment_DataTypeCOBRA_Eligibility_DataItem) ? get_class($worker_Benefit_Enrollment_DataTypeCOBRA_Eligibility_DataItem) : sprintf('%s(%s)', gettype($worker_Benefit_Enrollment_DataTypeCOBRA_Eligibility_DataItem), var_export($worker_Benefit_Enrollment_DataTypeCOBRA_Eligibility_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The COBRA_Eligibility_Data property can only contain items of type \StructType\COBRA_Eligibility_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set COBRA_Eligibility_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\COBRA_Eligibility_DataType[] $cOBRA_Eligibility_Data
     * @return \StructType\Worker_Benefit_Enrollment_DataType
     */
    public function setCOBRA_Eligibility_Data(array $cOBRA_Eligibility_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($cOBRA_Eligibility_DataArrayErrorMessage = self::validateCOBRA_Eligibility_DataForArrayConstraintsFromSetCOBRA_Eligibility_Data($cOBRA_Eligibility_Data))) {
            throw new \InvalidArgumentException($cOBRA_Eligibility_DataArrayErrorMessage, __LINE__);
        }
        $this->COBRA_Eligibility_Data = $cOBRA_Eligibility_Data;
        return $this;
    }
    /**
     * Add item to COBRA_Eligibility_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\COBRA_Eligibility_DataType $item
     * @return \StructType\Worker_Benefit_Enrollment_DataType
     */
    public function addToCOBRA_Eligibility_Data(\StructType\COBRA_Eligibility_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\COBRA_Eligibility_DataType) {
            throw new \InvalidArgumentException(sprintf('The COBRA_Eligibility_Data property can only contain items of type \StructType\COBRA_Eligibility_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->COBRA_Eligibility_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Benefit_Enrollment_DataType
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
