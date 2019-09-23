<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Synonym_Webservice_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: A synonym which maps a single workday term to one or more custom terms
 * @subpackage Structs
 */
class Synonym_Webservice_DataType extends AbstractStructBase
{
    /**
     * The Workday_Term
     * Meta information extracted from the WSDL
     * - documentation: The workday term, i.e. "time off"
     * - maxOccurs: 1
     * @var string
     */
    public $Workday_Term;
    /**
     * The Custom_Terms
     * Meta information extracted from the WSDL
     * - documentation: The customer terms, i.e. "PTO, vacation"
     * - maxOccurs: 1
     * @var string
     */
    public $Custom_Terms;
    /**
     * Constructor method for Synonym_Webservice_DataType
     * @uses Synonym_Webservice_DataType::setWorkday_Term()
     * @uses Synonym_Webservice_DataType::setCustom_Terms()
     * @param string $workday_Term
     * @param string $custom_Terms
     */
    public function __construct($workday_Term = null, $custom_Terms = null)
    {
        $this
            ->setWorkday_Term($workday_Term)
            ->setCustom_Terms($custom_Terms);
    }
    /**
     * Get Workday_Term value
     * @return string|null
     */
    public function getWorkday_Term()
    {
        return $this->Workday_Term;
    }
    /**
     * Set Workday_Term value
     * @param string $workday_Term
     * @return \WorkdayWsdl\\StructType\Synonym_Webservice_DataType
     */
    public function setWorkday_Term($workday_Term = null)
    {
        // validation for constraint: string
        if (!is_null($workday_Term) && !is_string($workday_Term)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workday_Term, true), gettype($workday_Term)), __LINE__);
        }
        $this->Workday_Term = $workday_Term;
        return $this;
    }
    /**
     * Get Custom_Terms value
     * @return string|null
     */
    public function getCustom_Terms()
    {
        return $this->Custom_Terms;
    }
    /**
     * Set Custom_Terms value
     * @param string $custom_Terms
     * @return \WorkdayWsdl\\StructType\Synonym_Webservice_DataType
     */
    public function setCustom_Terms($custom_Terms = null)
    {
        // validation for constraint: string
        if (!is_null($custom_Terms) && !is_string($custom_Terms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custom_Terms, true), gettype($custom_Terms)), __LINE__);
        }
        $this->Custom_Terms = $custom_Terms;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Synonym_Webservice_DataType
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
