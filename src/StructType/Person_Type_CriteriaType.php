<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Type_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides selection for filtering the response
 * @subpackage Structs
 */
class Person_Type_CriteriaType extends AbstractStructBase
{
    /**
     * The Include_Academic_Affiliates
     * Meta information extracted from the WSDL
     * - documentation: Include Academic Affiliates
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Academic_Affiliates;
    /**
     * The Include_External_Committee_Members
     * Meta information extracted from the WSDL
     * - documentation: Include External Committee Members
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_External_Committee_Members;
    /**
     * The Include_External_Student_Records
     * Meta information extracted from the WSDL
     * - documentation: Include External Student Records
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_External_Student_Records;
    /**
     * The Include_Student_Prospect_Records
     * Meta information extracted from the WSDL
     * - documentation: Include Student Prospect Records
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Student_Prospect_Records;
    /**
     * The Include_Student_Records
     * Meta information extracted from the WSDL
     * - documentation: Include Student Records
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Student_Records;
    /**
     * The Include_Workers
     * Meta information extracted from the WSDL
     * - documentation: Include Workers
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Workers;
    /**
     * Constructor method for Person_Type_CriteriaType
     * @uses Person_Type_CriteriaType::setInclude_Academic_Affiliates()
     * @uses Person_Type_CriteriaType::setInclude_External_Committee_Members()
     * @uses Person_Type_CriteriaType::setInclude_External_Student_Records()
     * @uses Person_Type_CriteriaType::setInclude_Student_Prospect_Records()
     * @uses Person_Type_CriteriaType::setInclude_Student_Records()
     * @uses Person_Type_CriteriaType::setInclude_Workers()
     * @param bool $include_Academic_Affiliates
     * @param bool $include_External_Committee_Members
     * @param bool $include_External_Student_Records
     * @param bool $include_Student_Prospect_Records
     * @param bool $include_Student_Records
     * @param bool $include_Workers
     */
    public function __construct($include_Academic_Affiliates = null, $include_External_Committee_Members = null, $include_External_Student_Records = null, $include_Student_Prospect_Records = null, $include_Student_Records = null, $include_Workers = null)
    {
        $this
            ->setInclude_Academic_Affiliates($include_Academic_Affiliates)
            ->setInclude_External_Committee_Members($include_External_Committee_Members)
            ->setInclude_External_Student_Records($include_External_Student_Records)
            ->setInclude_Student_Prospect_Records($include_Student_Prospect_Records)
            ->setInclude_Student_Records($include_Student_Records)
            ->setInclude_Workers($include_Workers);
    }
    /**
     * Get Include_Academic_Affiliates value
     * @return bool|null
     */
    public function getInclude_Academic_Affiliates()
    {
        return $this->Include_Academic_Affiliates;
    }
    /**
     * Set Include_Academic_Affiliates value
     * @param bool $include_Academic_Affiliates
     * @return \StructType\Person_Type_CriteriaType
     */
    public function setInclude_Academic_Affiliates($include_Academic_Affiliates = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Academic_Affiliates) && !is_bool($include_Academic_Affiliates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Academic_Affiliates, true), gettype($include_Academic_Affiliates)), __LINE__);
        }
        $this->Include_Academic_Affiliates = $include_Academic_Affiliates;
        return $this;
    }
    /**
     * Get Include_External_Committee_Members value
     * @return bool|null
     */
    public function getInclude_External_Committee_Members()
    {
        return $this->Include_External_Committee_Members;
    }
    /**
     * Set Include_External_Committee_Members value
     * @param bool $include_External_Committee_Members
     * @return \StructType\Person_Type_CriteriaType
     */
    public function setInclude_External_Committee_Members($include_External_Committee_Members = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_External_Committee_Members) && !is_bool($include_External_Committee_Members)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_External_Committee_Members, true), gettype($include_External_Committee_Members)), __LINE__);
        }
        $this->Include_External_Committee_Members = $include_External_Committee_Members;
        return $this;
    }
    /**
     * Get Include_External_Student_Records value
     * @return bool|null
     */
    public function getInclude_External_Student_Records()
    {
        return $this->Include_External_Student_Records;
    }
    /**
     * Set Include_External_Student_Records value
     * @param bool $include_External_Student_Records
     * @return \StructType\Person_Type_CriteriaType
     */
    public function setInclude_External_Student_Records($include_External_Student_Records = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_External_Student_Records) && !is_bool($include_External_Student_Records)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_External_Student_Records, true), gettype($include_External_Student_Records)), __LINE__);
        }
        $this->Include_External_Student_Records = $include_External_Student_Records;
        return $this;
    }
    /**
     * Get Include_Student_Prospect_Records value
     * @return bool|null
     */
    public function getInclude_Student_Prospect_Records()
    {
        return $this->Include_Student_Prospect_Records;
    }
    /**
     * Set Include_Student_Prospect_Records value
     * @param bool $include_Student_Prospect_Records
     * @return \StructType\Person_Type_CriteriaType
     */
    public function setInclude_Student_Prospect_Records($include_Student_Prospect_Records = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Student_Prospect_Records) && !is_bool($include_Student_Prospect_Records)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Student_Prospect_Records, true), gettype($include_Student_Prospect_Records)), __LINE__);
        }
        $this->Include_Student_Prospect_Records = $include_Student_Prospect_Records;
        return $this;
    }
    /**
     * Get Include_Student_Records value
     * @return bool|null
     */
    public function getInclude_Student_Records()
    {
        return $this->Include_Student_Records;
    }
    /**
     * Set Include_Student_Records value
     * @param bool $include_Student_Records
     * @return \StructType\Person_Type_CriteriaType
     */
    public function setInclude_Student_Records($include_Student_Records = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Student_Records) && !is_bool($include_Student_Records)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Student_Records, true), gettype($include_Student_Records)), __LINE__);
        }
        $this->Include_Student_Records = $include_Student_Records;
        return $this;
    }
    /**
     * Get Include_Workers value
     * @return bool|null
     */
    public function getInclude_Workers()
    {
        return $this->Include_Workers;
    }
    /**
     * Set Include_Workers value
     * @param bool $include_Workers
     * @return \StructType\Person_Type_CriteriaType
     */
    public function setInclude_Workers($include_Workers = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Workers) && !is_bool($include_Workers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Workers, true), gettype($include_Workers)), __LINE__);
        }
        $this->Include_Workers = $include_Workers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_Type_CriteriaType
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
