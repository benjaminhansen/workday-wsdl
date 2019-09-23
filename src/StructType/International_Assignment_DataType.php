<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for International_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element that contains position's international assignment information
 * @subpackage Structs
 */
class International_Assignment_DataType extends AbstractStructBase
{
    /**
     * The International_Assignment_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The International Assignment Type for the international assignment position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\International_Assignment_TypeObjectType
     */
    public $International_Assignment_Type_Reference;
    /**
     * The Start_International_Assignment_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains the reason from this position's Start International Assignment business process.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType
     */
    public $Start_International_Assignment_Reason_Reference;
    /**
     * The Expected_Assignment_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The End Date for the International Assignment. If empty, Workday will use the existing date. This field is informational only. The value is effective immediately on update.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expected_Assignment_End_Date;
    /**
     * The Host_Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains the host country for worker's international assignment
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Host_Country_Reference;
    /**
     * The Home_Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains the home country for worker's primary job
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Home_Country_Reference;
    /**
     * Constructor method for International_Assignment_DataType
     * @uses International_Assignment_DataType::setInternational_Assignment_Type_Reference()
     * @uses International_Assignment_DataType::setStart_International_Assignment_Reason_Reference()
     * @uses International_Assignment_DataType::setExpected_Assignment_End_Date()
     * @uses International_Assignment_DataType::setHost_Country_Reference()
     * @uses International_Assignment_DataType::setHome_Country_Reference()
     * @param \WorkdayWsdl\\StructType\International_Assignment_TypeObjectType $international_Assignment_Type_Reference
     * @param \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $start_International_Assignment_Reason_Reference
     * @param string $expected_Assignment_End_Date
     * @param \WorkdayWsdl\\StructType\CountryObjectType $host_Country_Reference
     * @param \WorkdayWsdl\\StructType\CountryObjectType $home_Country_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\International_Assignment_TypeObjectType $international_Assignment_Type_Reference = null, \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $start_International_Assignment_Reason_Reference = null, $expected_Assignment_End_Date = null, \WorkdayWsdl\\StructType\CountryObjectType $host_Country_Reference = null, \WorkdayWsdl\\StructType\CountryObjectType $home_Country_Reference = null)
    {
        $this
            ->setInternational_Assignment_Type_Reference($international_Assignment_Type_Reference)
            ->setStart_International_Assignment_Reason_Reference($start_International_Assignment_Reason_Reference)
            ->setExpected_Assignment_End_Date($expected_Assignment_End_Date)
            ->setHost_Country_Reference($host_Country_Reference)
            ->setHome_Country_Reference($home_Country_Reference);
    }
    /**
     * Get International_Assignment_Type_Reference value
     * @return \WorkdayWsdl\\StructType\International_Assignment_TypeObjectType|null
     */
    public function getInternational_Assignment_Type_Reference()
    {
        return $this->International_Assignment_Type_Reference;
    }
    /**
     * Set International_Assignment_Type_Reference value
     * @param \WorkdayWsdl\\StructType\International_Assignment_TypeObjectType $international_Assignment_Type_Reference
     * @return \WorkdayWsdl\\StructType\International_Assignment_DataType
     */
    public function setInternational_Assignment_Type_Reference(\WorkdayWsdl\\StructType\International_Assignment_TypeObjectType $international_Assignment_Type_Reference = null)
    {
        $this->International_Assignment_Type_Reference = $international_Assignment_Type_Reference;
        return $this;
    }
    /**
     * Get Start_International_Assignment_Reason_Reference value
     * @return \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType|null
     */
    public function getStart_International_Assignment_Reason_Reference()
    {
        return $this->Start_International_Assignment_Reason_Reference;
    }
    /**
     * Set Start_International_Assignment_Reason_Reference value
     * @param \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $start_International_Assignment_Reason_Reference
     * @return \WorkdayWsdl\\StructType\International_Assignment_DataType
     */
    public function setStart_International_Assignment_Reason_Reference(\WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $start_International_Assignment_Reason_Reference = null)
    {
        $this->Start_International_Assignment_Reason_Reference = $start_International_Assignment_Reason_Reference;
        return $this;
    }
    /**
     * Get Expected_Assignment_End_Date value
     * @return string|null
     */
    public function getExpected_Assignment_End_Date()
    {
        return $this->Expected_Assignment_End_Date;
    }
    /**
     * Set Expected_Assignment_End_Date value
     * @param string $expected_Assignment_End_Date
     * @return \WorkdayWsdl\\StructType\International_Assignment_DataType
     */
    public function setExpected_Assignment_End_Date($expected_Assignment_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($expected_Assignment_End_Date) && !is_string($expected_Assignment_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expected_Assignment_End_Date, true), gettype($expected_Assignment_End_Date)), __LINE__);
        }
        $this->Expected_Assignment_End_Date = $expected_Assignment_End_Date;
        return $this;
    }
    /**
     * Get Host_Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getHost_Country_Reference()
    {
        return $this->Host_Country_Reference;
    }
    /**
     * Set Host_Country_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $host_Country_Reference
     * @return \WorkdayWsdl\\StructType\International_Assignment_DataType
     */
    public function setHost_Country_Reference(\WorkdayWsdl\\StructType\CountryObjectType $host_Country_Reference = null)
    {
        $this->Host_Country_Reference = $host_Country_Reference;
        return $this;
    }
    /**
     * Get Home_Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getHome_Country_Reference()
    {
        return $this->Home_Country_Reference;
    }
    /**
     * Set Home_Country_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $home_Country_Reference
     * @return \WorkdayWsdl\\StructType\International_Assignment_DataType
     */
    public function setHome_Country_Reference(\WorkdayWsdl\\StructType\CountryObjectType $home_Country_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\International_Assignment_DataType
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
