<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response group allows for the response data to be tailored to only included elements that the user is looking for. If no response group is provided in the request then only the following elements will be returned: Reference and
 * Former Worker Data.
 * @subpackage Structs
 */
class Former_Worker_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Former_Worker_Attachments
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Former Worker Attachments (if they exist) are included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Former_Worker_Attachments;
    /**
     * Constructor method for Former_Worker_Response_GroupType
     * @uses Former_Worker_Response_GroupType::setInclude_Former_Worker_Attachments()
     * @param bool $include_Former_Worker_Attachments
     */
    public function __construct($include_Former_Worker_Attachments = null)
    {
        $this
            ->setInclude_Former_Worker_Attachments($include_Former_Worker_Attachments);
    }
    /**
     * Get Include_Former_Worker_Attachments value
     * @return bool|null
     */
    public function getInclude_Former_Worker_Attachments()
    {
        return $this->Include_Former_Worker_Attachments;
    }
    /**
     * Set Include_Former_Worker_Attachments value
     * @param bool $include_Former_Worker_Attachments
     * @return \StructType\Former_Worker_Response_GroupType
     */
    public function setInclude_Former_Worker_Attachments($include_Former_Worker_Attachments = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Former_Worker_Attachments) && !is_bool($include_Former_Worker_Attachments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Former_Worker_Attachments, true), gettype($include_Former_Worker_Attachments)), __LINE__);
        }
        $this->Include_Former_Worker_Attachments = $include_Former_Worker_Attachments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Former_Worker_Response_GroupType
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
