<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Workday_AccountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Workday Account information.
 * @subpackage Structs
 */
class Get_Workday_AccountType extends AbstractStructBase
{
    /**
     * The Workday_Account_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the Workday Account.
     * - minOccurs: 0
     * @var \StructType\RoleObjectType
     */
    public $Workday_Account_Reference;
    /**
     * The Workday_Account_for_Worker_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Workday_Account_for_Worker_DataType[]
     */
    public $Workday_Account_for_Worker_Data;
    /**
     * Constructor method for Get_Workday_AccountType
     * @uses Get_Workday_AccountType::setWorkday_Account_Reference()
     * @uses Get_Workday_AccountType::setWorkday_Account_for_Worker_Data()
     * @param \StructType\RoleObjectType $workday_Account_Reference
     * @param \StructType\Workday_Account_for_Worker_DataType[] $workday_Account_for_Worker_Data
     */
    public function __construct(\StructType\RoleObjectType $workday_Account_Reference = null, array $workday_Account_for_Worker_Data = array())
    {
        $this
            ->setWorkday_Account_Reference($workday_Account_Reference)
            ->setWorkday_Account_for_Worker_Data($workday_Account_for_Worker_Data);
    }
    /**
     * Get Workday_Account_Reference value
     * @return \StructType\RoleObjectType|null
     */
    public function getWorkday_Account_Reference()
    {
        return $this->Workday_Account_Reference;
    }
    /**
     * Set Workday_Account_Reference value
     * @param \StructType\RoleObjectType $workday_Account_Reference
     * @return \StructType\Get_Workday_AccountType
     */
    public function setWorkday_Account_Reference(\StructType\RoleObjectType $workday_Account_Reference = null)
    {
        $this->Workday_Account_Reference = $workday_Account_Reference;
        return $this;
    }
    /**
     * Get Workday_Account_for_Worker_Data value
     * @return \StructType\Workday_Account_for_Worker_DataType[]|null
     */
    public function getWorkday_Account_for_Worker_Data()
    {
        return $this->Workday_Account_for_Worker_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkday_Account_for_Worker_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkday_Account_for_Worker_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkday_Account_for_Worker_DataForArrayConstraintsFromSetWorkday_Account_for_Worker_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Workday_AccountTypeWorkday_Account_for_Worker_DataItem) {
            // validation for constraint: itemType
            if (!$get_Workday_AccountTypeWorkday_Account_for_Worker_DataItem instanceof \StructType\Workday_Account_for_Worker_DataType) {
                $invalidValues[] = is_object($get_Workday_AccountTypeWorkday_Account_for_Worker_DataItem) ? get_class($get_Workday_AccountTypeWorkday_Account_for_Worker_DataItem) : sprintf('%s(%s)', gettype($get_Workday_AccountTypeWorkday_Account_for_Worker_DataItem), var_export($get_Workday_AccountTypeWorkday_Account_for_Worker_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workday_Account_for_Worker_Data property can only contain items of type \StructType\Workday_Account_for_Worker_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workday_Account_for_Worker_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workday_Account_for_Worker_DataType[] $workday_Account_for_Worker_Data
     * @return \StructType\Get_Workday_AccountType
     */
    public function setWorkday_Account_for_Worker_Data(array $workday_Account_for_Worker_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($workday_Account_for_Worker_DataArrayErrorMessage = self::validateWorkday_Account_for_Worker_DataForArrayConstraintsFromSetWorkday_Account_for_Worker_Data($workday_Account_for_Worker_Data))) {
            throw new \InvalidArgumentException($workday_Account_for_Worker_DataArrayErrorMessage, __LINE__);
        }
        $this->Workday_Account_for_Worker_Data = $workday_Account_for_Worker_Data;
        return $this;
    }
    /**
     * Add item to Workday_Account_for_Worker_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workday_Account_for_Worker_DataType $item
     * @return \StructType\Get_Workday_AccountType
     */
    public function addToWorkday_Account_for_Worker_Data(\StructType\Workday_Account_for_Worker_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Workday_Account_for_Worker_DataType) {
            throw new \InvalidArgumentException(sprintf('The Workday_Account_for_Worker_Data property can only contain items of type \StructType\Workday_Account_for_Worker_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workday_Account_for_Worker_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Get_Workday_AccountType
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
