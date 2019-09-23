<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Dependent_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Wrapper data element for the Put Dependent Web Service.
 * @subpackage Structs
 */
class Put_Dependent_DataType extends AbstractStructBase
{
    /**
     * The Dependent_ID
     * Meta information extracted from the WSDL
     * - documentation: The Reference ID for the Dependent. This field can be used to fill in the ID value for a newly created Dependent, or to update the ID of an existing Dependent.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Dependent_ID;
    /**
     * The Employee_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Employee for the Dependent.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EmployeeObjectType
     */
    public $Employee_Reference;
    /**
     * The Existing_Related_Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing related person for the Dependent. If this field is populated, this dependent's personal information data will be shared with the person specified.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Related_Person_for_WorkerObjectType
     */
    public $Existing_Related_Person_Reference;
    /**
     * The Related_Person_Relationship_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the relationship between the dependent and the related person.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Related_Person_RelationshipObjectType
     */
    public $Related_Person_Relationship_Reference;
    /**
     * The Use_Employee_Address
     * Meta information extracted from the WSDL
     * - documentation: If this field is marked true, then the dependent will share the specified employee's primary home address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Use_Employee_Address;
    /**
     * The Use_Employee_Phone
     * Meta information extracted from the WSDL
     * - documentation: If this field is marked true, then the dependent will share the specified employee's primary home phone data.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Use_Employee_Phone;
    /**
     * The Irrevocable
     * Meta information extracted from the WSDL
     * - documentation: If this field is marked true, any new beneficiaries that are created will be marked as "Irrevocable".
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Irrevocable;
    /**
     * The Dependent_Personal_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for this dependent's personal information.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Dependent_Personal_Information_DataType
     */
    public $Dependent_Personal_Information_Data;
    /**
     * The Court_Order_Replacement_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]
     */
    public $Court_Order_Replacement_Data;
    /**
     * Constructor method for Put_Dependent_DataType
     * @uses Put_Dependent_DataType::setDependent_ID()
     * @uses Put_Dependent_DataType::setEmployee_Reference()
     * @uses Put_Dependent_DataType::setExisting_Related_Person_Reference()
     * @uses Put_Dependent_DataType::setRelated_Person_Relationship_Reference()
     * @uses Put_Dependent_DataType::setUse_Employee_Address()
     * @uses Put_Dependent_DataType::setUse_Employee_Phone()
     * @uses Put_Dependent_DataType::setIrrevocable()
     * @uses Put_Dependent_DataType::setDependent_Personal_Information_Data()
     * @uses Put_Dependent_DataType::setCourt_Order_Replacement_Data()
     * @param string $dependent_ID
     * @param \WorkdayWsdl\\StructType\EmployeeObjectType $employee_Reference
     * @param \WorkdayWsdl\\StructType\Related_Person_for_WorkerObjectType $existing_Related_Person_Reference
     * @param \WorkdayWsdl\\StructType\Related_Person_RelationshipObjectType $related_Person_Relationship_Reference
     * @param bool $use_Employee_Address
     * @param bool $use_Employee_Phone
     * @param bool $irrevocable
     * @param \WorkdayWsdl\\StructType\Dependent_Personal_Information_DataType $dependent_Personal_Information_Data
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order_Replacement_Data
     */
    public function __construct($dependent_ID = null, \WorkdayWsdl\\StructType\EmployeeObjectType $employee_Reference = null, \WorkdayWsdl\\StructType\Related_Person_for_WorkerObjectType $existing_Related_Person_Reference = null, \WorkdayWsdl\\StructType\Related_Person_RelationshipObjectType $related_Person_Relationship_Reference = null, $use_Employee_Address = null, $use_Employee_Phone = null, $irrevocable = null, \WorkdayWsdl\\StructType\Dependent_Personal_Information_DataType $dependent_Personal_Information_Data = null, array $court_Order_Replacement_Data = array())
    {
        $this
            ->setDependent_ID($dependent_ID)
            ->setEmployee_Reference($employee_Reference)
            ->setExisting_Related_Person_Reference($existing_Related_Person_Reference)
            ->setRelated_Person_Relationship_Reference($related_Person_Relationship_Reference)
            ->setUse_Employee_Address($use_Employee_Address)
            ->setUse_Employee_Phone($use_Employee_Phone)
            ->setIrrevocable($irrevocable)
            ->setDependent_Personal_Information_Data($dependent_Personal_Information_Data)
            ->setCourt_Order_Replacement_Data($court_Order_Replacement_Data);
    }
    /**
     * Get Dependent_ID value
     * @return string|null
     */
    public function getDependent_ID()
    {
        return $this->Dependent_ID;
    }
    /**
     * Set Dependent_ID value
     * @param string $dependent_ID
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function setDependent_ID($dependent_ID = null)
    {
        // validation for constraint: string
        if (!is_null($dependent_ID) && !is_string($dependent_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dependent_ID, true), gettype($dependent_ID)), __LINE__);
        }
        $this->Dependent_ID = $dependent_ID;
        return $this;
    }
    /**
     * Get Employee_Reference value
     * @return \WorkdayWsdl\\StructType\EmployeeObjectType|null
     */
    public function getEmployee_Reference()
    {
        return $this->Employee_Reference;
    }
    /**
     * Set Employee_Reference value
     * @param \WorkdayWsdl\\StructType\EmployeeObjectType $employee_Reference
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function setEmployee_Reference(\WorkdayWsdl\\StructType\EmployeeObjectType $employee_Reference = null)
    {
        $this->Employee_Reference = $employee_Reference;
        return $this;
    }
    /**
     * Get Existing_Related_Person_Reference value
     * @return \WorkdayWsdl\\StructType\Related_Person_for_WorkerObjectType|null
     */
    public function getExisting_Related_Person_Reference()
    {
        return $this->Existing_Related_Person_Reference;
    }
    /**
     * Set Existing_Related_Person_Reference value
     * @param \WorkdayWsdl\\StructType\Related_Person_for_WorkerObjectType $existing_Related_Person_Reference
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function setExisting_Related_Person_Reference(\WorkdayWsdl\\StructType\Related_Person_for_WorkerObjectType $existing_Related_Person_Reference = null)
    {
        $this->Existing_Related_Person_Reference = $existing_Related_Person_Reference;
        return $this;
    }
    /**
     * Get Related_Person_Relationship_Reference value
     * @return \WorkdayWsdl\\StructType\Related_Person_RelationshipObjectType|null
     */
    public function getRelated_Person_Relationship_Reference()
    {
        return $this->Related_Person_Relationship_Reference;
    }
    /**
     * Set Related_Person_Relationship_Reference value
     * @param \WorkdayWsdl\\StructType\Related_Person_RelationshipObjectType $related_Person_Relationship_Reference
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function setRelated_Person_Relationship_Reference(\WorkdayWsdl\\StructType\Related_Person_RelationshipObjectType $related_Person_Relationship_Reference = null)
    {
        $this->Related_Person_Relationship_Reference = $related_Person_Relationship_Reference;
        return $this;
    }
    /**
     * Get Use_Employee_Address value
     * @return bool|null
     */
    public function getUse_Employee_Address()
    {
        return $this->Use_Employee_Address;
    }
    /**
     * Set Use_Employee_Address value
     * @param bool $use_Employee_Address
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function setUse_Employee_Address($use_Employee_Address = null)
    {
        // validation for constraint: boolean
        if (!is_null($use_Employee_Address) && !is_bool($use_Employee_Address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($use_Employee_Address, true), gettype($use_Employee_Address)), __LINE__);
        }
        $this->Use_Employee_Address = $use_Employee_Address;
        return $this;
    }
    /**
     * Get Use_Employee_Phone value
     * @return bool|null
     */
    public function getUse_Employee_Phone()
    {
        return $this->Use_Employee_Phone;
    }
    /**
     * Set Use_Employee_Phone value
     * @param bool $use_Employee_Phone
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function setUse_Employee_Phone($use_Employee_Phone = null)
    {
        // validation for constraint: boolean
        if (!is_null($use_Employee_Phone) && !is_bool($use_Employee_Phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($use_Employee_Phone, true), gettype($use_Employee_Phone)), __LINE__);
        }
        $this->Use_Employee_Phone = $use_Employee_Phone;
        return $this;
    }
    /**
     * Get Irrevocable value
     * @return bool|null
     */
    public function getIrrevocable()
    {
        return $this->Irrevocable;
    }
    /**
     * Set Irrevocable value
     * @param bool $irrevocable
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function setIrrevocable($irrevocable = null)
    {
        // validation for constraint: boolean
        if (!is_null($irrevocable) && !is_bool($irrevocable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($irrevocable, true), gettype($irrevocable)), __LINE__);
        }
        $this->Irrevocable = $irrevocable;
        return $this;
    }
    /**
     * Get Dependent_Personal_Information_Data value
     * @return \WorkdayWsdl\\StructType\Dependent_Personal_Information_DataType|null
     */
    public function getDependent_Personal_Information_Data()
    {
        return $this->Dependent_Personal_Information_Data;
    }
    /**
     * Set Dependent_Personal_Information_Data value
     * @param \WorkdayWsdl\\StructType\Dependent_Personal_Information_DataType $dependent_Personal_Information_Data
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function setDependent_Personal_Information_Data(\WorkdayWsdl\\StructType\Dependent_Personal_Information_DataType $dependent_Personal_Information_Data = null)
    {
        $this->Dependent_Personal_Information_Data = $dependent_Personal_Information_Data;
        return $this;
    }
    /**
     * Get Court_Order_Replacement_Data value
     * @return \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]|null
     */
    public function getCourt_Order_Replacement_Data()
    {
        return $this->Court_Order_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCourt_Order_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCourt_Order_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCourt_Order_Replacement_DataForArrayConstraintsFromSetCourt_Order_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $put_Dependent_DataTypeCourt_Order_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$put_Dependent_DataTypeCourt_Order_Replacement_DataItem instanceof \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
                $invalidValues[] = is_object($put_Dependent_DataTypeCourt_Order_Replacement_DataItem) ? get_class($put_Dependent_DataTypeCourt_Order_Replacement_DataItem) : sprintf('%s(%s)', gettype($put_Dependent_DataTypeCourt_Order_Replacement_DataItem), var_export($put_Dependent_DataTypeCourt_Order_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Court_Order_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Court_Order_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order_Replacement_Data
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function setCourt_Order_Replacement_Data(array $court_Order_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($court_Order_Replacement_DataArrayErrorMessage = self::validateCourt_Order_Replacement_DataForArrayConstraintsFromSetCourt_Order_Replacement_Data($court_Order_Replacement_Data))) {
            throw new \InvalidArgumentException($court_Order_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Court_Order_Replacement_Data = $court_Order_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Court_Order_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
     */
    public function addToCourt_Order_Replacement_Data(\WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Court_Order_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Court_Order_Replacement_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Put_Dependent_DataType
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
