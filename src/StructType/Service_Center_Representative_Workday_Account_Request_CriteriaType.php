<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Service_Center_Representative_Workday_Account_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Criteria
 * @subpackage Structs
 */
class Service_Center_Representative_Workday_Account_Request_CriteriaType extends AbstractStructBase
{
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Service_Center_Representative_Workday_Account_Request_CriteriaType
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
