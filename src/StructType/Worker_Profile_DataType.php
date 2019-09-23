<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Profile_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Worker Profile data.
 * @subpackage Structs
 */
class Worker_Profile_DataType extends AbstractStructBase
{
    /**
     * The Employee_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Employee ID.
     * - choice: Employee_ID | Contingent_Worker_ID
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Employee_ID;
    /**
     * The Contingent_Worker_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Contingent Worker ID.
     * - choice: Employee_ID | Contingent_Worker_ID
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contingent_Worker_ID;
    /**
     * The Business_Title
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Business Title.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Business_Title;
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Worker_Status_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_Status_DataType[]
     */
    public $Worker_Status_Data;
    /**
     * The Worker_Personal_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_Personal_DataType[]
     */
    public $Worker_Personal_Data;
    /**
     * The Worker_Position_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_Position_DataType[]
     */
    public $Worker_Position_Data;
    /**
     * Constructor method for Worker_Profile_DataType
     * @uses Worker_Profile_DataType::setEmployee_ID()
     * @uses Worker_Profile_DataType::setContingent_Worker_ID()
     * @uses Worker_Profile_DataType::setBusiness_Title()
     * @uses Worker_Profile_DataType::setIntegration_ID_Data()
     * @uses Worker_Profile_DataType::setWorker_Status_Data()
     * @uses Worker_Profile_DataType::setWorker_Personal_Data()
     * @uses Worker_Profile_DataType::setWorker_Position_Data()
     * @param string $employee_ID
     * @param string $contingent_Worker_ID
     * @param string $business_Title
     * @param \StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param \StructType\Worker_Status_DataType[] $worker_Status_Data
     * @param \StructType\Worker_Personal_DataType[] $worker_Personal_Data
     * @param \StructType\Worker_Position_DataType[] $worker_Position_Data
     */
    public function __construct($employee_ID = null, $contingent_Worker_ID = null, $business_Title = null, \StructType\External_Integration_ID_DataType $integration_ID_Data = null, array $worker_Status_Data = array(), array $worker_Personal_Data = array(), array $worker_Position_Data = array())
    {
        $this
            ->setEmployee_ID($employee_ID)
            ->setContingent_Worker_ID($contingent_Worker_ID)
            ->setBusiness_Title($business_Title)
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setWorker_Status_Data($worker_Status_Data)
            ->setWorker_Personal_Data($worker_Personal_Data)
            ->setWorker_Position_Data($worker_Position_Data);
    }
    /**
     * Get Employee_ID value
     * @return string|null
     */
    public function getEmployee_ID()
    {
        return isset($this->Employee_ID) ? $this->Employee_ID : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEmployee_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_ID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmployee_IDForChoiceConstraintsFromSetEmployee_ID($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Contingent_Worker_ID',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Employee_ID can\'t be set as the property %s is already set. Only one property must be set among these properties: Employee_ID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Employee_ID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $employee_ID
     * @return \StructType\Worker_Profile_DataType
     */
    public function setEmployee_ID($employee_ID = null)
    {
        // validation for constraint: string
        if (!is_null($employee_ID) && !is_string($employee_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_ID, true), gettype($employee_ID)), __LINE__);
        }
        // validation for constraint: choice(Employee_ID, Contingent_Worker_ID)
        if ('' !== ($employee_IDChoiceErrorMessage = self::validateEmployee_IDForChoiceConstraintsFromSetEmployee_ID($employee_ID))) {
            throw new \InvalidArgumentException($employee_IDChoiceErrorMessage, __LINE__);
        }
        if (is_null($employee_ID) || (is_array($employee_ID) && empty($employee_ID))) {
            unset($this->Employee_ID);
        } else {
            $this->Employee_ID = $employee_ID;
        }
        return $this;
    }
    /**
     * Get Contingent_Worker_ID value
     * @return string|null
     */
    public function getContingent_Worker_ID()
    {
        return isset($this->Contingent_Worker_ID) ? $this->Contingent_Worker_ID : null;
    }
    /**
     * This method is responsible for validating the value passed to the setContingent_Worker_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContingent_Worker_ID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateContingent_Worker_IDForChoiceConstraintsFromSetContingent_Worker_ID($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Employee_ID',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Contingent_Worker_ID can\'t be set as the property %s is already set. Only one property must be set among these properties: Contingent_Worker_ID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Contingent_Worker_ID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $contingent_Worker_ID
     * @return \StructType\Worker_Profile_DataType
     */
    public function setContingent_Worker_ID($contingent_Worker_ID = null)
    {
        // validation for constraint: string
        if (!is_null($contingent_Worker_ID) && !is_string($contingent_Worker_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contingent_Worker_ID, true), gettype($contingent_Worker_ID)), __LINE__);
        }
        // validation for constraint: choice(Employee_ID, Contingent_Worker_ID)
        if ('' !== ($contingent_Worker_IDChoiceErrorMessage = self::validateContingent_Worker_IDForChoiceConstraintsFromSetContingent_Worker_ID($contingent_Worker_ID))) {
            throw new \InvalidArgumentException($contingent_Worker_IDChoiceErrorMessage, __LINE__);
        }
        if (is_null($contingent_Worker_ID) || (is_array($contingent_Worker_ID) && empty($contingent_Worker_ID))) {
            unset($this->Contingent_Worker_ID);
        } else {
            $this->Contingent_Worker_ID = $contingent_Worker_ID;
        }
        return $this;
    }
    /**
     * Get Business_Title value
     * @return string|null
     */
    public function getBusiness_Title()
    {
        return $this->Business_Title;
    }
    /**
     * Set Business_Title value
     * @param string $business_Title
     * @return \StructType\Worker_Profile_DataType
     */
    public function setBusiness_Title($business_Title = null)
    {
        // validation for constraint: string
        if (!is_null($business_Title) && !is_string($business_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($business_Title, true), gettype($business_Title)), __LINE__);
        }
        $this->Business_Title = $business_Title;
        return $this;
    }
    /**
     * Get Integration_ID_Data value
     * @return \StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \StructType\Worker_Profile_DataType
     */
    public function setIntegration_ID_Data(\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Get Worker_Status_Data value
     * @return \StructType\Worker_Status_DataType[]|null
     */
    public function getWorker_Status_Data()
    {
        return $this->Worker_Status_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Status_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Status_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Status_DataForArrayConstraintsFromSetWorker_Status_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Profile_DataTypeWorker_Status_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Profile_DataTypeWorker_Status_DataItem instanceof \StructType\Worker_Status_DataType) {
                $invalidValues[] = is_object($worker_Profile_DataTypeWorker_Status_DataItem) ? get_class($worker_Profile_DataTypeWorker_Status_DataItem) : sprintf('%s(%s)', gettype($worker_Profile_DataTypeWorker_Status_DataItem), var_export($worker_Profile_DataTypeWorker_Status_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Status_Data property can only contain items of type \StructType\Worker_Status_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Status_DataType[] $worker_Status_Data
     * @return \StructType\Worker_Profile_DataType
     */
    public function setWorker_Status_Data(array $worker_Status_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Status_DataArrayErrorMessage = self::validateWorker_Status_DataForArrayConstraintsFromSetWorker_Status_Data($worker_Status_Data))) {
            throw new \InvalidArgumentException($worker_Status_DataArrayErrorMessage, __LINE__);
        }
        $this->Worker_Status_Data = $worker_Status_Data;
        return $this;
    }
    /**
     * Add item to Worker_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Status_DataType $item
     * @return \StructType\Worker_Profile_DataType
     */
    public function addToWorker_Status_Data(\StructType\Worker_Status_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_Status_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Status_Data property can only contain items of type \StructType\Worker_Status_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Status_Data[] = $item;
        return $this;
    }
    /**
     * Get Worker_Personal_Data value
     * @return \StructType\Worker_Personal_DataType[]|null
     */
    public function getWorker_Personal_Data()
    {
        return $this->Worker_Personal_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Personal_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Personal_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Personal_DataForArrayConstraintsFromSetWorker_Personal_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Profile_DataTypeWorker_Personal_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Profile_DataTypeWorker_Personal_DataItem instanceof \StructType\Worker_Personal_DataType) {
                $invalidValues[] = is_object($worker_Profile_DataTypeWorker_Personal_DataItem) ? get_class($worker_Profile_DataTypeWorker_Personal_DataItem) : sprintf('%s(%s)', gettype($worker_Profile_DataTypeWorker_Personal_DataItem), var_export($worker_Profile_DataTypeWorker_Personal_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Personal_Data property can only contain items of type \StructType\Worker_Personal_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Personal_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Personal_DataType[] $worker_Personal_Data
     * @return \StructType\Worker_Profile_DataType
     */
    public function setWorker_Personal_Data(array $worker_Personal_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Personal_DataArrayErrorMessage = self::validateWorker_Personal_DataForArrayConstraintsFromSetWorker_Personal_Data($worker_Personal_Data))) {
            throw new \InvalidArgumentException($worker_Personal_DataArrayErrorMessage, __LINE__);
        }
        $this->Worker_Personal_Data = $worker_Personal_Data;
        return $this;
    }
    /**
     * Add item to Worker_Personal_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Personal_DataType $item
     * @return \StructType\Worker_Profile_DataType
     */
    public function addToWorker_Personal_Data(\StructType\Worker_Personal_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_Personal_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Personal_Data property can only contain items of type \StructType\Worker_Personal_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Personal_Data[] = $item;
        return $this;
    }
    /**
     * Get Worker_Position_Data value
     * @return \StructType\Worker_Position_DataType[]|null
     */
    public function getWorker_Position_Data()
    {
        return $this->Worker_Position_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Position_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Position_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Position_DataForArrayConstraintsFromSetWorker_Position_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Profile_DataTypeWorker_Position_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Profile_DataTypeWorker_Position_DataItem instanceof \StructType\Worker_Position_DataType) {
                $invalidValues[] = is_object($worker_Profile_DataTypeWorker_Position_DataItem) ? get_class($worker_Profile_DataTypeWorker_Position_DataItem) : sprintf('%s(%s)', gettype($worker_Profile_DataTypeWorker_Position_DataItem), var_export($worker_Profile_DataTypeWorker_Position_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Position_Data property can only contain items of type \StructType\Worker_Position_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Position_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Position_DataType[] $worker_Position_Data
     * @return \StructType\Worker_Profile_DataType
     */
    public function setWorker_Position_Data(array $worker_Position_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Position_DataArrayErrorMessage = self::validateWorker_Position_DataForArrayConstraintsFromSetWorker_Position_Data($worker_Position_Data))) {
            throw new \InvalidArgumentException($worker_Position_DataArrayErrorMessage, __LINE__);
        }
        $this->Worker_Position_Data = $worker_Position_Data;
        return $this;
    }
    /**
     * Add item to Worker_Position_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Position_DataType $item
     * @return \StructType\Worker_Profile_DataType
     */
    public function addToWorker_Position_Data(\StructType\Worker_Position_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_Position_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Position_Data property can only contain items of type \StructType\Worker_Position_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Position_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Profile_DataType
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
