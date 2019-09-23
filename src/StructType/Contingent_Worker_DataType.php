<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contingent_Worker_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Contingent Worker data.
 * @subpackage Structs
 */
class Contingent_Worker_DataType extends AbstractStructBase
{
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
     * @var \StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Personal_Info_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Personal_Info_DataType[]
     */
    public $Personal_Info_Data;
    /**
     * The Contingent_Worker_Contract_Info_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Contingent_Worker_Contract_Info_DataType[]
     */
    public $Contingent_Worker_Contract_Info_Data;
    /**
     * Constructor method for Contingent_Worker_DataType
     * @uses Contingent_Worker_DataType::setUser_ID()
     * @uses Contingent_Worker_DataType::setIntegration_ID_Data()
     * @uses Contingent_Worker_DataType::setPersonal_Info_Data()
     * @uses Contingent_Worker_DataType::setContingent_Worker_Contract_Info_Data()
     * @param string $user_ID
     * @param \StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param \StructType\Personal_Info_DataType[] $personal_Info_Data
     * @param \StructType\Contingent_Worker_Contract_Info_DataType[] $contingent_Worker_Contract_Info_Data
     */
    public function __construct($user_ID = null, \StructType\External_Integration_ID_DataType $integration_ID_Data = null, array $personal_Info_Data = array(), array $contingent_Worker_Contract_Info_Data = array())
    {
        $this
            ->setUser_ID($user_ID)
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setPersonal_Info_Data($personal_Info_Data)
            ->setContingent_Worker_Contract_Info_Data($contingent_Worker_Contract_Info_Data);
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
     * @return \StructType\Contingent_Worker_DataType
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
     * @return \StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \StructType\Contingent_Worker_DataType
     */
    public function setIntegration_ID_Data(\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Get Personal_Info_Data value
     * @return \StructType\Personal_Info_DataType[]|null
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
        foreach ($values as $contingent_Worker_DataTypePersonal_Info_DataItem) {
            // validation for constraint: itemType
            if (!$contingent_Worker_DataTypePersonal_Info_DataItem instanceof \StructType\Personal_Info_DataType) {
                $invalidValues[] = is_object($contingent_Worker_DataTypePersonal_Info_DataItem) ? get_class($contingent_Worker_DataTypePersonal_Info_DataItem) : sprintf('%s(%s)', gettype($contingent_Worker_DataTypePersonal_Info_DataItem), var_export($contingent_Worker_DataTypePersonal_Info_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Personal_Info_Data property can only contain items of type \StructType\Personal_Info_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Personal_Info_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Personal_Info_DataType[] $personal_Info_Data
     * @return \StructType\Contingent_Worker_DataType
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
     * @param \StructType\Personal_Info_DataType $item
     * @return \StructType\Contingent_Worker_DataType
     */
    public function addToPersonal_Info_Data(\StructType\Personal_Info_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Personal_Info_DataType) {
            throw new \InvalidArgumentException(sprintf('The Personal_Info_Data property can only contain items of type \StructType\Personal_Info_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Personal_Info_Data[] = $item;
        return $this;
    }
    /**
     * Get Contingent_Worker_Contract_Info_Data value
     * @return \StructType\Contingent_Worker_Contract_Info_DataType[]|null
     */
    public function getContingent_Worker_Contract_Info_Data()
    {
        return $this->Contingent_Worker_Contract_Info_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setContingent_Worker_Contract_Info_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContingent_Worker_Contract_Info_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContingent_Worker_Contract_Info_DataForArrayConstraintsFromSetContingent_Worker_Contract_Info_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contingent_Worker_DataTypeContingent_Worker_Contract_Info_DataItem) {
            // validation for constraint: itemType
            if (!$contingent_Worker_DataTypeContingent_Worker_Contract_Info_DataItem instanceof \StructType\Contingent_Worker_Contract_Info_DataType) {
                $invalidValues[] = is_object($contingent_Worker_DataTypeContingent_Worker_Contract_Info_DataItem) ? get_class($contingent_Worker_DataTypeContingent_Worker_Contract_Info_DataItem) : sprintf('%s(%s)', gettype($contingent_Worker_DataTypeContingent_Worker_Contract_Info_DataItem), var_export($contingent_Worker_DataTypeContingent_Worker_Contract_Info_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contingent_Worker_Contract_Info_Data property can only contain items of type \StructType\Contingent_Worker_Contract_Info_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Contingent_Worker_Contract_Info_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Contingent_Worker_Contract_Info_DataType[] $contingent_Worker_Contract_Info_Data
     * @return \StructType\Contingent_Worker_DataType
     */
    public function setContingent_Worker_Contract_Info_Data(array $contingent_Worker_Contract_Info_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($contingent_Worker_Contract_Info_DataArrayErrorMessage = self::validateContingent_Worker_Contract_Info_DataForArrayConstraintsFromSetContingent_Worker_Contract_Info_Data($contingent_Worker_Contract_Info_Data))) {
            throw new \InvalidArgumentException($contingent_Worker_Contract_Info_DataArrayErrorMessage, __LINE__);
        }
        $this->Contingent_Worker_Contract_Info_Data = $contingent_Worker_Contract_Info_Data;
        return $this;
    }
    /**
     * Add item to Contingent_Worker_Contract_Info_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Contingent_Worker_Contract_Info_DataType $item
     * @return \StructType\Contingent_Worker_DataType
     */
    public function addToContingent_Worker_Contract_Info_Data(\StructType\Contingent_Worker_Contract_Info_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Contingent_Worker_Contract_Info_DataType) {
            throw new \InvalidArgumentException(sprintf('The Contingent_Worker_Contract_Info_Data property can only contain items of type \StructType\Contingent_Worker_Contract_Info_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contingent_Worker_Contract_Info_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Contingent_Worker_DataType
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
