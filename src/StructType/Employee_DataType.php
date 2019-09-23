<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Employee data.
 * @subpackage Structs
 */
class Employee_DataType extends AbstractStructBase
{
    /**
     * The Employee_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Employee ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Employee_ID;
    /**
     * The User_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying User Name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $User_ID;
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Personal_Info_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Personal_Info_DataType[]
     */
    public $Personal_Info_Data;
    /**
     * The Worker_Status_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Status_DataType[]
     */
    public $Worker_Status_Data;
    /**
     * The Worker_Position_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Position_DataType[]
     */
    public $Worker_Position_Data;
    /**
     * The Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensation_DataType[]
     */
    public $Compensation_Data;
    /**
     * The Compensation_Detail_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensation_Detail_DataType[]
     */
    public $Compensation_Detail_Data;
    /**
     * The Worker_Document_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Document_Data_WWSType
     */
    public $Worker_Document_Data;
    /**
     * Constructor method for Employee_DataType
     * @uses Employee_DataType::setEmployee_ID()
     * @uses Employee_DataType::setUser_ID()
     * @uses Employee_DataType::setIntegration_ID_Data()
     * @uses Employee_DataType::setPersonal_Info_Data()
     * @uses Employee_DataType::setWorker_Status_Data()
     * @uses Employee_DataType::setWorker_Position_Data()
     * @uses Employee_DataType::setCompensation_Data()
     * @uses Employee_DataType::setCompensation_Detail_Data()
     * @uses Employee_DataType::setWorker_Document_Data()
     * @param string $employee_ID
     * @param string $user_ID
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param \WorkdayWsdl\\StructType\Personal_Info_DataType[] $personal_Info_Data
     * @param \WorkdayWsdl\\StructType\Worker_Status_DataType[] $worker_Status_Data
     * @param \WorkdayWsdl\\StructType\Worker_Position_DataType[] $worker_Position_Data
     * @param \WorkdayWsdl\\StructType\Compensation_DataType[] $compensation_Data
     * @param \WorkdayWsdl\\StructType\Compensation_Detail_DataType[] $compensation_Detail_Data
     * @param \WorkdayWsdl\\StructType\Worker_Document_Data_WWSType $worker_Document_Data
     */
    public function __construct($employee_ID = null, $user_ID = null, \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null, array $personal_Info_Data = array(), array $worker_Status_Data = array(), array $worker_Position_Data = array(), array $compensation_Data = array(), array $compensation_Detail_Data = array(), \WorkdayWsdl\\StructType\Worker_Document_Data_WWSType $worker_Document_Data = null)
    {
        $this
            ->setEmployee_ID($employee_ID)
            ->setUser_ID($user_ID)
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setPersonal_Info_Data($personal_Info_Data)
            ->setWorker_Status_Data($worker_Status_Data)
            ->setWorker_Position_Data($worker_Position_Data)
            ->setCompensation_Data($compensation_Data)
            ->setCompensation_Detail_Data($compensation_Detail_Data)
            ->setWorker_Document_Data($worker_Document_Data);
    }
    /**
     * Get Employee_ID value
     * @return string|null
     */
    public function getEmployee_ID()
    {
        return $this->Employee_ID;
    }
    /**
     * Set Employee_ID value
     * @param string $employee_ID
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function setEmployee_ID($employee_ID = null)
    {
        // validation for constraint: string
        if (!is_null($employee_ID) && !is_string($employee_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_ID, true), gettype($employee_ID)), __LINE__);
        }
        $this->Employee_ID = $employee_ID;
        return $this;
    }
    /**
     * Get User_ID value
     * @return string|null
     */
    public function getUser_ID()
    {
        return $this->User_ID;
    }
    /**
     * Set User_ID value
     * @param string $user_ID
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function setUser_ID($user_ID = null)
    {
        // validation for constraint: string
        if (!is_null($user_ID) && !is_string($user_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_ID, true), gettype($user_ID)), __LINE__);
        }
        $this->User_ID = $user_ID;
        return $this;
    }
    /**
     * Get Integration_ID_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function setIntegration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Get Personal_Info_Data value
     * @return \WorkdayWsdl\\StructType\Personal_Info_DataType[]|null
     */
    public function getPersonal_Info_Data()
    {
        return $this->Personal_Info_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPersonal_Info_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonal_Info_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonal_Info_DataForArrayConstraintsFromSetPersonal_Info_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_DataTypePersonal_Info_DataItem) {
            // validation for constraint: itemType
            if (!$employee_DataTypePersonal_Info_DataItem instanceof \WorkdayWsdl\\StructType\Personal_Info_DataType) {
                $invalidValues[] = is_object($employee_DataTypePersonal_Info_DataItem) ? get_class($employee_DataTypePersonal_Info_DataItem) : sprintf('%s(%s)', gettype($employee_DataTypePersonal_Info_DataItem), var_export($employee_DataTypePersonal_Info_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Personal_Info_Data property can only contain items of type \WorkdayWsdl\\StructType\Personal_Info_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Personal_Info_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Personal_Info_DataType[] $personal_Info_Data
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function setPersonal_Info_Data(array $personal_Info_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($personal_Info_DataArrayErrorMessage = self::validatePersonal_Info_DataForArrayConstraintsFromSetPersonal_Info_Data($personal_Info_Data))) {
            throw new \InvalidArgumentException($personal_Info_DataArrayErrorMessage, __LINE__);
        }
        $this->Personal_Info_Data = $personal_Info_Data;
        return $this;
    }
    /**
     * Add item to Personal_Info_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Personal_Info_DataType $item
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function addToPersonal_Info_Data(\WorkdayWsdl\\StructType\Personal_Info_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Personal_Info_DataType) {
            throw new \InvalidArgumentException(sprintf('The Personal_Info_Data property can only contain items of type \WorkdayWsdl\\StructType\Personal_Info_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Personal_Info_Data[] = $item;
        return $this;
    }
    /**
     * Get Worker_Status_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Status_DataType[]|null
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
        foreach ($values as $employee_DataTypeWorker_Status_DataItem) {
            // validation for constraint: itemType
            if (!$employee_DataTypeWorker_Status_DataItem instanceof \WorkdayWsdl\\StructType\Worker_Status_DataType) {
                $invalidValues[] = is_object($employee_DataTypeWorker_Status_DataItem) ? get_class($employee_DataTypeWorker_Status_DataItem) : sprintf('%s(%s)', gettype($employee_DataTypeWorker_Status_DataItem), var_export($employee_DataTypeWorker_Status_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Status_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Status_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Status_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Status_DataType[] $worker_Status_Data
     * @return \WorkdayWsdl\\StructType\Employee_DataType
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
     * @param \WorkdayWsdl\\StructType\Worker_Status_DataType $item
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function addToWorker_Status_Data(\WorkdayWsdl\\StructType\Worker_Status_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Status_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Status_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Status_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Status_Data[] = $item;
        return $this;
    }
    /**
     * Get Worker_Position_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType[]|null
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
        foreach ($values as $employee_DataTypeWorker_Position_DataItem) {
            // validation for constraint: itemType
            if (!$employee_DataTypeWorker_Position_DataItem instanceof \WorkdayWsdl\\StructType\Worker_Position_DataType) {
                $invalidValues[] = is_object($employee_DataTypeWorker_Position_DataItem) ? get_class($employee_DataTypeWorker_Position_DataItem) : sprintf('%s(%s)', gettype($employee_DataTypeWorker_Position_DataItem), var_export($employee_DataTypeWorker_Position_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Position_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Position_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Position_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Position_DataType[] $worker_Position_Data
     * @return \WorkdayWsdl\\StructType\Employee_DataType
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
     * @param \WorkdayWsdl\\StructType\Worker_Position_DataType $item
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function addToWorker_Position_Data(\WorkdayWsdl\\StructType\Worker_Position_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Position_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Position_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Position_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Position_Data[] = $item;
        return $this;
    }
    /**
     * Get Compensation_Data value
     * @return \WorkdayWsdl\\StructType\Compensation_DataType[]|null
     */
    public function getCompensation_Data()
    {
        return $this->Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCompensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompensation_DataForArrayConstraintsFromSetCompensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_DataTypeCompensation_DataItem) {
            // validation for constraint: itemType
            if (!$employee_DataTypeCompensation_DataItem instanceof \WorkdayWsdl\\StructType\Compensation_DataType) {
                $invalidValues[] = is_object($employee_DataTypeCompensation_DataItem) ? get_class($employee_DataTypeCompensation_DataItem) : sprintf('%s(%s)', gettype($employee_DataTypeCompensation_DataItem), var_export($employee_DataTypeCompensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Compensation_Data property can only contain items of type \WorkdayWsdl\\StructType\Compensation_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Compensation_DataType[] $compensation_Data
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function setCompensation_Data(array $compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($compensation_DataArrayErrorMessage = self::validateCompensation_DataForArrayConstraintsFromSetCompensation_Data($compensation_Data))) {
            throw new \InvalidArgumentException($compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Compensation_Data = $compensation_Data;
        return $this;
    }
    /**
     * Add item to Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Compensation_DataType $item
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function addToCompensation_Data(\WorkdayWsdl\\StructType\Compensation_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Compensation_DataType) {
            throw new \InvalidArgumentException(sprintf('The Compensation_Data property can only contain items of type \WorkdayWsdl\\StructType\Compensation_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Get Compensation_Detail_Data value
     * @return \WorkdayWsdl\\StructType\Compensation_Detail_DataType[]|null
     */
    public function getCompensation_Detail_Data()
    {
        return $this->Compensation_Detail_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCompensation_Detail_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompensation_Detail_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompensation_Detail_DataForArrayConstraintsFromSetCompensation_Detail_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_DataTypeCompensation_Detail_DataItem) {
            // validation for constraint: itemType
            if (!$employee_DataTypeCompensation_Detail_DataItem instanceof \WorkdayWsdl\\StructType\Compensation_Detail_DataType) {
                $invalidValues[] = is_object($employee_DataTypeCompensation_Detail_DataItem) ? get_class($employee_DataTypeCompensation_Detail_DataItem) : sprintf('%s(%s)', gettype($employee_DataTypeCompensation_Detail_DataItem), var_export($employee_DataTypeCompensation_Detail_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Compensation_Detail_Data property can only contain items of type \WorkdayWsdl\\StructType\Compensation_Detail_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Compensation_Detail_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Compensation_Detail_DataType[] $compensation_Detail_Data
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function setCompensation_Detail_Data(array $compensation_Detail_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($compensation_Detail_DataArrayErrorMessage = self::validateCompensation_Detail_DataForArrayConstraintsFromSetCompensation_Detail_Data($compensation_Detail_Data))) {
            throw new \InvalidArgumentException($compensation_Detail_DataArrayErrorMessage, __LINE__);
        }
        $this->Compensation_Detail_Data = $compensation_Detail_Data;
        return $this;
    }
    /**
     * Add item to Compensation_Detail_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Compensation_Detail_DataType $item
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function addToCompensation_Detail_Data(\WorkdayWsdl\\StructType\Compensation_Detail_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Compensation_Detail_DataType) {
            throw new \InvalidArgumentException(sprintf('The Compensation_Detail_Data property can only contain items of type \WorkdayWsdl\\StructType\Compensation_Detail_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Compensation_Detail_Data[] = $item;
        return $this;
    }
    /**
     * Get Worker_Document_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Document_Data_WWSType|null
     */
    public function getWorker_Document_Data()
    {
        return $this->Worker_Document_Data;
    }
    /**
     * Set Worker_Document_Data value
     * @param \WorkdayWsdl\\StructType\Worker_Document_Data_WWSType $worker_Document_Data
     * @return \WorkdayWsdl\\StructType\Employee_DataType
     */
    public function setWorker_Document_Data(\WorkdayWsdl\\StructType\Worker_Document_Data_WWSType $worker_Document_Data = null)
    {
        $this->Worker_Document_Data = $worker_Document_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employee_DataType
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
