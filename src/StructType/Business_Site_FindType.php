<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_Site_FindType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the following criteria options to search for Locations within the Workday system. The Location references that are returned are those that satisfy ALL criteria included in the request. Therefore, the result set will become
 * more limited with every criteria that is populated.
 * @subpackage Structs
 */
class Business_Site_FindType extends AbstractStructBase
{
    /**
     * The Location_Name
     * Meta information extracted from the WSDL
     * - documentation: If specified, this search criterium will return those references with an exact match. The search index used to query on this value is not case-sensitive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location_Name;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Business_Site_FindType
     * @uses Business_Site_FindType::setLocation_Name()
     * @uses Business_Site_FindType::setVersion()
     * @param string $location_Name
     * @param string $version
     */
    public function __construct($location_Name = null, $version = null)
    {
        $this
            ->setLocation_Name($location_Name)
            ->setVersion($version);
    }
    /**
     * Get Location_Name value
     * @return string|null
     */
    public function getLocation_Name()
    {
        return $this->Location_Name;
    }
    /**
     * Set Location_Name value
     * @param string $location_Name
     * @return \WorkdayWsdl\\StructType\Business_Site_FindType
     */
    public function setLocation_Name($location_Name = null)
    {
        // validation for constraint: string
        if (!is_null($location_Name) && !is_string($location_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_Name, true), gettype($location_Name)), __LINE__);
        }
        $this->Location_Name = $location_Name;
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
     * @return \WorkdayWsdl\\StructType\Business_Site_FindType
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
     * @return \WorkdayWsdl\\StructType\Business_Site_FindType
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
