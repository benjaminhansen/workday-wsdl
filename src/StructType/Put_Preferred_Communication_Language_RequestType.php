<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Preferred_Communication_Language_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Preferred Communication Language Request
 * @subpackage Structs
 */
class Put_Preferred_Communication_Language_RequestType extends AbstractStructBase
{
    /**
     * The Preferred_Communication_Languages
     * Meta information extracted from the WSDL
     * - documentation: Preferred Communication Languages
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Preferred_Communication_LanguagesType[]
     */
    public $Preferred_Communication_Languages;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Preferred_Communication_Language_RequestType
     * @uses Put_Preferred_Communication_Language_RequestType::setPreferred_Communication_Languages()
     * @uses Put_Preferred_Communication_Language_RequestType::setVersion()
     * @param \StructType\Preferred_Communication_LanguagesType[] $preferred_Communication_Languages
     * @param string $version
     */
    public function __construct(array $preferred_Communication_Languages = array(), $version = null)
    {
        $this
            ->setPreferred_Communication_Languages($preferred_Communication_Languages)
            ->setVersion($version);
    }
    /**
     * Get Preferred_Communication_Languages value
     * @return \StructType\Preferred_Communication_LanguagesType[]|null
     */
    public function getPreferred_Communication_Languages()
    {
        return $this->Preferred_Communication_Languages;
    }
    /**
     * This method is responsible for validating the values passed to the setPreferred_Communication_Languages method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreferred_Communication_Languages method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreferred_Communication_LanguagesForArrayConstraintsFromSetPreferred_Communication_Languages(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $put_Preferred_Communication_Language_RequestTypePreferred_Communication_LanguagesItem) {
            // validation for constraint: itemType
            if (!$put_Preferred_Communication_Language_RequestTypePreferred_Communication_LanguagesItem instanceof \StructType\Preferred_Communication_LanguagesType) {
                $invalidValues[] = is_object($put_Preferred_Communication_Language_RequestTypePreferred_Communication_LanguagesItem) ? get_class($put_Preferred_Communication_Language_RequestTypePreferred_Communication_LanguagesItem) : sprintf('%s(%s)', gettype($put_Preferred_Communication_Language_RequestTypePreferred_Communication_LanguagesItem), var_export($put_Preferred_Communication_Language_RequestTypePreferred_Communication_LanguagesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Preferred_Communication_Languages property can only contain items of type \StructType\Preferred_Communication_LanguagesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Preferred_Communication_Languages value
     * @throws \InvalidArgumentException
     * @param \StructType\Preferred_Communication_LanguagesType[] $preferred_Communication_Languages
     * @return \StructType\Put_Preferred_Communication_Language_RequestType
     */
    public function setPreferred_Communication_Languages(array $preferred_Communication_Languages = array())
    {
        // validation for constraint: array
        if ('' !== ($preferred_Communication_LanguagesArrayErrorMessage = self::validatePreferred_Communication_LanguagesForArrayConstraintsFromSetPreferred_Communication_Languages($preferred_Communication_Languages))) {
            throw new \InvalidArgumentException($preferred_Communication_LanguagesArrayErrorMessage, __LINE__);
        }
        $this->Preferred_Communication_Languages = $preferred_Communication_Languages;
        return $this;
    }
    /**
     * Add item to Preferred_Communication_Languages value
     * @throws \InvalidArgumentException
     * @param \StructType\Preferred_Communication_LanguagesType $item
     * @return \StructType\Put_Preferred_Communication_Language_RequestType
     */
    public function addToPreferred_Communication_Languages(\StructType\Preferred_Communication_LanguagesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Preferred_Communication_LanguagesType) {
            throw new \InvalidArgumentException(sprintf('The Preferred_Communication_Languages property can only contain items of type \StructType\Preferred_Communication_LanguagesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Preferred_Communication_Languages[] = $item;
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
     * @return \StructType\Put_Preferred_Communication_Language_RequestType
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
     * @return \StructType\Put_Preferred_Communication_Language_RequestType
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
