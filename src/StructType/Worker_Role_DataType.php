<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Role_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the roles that a worker holds.
 * @subpackage Structs
 */
class Worker_Role_DataType extends AbstractStructBase
{
    /**
     * The Organization_Role_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Organization_Role_DataType
     */
    public $Organization_Role_Data;
    /**
     * Constructor method for Worker_Role_DataType
     * @uses Worker_Role_DataType::setOrganization_Role_Data()
     * @param \WorkdayWsdl\\StructType\Worker_Organization_Role_DataType $organization_Role_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Worker_Organization_Role_DataType $organization_Role_Data = null)
    {
        $this
            ->setOrganization_Role_Data($organization_Role_Data);
    }
    /**
     * Get Organization_Role_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Organization_Role_DataType|null
     */
    public function getOrganization_Role_Data()
    {
        return $this->Organization_Role_Data;
    }
    /**
     * Set Organization_Role_Data value
     * @param \WorkdayWsdl\\StructType\Worker_Organization_Role_DataType $organization_Role_Data
     * @return \WorkdayWsdl\\StructType\Worker_Role_DataType
     */
    public function setOrganization_Role_Data(\WorkdayWsdl\\StructType\Worker_Organization_Role_DataType $organization_Role_Data = null)
    {
        $this->Organization_Role_Data = $organization_Role_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Role_DataType
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
