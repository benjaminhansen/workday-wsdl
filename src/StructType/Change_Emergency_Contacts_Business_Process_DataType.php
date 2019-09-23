<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Emergency_Contacts_Business_Process_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Primary Emergency Contact must be specified when Replace All is set. | One and only one emergency contact can be specified as Primary. | You cannot initiate this action because there are other pending or completed actions for the
 * person. | Wrapper element to hold the data for the emergency contacts of a person
 * @subpackage Structs
 */
class Change_Emergency_Contacts_Business_Process_DataType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the person.
     * @var \StructType\RoleObjectType
     */
    public $Person_Reference;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not to replace existing emergency contacts for the person. When true, existing emergency contacts are removed before the data in this web service request is processed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Replace_All;
    /**
     * The Emergency_Contacts_Reference_Data
     * Meta information extracted from the WSDL
     * - documentation: Data related to a emergency contact person
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Change_Emergency_Contacts_DataType[]
     */
    public $Emergency_Contacts_Reference_Data;
    /**
     * Constructor method for Change_Emergency_Contacts_Business_Process_DataType
     * @uses Change_Emergency_Contacts_Business_Process_DataType::setPerson_Reference()
     * @uses Change_Emergency_Contacts_Business_Process_DataType::setReplace_All()
     * @uses Change_Emergency_Contacts_Business_Process_DataType::setEmergency_Contacts_Reference_Data()
     * @param \StructType\RoleObjectType $person_Reference
     * @param bool $replace_All
     * @param \StructType\Change_Emergency_Contacts_DataType[] $emergency_Contacts_Reference_Data
     */
    public function __construct(\StructType\RoleObjectType $person_Reference = null, $replace_All = null, array $emergency_Contacts_Reference_Data = array())
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setReplace_All($replace_All)
            ->setEmergency_Contacts_Reference_Data($emergency_Contacts_Reference_Data);
    }
    /**
     * Get Person_Reference value
     * @return \StructType\RoleObjectType|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * Set Person_Reference value
     * @param \StructType\RoleObjectType $person_Reference
     * @return \StructType\Change_Emergency_Contacts_Business_Process_DataType
     */
    public function setPerson_Reference(\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Replace_All value
     * @return bool|null
     */
    public function getReplace_All()
    {
        return $this->Replace_All;
    }
    /**
     * Set Replace_All value
     * @param bool $replace_All
     * @return \StructType\Change_Emergency_Contacts_Business_Process_DataType
     */
    public function setReplace_All($replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($replace_All) && !is_bool($replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replace_All, true), gettype($replace_All)), __LINE__);
        }
        $this->Replace_All = $replace_All;
        return $this;
    }
    /**
     * Get Emergency_Contacts_Reference_Data value
     * @return \StructType\Change_Emergency_Contacts_DataType[]|null
     */
    public function getEmergency_Contacts_Reference_Data()
    {
        return $this->Emergency_Contacts_Reference_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEmergency_Contacts_Reference_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmergency_Contacts_Reference_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmergency_Contacts_Reference_DataForArrayConstraintsFromSetEmergency_Contacts_Reference_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Emergency_Contacts_Business_Process_DataTypeEmergency_Contacts_Reference_DataItem) {
            // validation for constraint: itemType
            if (!$change_Emergency_Contacts_Business_Process_DataTypeEmergency_Contacts_Reference_DataItem instanceof \StructType\Change_Emergency_Contacts_DataType) {
                $invalidValues[] = is_object($change_Emergency_Contacts_Business_Process_DataTypeEmergency_Contacts_Reference_DataItem) ? get_class($change_Emergency_Contacts_Business_Process_DataTypeEmergency_Contacts_Reference_DataItem) : sprintf('%s(%s)', gettype($change_Emergency_Contacts_Business_Process_DataTypeEmergency_Contacts_Reference_DataItem), var_export($change_Emergency_Contacts_Business_Process_DataTypeEmergency_Contacts_Reference_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Emergency_Contacts_Reference_Data property can only contain items of type \StructType\Change_Emergency_Contacts_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Emergency_Contacts_Reference_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Emergency_Contacts_DataType[] $emergency_Contacts_Reference_Data
     * @return \StructType\Change_Emergency_Contacts_Business_Process_DataType
     */
    public function setEmergency_Contacts_Reference_Data(array $emergency_Contacts_Reference_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($emergency_Contacts_Reference_DataArrayErrorMessage = self::validateEmergency_Contacts_Reference_DataForArrayConstraintsFromSetEmergency_Contacts_Reference_Data($emergency_Contacts_Reference_Data))) {
            throw new \InvalidArgumentException($emergency_Contacts_Reference_DataArrayErrorMessage, __LINE__);
        }
        $this->Emergency_Contacts_Reference_Data = $emergency_Contacts_Reference_Data;
        return $this;
    }
    /**
     * Add item to Emergency_Contacts_Reference_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Emergency_Contacts_DataType $item
     * @return \StructType\Change_Emergency_Contacts_Business_Process_DataType
     */
    public function addToEmergency_Contacts_Reference_Data(\StructType\Change_Emergency_Contacts_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Change_Emergency_Contacts_DataType) {
            throw new \InvalidArgumentException(sprintf('The Emergency_Contacts_Reference_Data property can only contain items of type \StructType\Change_Emergency_Contacts_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Emergency_Contacts_Reference_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Emergency_Contacts_Business_Process_DataType
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
