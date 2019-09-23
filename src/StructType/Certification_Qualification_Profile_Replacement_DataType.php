<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Certification_Qualification_Profile_Replacement_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: As of v13, certification name is no longer required. You may submit a certification reference or name. | Replacement element containing Certification Qualifications for the Job ProfileWhen updating a Job Profile, all Certifications
 * for the Job Profile will be replaced by the submitted data. If no data is submitted, then the existing Certifications are not changed.
 * @subpackage Structs
 */
class Certification_Qualification_Profile_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: The country of certification.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Certification_Reference
     * Meta information extracted from the WSDL
     * - documentation: The certification ID reference.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CertificationObjectType
     */
    public $Certification_Reference;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of Certification.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Issuer
     * Meta information extracted from the WSDL
     * - documentation: The Issuer of Certification.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issuer;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - documentation: If Y, Certification Qualification Profile is required.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Required;
    /**
     * The Specialty_Achievement_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Specialty_Achievement_DataType[]
     */
    public $Specialty_Achievement_Reference;
    /**
     * Constructor method for Certification_Qualification_Profile_Replacement_DataType
     * @uses Certification_Qualification_Profile_Replacement_DataType::setCountry_Reference()
     * @uses Certification_Qualification_Profile_Replacement_DataType::setCertification_Reference()
     * @uses Certification_Qualification_Profile_Replacement_DataType::setName()
     * @uses Certification_Qualification_Profile_Replacement_DataType::setIssuer()
     * @uses Certification_Qualification_Profile_Replacement_DataType::setRequired()
     * @uses Certification_Qualification_Profile_Replacement_DataType::setSpecialty_Achievement_Reference()
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @param \WorkdayWsdl\\StructType\CertificationObjectType $certification_Reference
     * @param string $name
     * @param string $issuer
     * @param bool $required
     * @param \WorkdayWsdl\\StructType\Specialty_Achievement_DataType[] $specialty_Achievement_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null, \WorkdayWsdl\\StructType\CertificationObjectType $certification_Reference = null, $name = null, $issuer = null, $required = null, array $specialty_Achievement_Reference = array())
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setCertification_Reference($certification_Reference)
            ->setName($name)
            ->setIssuer($issuer)
            ->setRequired($required)
            ->setSpecialty_Achievement_Reference($specialty_Achievement_Reference);
    }
    /**
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Certification_Reference value
     * @return \WorkdayWsdl\\StructType\CertificationObjectType|null
     */
    public function getCertification_Reference()
    {
        return $this->Certification_Reference;
    }
    /**
     * Set Certification_Reference value
     * @param \WorkdayWsdl\\StructType\CertificationObjectType $certification_Reference
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType
     */
    public function setCertification_Reference(\WorkdayWsdl\\StructType\CertificationObjectType $certification_Reference = null)
    {
        $this->Certification_Reference = $certification_Reference;
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
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType
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
     * Get Issuer value
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->Issuer;
    }
    /**
     * Set Issuer value
     * @param string $issuer
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType
     */
    public function setIssuer($issuer = null)
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        $this->Issuer = $issuer;
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
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType
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
     * Get Specialty_Achievement_Reference value
     * @return \WorkdayWsdl\\StructType\Specialty_Achievement_DataType[]|null
     */
    public function getSpecialty_Achievement_Reference()
    {
        return $this->Specialty_Achievement_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSpecialty_Achievement_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecialty_Achievement_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecialty_Achievement_ReferenceForArrayConstraintsFromSetSpecialty_Achievement_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $certification_Qualification_Profile_Replacement_DataTypeSpecialty_Achievement_ReferenceItem) {
            // validation for constraint: itemType
            if (!$certification_Qualification_Profile_Replacement_DataTypeSpecialty_Achievement_ReferenceItem instanceof \WorkdayWsdl\\StructType\Specialty_Achievement_DataType) {
                $invalidValues[] = is_object($certification_Qualification_Profile_Replacement_DataTypeSpecialty_Achievement_ReferenceItem) ? get_class($certification_Qualification_Profile_Replacement_DataTypeSpecialty_Achievement_ReferenceItem) : sprintf('%s(%s)', gettype($certification_Qualification_Profile_Replacement_DataTypeSpecialty_Achievement_ReferenceItem), var_export($certification_Qualification_Profile_Replacement_DataTypeSpecialty_Achievement_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Specialty_Achievement_Reference property can only contain items of type \WorkdayWsdl\\StructType\Specialty_Achievement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Specialty_Achievement_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Specialty_Achievement_DataType[] $specialty_Achievement_Reference
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType
     */
    public function setSpecialty_Achievement_Reference(array $specialty_Achievement_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($specialty_Achievement_ReferenceArrayErrorMessage = self::validateSpecialty_Achievement_ReferenceForArrayConstraintsFromSetSpecialty_Achievement_Reference($specialty_Achievement_Reference))) {
            throw new \InvalidArgumentException($specialty_Achievement_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Specialty_Achievement_Reference = $specialty_Achievement_Reference;
        return $this;
    }
    /**
     * Add item to Specialty_Achievement_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Specialty_Achievement_DataType $item
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType
     */
    public function addToSpecialty_Achievement_Reference(\WorkdayWsdl\\StructType\Specialty_Achievement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Specialty_Achievement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Specialty_Achievement_Reference property can only contain items of type \WorkdayWsdl\\StructType\Specialty_Achievement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Specialty_Achievement_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType
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
