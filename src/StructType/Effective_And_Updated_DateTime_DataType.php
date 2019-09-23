<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Effective_And_Updated_DateTime_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Updated From must be less than or equal to Updated Through! | If one of Updated From or Updated Through contains a value, both are Required! | If one of Effective From or Effective Through contains a value, both are Required! |
 * Effective From must be less than or equal to Effective Through! | Updated Through must be less than or equal to Current Moment! | Element contains effective and updated date/time data.
 * @subpackage Structs
 */
class Effective_And_Updated_DateTime_DataType extends AbstractStructBase
{
    /**
     * The Updated_From
     * Meta information extracted from the WSDL
     * - documentation: Defines the earliest moment (e.g. datetime) data was entered into the Workday system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Updated_From;
    /**
     * The Updated_Through
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest moment (e.g. datetime) data was entered into the Workday system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Updated_Through;
    /**
     * The Effective_From
     * Meta information extracted from the WSDL
     * - documentation: Defines the earliest Effective Date (e.g. As Of Date) data is marked within the Workday system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_From;
    /**
     * The Effective_Through
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest Effective Date (e.g. As Of Date) data is marked within the Workday system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Through;
    /**
     * Constructor method for Effective_And_Updated_DateTime_DataType
     * @uses Effective_And_Updated_DateTime_DataType::setUpdated_From()
     * @uses Effective_And_Updated_DateTime_DataType::setUpdated_Through()
     * @uses Effective_And_Updated_DateTime_DataType::setEffective_From()
     * @uses Effective_And_Updated_DateTime_DataType::setEffective_Through()
     * @param string $updated_From
     * @param string $updated_Through
     * @param string $effective_From
     * @param string $effective_Through
     */
    public function __construct($updated_From = null, $updated_Through = null, $effective_From = null, $effective_Through = null)
    {
        $this
            ->setUpdated_From($updated_From)
            ->setUpdated_Through($updated_Through)
            ->setEffective_From($effective_From)
            ->setEffective_Through($effective_Through);
    }
    /**
     * Get Updated_From value
     * @return string|null
     */
    public function getUpdated_From()
    {
        return $this->Updated_From;
    }
    /**
     * Set Updated_From value
     * @param string $updated_From
     * @return \WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType
     */
    public function setUpdated_From($updated_From = null)
    {
        // validation for constraint: string
        if (!is_null($updated_From) && !is_string($updated_From)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updated_From, true), gettype($updated_From)), __LINE__);
        }
        $this->Updated_From = $updated_From;
        return $this;
    }
    /**
     * Get Updated_Through value
     * @return string|null
     */
    public function getUpdated_Through()
    {
        return $this->Updated_Through;
    }
    /**
     * Set Updated_Through value
     * @param string $updated_Through
     * @return \WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType
     */
    public function setUpdated_Through($updated_Through = null)
    {
        // validation for constraint: string
        if (!is_null($updated_Through) && !is_string($updated_Through)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updated_Through, true), gettype($updated_Through)), __LINE__);
        }
        $this->Updated_Through = $updated_Through;
        return $this;
    }
    /**
     * Get Effective_From value
     * @return string|null
     */
    public function getEffective_From()
    {
        return $this->Effective_From;
    }
    /**
     * Set Effective_From value
     * @param string $effective_From
     * @return \WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType
     */
    public function setEffective_From($effective_From = null)
    {
        // validation for constraint: string
        if (!is_null($effective_From) && !is_string($effective_From)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_From, true), gettype($effective_From)), __LINE__);
        }
        $this->Effective_From = $effective_From;
        return $this;
    }
    /**
     * Get Effective_Through value
     * @return string|null
     */
    public function getEffective_Through()
    {
        return $this->Effective_Through;
    }
    /**
     * Set Effective_Through value
     * @param string $effective_Through
     * @return \WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType
     */
    public function setEffective_Through($effective_Through = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Through) && !is_string($effective_Through)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Through, true), gettype($effective_Through)), __LINE__);
        }
        $this->Effective_Through = $effective_Through;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType
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
