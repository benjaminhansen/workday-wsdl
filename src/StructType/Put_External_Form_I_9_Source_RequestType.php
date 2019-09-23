<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_External_Form_I-9_Source_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put External Form I-9 Source Request
 * @subpackage Structs
 */
class Put_External_Form_I_9_Source_RequestType extends AbstractStructBase
{
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Add_Only;
    /**
     * The External_Form_I_9_Source_Reference
     * Meta information extracted from the WSDL
     * - documentation: External Form I-9 Source Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType
     */
    public $External_Form_I_9_Source_Reference;
    /**
     * The External_Form_I_9_Source_Data
     * Meta information extracted from the WSDL
     * - documentation: External Form I-9 Source Data
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType[]
     */
    public $External_Form_I_9_Source_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_External_Form_I-9_Source_RequestType
     * @uses Put_External_Form_I_9_Source_RequestType::setAdd_Only()
     * @uses Put_External_Form_I_9_Source_RequestType::setExternal_Form_I_9_Source_Reference()
     * @uses Put_External_Form_I_9_Source_RequestType::setExternal_Form_I_9_Source_Data()
     * @uses Put_External_Form_I_9_Source_RequestType::setVersion()
     * @param bool $add_Only
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType[] $external_Form_I_9_Source_Data
     * @param string $version
     */
    public function __construct($add_Only = null, \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference = null, array $external_Form_I_9_Source_Data = array(), $version = null)
    {
        $this
            ->setAdd_Only($add_Only)
            ->setExternal_Form_I_9_Source_Reference($external_Form_I_9_Source_Reference)
            ->setExternal_Form_I_9_Source_Data($external_Form_I_9_Source_Data)
            ->setVersion($version);
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_Source_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
        return $this;
    }
    /**
     * Get external_Form_I_Source_Reference value
     * @return external_Form_I_Source_Reference
     */
    public function getExternal_Form_I_9_Source_Reference()
    {
        return $this->{'External_Form_I-9_Source_Reference'};
    }
    /**
     * Set external_Form_I_Source_Reference value
     * @param external_Form_I_Source_Reference $external_Form_I_Source_Reference
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_Source_RequestType
     */
    public function setExternal_Form_I_9_Source_Reference(\WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference = null)
    {
        $this->External_Form_I_9_Source_Reference = $this->{'External_Form_I-9_Source_Reference'} = $external_Form_I_9_Source_Reference;
        return $this;
    }
    /**
     * Get external_Form_I_Source_Data value
     * @return external_Form_I_Source_Data
     */
    public function getExternal_Form_I_9_Source_Data()
    {
        return $this->{'External_Form_I-9_Source_Data'};
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_Form_I_9_Source_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_Form_I_9_Source_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_Form_I_9_Source_DataForArrayConstraintsFromSetExternal_Form_I_9_Source_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $put_External_Form_I_9_Source_RequestTypeExternal_Form_I_9_Source_DataItem) {
            // validation for constraint: itemType
            if (!$put_External_Form_I_9_Source_RequestTypeExternal_Form_I_9_Source_DataItem instanceof \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType) {
                $invalidValues[] = is_object($put_External_Form_I_9_Source_RequestTypeExternal_Form_I_9_Source_DataItem) ? get_class($put_External_Form_I_9_Source_RequestTypeExternal_Form_I_9_Source_DataItem) : sprintf('%s(%s)', gettype($put_External_Form_I_9_Source_RequestTypeExternal_Form_I_9_Source_DataItem), var_export($put_External_Form_I_9_Source_RequestTypeExternal_Form_I_9_Source_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_Form_I_9_Source_Data property can only contain items of type \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set external_Form_I_Source_Data value
     * @param external_Form_I_Source_Data $external_Form_I_Source_Data
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_Source_RequestType
     */
    public function setExternal_Form_I_9_Source_Data(array $external_Form_I_9_Source_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($external_Form_I_9_Source_DataArrayErrorMessage = self::validateExternal_Form_I_9_Source_DataForArrayConstraintsFromSetExternal_Form_I_9_Source_Data($external_Form_I_9_Source_Data))) {
            throw new \InvalidArgumentException($external_Form_I_9_Source_DataArrayErrorMessage, __LINE__);
        }
        $this->External_Form_I_9_Source_Data = $this->{'External_Form_I-9_Source_Data'} = $external_Form_I_9_Source_Data;
        return $this;
    }
    /**
     * Add item to External_Form_I_9_Source_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType $item
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_Source_RequestType
     */
    public function addToExternal_Form_I_9_Source_Data(\WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType) {
            throw new \InvalidArgumentException(sprintf('The External_Form_I_9_Source_Data property can only contain items of type \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_Form_I_9_Source_Data[] = $this->{'External_Form_I-9_Source_Data'}[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_Source_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_Source_RequestType
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
