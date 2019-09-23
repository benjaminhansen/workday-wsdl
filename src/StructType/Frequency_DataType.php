<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Frequency_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the core frequency data
 * @subpackage Structs
 */
class Frequency_DataType extends AbstractStructBase
{
    /**
     * The Frequency_ID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier for the frequency
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Frequency_ID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The functional name for the frequency
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Annualization_Factor
     * Meta information extracted from the WSDL
     * - documentation: The number of occurrences within a year for a frequency (e.g. Yearly = 1, Monthly = 12, etc...)
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 10
     * @var float
     */
    public $Annualization_Factor;
    /**
     * The Frequency_Behavior_Reference
     * Meta information extracted from the WSDL
     * - documentation: A mapping to the internal Workday frequencies functionality. The values for this reference can be found using the "Integration IDs" task within the Workday application (Business Object = Frequency Behavior)
     * - minOccurs: 0
     * @var \StructType\Frequency_BehaviorObjectType
     */
    public $Frequency_Behavior_Reference;
    /**
     * The Use_Weekly_Hours
     * Meta information extracted from the WSDL
     * - documentation: A boolean flag indicating whether a worker's weekly hours should be used instead of a normal conversion rate when converting to/from hourly-based rates in Workday Compensation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Use_Weekly_Hours;
    /**
     * The Used_in_Payroll_Interface
     * Meta information extracted from the WSDL
     * - documentation: Identifies that the frequency is used in Payroll Interface
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Used_in_Payroll_Interface;
    /**
     * Constructor method for Frequency_DataType
     * @uses Frequency_DataType::setFrequency_ID()
     * @uses Frequency_DataType::setName()
     * @uses Frequency_DataType::setAnnualization_Factor()
     * @uses Frequency_DataType::setFrequency_Behavior_Reference()
     * @uses Frequency_DataType::setUse_Weekly_Hours()
     * @uses Frequency_DataType::setUsed_in_Payroll_Interface()
     * @param string $frequency_ID
     * @param string $name
     * @param float $annualization_Factor
     * @param \StructType\Frequency_BehaviorObjectType $frequency_Behavior_Reference
     * @param bool $use_Weekly_Hours
     * @param bool $used_in_Payroll_Interface
     */
    public function __construct($frequency_ID = null, $name = null, $annualization_Factor = null, \StructType\Frequency_BehaviorObjectType $frequency_Behavior_Reference = null, $use_Weekly_Hours = null, $used_in_Payroll_Interface = null)
    {
        $this
            ->setFrequency_ID($frequency_ID)
            ->setName($name)
            ->setAnnualization_Factor($annualization_Factor)
            ->setFrequency_Behavior_Reference($frequency_Behavior_Reference)
            ->setUse_Weekly_Hours($use_Weekly_Hours)
            ->setUsed_in_Payroll_Interface($used_in_Payroll_Interface);
    }
    /**
     * Get Frequency_ID value
     * @return string|null
     */
    public function getFrequency_ID()
    {
        return $this->Frequency_ID;
    }
    /**
     * Set Frequency_ID value
     * @param string $frequency_ID
     * @return \StructType\Frequency_DataType
     */
    public function setFrequency_ID($frequency_ID = null)
    {
        // validation for constraint: string
        if (!is_null($frequency_ID) && !is_string($frequency_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequency_ID, true), gettype($frequency_ID)), __LINE__);
        }
        $this->Frequency_ID = $frequency_ID;
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
     * @return \StructType\Frequency_DataType
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
     * Get Annualization_Factor value
     * @return float|null
     */
    public function getAnnualization_Factor()
    {
        return $this->Annualization_Factor;
    }
    /**
     * Set Annualization_Factor value
     * @param float $annualization_Factor
     * @return \StructType\Frequency_DataType
     */
    public function setAnnualization_Factor($annualization_Factor = null)
    {
        // validation for constraint: float
        if (!is_null($annualization_Factor) && !(is_float($annualization_Factor) || is_numeric($annualization_Factor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($annualization_Factor, true), gettype($annualization_Factor)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($annualization_Factor) && mb_strlen(mb_substr($annualization_Factor, mb_strpos($annualization_Factor, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($annualization_Factor, true), mb_strlen(mb_substr($annualization_Factor, mb_strpos($annualization_Factor, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($annualization_Factor) && $annualization_Factor < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($annualization_Factor, true)), __LINE__);
        }
        // validation for constraint: totalDigits(10)
        if (!is_null($annualization_Factor) && mb_strlen(preg_replace('/(\D)/', '', $annualization_Factor)) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 10 digits, "%d" given', var_export($annualization_Factor, true), mb_strlen(preg_replace('/(\D)/', '', $annualization_Factor))), __LINE__);
        }
        $this->Annualization_Factor = $annualization_Factor;
        return $this;
    }
    /**
     * Get Frequency_Behavior_Reference value
     * @return \StructType\Frequency_BehaviorObjectType|null
     */
    public function getFrequency_Behavior_Reference()
    {
        return $this->Frequency_Behavior_Reference;
    }
    /**
     * Set Frequency_Behavior_Reference value
     * @param \StructType\Frequency_BehaviorObjectType $frequency_Behavior_Reference
     * @return \StructType\Frequency_DataType
     */
    public function setFrequency_Behavior_Reference(\StructType\Frequency_BehaviorObjectType $frequency_Behavior_Reference = null)
    {
        $this->Frequency_Behavior_Reference = $frequency_Behavior_Reference;
        return $this;
    }
    /**
     * Get Use_Weekly_Hours value
     * @return bool|null
     */
    public function getUse_Weekly_Hours()
    {
        return $this->Use_Weekly_Hours;
    }
    /**
     * Set Use_Weekly_Hours value
     * @param bool $use_Weekly_Hours
     * @return \StructType\Frequency_DataType
     */
    public function setUse_Weekly_Hours($use_Weekly_Hours = null)
    {
        // validation for constraint: boolean
        if (!is_null($use_Weekly_Hours) && !is_bool($use_Weekly_Hours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($use_Weekly_Hours, true), gettype($use_Weekly_Hours)), __LINE__);
        }
        $this->Use_Weekly_Hours = $use_Weekly_Hours;
        return $this;
    }
    /**
     * Get Used_in_Payroll_Interface value
     * @return bool|null
     */
    public function getUsed_in_Payroll_Interface()
    {
        return $this->Used_in_Payroll_Interface;
    }
    /**
     * Set Used_in_Payroll_Interface value
     * @param bool $used_in_Payroll_Interface
     * @return \StructType\Frequency_DataType
     */
    public function setUsed_in_Payroll_Interface($used_in_Payroll_Interface = null)
    {
        // validation for constraint: boolean
        if (!is_null($used_in_Payroll_Interface) && !is_bool($used_in_Payroll_Interface)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($used_in_Payroll_Interface, true), gettype($used_in_Payroll_Interface)), __LINE__);
        }
        $this->Used_in_Payroll_Interface = $used_in_Payroll_Interface;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Frequency_DataType
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
