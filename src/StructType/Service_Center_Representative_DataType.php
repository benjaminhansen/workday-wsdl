<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service_Center_Representative_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Service Center Representative Data
 * @subpackage Structs
 */
class Service_Center_Representative_DataType extends AbstractStructBase
{
    /**
     * The Service_Center_Reference
     * Meta information extracted from the WSDL
     * - documentation: Service Center to which the Service Center Representative belongs.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Service_CenterObjectType[]
     */
    public $Service_Center_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Service Center Representative Inactive
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all of the Name data for a person.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Legal_Name_DataType
     */
    public $Name_Data;
    /**
     * The Contact_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Contact Information Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public $Contact_Information_Data;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Service Center Representative ID
     * @var string
     */
    public $ID;
    /**
     * Constructor method for Service_Center_Representative_DataType
     * @uses Service_Center_Representative_DataType::setService_Center_Reference()
     * @uses Service_Center_Representative_DataType::setInactive()
     * @uses Service_Center_Representative_DataType::setName_Data()
     * @uses Service_Center_Representative_DataType::setContact_Information_Data()
     * @uses Service_Center_Representative_DataType::setID()
     * @param \WorkdayWsdl\\StructType\Service_CenterObjectType[] $service_Center_Reference
     * @param bool $inactive
     * @param \WorkdayWsdl\\StructType\Legal_Name_DataType $name_Data
     * @param \WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Information_Data
     * @param string $iD
     */
    public function __construct(array $service_Center_Reference = array(), $inactive = null, \WorkdayWsdl\\StructType\Legal_Name_DataType $name_Data = null, \WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Information_Data = null, $iD = null)
    {
        $this
            ->setService_Center_Reference($service_Center_Reference)
            ->setInactive($inactive)
            ->setName_Data($name_Data)
            ->setContact_Information_Data($contact_Information_Data)
            ->setID($iD);
    }
    /**
     * Get Service_Center_Reference value
     * @return \WorkdayWsdl\\StructType\Service_CenterObjectType[]|null
     */
    public function getService_Center_Reference()
    {
        return $this->Service_Center_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setService_Center_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService_Center_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateService_Center_ReferenceForArrayConstraintsFromSetService_Center_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $service_Center_Representative_DataTypeService_Center_ReferenceItem) {
            // validation for constraint: itemType
            if (!$service_Center_Representative_DataTypeService_Center_ReferenceItem instanceof \WorkdayWsdl\\StructType\Service_CenterObjectType) {
                $invalidValues[] = is_object($service_Center_Representative_DataTypeService_Center_ReferenceItem) ? get_class($service_Center_Representative_DataTypeService_Center_ReferenceItem) : sprintf('%s(%s)', gettype($service_Center_Representative_DataTypeService_Center_ReferenceItem), var_export($service_Center_Representative_DataTypeService_Center_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service_Center_Reference property can only contain items of type \WorkdayWsdl\\StructType\Service_CenterObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Service_Center_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Service_CenterObjectType[] $service_Center_Reference
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_DataType
     */
    public function setService_Center_Reference(array $service_Center_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($service_Center_ReferenceArrayErrorMessage = self::validateService_Center_ReferenceForArrayConstraintsFromSetService_Center_Reference($service_Center_Reference))) {
            throw new \InvalidArgumentException($service_Center_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Service_Center_Reference = $service_Center_Reference;
        return $this;
    }
    /**
     * Add item to Service_Center_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Service_CenterObjectType $item
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_DataType
     */
    public function addToService_Center_Reference(\WorkdayWsdl\\StructType\Service_CenterObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Service_CenterObjectType) {
            throw new \InvalidArgumentException(sprintf('The Service_Center_Reference property can only contain items of type \WorkdayWsdl\\StructType\Service_CenterObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Service_Center_Reference[] = $item;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Name_Data value
     * @return \WorkdayWsdl\\StructType\Legal_Name_DataType|null
     */
    public function getName_Data()
    {
        return $this->Name_Data;
    }
    /**
     * Set Name_Data value
     * @param \WorkdayWsdl\\StructType\Legal_Name_DataType $name_Data
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_DataType
     */
    public function setName_Data(\WorkdayWsdl\\StructType\Legal_Name_DataType $name_Data = null)
    {
        $this->Name_Data = $name_Data;
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
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_DataType
     */
    public function setContact_Information_Data(\WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Information_Data = null)
    {
        $this->Contact_Information_Data = $contact_Information_Data;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_DataType
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
