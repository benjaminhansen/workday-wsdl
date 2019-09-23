<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_SiteType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Location and its associated data.
 * @subpackage Structs
 */
class Business_SiteType extends AbstractStructBase
{
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Site_Reference_DataType
     */
    public $Location_Reference;
    /**
     * The Location_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_DataType
     */
    public $Location_Data;
    /**
     * The As_Of_Moment
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest moment (e.g. datetime) data was entered into the Workday system. For "Request" elements, the "As Of Moment" determines what data is to be used within search logic or returned in a response. For "Response" elements,
     * this element will echo "As Of Moment" entered in the "Request" element or the default "As Of Moment" if omitted.
     * @var string
     */
    public $As_Of_Moment;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Business_SiteType
     * @uses Business_SiteType::setLocation_Reference()
     * @uses Business_SiteType::setLocation_Data()
     * @uses Business_SiteType::setAs_Of_Moment()
     * @uses Business_SiteType::setVersion()
     * @param \WorkdayWsdl\\StructType\Business_Site_Reference_DataType $location_Reference
     * @param \WorkdayWsdl\\StructType\Location_DataType $location_Data
     * @param string $as_Of_Moment
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Site_Reference_DataType $location_Reference = null, \WorkdayWsdl\\StructType\Location_DataType $location_Data = null, $as_Of_Moment = null, $version = null)
    {
        $this
            ->setLocation_Reference($location_Reference)
            ->setLocation_Data($location_Data)
            ->setAs_Of_Moment($as_Of_Moment)
            ->setVersion($version);
    }
    /**
     * Get Location_Reference value
     * @return \WorkdayWsdl\\StructType\Business_Site_Reference_DataType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \WorkdayWsdl\\StructType\Business_Site_Reference_DataType $location_Reference
     * @return \WorkdayWsdl\\StructType\Business_SiteType
     */
    public function setLocation_Reference(\WorkdayWsdl\\StructType\Business_Site_Reference_DataType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Location_Data value
     * @return \WorkdayWsdl\\StructType\Location_DataType|null
     */
    public function getLocation_Data()
    {
        return $this->Location_Data;
    }
    /**
     * Set Location_Data value
     * @param \WorkdayWsdl\\StructType\Location_DataType $location_Data
     * @return \WorkdayWsdl\\StructType\Business_SiteType
     */
    public function setLocation_Data(\WorkdayWsdl\\StructType\Location_DataType $location_Data = null)
    {
        $this->Location_Data = $location_Data;
        return $this;
    }
    /**
     * Get As_Of_Moment value
     * @return string|null
     */
    public function getAs_Of_Moment()
    {
        return $this->As_Of_Moment;
    }
    /**
     * Set As_Of_Moment value
     * @param string $as_Of_Moment
     * @return \WorkdayWsdl\\StructType\Business_SiteType
     */
    public function setAs_Of_Moment($as_Of_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Moment) && !is_string($as_Of_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Moment, true), gettype($as_Of_Moment)), __LINE__);
        }
        $this->As_Of_Moment = $as_Of_Moment;
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
     * @return \WorkdayWsdl\\StructType\Business_SiteType
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
     * @return \WorkdayWsdl\\StructType\Business_SiteType
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
