<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Professional_Affiliation_SkillType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Organization Professional Affiliation information.
 * @subpackage Structs
 */
class Professional_Affiliation_SkillType extends AbstractStructBase
{
    /**
     * The Organization_Professional_Affiliation_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the membership profile.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Professional_Affiliation_SkillObjectType
     */
    public $Organization_Professional_Affiliation_Reference;
    /**
     * The Organization_Professional_Affiliation_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Organization Professional Affiliation information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType[]
     */
    public $Organization_Professional_Affiliation_Data;
    /**
     * Constructor method for Professional_Affiliation_SkillType
     * @uses Professional_Affiliation_SkillType::setOrganization_Professional_Affiliation_Reference()
     * @uses Professional_Affiliation_SkillType::setOrganization_Professional_Affiliation_Data()
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_SkillObjectType $organization_Professional_Affiliation_Reference
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType[] $organization_Professional_Affiliation_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Professional_Affiliation_SkillObjectType $organization_Professional_Affiliation_Reference = null, array $organization_Professional_Affiliation_Data = array())
    {
        $this
            ->setOrganization_Professional_Affiliation_Reference($organization_Professional_Affiliation_Reference)
            ->setOrganization_Professional_Affiliation_Data($organization_Professional_Affiliation_Data);
    }
    /**
     * Get Organization_Professional_Affiliation_Reference value
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_SkillObjectType|null
     */
    public function getOrganization_Professional_Affiliation_Reference()
    {
        return $this->Organization_Professional_Affiliation_Reference;
    }
    /**
     * Set Organization_Professional_Affiliation_Reference value
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_SkillObjectType $organization_Professional_Affiliation_Reference
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType
     */
    public function setOrganization_Professional_Affiliation_Reference(\WorkdayWsdl\\StructType\Professional_Affiliation_SkillObjectType $organization_Professional_Affiliation_Reference = null)
    {
        $this->Organization_Professional_Affiliation_Reference = $organization_Professional_Affiliation_Reference;
        return $this;
    }
    /**
     * Get Organization_Professional_Affiliation_Data value
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType[]|null
     */
    public function getOrganization_Professional_Affiliation_Data()
    {
        return $this->Organization_Professional_Affiliation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Professional_Affiliation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Professional_Affiliation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Professional_Affiliation_DataForArrayConstraintsFromSetOrganization_Professional_Affiliation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $professional_Affiliation_SkillTypeOrganization_Professional_Affiliation_DataItem) {
            // validation for constraint: itemType
            if (!$professional_Affiliation_SkillTypeOrganization_Professional_Affiliation_DataItem instanceof \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType) {
                $invalidValues[] = is_object($professional_Affiliation_SkillTypeOrganization_Professional_Affiliation_DataItem) ? get_class($professional_Affiliation_SkillTypeOrganization_Professional_Affiliation_DataItem) : sprintf('%s(%s)', gettype($professional_Affiliation_SkillTypeOrganization_Professional_Affiliation_DataItem), var_export($professional_Affiliation_SkillTypeOrganization_Professional_Affiliation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Professional_Affiliation_Data property can only contain items of type \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Professional_Affiliation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType[] $organization_Professional_Affiliation_Data
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType
     */
    public function setOrganization_Professional_Affiliation_Data(array $organization_Professional_Affiliation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Professional_Affiliation_DataArrayErrorMessage = self::validateOrganization_Professional_Affiliation_DataForArrayConstraintsFromSetOrganization_Professional_Affiliation_Data($organization_Professional_Affiliation_Data))) {
            throw new \InvalidArgumentException($organization_Professional_Affiliation_DataArrayErrorMessage, __LINE__);
        }
        $this->Organization_Professional_Affiliation_Data = $organization_Professional_Affiliation_Data;
        return $this;
    }
    /**
     * Add item to Organization_Professional_Affiliation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType $item
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType
     */
    public function addToOrganization_Professional_Affiliation_Data(\WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Professional_Affiliation_Data property can only contain items of type \WorkdayWsdl\\StructType\Professional_Affiliation_Organization_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Professional_Affiliation_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType
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
