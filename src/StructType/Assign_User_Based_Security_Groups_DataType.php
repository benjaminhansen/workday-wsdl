<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_User-Based_Security_Groups_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data element containing a Workday Account and the assigned User-Based Security Groups .
 * @subpackage Structs
 */
class Assign_User_Based_Security_Groups_DataType extends AbstractStructBase
{
    /**
     * The Workday_Account_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a System User reference
     * @var \WorkdayWsdl\\StructType\System_UserObjectType
     */
    public $Workday_Account_Reference;
    /**
     * The User_Based_Security_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for a User-Based Security Group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType[]
     */
    public $User_Based_Security_Group_Reference;
    /**
     * Constructor method for Assign_User-Based_Security_Groups_DataType
     * @uses Assign_User_Based_Security_Groups_DataType::setWorkday_Account_Reference()
     * @uses Assign_User_Based_Security_Groups_DataType::setUser_Based_Security_Group_Reference()
     * @param \WorkdayWsdl\\StructType\System_UserObjectType $workday_Account_Reference
     * @param \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType[] $user_Based_Security_Group_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\System_UserObjectType $workday_Account_Reference = null, array $user_Based_Security_Group_Reference = array())
    {
        $this
            ->setWorkday_Account_Reference($workday_Account_Reference)
            ->setUser_Based_Security_Group_Reference($user_Based_Security_Group_Reference);
    }
    /**
     * Get Workday_Account_Reference value
     * @return \WorkdayWsdl\\StructType\System_UserObjectType|null
     */
    public function getWorkday_Account_Reference()
    {
        return $this->Workday_Account_Reference;
    }
    /**
     * Set Workday_Account_Reference value
     * @param \WorkdayWsdl\\StructType\System_UserObjectType $workday_Account_Reference
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType
     */
    public function setWorkday_Account_Reference(\WorkdayWsdl\\StructType\System_UserObjectType $workday_Account_Reference = null)
    {
        $this->Workday_Account_Reference = $workday_Account_Reference;
        return $this;
    }
    /**
     * Get User_Based_Security_Group_Reference value
     * @return \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType[]|null
     */
    public function getUser_Based_Security_Group_Reference()
    {
        return $this->{'User-Based_Security_Group_Reference'};
    }
    /**
     * This method is responsible for validating the values passed to the setUser_Based_Security_Group_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUser_Based_Security_Group_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUser_Based_Security_Group_ReferenceForArrayConstraintsFromSetUser_Based_Security_Group_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_User_Based_Security_Groups_DataTypeUser_Based_Security_Group_ReferenceItem) {
            // validation for constraint: itemType
            if (!$assign_User_Based_Security_Groups_DataTypeUser_Based_Security_Group_ReferenceItem instanceof \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType) {
                $invalidValues[] = is_object($assign_User_Based_Security_Groups_DataTypeUser_Based_Security_Group_ReferenceItem) ? get_class($assign_User_Based_Security_Groups_DataTypeUser_Based_Security_Group_ReferenceItem) : sprintf('%s(%s)', gettype($assign_User_Based_Security_Groups_DataTypeUser_Based_Security_Group_ReferenceItem), var_export($assign_User_Based_Security_Groups_DataTypeUser_Based_Security_Group_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The User_Based_Security_Group_Reference property can only contain items of type \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set User_Based_Security_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType[] $user_Based_Security_Group_Reference
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType
     */
    public function setUser_Based_Security_Group_Reference(array $user_Based_Security_Group_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($user_Based_Security_Group_ReferenceArrayErrorMessage = self::validateUser_Based_Security_Group_ReferenceForArrayConstraintsFromSetUser_Based_Security_Group_Reference($user_Based_Security_Group_Reference))) {
            throw new \InvalidArgumentException($user_Based_Security_Group_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->User_Based_Security_Group_Reference = $this->{'User-Based_Security_Group_Reference'} = $user_Based_Security_Group_Reference;
        return $this;
    }
    /**
     * Add item to User_Based_Security_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $item
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType
     */
    public function addToUser_Based_Security_Group_Reference(\WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType) {
            throw new \InvalidArgumentException(sprintf('The User_Based_Security_Group_Reference property can only contain items of type \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->User_Based_Security_Group_Reference[] = $this->{'User-Based_Security_Group_Reference'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType
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
