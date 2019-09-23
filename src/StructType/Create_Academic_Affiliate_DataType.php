<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Create_Academic_Affiliate_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for a new Academic Affiliate if an affiliate is to be created as part of the appointment.
 * @subpackage Structs
 */
class Create_Academic_Affiliate_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the academic affiliate.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Person_Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the components of a name, such as the First Name and Last Name.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Name_DataType
     */
    public $Person_Name_Data;
    /**
     * The Contact_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: All of the person's contact data (address, phone, email, instant messenger, web address).
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public $Contact_Information_Data;
    /**
     * The Personal_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Personal Information for a new Academic Affiliate.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public $Personal_Information_Data;
    /**
     * The Person_Identification_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper for Person Identification Data. Includes National Identifiers, Government Identifiers, Visa Identifiers, Passport Identifiers, License Identifiers and Custom Identifiers.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Identification_DataType
     */
    public $Person_Identification_Data;
    /**
     * The Person_Photo_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Photo_DataType
     */
    public $Person_Photo_Data;
    /**
     * The Location_Contexts_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the location context for the Affiliate. Auto-populated from the country from the person's legal name.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_ContextObjectType[]
     */
    public $Location_Contexts_Reference;
    /**
     * Constructor method for Create_Academic_Affiliate_DataType
     * @uses Create_Academic_Affiliate_DataType::setID()
     * @uses Create_Academic_Affiliate_DataType::setPerson_Name_Data()
     * @uses Create_Academic_Affiliate_DataType::setContact_Information_Data()
     * @uses Create_Academic_Affiliate_DataType::setPersonal_Information_Data()
     * @uses Create_Academic_Affiliate_DataType::setPerson_Identification_Data()
     * @uses Create_Academic_Affiliate_DataType::setPerson_Photo_Data()
     * @uses Create_Academic_Affiliate_DataType::setLocation_Contexts_Reference()
     * @param string $iD
     * @param \WorkdayWsdl\\StructType\Person_Name_DataType $person_Name_Data
     * @param \WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Information_Data
     * @param \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType $personal_Information_Data
     * @param \WorkdayWsdl\\StructType\Person_Identification_DataType $person_Identification_Data
     * @param \WorkdayWsdl\\StructType\Person_Photo_DataType $person_Photo_Data
     * @param \WorkdayWsdl\\StructType\Location_ContextObjectType[] $location_Contexts_Reference
     */
    public function __construct($iD = null, \WorkdayWsdl\\StructType\Person_Name_DataType $person_Name_Data = null, \WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Information_Data = null, \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType $personal_Information_Data = null, \WorkdayWsdl\\StructType\Person_Identification_DataType $person_Identification_Data = null, \WorkdayWsdl\\StructType\Person_Photo_DataType $person_Photo_Data = null, array $location_Contexts_Reference = array())
    {
        $this
            ->setID($iD)
            ->setPerson_Name_Data($person_Name_Data)
            ->setContact_Information_Data($contact_Information_Data)
            ->setPersonal_Information_Data($personal_Information_Data)
            ->setPerson_Identification_Data($person_Identification_Data)
            ->setPerson_Photo_Data($person_Photo_Data)
            ->setLocation_Contexts_Reference($location_Contexts_Reference);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Person_Name_Data value
     * @return \WorkdayWsdl\\StructType\Person_Name_DataType|null
     */
    public function getPerson_Name_Data()
    {
        return $this->Person_Name_Data;
    }
    /**
     * Set Person_Name_Data value
     * @param \WorkdayWsdl\\StructType\Person_Name_DataType $person_Name_Data
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
     */
    public function setPerson_Name_Data(\WorkdayWsdl\\StructType\Person_Name_DataType $person_Name_Data = null)
    {
        $this->Person_Name_Data = $person_Name_Data;
        return $this;
    }
    /**
     * Get Contact_Information_Data value
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType|null
     */
    public function getContact_Information_Data()
    {
        return $this->Contact_Information_Data;
    }
    /**
     * Set Contact_Information_Data value
     * @param \WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Information_Data
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
     */
    public function setContact_Information_Data(\WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Information_Data = null)
    {
        $this->Contact_Information_Data = $contact_Information_Data;
        return $this;
    }
    /**
     * Get Personal_Information_Data value
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType|null
     */
    public function getPersonal_Information_Data()
    {
        return $this->Personal_Information_Data;
    }
    /**
     * Set Personal_Information_Data value
     * @param \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType $personal_Information_Data
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
     */
    public function setPersonal_Information_Data(\WorkdayWsdl\\StructType\Generic_Personal_Information_DataType $personal_Information_Data = null)
    {
        $this->Personal_Information_Data = $personal_Information_Data;
        return $this;
    }
    /**
     * Get Person_Identification_Data value
     * @return \WorkdayWsdl\\StructType\Person_Identification_DataType|null
     */
    public function getPerson_Identification_Data()
    {
        return $this->Person_Identification_Data;
    }
    /**
     * Set Person_Identification_Data value
     * @param \WorkdayWsdl\\StructType\Person_Identification_DataType $person_Identification_Data
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
     */
    public function setPerson_Identification_Data(\WorkdayWsdl\\StructType\Person_Identification_DataType $person_Identification_Data = null)
    {
        $this->Person_Identification_Data = $person_Identification_Data;
        return $this;
    }
    /**
     * Get Person_Photo_Data value
     * @return \WorkdayWsdl\\StructType\Person_Photo_DataType|null
     */
    public function getPerson_Photo_Data()
    {
        return $this->Person_Photo_Data;
    }
    /**
     * Set Person_Photo_Data value
     * @param \WorkdayWsdl\\StructType\Person_Photo_DataType $person_Photo_Data
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
     */
    public function setPerson_Photo_Data(\WorkdayWsdl\\StructType\Person_Photo_DataType $person_Photo_Data = null)
    {
        $this->Person_Photo_Data = $person_Photo_Data;
        return $this;
    }
    /**
     * Get Location_Contexts_Reference value
     * @return \WorkdayWsdl\\StructType\Location_ContextObjectType[]|null
     */
    public function getLocation_Contexts_Reference()
    {
        return $this->Location_Contexts_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Contexts_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Contexts_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Contexts_ReferenceForArrayConstraintsFromSetLocation_Contexts_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $create_Academic_Affiliate_DataTypeLocation_Contexts_ReferenceItem) {
            // validation for constraint: itemType
            if (!$create_Academic_Affiliate_DataTypeLocation_Contexts_ReferenceItem instanceof \WorkdayWsdl\\StructType\Location_ContextObjectType) {
                $invalidValues[] = is_object($create_Academic_Affiliate_DataTypeLocation_Contexts_ReferenceItem) ? get_class($create_Academic_Affiliate_DataTypeLocation_Contexts_ReferenceItem) : sprintf('%s(%s)', gettype($create_Academic_Affiliate_DataTypeLocation_Contexts_ReferenceItem), var_export($create_Academic_Affiliate_DataTypeLocation_Contexts_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Contexts_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_ContextObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Contexts_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_ContextObjectType[] $location_Contexts_Reference
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
     */
    public function setLocation_Contexts_Reference(array $location_Contexts_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Contexts_ReferenceArrayErrorMessage = self::validateLocation_Contexts_ReferenceForArrayConstraintsFromSetLocation_Contexts_Reference($location_Contexts_Reference))) {
            throw new \InvalidArgumentException($location_Contexts_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Contexts_Reference = $location_Contexts_Reference;
        return $this;
    }
    /**
     * Add item to Location_Contexts_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_ContextObjectType $item
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
     */
    public function addToLocation_Contexts_Reference(\WorkdayWsdl\\StructType\Location_ContextObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_ContextObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Contexts_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_ContextObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Contexts_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
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
