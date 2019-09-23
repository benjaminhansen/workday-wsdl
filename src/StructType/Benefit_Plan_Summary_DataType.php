<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Benefit_Plan_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the summary information about the benefit provider of the benefit plan.
 * @subpackage Structs
 */
class Benefit_Plan_Summary_DataType extends AbstractStructBase
{
    /**
     * The Benefit_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference for the benefit plan.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Benefit_PlanObjectType
     */
    public $Benefit_Plan_Reference;
    /**
     * The Benefit_Plan_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the benefit plan.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Benefit_Plan_Name;
    /**
     * The Group_Identifier
     * Meta information extracted from the WSDL
     * - documentation: The group identifier of the benefit plan.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Group_Identifier;
    /**
     * The Benefit_Coverage_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of coverage that the benefit plan is for.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType
     */
    public $Benefit_Coverage_Type_Reference;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: The default currency of the benefit plan.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: The default currency of the benefit plan.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * The Health_Care_Classification_Reference
     * Meta information extracted from the WSDL
     * - documentation: The classification of the health care plan.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Health_Care_ClassificationObjectType
     */
    public $Health_Care_Classification_Reference;
    /**
     * The Insurance_Coverage_Target_Reference
     * Meta information extracted from the WSDL
     * - documentation: The insurance coverage target for the insurance plan.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType
     */
    public $Insurance_Coverage_Target_Reference;
    /**
     * The Benefit_Provider_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the summary information about the benefit provider of the benefit plan.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType
     */
    public $Benefit_Provider_Summary_Data;
    /**
     * The External_Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $External_Integration_ID_Data;
    /**
     * The Pay_Component_Reference
     * Meta information extracted from the WSDL
     * - documentation: Pay Component Reference for the Benefit Plan
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Pay_ComponentObjectType[]
     */
    public $Pay_Component_Reference;
    /**
     * Constructor method for Benefit_Plan_Summary_DataType
     * @uses Benefit_Plan_Summary_DataType::setBenefit_Plan_Reference()
     * @uses Benefit_Plan_Summary_DataType::setBenefit_Plan_Name()
     * @uses Benefit_Plan_Summary_DataType::setGroup_Identifier()
     * @uses Benefit_Plan_Summary_DataType::setBenefit_Coverage_Type_Reference()
     * @uses Benefit_Plan_Summary_DataType::setCurrency_Reference()
     * @uses Benefit_Plan_Summary_DataType::setFrequency_Reference()
     * @uses Benefit_Plan_Summary_DataType::setHealth_Care_Classification_Reference()
     * @uses Benefit_Plan_Summary_DataType::setInsurance_Coverage_Target_Reference()
     * @uses Benefit_Plan_Summary_DataType::setBenefit_Provider_Summary_Data()
     * @uses Benefit_Plan_Summary_DataType::setExternal_Integration_ID_Data()
     * @uses Benefit_Plan_Summary_DataType::setPay_Component_Reference()
     * @param \WorkdayWsdl\\StructType\Benefit_PlanObjectType $benefit_Plan_Reference
     * @param string $benefit_Plan_Name
     * @param string $group_Identifier
     * @param \WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType $benefit_Coverage_Type_Reference
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @param \WorkdayWsdl\\StructType\Health_Care_ClassificationObjectType $health_Care_Classification_Reference
     * @param \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType $insurance_Coverage_Target_Reference
     * @param \WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType $benefit_Provider_Summary_Data
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $external_Integration_ID_Data
     * @param \WorkdayWsdl\\StructType\Pay_ComponentObjectType[] $pay_Component_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Benefit_PlanObjectType $benefit_Plan_Reference = null, $benefit_Plan_Name = null, $group_Identifier = null, \WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType $benefit_Coverage_Type_Reference = null, \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null, \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null, \WorkdayWsdl\\StructType\Health_Care_ClassificationObjectType $health_Care_Classification_Reference = null, \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType $insurance_Coverage_Target_Reference = null, \WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType $benefit_Provider_Summary_Data = null, \WorkdayWsdl\\StructType\External_Integration_ID_DataType $external_Integration_ID_Data = null, array $pay_Component_Reference = array())
    {
        $this
            ->setBenefit_Plan_Reference($benefit_Plan_Reference)
            ->setBenefit_Plan_Name($benefit_Plan_Name)
            ->setGroup_Identifier($group_Identifier)
            ->setBenefit_Coverage_Type_Reference($benefit_Coverage_Type_Reference)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setHealth_Care_Classification_Reference($health_Care_Classification_Reference)
            ->setInsurance_Coverage_Target_Reference($insurance_Coverage_Target_Reference)
            ->setBenefit_Provider_Summary_Data($benefit_Provider_Summary_Data)
            ->setExternal_Integration_ID_Data($external_Integration_ID_Data)
            ->setPay_Component_Reference($pay_Component_Reference);
    }
    /**
     * Get Benefit_Plan_Reference value
     * @return \WorkdayWsdl\\StructType\Benefit_PlanObjectType|null
     */
    public function getBenefit_Plan_Reference()
    {
        return $this->Benefit_Plan_Reference;
    }
    /**
     * Set Benefit_Plan_Reference value
     * @param \WorkdayWsdl\\StructType\Benefit_PlanObjectType $benefit_Plan_Reference
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setBenefit_Plan_Reference(\WorkdayWsdl\\StructType\Benefit_PlanObjectType $benefit_Plan_Reference = null)
    {
        $this->Benefit_Plan_Reference = $benefit_Plan_Reference;
        return $this;
    }
    /**
     * Get Benefit_Plan_Name value
     * @return string|null
     */
    public function getBenefit_Plan_Name()
    {
        return $this->Benefit_Plan_Name;
    }
    /**
     * Set Benefit_Plan_Name value
     * @param string $benefit_Plan_Name
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setBenefit_Plan_Name($benefit_Plan_Name = null)
    {
        // validation for constraint: string
        if (!is_null($benefit_Plan_Name) && !is_string($benefit_Plan_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benefit_Plan_Name, true), gettype($benefit_Plan_Name)), __LINE__);
        }
        $this->Benefit_Plan_Name = $benefit_Plan_Name;
        return $this;
    }
    /**
     * Get Group_Identifier value
     * @return string|null
     */
    public function getGroup_Identifier()
    {
        return $this->Group_Identifier;
    }
    /**
     * Set Group_Identifier value
     * @param string $group_Identifier
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setGroup_Identifier($group_Identifier = null)
    {
        // validation for constraint: string
        if (!is_null($group_Identifier) && !is_string($group_Identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group_Identifier, true), gettype($group_Identifier)), __LINE__);
        }
        $this->Group_Identifier = $group_Identifier;
        return $this;
    }
    /**
     * Get Benefit_Coverage_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType|null
     */
    public function getBenefit_Coverage_Type_Reference()
    {
        return $this->Benefit_Coverage_Type_Reference;
    }
    /**
     * Set Benefit_Coverage_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType $benefit_Coverage_Type_Reference
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setBenefit_Coverage_Type_Reference(\WorkdayWsdl\\StructType\Benefit_Coverage_TypeObjectType $benefit_Coverage_Type_Reference = null)
    {
        $this->Benefit_Coverage_Type_Reference = $benefit_Coverage_Type_Reference;
        return $this;
    }
    /**
     * Get Currency_Reference value
     * @return \WorkdayWsdl\\StructType\CurrencyObjectType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
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
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Health_Care_Classification_Reference value
     * @return \WorkdayWsdl\\StructType\Health_Care_ClassificationObjectType|null
     */
    public function getHealth_Care_Classification_Reference()
    {
        return $this->Health_Care_Classification_Reference;
    }
    /**
     * Set Health_Care_Classification_Reference value
     * @param \WorkdayWsdl\\StructType\Health_Care_ClassificationObjectType $health_Care_Classification_Reference
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setHealth_Care_Classification_Reference(\WorkdayWsdl\\StructType\Health_Care_ClassificationObjectType $health_Care_Classification_Reference = null)
    {
        $this->Health_Care_Classification_Reference = $health_Care_Classification_Reference;
        return $this;
    }
    /**
     * Get Insurance_Coverage_Target_Reference value
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType|null
     */
    public function getInsurance_Coverage_Target_Reference()
    {
        return $this->Insurance_Coverage_Target_Reference;
    }
    /**
     * Set Insurance_Coverage_Target_Reference value
     * @param \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType $insurance_Coverage_Target_Reference
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setInsurance_Coverage_Target_Reference(\WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType $insurance_Coverage_Target_Reference = null)
    {
        $this->Insurance_Coverage_Target_Reference = $insurance_Coverage_Target_Reference;
        return $this;
    }
    /**
     * Get Benefit_Provider_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType|null
     */
    public function getBenefit_Provider_Summary_Data()
    {
        return $this->Benefit_Provider_Summary_Data;
    }
    /**
     * Set Benefit_Provider_Summary_Data value
     * @param \WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType $benefit_Provider_Summary_Data
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setBenefit_Provider_Summary_Data(\WorkdayWsdl\\StructType\Benefit_Provider_Summary_DataType $benefit_Provider_Summary_Data = null)
    {
        $this->Benefit_Provider_Summary_Data = $benefit_Provider_Summary_Data;
        return $this;
    }
    /**
     * Get External_Integration_ID_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType|null
     */
    public function getExternal_Integration_ID_Data()
    {
        return $this->External_Integration_ID_Data;
    }
    /**
     * Set External_Integration_ID_Data value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $external_Integration_ID_Data
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setExternal_Integration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $external_Integration_ID_Data = null)
    {
        $this->External_Integration_ID_Data = $external_Integration_ID_Data;
        return $this;
    }
    /**
     * Get Pay_Component_Reference value
     * @return \WorkdayWsdl\\StructType\Pay_ComponentObjectType[]|null
     */
    public function getPay_Component_Reference()
    {
        return $this->Pay_Component_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPay_Component_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPay_Component_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePay_Component_ReferenceForArrayConstraintsFromSetPay_Component_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $benefit_Plan_Summary_DataTypePay_Component_ReferenceItem) {
            // validation for constraint: itemType
            if (!$benefit_Plan_Summary_DataTypePay_Component_ReferenceItem instanceof \WorkdayWsdl\\StructType\Pay_ComponentObjectType) {
                $invalidValues[] = is_object($benefit_Plan_Summary_DataTypePay_Component_ReferenceItem) ? get_class($benefit_Plan_Summary_DataTypePay_Component_ReferenceItem) : sprintf('%s(%s)', gettype($benefit_Plan_Summary_DataTypePay_Component_ReferenceItem), var_export($benefit_Plan_Summary_DataTypePay_Component_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pay_Component_Reference property can only contain items of type \WorkdayWsdl\\StructType\Pay_ComponentObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pay_Component_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Pay_ComponentObjectType[] $pay_Component_Reference
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function setPay_Component_Reference(array $pay_Component_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($pay_Component_ReferenceArrayErrorMessage = self::validatePay_Component_ReferenceForArrayConstraintsFromSetPay_Component_Reference($pay_Component_Reference))) {
            throw new \InvalidArgumentException($pay_Component_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Pay_Component_Reference = $pay_Component_Reference;
        return $this;
    }
    /**
     * Add item to Pay_Component_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Pay_ComponentObjectType $item
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
     */
    public function addToPay_Component_Reference(\WorkdayWsdl\\StructType\Pay_ComponentObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Pay_ComponentObjectType) {
            throw new \InvalidArgumentException(sprintf('The Pay_Component_Reference property can only contain items of type \WorkdayWsdl\\StructType\Pay_ComponentObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pay_Component_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Benefit_Plan_Summary_DataType
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
