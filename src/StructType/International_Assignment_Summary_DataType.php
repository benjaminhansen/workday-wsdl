<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for International_Assignment_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element that contains basic information of worker's international assignment if any.
 * @subpackage Structs
 */
class International_Assignment_Summary_DataType extends AbstractStructBase
{
    /**
     * The Has_International_Assignment
     * Meta information extracted from the WSDL
     * - documentation: If the value is yes, it indicates that worker has internaitonal assignment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Has_International_Assignment;
    /**
     * The Host_Countries_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains the host countries for worker's international assignment job(s)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CountryObjectType[]
     */
    public $Host_Countries_Reference;
    /**
     * The Home_Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains the home country for worker's primary job
     * - minOccurs: 0
     * @var \StructType\CountryObjectType
     */
    public $Home_Country_Reference;
    /**
     * Constructor method for International_Assignment_Summary_DataType
     * @uses International_Assignment_Summary_DataType::setHas_International_Assignment()
     * @uses International_Assignment_Summary_DataType::setHost_Countries_Reference()
     * @uses International_Assignment_Summary_DataType::setHome_Country_Reference()
     * @param bool $has_International_Assignment
     * @param \StructType\CountryObjectType[] $host_Countries_Reference
     * @param \StructType\CountryObjectType $home_Country_Reference
     */
    public function __construct($has_International_Assignment = null, array $host_Countries_Reference = array(), \StructType\CountryObjectType $home_Country_Reference = null)
    {
        $this
            ->setHas_International_Assignment($has_International_Assignment)
            ->setHost_Countries_Reference($host_Countries_Reference)
            ->setHome_Country_Reference($home_Country_Reference);
    }
    /**
     * Get Has_International_Assignment value
     * @return bool|null
     */
    public function getHas_International_Assignment()
    {
        return $this->Has_International_Assignment;
    }
    /**
     * Set Has_International_Assignment value
     * @param bool $has_International_Assignment
     * @return \StructType\International_Assignment_Summary_DataType
     */
    public function setHas_International_Assignment($has_International_Assignment = null)
    {
        // validation for constraint: boolean
        if (!is_null($has_International_Assignment) && !is_bool($has_International_Assignment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($has_International_Assignment, true), gettype($has_International_Assignment)), __LINE__);
        }
        $this->Has_International_Assignment = $has_International_Assignment;
        return $this;
    }
    /**
     * Get Host_Countries_Reference value
     * @return \StructType\CountryObjectType[]|null
     */
    public function getHost_Countries_Reference()
    {
        return $this->Host_Countries_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setHost_Countries_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHost_Countries_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHost_Countries_ReferenceForArrayConstraintsFromSetHost_Countries_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $international_Assignment_Summary_DataTypeHost_Countries_ReferenceItem) {
            // validation for constraint: itemType
            if (!$international_Assignment_Summary_DataTypeHost_Countries_ReferenceItem instanceof \StructType\CountryObjectType) {
                $invalidValues[] = is_object($international_Assignment_Summary_DataTypeHost_Countries_ReferenceItem) ? get_class($international_Assignment_Summary_DataTypeHost_Countries_ReferenceItem) : sprintf('%s(%s)', gettype($international_Assignment_Summary_DataTypeHost_Countries_ReferenceItem), var_export($international_Assignment_Summary_DataTypeHost_Countries_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Host_Countries_Reference property can only contain items of type \StructType\CountryObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Host_Countries_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryObjectType[] $host_Countries_Reference
     * @return \StructType\International_Assignment_Summary_DataType
     */
    public function setHost_Countries_Reference(array $host_Countries_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($host_Countries_ReferenceArrayErrorMessage = self::validateHost_Countries_ReferenceForArrayConstraintsFromSetHost_Countries_Reference($host_Countries_Reference))) {
            throw new \InvalidArgumentException($host_Countries_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Host_Countries_Reference = $host_Countries_Reference;
        return $this;
    }
    /**
     * Add item to Host_Countries_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryObjectType $item
     * @return \StructType\International_Assignment_Summary_DataType
     */
    public function addToHost_Countries_Reference(\StructType\CountryObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CountryObjectType) {
            throw new \InvalidArgumentException(sprintf('The Host_Countries_Reference property can only contain items of type \StructType\CountryObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Host_Countries_Reference[] = $item;
        return $this;
    }
    /**
     * Get Home_Country_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getHome_Country_Reference()
    {
        return $this->Home_Country_Reference;
    }
    /**
     * Set Home_Country_Reference value
     * @param \StructType\CountryObjectType $home_Country_Reference
     * @return \StructType\International_Assignment_Summary_DataType
     */
    public function setHome_Country_Reference(\StructType\CountryObjectType $home_Country_Reference = null)
    {
        $this->Home_Country_Reference = $home_Country_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\International_Assignment_Summary_DataType
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
