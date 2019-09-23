<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Establishment_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Establishment data for the Put Establishment web service
 * @subpackage Structs
 */
class Put_Establishment_RequestType extends AbstractStructBase
{
    /**
     * The Establishment_Reference
     * Meta information extracted from the WSDL
     * - documentation: Establishment Reference.
     * - choice: Establishment_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EstablishmentObjectType
     */
    public $Establishment_Reference;
    /**
     * The Establishment_Data
     * Meta information extracted from the WSDL
     * - documentation: Establishment Data wrapper
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Establishment_DataType
     */
    public $Establishment_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Establishment_RequestType
     * @uses Put_Establishment_RequestType::setEstablishment_Reference()
     * @uses Put_Establishment_RequestType::setEstablishment_Data()
     * @uses Put_Establishment_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference
     * @param \WorkdayWsdl\\StructType\Establishment_DataType $establishment_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference = null, \WorkdayWsdl\\StructType\Establishment_DataType $establishment_Data = null, $version = null)
    {
        $this
            ->setEstablishment_Reference($establishment_Reference)
            ->setEstablishment_Data($establishment_Data)
            ->setVersion($version);
    }
    /**
     * Get Establishment_Reference value
     * @return \WorkdayWsdl\\StructType\EstablishmentObjectType|null
     */
    public function getEstablishment_Reference()
    {
        return isset($this->Establishment_Reference) ? $this->Establishment_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEstablishment_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEstablishment_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEstablishment_ReferenceForChoiceConstraintsFromSetEstablishment_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Establishment_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Establishment_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Establishment_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference
     * @return \WorkdayWsdl\\StructType\Put_Establishment_RequestType
     */
    public function setEstablishment_Reference(\WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference = null)
    {
        // validation for constraint: choice(Establishment_Reference)
        if ('' !== ($establishment_ReferenceChoiceErrorMessage = self::validateEstablishment_ReferenceForChoiceConstraintsFromSetEstablishment_Reference($establishment_Reference))) {
            throw new \InvalidArgumentException($establishment_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($establishment_Reference) || (is_array($establishment_Reference) && empty($establishment_Reference))) {
            unset($this->Establishment_Reference);
        } else {
            $this->Establishment_Reference = $establishment_Reference;
        }
        return $this;
    }
    /**
     * Get Establishment_Data value
     * @return \WorkdayWsdl\\StructType\Establishment_DataType|null
     */
    public function getEstablishment_Data()
    {
        return $this->Establishment_Data;
    }
    /**
     * Set Establishment_Data value
     * @param \WorkdayWsdl\\StructType\Establishment_DataType $establishment_Data
     * @return \WorkdayWsdl\\StructType\Put_Establishment_RequestType
     */
    public function setEstablishment_Data(\WorkdayWsdl\\StructType\Establishment_DataType $establishment_Data = null)
    {
        $this->Establishment_Data = $establishment_Data;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Put_Establishment_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Put_Establishment_RequestType
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
