<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response group allows for the response data to be tailored to only included elements that the user is looking for. If no response group is provided in the request, then all groups will be returned.
 * @subpackage Structs
 */
class Location_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Reference is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * The Include_Location_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Location Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Location_Data;
    /**
     * Constructor method for Location_Response_GroupType
     * @uses Location_Response_GroupType::setInclude_Reference()
     * @uses Location_Response_GroupType::setInclude_Location_Data()
     * @param bool $include_Reference
     * @param bool $include_Location_Data
     */
    public function __construct($include_Reference = null, $include_Location_Data = null)
    {
        $this
            ->setInclude_Reference($include_Reference)
            ->setInclude_Location_Data($include_Location_Data);
    }
    /**
     * Get Include_Reference value
     * @return bool|null
     */
    public function getInclude_Reference()
    {
        return $this->Include_Reference;
    }
    /**
     * Set Include_Reference value
     * @param bool $include_Reference
     * @return \StructType\Location_Response_GroupType
     */
    public function setInclude_Reference($include_Reference = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Reference) && !is_bool($include_Reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Reference, true), gettype($include_Reference)), __LINE__);
        }
        $this->Include_Reference = $include_Reference;
        return $this;
    }
    /**
     * Get Include_Location_Data value
     * @return bool|null
     */
    public function getInclude_Location_Data()
    {
        return $this->Include_Location_Data;
    }
    /**
     * Set Include_Location_Data value
     * @param bool $include_Location_Data
     * @return \StructType\Location_Response_GroupType
     */
    public function setInclude_Location_Data($include_Location_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Location_Data) && !is_bool($include_Location_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Location_Data, true), gettype($include_Location_Data)), __LINE__);
        }
        $this->Include_Location_Data = $include_Location_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Response_GroupType
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
