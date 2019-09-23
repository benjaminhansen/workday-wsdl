<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Certification_Qualification_ReplacementType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Certification Qualifications. Allows all certification qualifications for a Job Profile or Position Restriction to be removed - or to replace all existing certification qualifications with those sent in the web
 * service
 * @subpackage Structs
 */
class Certification_Qualification_ReplacementType extends AbstractStructBase
{
    /**
     * The Certification_Qualification_Replacement_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType[]
     */
    public $Certification_Qualification_Replacement_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Yes, deletes certification qualifications for the position restriction or job profile.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Certification_Qualification_ReplacementType
     * @uses Certification_Qualification_ReplacementType::setCertification_Qualification_Replacement_Data()
     * @uses Certification_Qualification_ReplacementType::setDelete()
     * @param \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType[] $certification_Qualification_Replacement_Data
     * @param bool $delete
     */
    public function __construct(array $certification_Qualification_Replacement_Data = array(), $delete = null)
    {
        $this
            ->setCertification_Qualification_Replacement_Data($certification_Qualification_Replacement_Data)
            ->setDelete($delete);
    }
    /**
     * Get Certification_Qualification_Replacement_Data value
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType[]|null
     */
    public function getCertification_Qualification_Replacement_Data()
    {
        return $this->Certification_Qualification_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCertification_Qualification_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCertification_Qualification_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCertification_Qualification_Replacement_DataForArrayConstraintsFromSetCertification_Qualification_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $certification_Qualification_ReplacementTypeCertification_Qualification_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$certification_Qualification_ReplacementTypeCertification_Qualification_Replacement_DataItem instanceof \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType) {
                $invalidValues[] = is_object($certification_Qualification_ReplacementTypeCertification_Qualification_Replacement_DataItem) ? get_class($certification_Qualification_ReplacementTypeCertification_Qualification_Replacement_DataItem) : sprintf('%s(%s)', gettype($certification_Qualification_ReplacementTypeCertification_Qualification_Replacement_DataItem), var_export($certification_Qualification_ReplacementTypeCertification_Qualification_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Certification_Qualification_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Certification_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType[] $certification_Qualification_Replacement_Data
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType
     */
    public function setCertification_Qualification_Replacement_Data(array $certification_Qualification_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($certification_Qualification_Replacement_DataArrayErrorMessage = self::validateCertification_Qualification_Replacement_DataForArrayConstraintsFromSetCertification_Qualification_Replacement_Data($certification_Qualification_Replacement_Data))) {
            throw new \InvalidArgumentException($certification_Qualification_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Certification_Qualification_Replacement_Data = $certification_Qualification_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Certification_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType $item
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType
     */
    public function addToCertification_Qualification_Replacement_Data(\WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Certification_Qualification_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Certification_Qualification_Profile_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Certification_Qualification_Replacement_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType
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
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType
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
