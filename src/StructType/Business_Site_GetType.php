<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_Site_GetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the following Reference element (and other optional attributes) to retrieve an instance of Location and its associated data.
 * @subpackage Structs
 */
class Business_Site_GetType extends AbstractStructBase
{
    /**
     * The Location_Reference
     * @var \StructType\Business_Site_Reference_DataType
     */
    public $Location_Reference;
    /**
     * The As_Of_Moment
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest moment (e.g. datetime) data was entered into the Workday system. For "Find" operations, the "As Of Moment" determines what data to be used within the search logic. For "Get" operations, the response element will
     * only include data entered into Workday before the "As Of Moment".
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
     * Constructor method for Business_Site_GetType
     * @uses Business_Site_GetType::setLocation_Reference()
     * @uses Business_Site_GetType::setAs_Of_Moment()
     * @uses Business_Site_GetType::setVersion()
     * @param \StructType\Business_Site_Reference_DataType $location_Reference
     * @param string $as_Of_Moment
     * @param string $version
     */
    public function __construct(\StructType\Business_Site_Reference_DataType $location_Reference = null, $as_Of_Moment = null, $version = null)
    {
        $this
            ->setLocation_Reference($location_Reference)
            ->setAs_Of_Moment($as_Of_Moment)
            ->setVersion($version);
    }
    /**
     * Get Location_Reference value
     * @return \StructType\Business_Site_Reference_DataType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \StructType\Business_Site_Reference_DataType $location_Reference
     * @return \StructType\Business_Site_GetType
     */
    public function setLocation_Reference(\StructType\Business_Site_Reference_DataType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
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
     * @return \StructType\Business_Site_GetType
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
     * @return \StructType\Business_Site_GetType
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
     * @return \StructType\Business_Site_GetType
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
