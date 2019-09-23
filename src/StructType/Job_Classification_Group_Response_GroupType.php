<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Classification_Group_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Job Classification Group Response Group
 * @subpackage Structs
 */
class Job_Classification_Group_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Include Reference
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * The Include_Job_Classifications
     * Meta information extracted from the WSDL
     * - documentation: A boolean attribute to indicate whether to include Job Classifications within a Job Classification Group in the WS response. When the boolean is set to 0 or false none of the Job Classifications will be returned. The default value is
     * 1 or true.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Job_Classifications;
    /**
     * Constructor method for Job_Classification_Group_Response_GroupType
     * @uses Job_Classification_Group_Response_GroupType::setInclude_Reference()
     * @uses Job_Classification_Group_Response_GroupType::setInclude_Job_Classifications()
     * @param bool $include_Reference
     * @param bool $include_Job_Classifications
     */
    public function __construct($include_Reference = null, $include_Job_Classifications = null)
    {
        $this
            ->setInclude_Reference($include_Reference)
            ->setInclude_Job_Classifications($include_Job_Classifications);
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
     * @return \StructType\Job_Classification_Group_Response_GroupType
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
     * Get Include_Job_Classifications value
     * @return bool|null
     */
    public function getInclude_Job_Classifications()
    {
        return $this->Include_Job_Classifications;
    }
    /**
     * Set Include_Job_Classifications value
     * @param bool $include_Job_Classifications
     * @return \StructType\Job_Classification_Group_Response_GroupType
     */
    public function setInclude_Job_Classifications($include_Job_Classifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Job_Classifications) && !is_bool($include_Job_Classifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Job_Classifications, true), gettype($include_Job_Classifications)), __LINE__);
        }
        $this->Include_Job_Classifications = $include_Job_Classifications;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Classification_Group_Response_GroupType
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
