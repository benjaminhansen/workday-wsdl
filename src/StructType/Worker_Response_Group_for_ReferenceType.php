<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Response_Group_for_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response group allows for the response data to be tailored to only included elements that the user is looking for. If no response group is provided in the request, then all groups will be returned. If the Response Group element
 * is returned, you can select which sections of data to include in the response.
 * @subpackage Structs
 */
class Worker_Response_Group_for_ReferenceType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Reference to the Worker should be included in the response at the Previous_System_Job_History element level. It is always returned in the Previous_System_Job_History_Data level.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * Constructor method for Worker_Response_Group_for_ReferenceType
     * @uses Worker_Response_Group_for_ReferenceType::setInclude_Reference()
     * @param bool $include_Reference
     */
    public function __construct($include_Reference = null)
    {
        $this
            ->setInclude_Reference($include_Reference);
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
     * @return \StructType\Worker_Response_Group_for_ReferenceType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Response_Group_for_ReferenceType
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
