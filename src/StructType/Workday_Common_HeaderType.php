<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workday_Common_HeaderType StructType
 * @subpackage Structs
 */
class Workday_Common_HeaderType extends AbstractStructBase
{
    /**
     * The Include_Reference_Descriptors_In_Response
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference_Descriptors_In_Response;
    /**
     * Constructor method for Workday_Common_HeaderType
     * @uses Workday_Common_HeaderType::setInclude_Reference_Descriptors_In_Response()
     * @param bool $include_Reference_Descriptors_In_Response
     */
    public function __construct($include_Reference_Descriptors_In_Response = null)
    {
        $this
            ->setInclude_Reference_Descriptors_In_Response($include_Reference_Descriptors_In_Response);
    }
    /**
     * Get Include_Reference_Descriptors_In_Response value
     * @return bool|null
     */
    public function getInclude_Reference_Descriptors_In_Response()
    {
        return $this->Include_Reference_Descriptors_In_Response;
    }
    /**
     * Set Include_Reference_Descriptors_In_Response value
     * @param bool $include_Reference_Descriptors_In_Response
     * @return \StructType\Workday_Common_HeaderType
     */
    public function setInclude_Reference_Descriptors_In_Response($include_Reference_Descriptors_In_Response = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Reference_Descriptors_In_Response) && !is_bool($include_Reference_Descriptors_In_Response)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Reference_Descriptors_In_Response, true), gettype($include_Reference_Descriptors_In_Response)), __LINE__);
        }
        $this->Include_Reference_Descriptors_In_Response = $include_Reference_Descriptors_In_Response;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workday_Common_HeaderType
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
