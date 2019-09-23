<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Succession_Plan_Candidate_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about the succession plan candidacy for the employee.
 * @subpackage Structs
 */
class Succession_Plan_Candidate_DataType extends AbstractStructBase
{
    /**
     * The Position_Element_Reference
     * Meta information extracted from the WSDL
     * - documentation: The position or position restriction for which this employee is a succession plan candidate.
     * - minOccurs: 0
     * @var \StructType\Position_ElementObjectType
     */
    public $Position_Element_Reference;
    /**
     * The Succession_Readiness_Reference
     * Meta information extracted from the WSDL
     * - documentation: The readiness of the candidate to fill this position.
     * - minOccurs: 0
     * @var \StructType\Succession_ReadinessObjectType
     */
    public $Succession_Readiness_Reference;
    /**
     * The Top_Candidate
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the employee is the top candidate for this succession plan.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Top_Candidate;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - documentation: Notes on this candidate.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Last_Updated
     * Meta information extracted from the WSDL
     * - documentation: The date the candidate information was last updated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Updated;
    /**
     * Constructor method for Succession_Plan_Candidate_DataType
     * @uses Succession_Plan_Candidate_DataType::setPosition_Element_Reference()
     * @uses Succession_Plan_Candidate_DataType::setSuccession_Readiness_Reference()
     * @uses Succession_Plan_Candidate_DataType::setTop_Candidate()
     * @uses Succession_Plan_Candidate_DataType::setNotes()
     * @uses Succession_Plan_Candidate_DataType::setLast_Updated()
     * @param \StructType\Position_ElementObjectType $position_Element_Reference
     * @param \StructType\Succession_ReadinessObjectType $succession_Readiness_Reference
     * @param bool $top_Candidate
     * @param string $notes
     * @param string $last_Updated
     */
    public function __construct(\StructType\Position_ElementObjectType $position_Element_Reference = null, \StructType\Succession_ReadinessObjectType $succession_Readiness_Reference = null, $top_Candidate = null, $notes = null, $last_Updated = null)
    {
        $this
            ->setPosition_Element_Reference($position_Element_Reference)
            ->setSuccession_Readiness_Reference($succession_Readiness_Reference)
            ->setTop_Candidate($top_Candidate)
            ->setNotes($notes)
            ->setLast_Updated($last_Updated);
    }
    /**
     * Get Position_Element_Reference value
     * @return \StructType\Position_ElementObjectType|null
     */
    public function getPosition_Element_Reference()
    {
        return $this->Position_Element_Reference;
    }
    /**
     * Set Position_Element_Reference value
     * @param \StructType\Position_ElementObjectType $position_Element_Reference
     * @return \StructType\Succession_Plan_Candidate_DataType
     */
    public function setPosition_Element_Reference(\StructType\Position_ElementObjectType $position_Element_Reference = null)
    {
        $this->Position_Element_Reference = $position_Element_Reference;
        return $this;
    }
    /**
     * Get Succession_Readiness_Reference value
     * @return \StructType\Succession_ReadinessObjectType|null
     */
    public function getSuccession_Readiness_Reference()
    {
        return $this->Succession_Readiness_Reference;
    }
    /**
     * Set Succession_Readiness_Reference value
     * @param \StructType\Succession_ReadinessObjectType $succession_Readiness_Reference
     * @return \StructType\Succession_Plan_Candidate_DataType
     */
    public function setSuccession_Readiness_Reference(\StructType\Succession_ReadinessObjectType $succession_Readiness_Reference = null)
    {
        $this->Succession_Readiness_Reference = $succession_Readiness_Reference;
        return $this;
    }
    /**
     * Get Top_Candidate value
     * @return bool|null
     */
    public function getTop_Candidate()
    {
        return $this->Top_Candidate;
    }
    /**
     * Set Top_Candidate value
     * @param bool $top_Candidate
     * @return \StructType\Succession_Plan_Candidate_DataType
     */
    public function setTop_Candidate($top_Candidate = null)
    {
        // validation for constraint: boolean
        if (!is_null($top_Candidate) && !is_bool($top_Candidate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($top_Candidate, true), gettype($top_Candidate)), __LINE__);
        }
        $this->Top_Candidate = $top_Candidate;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \StructType\Succession_Plan_Candidate_DataType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Last_Updated value
     * @return string|null
     */
    public function getLast_Updated()
    {
        return $this->Last_Updated;
    }
    /**
     * Set Last_Updated value
     * @param string $last_Updated
     * @return \StructType\Succession_Plan_Candidate_DataType
     */
    public function setLast_Updated($last_Updated = null)
    {
        // validation for constraint: string
        if (!is_null($last_Updated) && !is_string($last_Updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Updated, true), gettype($last_Updated)), __LINE__);
        }
        $this->Last_Updated = $last_Updated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Succession_Plan_Candidate_DataType
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
