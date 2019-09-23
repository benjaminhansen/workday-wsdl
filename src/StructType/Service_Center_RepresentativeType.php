<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service_Center_RepresentativeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Service Center Representative data.
 * @subpackage Structs
 */
class Service_Center_RepresentativeType extends AbstractStructBase
{
    /**
     * The Service_Center_Representative_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the Service Center Representative.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType
     */
    public $Service_Center_Representative_Reference;
    /**
     * The Service_Center_Representative_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Service_Center_Representative_DataType
     */
    public $Service_Center_Representative_Data;
    /**
     * Constructor method for Service_Center_RepresentativeType
     * @uses Service_Center_RepresentativeType::setService_Center_Representative_Reference()
     * @uses Service_Center_RepresentativeType::setService_Center_Representative_Data()
     * @param \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference
     * @param \WorkdayWsdl\\StructType\Service_Center_Representative_DataType $service_Center_Representative_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference = null, \WorkdayWsdl\\StructType\Service_Center_Representative_DataType $service_Center_Representative_Data = null)
    {
        $this
            ->setService_Center_Representative_Reference($service_Center_Representative_Reference)
            ->setService_Center_Representative_Data($service_Center_Representative_Data);
    }
    /**
     * Get Service_Center_Representative_Reference value
     * @return \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType|null
     */
    public function getService_Center_Representative_Reference()
    {
        return $this->Service_Center_Representative_Reference;
    }
    /**
     * Set Service_Center_Representative_Reference value
     * @param \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference
     * @return \WorkdayWsdl\\StructType\Service_Center_RepresentativeType
     */
    public function setService_Center_Representative_Reference(\WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference = null)
    {
        $this->Service_Center_Representative_Reference = $service_Center_Representative_Reference;
        return $this;
    }
    /**
     * Get Service_Center_Representative_Data value
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_DataType|null
     */
    public function getService_Center_Representative_Data()
    {
        return $this->Service_Center_Representative_Data;
    }
    /**
     * Set Service_Center_Representative_Data value
     * @param \WorkdayWsdl\\StructType\Service_Center_Representative_DataType $service_Center_Representative_Data
     * @return \WorkdayWsdl\\StructType\Service_Center_RepresentativeType
     */
    public function setService_Center_Representative_Data(\WorkdayWsdl\\StructType\Service_Center_Representative_DataType $service_Center_Representative_Data = null)
    {
        $this->Service_Center_Representative_Data = $service_Center_Representative_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Service_Center_RepresentativeType
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
