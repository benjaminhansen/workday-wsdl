<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Manage_Education_Data_for_RoleType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Education Data.
 * @subpackage Structs
 */
class Manage_Education_Data_for_RoleType extends AbstractStructBase
{
    /**
     * The Role_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a role
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RoleObjectType
     */
    public $Role_Reference;
    /**
     * The Source_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the source of the skill.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Skill_Source_CategoryObjectType
     */
    public $Source_Reference;
    /**
     * The Education
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EducationType[]
     */
    public $Education;
    /**
     * Constructor method for Manage_Education_Data_for_RoleType
     * @uses Manage_Education_Data_for_RoleType::setRole_Reference()
     * @uses Manage_Education_Data_for_RoleType::setSource_Reference()
     * @uses Manage_Education_Data_for_RoleType::setEducation()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $role_Reference
     * @param \WorkdayWsdl\\StructType\Person_Skill_Source_CategoryObjectType $source_Reference
     * @param \WorkdayWsdl\\StructType\EducationType[] $education
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $role_Reference = null, \WorkdayWsdl\\StructType\Person_Skill_Source_CategoryObjectType $source_Reference = null, array $education = array())
    {
        $this
            ->setRole_Reference($role_Reference)
            ->setSource_Reference($source_Reference)
            ->setEducation($education);
    }
    /**
     * Get Role_Reference value
     * @return \WorkdayWsdl\\StructType\RoleObjectType|null
     */
    public function getRole_Reference()
    {
        return $this->Role_Reference;
    }
    /**
     * Set Role_Reference value
     * @param \WorkdayWsdl\\StructType\RoleObjectType $role_Reference
     * @return \WorkdayWsdl\\StructType\Manage_Education_Data_for_RoleType
     */
    public function setRole_Reference(\WorkdayWsdl\\StructType\RoleObjectType $role_Reference = null)
    {
        $this->Role_Reference = $role_Reference;
        return $this;
    }
    /**
     * Get Source_Reference value
     * @return \WorkdayWsdl\\StructType\Person_Skill_Source_CategoryObjectType|null
     */
    public function getSource_Reference()
    {
        return $this->Source_Reference;
    }
    /**
     * Set Source_Reference value
     * @param \WorkdayWsdl\\StructType\Person_Skill_Source_CategoryObjectType $source_Reference
     * @return \WorkdayWsdl\\StructType\Manage_Education_Data_for_RoleType
     */
    public function setSource_Reference(\WorkdayWsdl\\StructType\Person_Skill_Source_CategoryObjectType $source_Reference = null)
    {
        $this->Source_Reference = $source_Reference;
        return $this;
    }
    /**
     * Get Education value
     * @return \WorkdayWsdl\\StructType\EducationType[]|null
     */
    public function getEducation()
    {
        return $this->Education;
    }
    /**
     * This method is responsible for validating the values passed to the setEducation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEducation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEducationForArrayConstraintsFromSetEducation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $manage_Education_Data_for_RoleTypeEducationItem) {
            // validation for constraint: itemType
            if (!$manage_Education_Data_for_RoleTypeEducationItem instanceof \WorkdayWsdl\\StructType\EducationType) {
                $invalidValues[] = is_object($manage_Education_Data_for_RoleTypeEducationItem) ? get_class($manage_Education_Data_for_RoleTypeEducationItem) : sprintf('%s(%s)', gettype($manage_Education_Data_for_RoleTypeEducationItem), var_export($manage_Education_Data_for_RoleTypeEducationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Education property can only contain items of type \WorkdayWsdl\\StructType\EducationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Education value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EducationType[] $education
     * @return \WorkdayWsdl\\StructType\Manage_Education_Data_for_RoleType
     */
    public function setEducation(array $education = array())
    {
        // validation for constraint: array
        if ('' !== ($educationArrayErrorMessage = self::validateEducationForArrayConstraintsFromSetEducation($education))) {
            throw new \InvalidArgumentException($educationArrayErrorMessage, __LINE__);
        }
        $this->Education = $education;
        return $this;
    }
    /**
     * Add item to Education value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EducationType $item
     * @return \WorkdayWsdl\\StructType\Manage_Education_Data_for_RoleType
     */
    public function addToEducation(\WorkdayWsdl\\StructType\EducationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\EducationType) {
            throw new \InvalidArgumentException(sprintf('The Education property can only contain items of type \WorkdayWsdl\\StructType\EducationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Education[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Manage_Education_Data_for_RoleType
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
