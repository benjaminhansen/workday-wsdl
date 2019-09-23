<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Manage_Professional_Affiliation_Data_for_RoleType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Professional Affiliation Data.
 * @subpackage Structs
 */
class Manage_Professional_Affiliation_Data_for_RoleType extends AbstractStructBase
{
    /**
     * The Role_Reference
     * Meta information extracted from the WSDL
     * - documentation: Role Reference
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
     * The Professional_Affiliation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType[]
     */
    public $Professional_Affiliation;
    /**
     * Constructor method for Manage_Professional_Affiliation_Data_for_RoleType
     * @uses Manage_Professional_Affiliation_Data_for_RoleType::setRole_Reference()
     * @uses Manage_Professional_Affiliation_Data_for_RoleType::setSource_Reference()
     * @uses Manage_Professional_Affiliation_Data_for_RoleType::setProfessional_Affiliation()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $role_Reference
     * @param \WorkdayWsdl\\StructType\Person_Skill_Source_CategoryObjectType $source_Reference
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType[] $professional_Affiliation
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $role_Reference = null, \WorkdayWsdl\\StructType\Person_Skill_Source_CategoryObjectType $source_Reference = null, array $professional_Affiliation = array())
    {
        $this
            ->setRole_Reference($role_Reference)
            ->setSource_Reference($source_Reference)
            ->setProfessional_Affiliation($professional_Affiliation);
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
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType
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
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType
     */
    public function setSource_Reference(\WorkdayWsdl\\StructType\Person_Skill_Source_CategoryObjectType $source_Reference = null)
    {
        $this->Source_Reference = $source_Reference;
        return $this;
    }
    /**
     * Get Professional_Affiliation value
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType[]|null
     */
    public function getProfessional_Affiliation()
    {
        return $this->Professional_Affiliation;
    }
    /**
     * This method is responsible for validating the values passed to the setProfessional_Affiliation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfessional_Affiliation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfessional_AffiliationForArrayConstraintsFromSetProfessional_Affiliation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $manage_Professional_Affiliation_Data_for_RoleTypeProfessional_AffiliationItem) {
            // validation for constraint: itemType
            if (!$manage_Professional_Affiliation_Data_for_RoleTypeProfessional_AffiliationItem instanceof \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType) {
                $invalidValues[] = is_object($manage_Professional_Affiliation_Data_for_RoleTypeProfessional_AffiliationItem) ? get_class($manage_Professional_Affiliation_Data_for_RoleTypeProfessional_AffiliationItem) : sprintf('%s(%s)', gettype($manage_Professional_Affiliation_Data_for_RoleTypeProfessional_AffiliationItem), var_export($manage_Professional_Affiliation_Data_for_RoleTypeProfessional_AffiliationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Professional_Affiliation property can only contain items of type \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Professional_Affiliation value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType[] $professional_Affiliation
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType
     */
    public function setProfessional_Affiliation(array $professional_Affiliation = array())
    {
        // validation for constraint: array
        if ('' !== ($professional_AffiliationArrayErrorMessage = self::validateProfessional_AffiliationForArrayConstraintsFromSetProfessional_Affiliation($professional_Affiliation))) {
            throw new \InvalidArgumentException($professional_AffiliationArrayErrorMessage, __LINE__);
        }
        $this->Professional_Affiliation = $professional_Affiliation;
        return $this;
    }
    /**
     * Add item to Professional_Affiliation value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType $item
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType
     */
    public function addToProfessional_Affiliation(\WorkdayWsdl\\StructType\Professional_Affiliation_SkillType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType) {
            throw new \InvalidArgumentException(sprintf('The Professional_Affiliation property can only contain items of type \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Professional_Affiliation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType
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
