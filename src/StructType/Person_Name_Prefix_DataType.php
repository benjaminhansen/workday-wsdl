<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Name_Prefix_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Title is not set up for this country. | Salutation is not set up for this country. | Contains the prefixes for a name.
 * @subpackage Structs
 */
class Person_Name_Prefix_DataType extends AbstractStructBase
{
    /**
     * The Title_Reference
     * Meta information extracted from the WSDL
     * - documentation: The description of the reference to the Title of a person.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType
     */
    public $Title_Reference;
    /**
     * The Title_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: The description of the reference to the Title of a person.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title_Descriptor;
    /**
     * The Salutation_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Form of Address for a person. This is only valid for the country of Germany.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType
     */
    public $Salutation_Reference;
    /**
     * Constructor method for Person_Name_Prefix_DataType
     * @uses Person_Name_Prefix_DataType::setTitle_Reference()
     * @uses Person_Name_Prefix_DataType::setTitle_Descriptor()
     * @uses Person_Name_Prefix_DataType::setSalutation_Reference()
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $title_Reference
     * @param string $title_Descriptor
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $salutation_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $title_Reference = null, $title_Descriptor = null, \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $salutation_Reference = null)
    {
        $this
            ->setTitle_Reference($title_Reference)
            ->setTitle_Descriptor($title_Descriptor)
            ->setSalutation_Reference($salutation_Reference);
    }
    /**
     * Get Title_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType|null
     */
    public function getTitle_Reference()
    {
        return $this->Title_Reference;
    }
    /**
     * Set Title_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $title_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Prefix_DataType
     */
    public function setTitle_Reference(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $title_Reference = null)
    {
        $this->Title_Reference = $title_Reference;
        return $this;
    }
    /**
     * Get Title_Descriptor value
     * @return string|null
     */
    public function getTitle_Descriptor()
    {
        return $this->Title_Descriptor;
    }
    /**
     * Set Title_Descriptor value
     * @param string $title_Descriptor
     * @return \WorkdayWsdl\\StructType\Person_Name_Prefix_DataType
     */
    public function setTitle_Descriptor($title_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($title_Descriptor) && !is_string($title_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title_Descriptor, true), gettype($title_Descriptor)), __LINE__);
        }
        $this->Title_Descriptor = $title_Descriptor;
        return $this;
    }
    /**
     * Get Salutation_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType|null
     */
    public function getSalutation_Reference()
    {
        return $this->Salutation_Reference;
    }
    /**
     * Set Salutation_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $salutation_Reference
     * @return \WorkdayWsdl\\StructType\Person_Name_Prefix_DataType
     */
    public function setSalutation_Reference(\WorkdayWsdl\\StructType\Country_Predefined_Person_Name_Component_ValueObjectType $salutation_Reference = null)
    {
        $this->Salutation_Reference = $salutation_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_Name_Prefix_DataType
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
