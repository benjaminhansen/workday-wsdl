<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Skill_Qualification_Profile_Replacement_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: You need to look at the cousin, because the parent is a wrapper. | Wrapper element for Skill Qualifications. Allows all Skill Qualifications for a Job Profile or Position Restriction to be removed - or to replace all existing Skill
 * Qualifications with those sent in the web service.
 * @subpackage Structs
 */
class Skill_Qualification_Profile_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Skill_Reference
     * Meta information extracted from the WSDL
     * - documentation: The identifier of a skill.
     * - minOccurs: 0
     * @var \StructType\Skill_Item__Tenanted_ObjectType
     */
    public $Skill_Reference;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Enter the name of Skill.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - documentation: If Yes, Skill Qualification Profile is required.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for Skill_Qualification_Profile_Replacement_DataType
     * @uses Skill_Qualification_Profile_Replacement_DataType::setSkill_Reference()
     * @uses Skill_Qualification_Profile_Replacement_DataType::setName()
     * @uses Skill_Qualification_Profile_Replacement_DataType::setRequired()
     * @param \StructType\Skill_Item__Tenanted_ObjectType $skill_Reference
     * @param string $name
     * @param bool $required
     */
    public function __construct(\StructType\Skill_Item__Tenanted_ObjectType $skill_Reference = null, $name = null, $required = null)
    {
        $this
            ->setSkill_Reference($skill_Reference)
            ->setName($name)
            ->setRequired($required);
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
     * @return \StructType\Skill_Qualification_Profile_Replacement_DataType
     */
    public function setSkill_Reference(\StructType\Skill_Item__Tenanted_ObjectType $skill_Reference = null)
    {
        $this->Skill_Reference = $skill_Reference;
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
     * @return \StructType\Skill_Qualification_Profile_Replacement_DataType
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
     * Get Required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \StructType\Skill_Qualification_Profile_Replacement_DataType
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->Required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Skill_Qualification_Profile_Replacement_DataType
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
