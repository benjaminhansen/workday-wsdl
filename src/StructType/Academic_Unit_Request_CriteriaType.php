<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Unit_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Criteria
 * @subpackage Structs
 */
class Academic_Unit_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Name
     * Meta information extracted from the WSDL
     * - documentation: The Name of the Academic Unit
     * - maxOccurs: 1
     * @var string
     */
    public $Academic_Unit_Name;
    /**
     * The Effective_As_Of_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective As of Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_As_Of_Date;
    /**
     * Constructor method for Academic_Unit_Request_CriteriaType
     * @uses Academic_Unit_Request_CriteriaType::setAcademic_Unit_Name()
     * @uses Academic_Unit_Request_CriteriaType::setEffective_As_Of_Date()
     * @param string $academic_Unit_Name
     * @param string $effective_As_Of_Date
     */
    public function __construct($academic_Unit_Name = null, $effective_As_Of_Date = null)
    {
        $this
            ->setAcademic_Unit_Name($academic_Unit_Name)
            ->setEffective_As_Of_Date($effective_As_Of_Date);
    }
    /**
     * Get Academic_Unit_Name value
     * @return string|null
     */
    public function getAcademic_Unit_Name()
    {
        return $this->Academic_Unit_Name;
    }
    /**
     * Set Academic_Unit_Name value
     * @param string $academic_Unit_Name
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Request_CriteriaType
     */
    public function setAcademic_Unit_Name($academic_Unit_Name = null)
    {
        // validation for constraint: string
        if (!is_null($academic_Unit_Name) && !is_string($academic_Unit_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academic_Unit_Name, true), gettype($academic_Unit_Name)), __LINE__);
        }
        $this->Academic_Unit_Name = $academic_Unit_Name;
        return $this;
    }
    /**
     * Get Effective_As_Of_Date value
     * @return string|null
     */
    public function getEffective_As_Of_Date()
    {
        return $this->Effective_As_Of_Date;
    }
    /**
     * Set Effective_As_Of_Date value
     * @param string $effective_As_Of_Date
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Request_CriteriaType
     */
    public function setEffective_As_Of_Date($effective_As_Of_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_As_Of_Date) && !is_string($effective_As_Of_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_As_Of_Date, true), gettype($effective_As_Of_Date)), __LINE__);
        }
        $this->Effective_As_Of_Date = $effective_As_Of_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Request_CriteriaType
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
