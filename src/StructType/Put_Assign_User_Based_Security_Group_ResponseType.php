<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Assign_User-Based_Security_Group_ResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Response for the Assign User-Based Security Groups to a Workday Account request.
 * @subpackage Structs
 */
class Put_Assign_User_Based_Security_Group_ResponseType extends AbstractStructBase
{
    /**
     * The User_Based_Security_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: User-Based Security Groups assigned to a Workday Account
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType
     */
    public $User_Based_Security_Group_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Assign_User-Based_Security_Group_ResponseType
     * @uses Put_Assign_User_Based_Security_Group_ResponseType::setUser_Based_Security_Group_Reference()
     * @uses Put_Assign_User_Based_Security_Group_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $user_Based_Security_Group_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $user_Based_Security_Group_Reference = null, $version = null)
    {
        $this
            ->setUser_Based_Security_Group_Reference($user_Based_Security_Group_Reference)
            ->setVersion($version);
    }
    /**
     * Get User_Based_Security_Group_Reference value
     * @return \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType|null
     */
    public function getUser_Based_Security_Group_Reference()
    {
        return $this->{'User-Based_Security_Group_Reference'};
    }
    /**
     * Set User_Based_Security_Group_Reference value
     * @param \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $user_Based_Security_Group_Reference
     * @return \WorkdayWsdl\\StructType\Put_Assign_User_Based_Security_Group_ResponseType
     */
    public function setUser_Based_Security_Group_Reference(\WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $user_Based_Security_Group_Reference = null)
    {
        $this->User_Based_Security_Group_Reference = $this->{'User-Based_Security_Group_Reference'} = $user_Based_Security_Group_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Assign_User_Based_Security_Group_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Assign_User_Based_Security_Group_ResponseType
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
