<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Talent_Assessment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the information about the employee's potential.
 * @subpackage Structs
 */
class Employee_Talent_Assessment_DataType extends AbstractStructBase
{
    /**
     * The Potential_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Potential for this Employee.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\PotentialObjectType
     */
    public $Potential_Reference;
    /**
     * The Achievable_Level_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Achievable Level for this Employee.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Achievable_LevelObjectType
     */
    public $Achievable_Level_Reference;
    /**
     * The Retention_Risk_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Retention status for this Employee.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RetentionObjectType
     */
    public $Retention_Risk_Reference;
    /**
     * The Loss_Impact_Risk_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Loss Impact Status for this Employee
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Loss_ImpactObjectType
     */
    public $Loss_Impact_Risk_Reference;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - documentation: Notes for this Talent Assessment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * Constructor method for Employee_Talent_Assessment_DataType
     * @uses Employee_Talent_Assessment_DataType::setPotential_Reference()
     * @uses Employee_Talent_Assessment_DataType::setAchievable_Level_Reference()
     * @uses Employee_Talent_Assessment_DataType::setRetention_Risk_Reference()
     * @uses Employee_Talent_Assessment_DataType::setLoss_Impact_Risk_Reference()
     * @uses Employee_Talent_Assessment_DataType::setNotes()
     * @param \WorkdayWsdl\\StructType\PotentialObjectType $potential_Reference
     * @param \WorkdayWsdl\\StructType\Achievable_LevelObjectType $achievable_Level_Reference
     * @param \WorkdayWsdl\\StructType\RetentionObjectType $retention_Risk_Reference
     * @param \WorkdayWsdl\\StructType\Loss_ImpactObjectType $loss_Impact_Risk_Reference
     * @param string $notes
     */
    public function __construct(\WorkdayWsdl\\StructType\PotentialObjectType $potential_Reference = null, \WorkdayWsdl\\StructType\Achievable_LevelObjectType $achievable_Level_Reference = null, \WorkdayWsdl\\StructType\RetentionObjectType $retention_Risk_Reference = null, \WorkdayWsdl\\StructType\Loss_ImpactObjectType $loss_Impact_Risk_Reference = null, $notes = null)
    {
        $this
            ->setPotential_Reference($potential_Reference)
            ->setAchievable_Level_Reference($achievable_Level_Reference)
            ->setRetention_Risk_Reference($retention_Risk_Reference)
            ->setLoss_Impact_Risk_Reference($loss_Impact_Risk_Reference)
            ->setNotes($notes);
    }
    /**
     * Get Potential_Reference value
     * @return \WorkdayWsdl\\StructType\PotentialObjectType|null
     */
    public function getPotential_Reference()
    {
        return $this->Potential_Reference;
    }
    /**
     * Set Potential_Reference value
     * @param \WorkdayWsdl\\StructType\PotentialObjectType $potential_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Talent_Assessment_DataType
     */
    public function setPotential_Reference(\WorkdayWsdl\\StructType\PotentialObjectType $potential_Reference = null)
    {
        $this->Potential_Reference = $potential_Reference;
        return $this;
    }
    /**
     * Get Achievable_Level_Reference value
     * @return \WorkdayWsdl\\StructType\Achievable_LevelObjectType|null
     */
    public function getAchievable_Level_Reference()
    {
        return $this->Achievable_Level_Reference;
    }
    /**
     * Set Achievable_Level_Reference value
     * @param \WorkdayWsdl\\StructType\Achievable_LevelObjectType $achievable_Level_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Talent_Assessment_DataType
     */
    public function setAchievable_Level_Reference(\WorkdayWsdl\\StructType\Achievable_LevelObjectType $achievable_Level_Reference = null)
    {
        $this->Achievable_Level_Reference = $achievable_Level_Reference;
        return $this;
    }
    /**
     * Get Retention_Risk_Reference value
     * @return \WorkdayWsdl\\StructType\RetentionObjectType|null
     */
    public function getRetention_Risk_Reference()
    {
        return $this->Retention_Risk_Reference;
    }
    /**
     * Set Retention_Risk_Reference value
     * @param \WorkdayWsdl\\StructType\RetentionObjectType $retention_Risk_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Talent_Assessment_DataType
     */
    public function setRetention_Risk_Reference(\WorkdayWsdl\\StructType\RetentionObjectType $retention_Risk_Reference = null)
    {
        $this->Retention_Risk_Reference = $retention_Risk_Reference;
        return $this;
    }
    /**
     * Get Loss_Impact_Risk_Reference value
     * @return \WorkdayWsdl\\StructType\Loss_ImpactObjectType|null
     */
    public function getLoss_Impact_Risk_Reference()
    {
        return $this->Loss_Impact_Risk_Reference;
    }
    /**
     * Set Loss_Impact_Risk_Reference value
     * @param \WorkdayWsdl\\StructType\Loss_ImpactObjectType $loss_Impact_Risk_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Talent_Assessment_DataType
     */
    public function setLoss_Impact_Risk_Reference(\WorkdayWsdl\\StructType\Loss_ImpactObjectType $loss_Impact_Risk_Reference = null)
    {
        $this->Loss_Impact_Risk_Reference = $loss_Impact_Risk_Reference;
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
     * @return \WorkdayWsdl\\StructType\Employee_Talent_Assessment_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employee_Talent_Assessment_DataType
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
