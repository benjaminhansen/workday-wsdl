<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Name_Suffix_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Hereditary Suffix is not set up for this country. | Professional Suffix is not set up for this country. | Royal Suffix is not set up for this country. | Honorary Suffix is not set up for this country. | Social Suffix is not set up
 * for this country. | Religious Suffix is not set up for this country. | Academic Suffix is not set up for this country. | Contains the suffixes for a name.
 * @subpackage Structs
 */
class Person_Name_Suffix_DataType extends AbstractStructBase
{
    /**
     * The Social_Suffix_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the description of Social Suffix for a person.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType
     */
    public $Social_Suffix_Reference;
    /**
     * The Social_Suffix_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: A reference to the description of Social Suffix for a person.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Social_Suffix_Descriptor;
    /**
     * The Academic_Suffix_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Academic Suffix for a person. This is only valid for the country of Australia.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType
     */
    public $Academic_Suffix_Reference;
    /**
     * The Hereditary_Suffix_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Hereditary Suffix for a person. This is only valid for the country of Australia.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType
     */
    public $Hereditary_Suffix_Reference;
    /**
     * The Honorary_Suffix_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Honorary Suffix for a person. This is only valid for the country of Australia.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType
     */
    public $Honorary_Suffix_Reference;
    /**
     * The Professional_Suffix_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Professional Suffix for a person. This is only valid for the country of Australia.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType
     */
    public $Professional_Suffix_Reference;
    /**
     * The Religious_Suffix_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Religious Suffix for a person. This is only valid for the country of Australia.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType
     */
    public $Religious_Suffix_Reference;
    /**
     * The Royal_Suffix_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Royal Suffix for a person. This is only valid for the country of Australia.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType
     */
    public $Royal_Suffix_Reference;
    /**
     * Constructor method for Person_Name_Suffix_DataType
     * @uses Person_Name_Suffix_DataType::setSocial_Suffix_Reference()
     * @uses Person_Name_Suffix_DataType::setSocial_Suffix_Descriptor()
     * @uses Person_Name_Suffix_DataType::setAcademic_Suffix_Reference()
     * @uses Person_Name_Suffix_DataType::setHereditary_Suffix_Reference()
     * @uses Person_Name_Suffix_DataType::setHonorary_Suffix_Reference()
     * @uses Person_Name_Suffix_DataType::setProfessional_Suffix_Reference()
     * @uses Person_Name_Suffix_DataType::setReligious_Suffix_Reference()
     * @uses Person_Name_Suffix_DataType::setRoyal_Suffix_Reference()
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $social_Suffix_Reference
     * @param string $social_Suffix_Descriptor
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $academic_Suffix_Reference
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $hereditary_Suffix_Reference
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $honorary_Suffix_Reference
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $professional_Suffix_Reference
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $religious_Suffix_Reference
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $royal_Suffix_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $social_Suffix_Reference = null, $social_Suffix_Descriptor = null, \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $academic_Suffix_Reference = null, \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $hereditary_Suffix_Reference = null, \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $honorary_Suffix_Reference = null, \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $professional_Suffix_Reference = null, \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $religious_Suffix_Reference = null, \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $royal_Suffix_Reference = null)
    {
        $this
            ->setSocial_Suffix_Reference($social_Suffix_Reference)
            ->setSocial_Suffix_Descriptor($social_Suffix_Descriptor)
            ->setAcademic_Suffix_Reference($academic_Suffix_Reference)
            ->setHereditary_Suffix_Reference($hereditary_Suffix_Reference)
            ->setHonorary_Suffix_Reference($honorary_Suffix_Reference)
            ->setProfessional_Suffix_Reference($professional_Suffix_Reference)
            ->setReligious_Suffix_Reference($religious_Suffix_Reference)
            ->setRoyal_Suffix_Reference($royal_Suffix_Reference);
    }
    /**
     * Get Social_Suffix_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType|null
     */
    public function getSocial_Suffix_Reference()
    {
        return $this->Social_Suffix_Reference;
    }
    /**
     * Set Social_Suffix_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $social_Suffix_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
     */
    public function setSocial_Suffix_Reference(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $social_Suffix_Reference = null)
    {
        $this->Social_Suffix_Reference = $social_Suffix_Reference;
        return $this;
    }
    /**
     * Get Social_Suffix_Descriptor value
     * @return string|null
     */
    public function getSocial_Suffix_Descriptor()
    {
        return $this->Social_Suffix_Descriptor;
    }
    /**
     * Set Social_Suffix_Descriptor value
     * @param string $social_Suffix_Descriptor
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
     */
    public function setSocial_Suffix_Descriptor($social_Suffix_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($social_Suffix_Descriptor) && !is_string($social_Suffix_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($social_Suffix_Descriptor, true), gettype($social_Suffix_Descriptor)), __LINE__);
        }
        $this->Social_Suffix_Descriptor = $social_Suffix_Descriptor;
        return $this;
    }
    /**
     * Get Academic_Suffix_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType|null
     */
    public function getAcademic_Suffix_Reference()
    {
        return $this->Academic_Suffix_Reference;
    }
    /**
     * Set Academic_Suffix_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $academic_Suffix_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
     */
    public function setAcademic_Suffix_Reference(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $academic_Suffix_Reference = null)
    {
        $this->Academic_Suffix_Reference = $academic_Suffix_Reference;
        return $this;
    }
    /**
     * Get Hereditary_Suffix_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType|null
     */
    public function getHereditary_Suffix_Reference()
    {
        return $this->Hereditary_Suffix_Reference;
    }
    /**
     * Set Hereditary_Suffix_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $hereditary_Suffix_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
     */
    public function setHereditary_Suffix_Reference(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $hereditary_Suffix_Reference = null)
    {
        $this->Hereditary_Suffix_Reference = $hereditary_Suffix_Reference;
        return $this;
    }
    /**
     * Get Honorary_Suffix_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType|null
     */
    public function getHonorary_Suffix_Reference()
    {
        return $this->Honorary_Suffix_Reference;
    }
    /**
     * Set Honorary_Suffix_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $honorary_Suffix_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
     */
    public function setHonorary_Suffix_Reference(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $honorary_Suffix_Reference = null)
    {
        $this->Honorary_Suffix_Reference = $honorary_Suffix_Reference;
        return $this;
    }
    /**
     * Get Professional_Suffix_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType|null
     */
    public function getProfessional_Suffix_Reference()
    {
        return $this->Professional_Suffix_Reference;
    }
    /**
     * Set Professional_Suffix_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $professional_Suffix_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
     */
    public function setProfessional_Suffix_Reference(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $professional_Suffix_Reference = null)
    {
        $this->Professional_Suffix_Reference = $professional_Suffix_Reference;
        return $this;
    }
    /**
     * Get Religious_Suffix_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType|null
     */
    public function getReligious_Suffix_Reference()
    {
        return $this->Religious_Suffix_Reference;
    }
    /**
     * Set Religious_Suffix_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $religious_Suffix_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
     */
    public function setReligious_Suffix_Reference(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $religious_Suffix_Reference = null)
    {
        $this->Religious_Suffix_Reference = $religious_Suffix_Reference;
        return $this;
    }
    /**
     * Get Royal_Suffix_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType|null
     */
    public function getRoyal_Suffix_Reference()
    {
        return $this->Royal_Suffix_Reference;
    }
    /**
     * Set Royal_Suffix_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $royal_Suffix_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
     */
    public function setRoyal_Suffix_Reference(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $royal_Suffix_Reference = null)
    {
        $this->Royal_Suffix_Reference = $royal_Suffix_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_Name_Suffix_DataType
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
