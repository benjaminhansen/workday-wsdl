<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Additional_Names_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for the Change Additional Names web service request. Includes the worker reference and additional name data.
 * @subpackage Structs
 */
class Change_Additional_Names_ResponseType extends AbstractStructBase
{
    /**
     * The Person_Additional_Name_Change_Reference
     * Meta information extracted from the WSDL
     * - documentation: Event ID of the Additional Name Change Event Lite.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Person_Additional_Name_Change_Reference;
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Worker that the additional name data will be applied to.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Additional_Name_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Additional_Name_DataType[]
     */
    public $Additional_Name_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Additional_Names_ResponseType
     * @uses Change_Additional_Names_ResponseType::setPerson_Additional_Name_Change_Reference()
     * @uses Change_Additional_Names_ResponseType::setWorker_Reference()
     * @uses Change_Additional_Names_ResponseType::setAdditional_Name_Data()
     * @uses Change_Additional_Names_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $person_Additional_Name_Change_Reference
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @param \WorkdayWsdl\\StructType\Additional_Name_DataType[] $additional_Name_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $person_Additional_Name_Change_Reference = null, \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null, array $additional_Name_Data = array(), $version = null)
    {
        $this
            ->setPerson_Additional_Name_Change_Reference($person_Additional_Name_Change_Reference)
            ->setWorker_Reference($worker_Reference)
            ->setAdditional_Name_Data($additional_Name_Data)
            ->setVersion($version);
    }
    /**
     * Get Person_Additional_Name_Change_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getPerson_Additional_Name_Change_Reference()
    {
        return $this->Person_Additional_Name_Change_Reference;
    }
    /**
     * Set Person_Additional_Name_Change_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $person_Additional_Name_Change_Reference
     * @return \WorkdayWsdl\\StructType\Change_Additional_Names_ResponseType
     */
    public function setPerson_Additional_Name_Change_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $person_Additional_Name_Change_Reference = null)
    {
        $this->Person_Additional_Name_Change_Reference = $person_Additional_Name_Change_Reference;
        return $this;
    }
    /**
     * Get Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @return \WorkdayWsdl\\StructType\Change_Additional_Names_ResponseType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Additional_Name_Data value
     * @return \WorkdayWsdl\\StructType\Additional_Name_DataType[]|null
     */
    public function getAdditional_Name_Data()
    {
        return $this->Additional_Name_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditional_Name_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditional_Name_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditional_Name_DataForArrayConstraintsFromSetAdditional_Name_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Additional_Names_ResponseTypeAdditional_Name_DataItem) {
            // validation for constraint: itemType
            if (!$change_Additional_Names_ResponseTypeAdditional_Name_DataItem instanceof \WorkdayWsdl\\StructType\Additional_Name_DataType) {
                $invalidValues[] = is_object($change_Additional_Names_ResponseTypeAdditional_Name_DataItem) ? get_class($change_Additional_Names_ResponseTypeAdditional_Name_DataItem) : sprintf('%s(%s)', gettype($change_Additional_Names_ResponseTypeAdditional_Name_DataItem), var_export($change_Additional_Names_ResponseTypeAdditional_Name_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Additional_Name_Data property can only contain items of type \WorkdayWsdl\\StructType\Additional_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Additional_Name_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Additional_Name_DataType[] $additional_Name_Data
     * @return \WorkdayWsdl\\StructType\Change_Additional_Names_ResponseType
     */
    public function setAdditional_Name_Data(array $additional_Name_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($additional_Name_DataArrayErrorMessage = self::validateAdditional_Name_DataForArrayConstraintsFromSetAdditional_Name_Data($additional_Name_Data))) {
            throw new \InvalidArgumentException($additional_Name_DataArrayErrorMessage, __LINE__);
        }
        $this->Additional_Name_Data = $additional_Name_Data;
        return $this;
    }
    /**
     * Add item to Additional_Name_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Additional_Name_DataType $item
     * @return \WorkdayWsdl\\StructType\Change_Additional_Names_ResponseType
     */
    public function addToAdditional_Name_Data(\WorkdayWsdl\\StructType\Additional_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Additional_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Additional_Name_Data property can only contain items of type \WorkdayWsdl\\StructType\Additional_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Additional_Name_Data[] = $item;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Change_Additional_Names_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Additional_Names_ResponseType
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
