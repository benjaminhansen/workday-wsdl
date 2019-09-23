<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response group allows for the response data to be tailored to only included elements that the user is looking for. If no response group is provided in the request, then only the following elements will be returned: Reference,
 * Organization Data, Hierarchy Data and if a Supervisory Organization Type the Supervisory Data.
 * @subpackage Structs
 */
class Organization_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Roles_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Roles Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Roles_Data;
    /**
     * The Include_Hierarchy_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Hierarchy Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Hierarchy_Data;
    /**
     * The Include_Supervisory_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Supervisory Data element is included in the response (ONLY APPLIES TO SUPERVISORY TYPE ORGS).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Supervisory_Data;
    /**
     * The Include_Staffing_Restrictions_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Staffing Restrictions Data element is included in the response (ONLY APPLIES TO SUPERVISORY ORGS).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Staffing_Restrictions_Data;
    /**
     * Constructor method for Organization_Response_GroupType
     * @uses Organization_Response_GroupType::setInclude_Roles_Data()
     * @uses Organization_Response_GroupType::setInclude_Hierarchy_Data()
     * @uses Organization_Response_GroupType::setInclude_Supervisory_Data()
     * @uses Organization_Response_GroupType::setInclude_Staffing_Restrictions_Data()
     * @param bool $include_Roles_Data
     * @param bool $include_Hierarchy_Data
     * @param bool $include_Supervisory_Data
     * @param bool $include_Staffing_Restrictions_Data
     */
    public function __construct($include_Roles_Data = null, $include_Hierarchy_Data = null, $include_Supervisory_Data = null, $include_Staffing_Restrictions_Data = null)
    {
        $this
            ->setInclude_Roles_Data($include_Roles_Data)
            ->setInclude_Hierarchy_Data($include_Hierarchy_Data)
            ->setInclude_Supervisory_Data($include_Supervisory_Data)
            ->setInclude_Staffing_Restrictions_Data($include_Staffing_Restrictions_Data);
    }
    /**
     * Get Include_Roles_Data value
     * @return bool|null
     */
    public function getInclude_Roles_Data()
    {
        return $this->Include_Roles_Data;
    }
    /**
     * Set Include_Roles_Data value
     * @param bool $include_Roles_Data
     * @return \WorkdayWsdl\\StructType\Organization_Response_GroupType
     */
    public function setInclude_Roles_Data($include_Roles_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Roles_Data) && !is_bool($include_Roles_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Roles_Data, true), gettype($include_Roles_Data)), __LINE__);
        }
        $this->Include_Roles_Data = $include_Roles_Data;
        return $this;
    }
    /**
     * Get Include_Hierarchy_Data value
     * @return bool|null
     */
    public function getInclude_Hierarchy_Data()
    {
        return $this->Include_Hierarchy_Data;
    }
    /**
     * Set Include_Hierarchy_Data value
     * @param bool $include_Hierarchy_Data
     * @return \WorkdayWsdl\\StructType\Organization_Response_GroupType
     */
    public function setInclude_Hierarchy_Data($include_Hierarchy_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Hierarchy_Data) && !is_bool($include_Hierarchy_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Hierarchy_Data, true), gettype($include_Hierarchy_Data)), __LINE__);
        }
        $this->Include_Hierarchy_Data = $include_Hierarchy_Data;
        return $this;
    }
    /**
     * Get Include_Supervisory_Data value
     * @return bool|null
     */
    public function getInclude_Supervisory_Data()
    {
        return $this->Include_Supervisory_Data;
    }
    /**
     * Set Include_Supervisory_Data value
     * @param bool $include_Supervisory_Data
     * @return \WorkdayWsdl\\StructType\Organization_Response_GroupType
     */
    public function setInclude_Supervisory_Data($include_Supervisory_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Supervisory_Data) && !is_bool($include_Supervisory_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Supervisory_Data, true), gettype($include_Supervisory_Data)), __LINE__);
        }
        $this->Include_Supervisory_Data = $include_Supervisory_Data;
        return $this;
    }
    /**
     * Get Include_Staffing_Restrictions_Data value
     * @return bool|null
     */
    public function getInclude_Staffing_Restrictions_Data()
    {
        return $this->Include_Staffing_Restrictions_Data;
    }
    /**
     * Set Include_Staffing_Restrictions_Data value
     * @param bool $include_Staffing_Restrictions_Data
     * @return \WorkdayWsdl\\StructType\Organization_Response_GroupType
     */
    public function setInclude_Staffing_Restrictions_Data($include_Staffing_Restrictions_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Staffing_Restrictions_Data) && !is_bool($include_Staffing_Restrictions_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Staffing_Restrictions_Data, true), gettype($include_Staffing_Restrictions_Data)), __LINE__);
        }
        $this->Include_Staffing_Restrictions_Data = $include_Staffing_Restrictions_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Response_GroupType
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
