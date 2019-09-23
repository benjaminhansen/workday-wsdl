<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_User-Based_Security_Groups_Response_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Response Data for retrieving Workday Accounts and their assigned User-Based Security Groups.
 * @subpackage Structs
 */
class Assign_User_Based_Security_Groups_Response_DataType extends AbstractStructBase
{
    /**
     * The Assign_User_Based_Security_Groups
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Assign_User_Based_Security_GroupsType[]
     */
    public $Assign_User_Based_Security_Groups;
    /**
     * Constructor method for Assign_User-Based_Security_Groups_Response_DataType
     * @uses Assign_User_Based_Security_Groups_Response_DataType::setAssign_User_Based_Security_Groups()
     * @param \StructType\Assign_User_Based_Security_GroupsType[] $assign_User_Based_Security_Groups
     */
    public function __construct(array $assign_User_Based_Security_Groups = array())
    {
        $this
            ->setAssign_User_Based_Security_Groups($assign_User_Based_Security_Groups);
    }
    /**
     * Get Assign_User_Based_Security_Groups value
     * @return \StructType\Assign_User_Based_Security_GroupsType[]|null
     */
    public function getAssign_User_Based_Security_Groups()
    {
        return $this->{'Assign_User-Based_Security_Groups'};
    }
    /**
     * This method is responsible for validating the values passed to the setAssign_User_Based_Security_Groups method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssign_User_Based_Security_Groups method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssign_User_Based_Security_GroupsForArrayConstraintsFromSetAssign_User_Based_Security_Groups(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_User_Based_Security_Groups_Response_DataTypeAssign_User_Based_Security_GroupsItem) {
            // validation for constraint: itemType
            if (!$assign_User_Based_Security_Groups_Response_DataTypeAssign_User_Based_Security_GroupsItem instanceof \StructType\Assign_User_Based_Security_GroupsType) {
                $invalidValues[] = is_object($assign_User_Based_Security_Groups_Response_DataTypeAssign_User_Based_Security_GroupsItem) ? get_class($assign_User_Based_Security_Groups_Response_DataTypeAssign_User_Based_Security_GroupsItem) : sprintf('%s(%s)', gettype($assign_User_Based_Security_Groups_Response_DataTypeAssign_User_Based_Security_GroupsItem), var_export($assign_User_Based_Security_Groups_Response_DataTypeAssign_User_Based_Security_GroupsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Assign_User_Based_Security_Groups property can only contain items of type \StructType\Assign_User_Based_Security_GroupsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Assign_User_Based_Security_Groups value
     * @throws \InvalidArgumentException
     * @param \StructType\Assign_User_Based_Security_GroupsType[] $assign_User_Based_Security_Groups
     * @return \StructType\Assign_User_Based_Security_Groups_Response_DataType
     */
    public function setAssign_User_Based_Security_Groups(array $assign_User_Based_Security_Groups = array())
    {
        // validation for constraint: array
        if ('' !== ($assign_User_Based_Security_GroupsArrayErrorMessage = self::validateAssign_User_Based_Security_GroupsForArrayConstraintsFromSetAssign_User_Based_Security_Groups($assign_User_Based_Security_Groups))) {
            throw new \InvalidArgumentException($assign_User_Based_Security_GroupsArrayErrorMessage, __LINE__);
        }
        $this->Assign_User_Based_Security_Groups = $this->{'Assign_User-Based_Security_Groups'} = $assign_User_Based_Security_Groups;
        return $this;
    }
    /**
     * Add item to Assign_User_Based_Security_Groups value
     * @throws \InvalidArgumentException
     * @param \StructType\Assign_User_Based_Security_GroupsType $item
     * @return \StructType\Assign_User_Based_Security_Groups_Response_DataType
     */
    public function addToAssign_User_Based_Security_Groups(\StructType\Assign_User_Based_Security_GroupsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Assign_User_Based_Security_GroupsType) {
            throw new \InvalidArgumentException(sprintf('The Assign_User_Based_Security_Groups property can only contain items of type \StructType\Assign_User_Based_Security_GroupsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Assign_User_Based_Security_Groups[] = $this->{'Assign_User-Based_Security_Groups'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Assign_User_Based_Security_Groups_Response_DataType
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
