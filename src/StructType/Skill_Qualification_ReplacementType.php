<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Skill_Qualification_ReplacementType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Skill Qualifications. Allows all Skill Qualifications for a Job Profile or Position Restriction to be removed - or to replace all existing Skill Qualifications with those sent in the web service.
 * @subpackage Structs
 */
class Skill_Qualification_ReplacementType extends AbstractStructBase
{
    /**
     * The Skill_Qualification_Replacement_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Skill_Qualification_Profile_Replacement_DataType[]
     */
    public $Skill_Qualification_Replacement_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Y, deletes or updates all skill qualifications for the position restriction or job profile, and doesn't send any additional work skill qualifications.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Skill_Qualification_ReplacementType
     * @uses Skill_Qualification_ReplacementType::setSkill_Qualification_Replacement_Data()
     * @uses Skill_Qualification_ReplacementType::setDelete()
     * @param \StructType\Skill_Qualification_Profile_Replacement_DataType[] $skill_Qualification_Replacement_Data
     * @param bool $delete
     */
    public function __construct(array $skill_Qualification_Replacement_Data = array(), $delete = null)
    {
        $this
            ->setSkill_Qualification_Replacement_Data($skill_Qualification_Replacement_Data)
            ->setDelete($delete);
    }
    /**
     * Get Skill_Qualification_Replacement_Data value
     * @return \StructType\Skill_Qualification_Profile_Replacement_DataType[]|null
     */
    public function getSkill_Qualification_Replacement_Data()
    {
        return $this->Skill_Qualification_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSkill_Qualification_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkill_Qualification_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkill_Qualification_Replacement_DataForArrayConstraintsFromSetSkill_Qualification_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $skill_Qualification_ReplacementTypeSkill_Qualification_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$skill_Qualification_ReplacementTypeSkill_Qualification_Replacement_DataItem instanceof \StructType\Skill_Qualification_Profile_Replacement_DataType) {
                $invalidValues[] = is_object($skill_Qualification_ReplacementTypeSkill_Qualification_Replacement_DataItem) ? get_class($skill_Qualification_ReplacementTypeSkill_Qualification_Replacement_DataItem) : sprintf('%s(%s)', gettype($skill_Qualification_ReplacementTypeSkill_Qualification_Replacement_DataItem), var_export($skill_Qualification_ReplacementTypeSkill_Qualification_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Skill_Qualification_Replacement_Data property can only contain items of type \StructType\Skill_Qualification_Profile_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Skill_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Skill_Qualification_Profile_Replacement_DataType[] $skill_Qualification_Replacement_Data
     * @return \StructType\Skill_Qualification_ReplacementType
     */
    public function setSkill_Qualification_Replacement_Data(array $skill_Qualification_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($skill_Qualification_Replacement_DataArrayErrorMessage = self::validateSkill_Qualification_Replacement_DataForArrayConstraintsFromSetSkill_Qualification_Replacement_Data($skill_Qualification_Replacement_Data))) {
            throw new \InvalidArgumentException($skill_Qualification_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Skill_Qualification_Replacement_Data = $skill_Qualification_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Skill_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Skill_Qualification_Profile_Replacement_DataType $item
     * @return \StructType\Skill_Qualification_ReplacementType
     */
    public function addToSkill_Qualification_Replacement_Data(\StructType\Skill_Qualification_Profile_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Skill_Qualification_Profile_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Skill_Qualification_Replacement_Data property can only contain items of type \StructType\Skill_Qualification_Profile_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Skill_Qualification_Replacement_Data[] = $item;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\Skill_Qualification_ReplacementType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Skill_Qualification_ReplacementType
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
