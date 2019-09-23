<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SkillType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Skill Items.
 * @subpackage Structs
 */
class SkillType extends AbstractStructBase
{
    /**
     * The Skill_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to a Skill Item.
     * - minOccurs: 0
     * @var \StructType\Skill_Item__Tenanted_ObjectType
     */
    public $Skill_Reference;
    /**
     * The Skill_Data
     * Meta information extracted from the WSDL
     * - documentation: An element containing information about a Skill Item.
     * - minOccurs: 0
     * @var \StructType\Skill_Item_DataType
     */
    public $Skill_Data;
    /**
     * Constructor method for SkillType
     * @uses SkillType::setSkill_Reference()
     * @uses SkillType::setSkill_Data()
     * @param \StructType\Skill_Item__Tenanted_ObjectType $skill_Reference
     * @param \StructType\Skill_Item_DataType $skill_Data
     */
    public function __construct(\StructType\Skill_Item__Tenanted_ObjectType $skill_Reference = null, \StructType\Skill_Item_DataType $skill_Data = null)
    {
        $this
            ->setSkill_Reference($skill_Reference)
            ->setSkill_Data($skill_Data);
    }
    /**
     * Get Skill_Reference value
     * @return \StructType\Skill_Item__Tenanted_ObjectType|null
     */
    public function getSkill_Reference()
    {
        return $this->Skill_Reference;
    }
    /**
     * Set Skill_Reference value
     * @param \StructType\Skill_Item__Tenanted_ObjectType $skill_Reference
     * @return \StructType\SkillType
     */
    public function setSkill_Reference(\StructType\Skill_Item__Tenanted_ObjectType $skill_Reference = null)
    {
        $this->Skill_Reference = $skill_Reference;
        return $this;
    }
    /**
     * Get Skill_Data value
     * @return \StructType\Skill_Item_DataType|null
     */
    public function getSkill_Data()
    {
        return $this->Skill_Data;
    }
    /**
     * Set Skill_Data value
     * @param \StructType\Skill_Item_DataType $skill_Data
     * @return \StructType\SkillType
     */
    public function setSkill_Data(\StructType\Skill_Item_DataType $skill_Data = null)
    {
        $this->Skill_Data = $skill_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SkillType
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
