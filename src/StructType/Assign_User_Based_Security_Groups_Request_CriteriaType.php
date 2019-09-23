<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_User-Based_Security_Groups_Request_CriteriaType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the Request Criteria for Assign User-Based Security groups
 * @subpackage Structs
 */
class Assign_User_Based_Security_Groups_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Workday_Account_User_Name
     * Meta information extracted from the WSDL
     * - documentation: Workday Account Name used in the Request Criteria for Assign User-Based Security Groups Request
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Workday_Account_User_Name;
    /**
     * The User_Based_Security_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Requested User-Based Security Group References
     * - choice: User-Based_Security_Group_Reference | User-Based_Security_Group_Name
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\User_Based_Security_GroupObjectType[]
     */
    public $User_Based_Security_Group_Reference;
    /**
     * The User_Based_Security_Group_Name
     * Meta information extracted from the WSDL
     * - documentation: User-Based Security Group Name in the Request Criteria
     * - choice: User-Based_Security_Group_Reference | User-Based_Security_Group_Name
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $User_Based_Security_Group_Name;
    /**
     * Constructor method for Assign_User-Based_Security_Groups_Request_CriteriaType
     * @uses Assign_User_Based_Security_Groups_Request_CriteriaType::setWorkday_Account_User_Name()
     * @uses Assign_User_Based_Security_Groups_Request_CriteriaType::setUser_Based_Security_Group_Reference()
     * @uses Assign_User_Based_Security_Groups_Request_CriteriaType::setUser_Based_Security_Group_Name()
     * @param string $workday_Account_User_Name
     * @param \StructType\User_Based_Security_GroupObjectType[] $user_Based_Security_Group_Reference
     * @param string $user_Based_Security_Group_Name
     */
    public function __construct($workday_Account_User_Name = null, array $user_Based_Security_Group_Reference = array(), $user_Based_Security_Group_Name = null)
    {
        $this
            ->setWorkday_Account_User_Name($workday_Account_User_Name)
            ->setUser_Based_Security_Group_Reference($user_Based_Security_Group_Reference)
            ->setUser_Based_Security_Group_Name($user_Based_Security_Group_Name);
    }
    /**
     * Get Workday_Account_User_Name value
     * @return string|null
     */
    public function getWorkday_Account_User_Name()
    {
        return $this->Workday_Account_User_Name;
    }
    /**
     * Set Workday_Account_User_Name value
     * @param string $workday_Account_User_Name
     * @return \StructType\Assign_User_Based_Security_Groups_Request_CriteriaType
     */
    public function setWorkday_Account_User_Name($workday_Account_User_Name = null)
    {
        // validation for constraint: string
        if (!is_null($workday_Account_User_Name) && !is_string($workday_Account_User_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workday_Account_User_Name, true), gettype($workday_Account_User_Name)), __LINE__);
        }
        $this->Workday_Account_User_Name = $workday_Account_User_Name;
        return $this;
    }
    /**
     * Get User_Based_Security_Group_Reference value
     * @return \StructType\User_Based_Security_GroupObjectType[]|null
     */
    public function getUser_Based_Security_Group_Reference()
    {
        return isset($this->{'User-Based_Security_Group_Reference'}) ? $this->{'User-Based_Security_Group_Reference'} : null;
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
        foreach ($values as $assign_User_Based_Security_Groups_Request_CriteriaTypeUser_Based_Security_Group_ReferenceItem) {
            // validation for constraint: itemType
            if (!$assign_User_Based_Security_Groups_Request_CriteriaTypeUser_Based_Security_Group_ReferenceItem instanceof \StructType\User_Based_Security_GroupObjectType) {
                $invalidValues[] = is_object($assign_User_Based_Security_Groups_Request_CriteriaTypeUser_Based_Security_Group_ReferenceItem) ? get_class($assign_User_Based_Security_Groups_Request_CriteriaTypeUser_Based_Security_Group_ReferenceItem) : sprintf('%s(%s)', gettype($assign_User_Based_Security_Groups_Request_CriteriaTypeUser_Based_Security_Group_ReferenceItem), var_export($assign_User_Based_Security_Groups_Request_CriteriaTypeUser_Based_Security_Group_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The User_Based_Security_Group_Reference property can only contain items of type \StructType\User_Based_Security_GroupObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setUser_Based_Security_Group_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUser_Based_Security_Group_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUser_Based_Security_Group_ReferenceForChoiceConstraintsFromSetUser_Based_Security_Group_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'User_Based_Security_Group_Name',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property User-Based_Security_Group_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: User-Based_Security_Group_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set User_Based_Security_Group_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @throws \InvalidArgumentException
     * @param \StructType\User_Based_Security_GroupObjectType[] $user_Based_Security_Group_Reference
     * @return \StructType\Assign_User_Based_Security_Groups_Request_CriteriaType
     */
    public function setUser_Based_Security_Group_Reference(array $user_Based_Security_Group_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($user_Based_Security_Group_ReferenceArrayErrorMessage = self::validateUser_Based_Security_Group_ReferenceForArrayConstraintsFromSetUser_Based_Security_Group_Reference($user_Based_Security_Group_Reference))) {
            throw new \InvalidArgumentException($user_Based_Security_Group_ReferenceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(User-Based_Security_Group_Reference, User-Based_Security_Group_Name)
        if ('' !== ($user_Based_Security_Group_ReferenceChoiceErrorMessage = self::validateUser_Based_Security_Group_ReferenceForChoiceConstraintsFromSetUser_Based_Security_Group_Reference($user_Based_Security_Group_Reference))) {
            throw new \InvalidArgumentException($user_Based_Security_Group_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($user_Based_Security_Group_Reference) || (is_array($user_Based_Security_Group_Reference) && empty($user_Based_Security_Group_Reference))) {
            unset($this->User_Based_Security_Group_Reference, $this->{'User-Based_Security_Group_Reference'});
        } else {
            $this->User_Based_Security_Group_Reference = $this->{'User-Based_Security_Group_Reference'} = $user_Based_Security_Group_Reference;
        }
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToUser_Based_Security_Group_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToUser_Based_Security_Group_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToUser_Based_Security_Group_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'User_Based_Security_Group_Name',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property User-Based_Security_Group_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: User-Based_Security_Group_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Add item to User_Based_Security_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\User_Based_Security_GroupObjectType $item
     * @return \StructType\Assign_User_Based_Security_Groups_Request_CriteriaType
     */
    public function addToUser_Based_Security_Group_Reference(\StructType\User_Based_Security_GroupObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\User_Based_Security_GroupObjectType) {
            throw new \InvalidArgumentException(sprintf('The User_Based_Security_Group_Reference property can only contain items of type \StructType\User_Based_Security_GroupObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(User-Based_Security_Group_Reference, User-Based_Security_Group_Name)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToUser_Based_Security_Group_Reference($item))) {
            throw new \InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        $this->User_Based_Security_Group_Reference[] = $this->{'User-Based_Security_Group_Reference'}[] = $item;
        return $this;
    }
    /**
     * Get User_Based_Security_Group_Name value
     * @return string|null
     */
    public function getUser_Based_Security_Group_Name()
    {
        return isset($this->{'User-Based_Security_Group_Name'}) ? $this->{'User-Based_Security_Group_Name'} : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUser_Based_Security_Group_Name method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUser_Based_Security_Group_Name method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUser_Based_Security_Group_NameForChoiceConstraintsFromSetUser_Based_Security_Group_Name($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'User_Based_Security_Group_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property User-Based_Security_Group_Name can\'t be set as the property %s is already set. Only one property must be set among these properties: User-Based_Security_Group_Name, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set User_Based_Security_Group_Name value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $user_Based_Security_Group_Name
     * @return \StructType\Assign_User_Based_Security_Groups_Request_CriteriaType
     */
    public function setUser_Based_Security_Group_Name($user_Based_Security_Group_Name = null)
    {
        // validation for constraint: string
        if (!is_null($user_Based_Security_Group_Name) && !is_string($user_Based_Security_Group_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_Based_Security_Group_Name, true), gettype($user_Based_Security_Group_Name)), __LINE__);
        }
        // validation for constraint: choice(User-Based_Security_Group_Reference, User-Based_Security_Group_Name)
        if ('' !== ($user_Based_Security_Group_NameChoiceErrorMessage = self::validateUser_Based_Security_Group_NameForChoiceConstraintsFromSetUser_Based_Security_Group_Name($user_Based_Security_Group_Name))) {
            throw new \InvalidArgumentException($user_Based_Security_Group_NameChoiceErrorMessage, __LINE__);
        }
        if (is_null($user_Based_Security_Group_Name) || (is_array($user_Based_Security_Group_Name) && empty($user_Based_Security_Group_Name))) {
            unset($this->User_Based_Security_Group_Name, $this->{'User-Based_Security_Group_Name'});
        } else {
            $this->User_Based_Security_Group_Name = $this->{'User-Based_Security_Group_Name'} = $user_Based_Security_Group_Name;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Assign_User_Based_Security_Groups_Request_CriteriaType
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
