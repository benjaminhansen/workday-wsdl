<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_User-Based_Security_Group_Response_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Element to return User-Based Security Group and its member Workday Accounts
 * @subpackage Structs
 */
class Assign_User_Based_Security_Group_Response_DataType extends AbstractStructBase
{
    /**
     * The Assign_User_Based_Security_Group
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Assign_User_Based_Security_GroupType[]
     */
    public $Assign_User_Based_Security_Group;
    /**
     * Constructor method for Assign_User-Based_Security_Group_Response_DataType
     * @uses Assign_User_Based_Security_Group_Response_DataType::setAssign_User_Based_Security_Group()
     * @param \StructType\Assign_User_Based_Security_GroupType[] $assign_User_Based_Security_Group
     */
    public function __construct(array $assign_User_Based_Security_Group = array())
    {
        $this
            ->setAssign_User_Based_Security_Group($assign_User_Based_Security_Group);
    }
    /**
     * Get Assign_User_Based_Security_Group value
     * @return \StructType\Assign_User_Based_Security_GroupType[]|null
     */
    public function getAssign_User_Based_Security_Group()
    {
        return $this->{'Assign_User-Based_Security_Group'};
    }
    /**
     * This method is responsible for validating the values passed to the setAssign_User_Based_Security_Group method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssign_User_Based_Security_Group method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssign_User_Based_Security_GroupForArrayConstraintsFromSetAssign_User_Based_Security_Group(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_User_Based_Security_Group_Response_DataTypeAssign_User_Based_Security_GroupItem) {
            // validation for constraint: itemType
            if (!$assign_User_Based_Security_Group_Response_DataTypeAssign_User_Based_Security_GroupItem instanceof \StructType\Assign_User_Based_Security_GroupType) {
                $invalidValues[] = is_object($assign_User_Based_Security_Group_Response_DataTypeAssign_User_Based_Security_GroupItem) ? get_class($assign_User_Based_Security_Group_Response_DataTypeAssign_User_Based_Security_GroupItem) : sprintf('%s(%s)', gettype($assign_User_Based_Security_Group_Response_DataTypeAssign_User_Based_Security_GroupItem), var_export($assign_User_Based_Security_Group_Response_DataTypeAssign_User_Based_Security_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Assign_User_Based_Security_Group property can only contain items of type \StructType\Assign_User_Based_Security_GroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Assign_User_Based_Security_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Assign_User_Based_Security_GroupType[] $assign_User_Based_Security_Group
     * @return \StructType\Assign_User_Based_Security_Group_Response_DataType
     */
    public function setAssign_User_Based_Security_Group(array $assign_User_Based_Security_Group = array())
    {
        // validation for constraint: array
        if ('' !== ($assign_User_Based_Security_GroupArrayErrorMessage = self::validateAssign_User_Based_Security_GroupForArrayConstraintsFromSetAssign_User_Based_Security_Group($assign_User_Based_Security_Group))) {
            throw new \InvalidArgumentException($assign_User_Based_Security_GroupArrayErrorMessage, __LINE__);
        }
        $this->Assign_User_Based_Security_Group = $this->{'Assign_User-Based_Security_Group'} = $assign_User_Based_Security_Group;
        return $this;
    }
    /**
     * Add item to Assign_User_Based_Security_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Assign_User_Based_Security_GroupType $item
     * @return \StructType\Assign_User_Based_Security_Group_Response_DataType
     */
    public function addToAssign_User_Based_Security_Group(\StructType\Assign_User_Based_Security_GroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Assign_User_Based_Security_GroupType) {
            throw new \InvalidArgumentException(sprintf('The Assign_User_Based_Security_Group property can only contain items of type \StructType\Assign_User_Based_Security_GroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Assign_User_Based_Security_Group[] = $this->{'Assign_User-Based_Security_Group'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Assign_User_Based_Security_Group_Response_DataType
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
