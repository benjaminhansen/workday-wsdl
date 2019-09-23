<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Language_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Language.
 * @subpackage Structs
 */
class Language_ReferenceType extends AbstractStructBase
{
    /**
     * The Language_Description
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Language must exist for the given value of Language Description. | Unique attribute name/description identifying a valid instance of Language.
     * - maxOccurs: 1
     * @var string
     */
    public $Language_Description;
    /**
     * Constructor method for Language_ReferenceType
     * @uses Language_ReferenceType::setLanguage_Description()
     * @param string $language_Description
     */
    public function __construct($language_Description = null)
    {
        $this
            ->setLanguage_Description($language_Description);
    }
    /**
     * Get Language_Description value
     * @return string|null
     */
    public function getLanguage_Description()
    {
        return $this->Language_Description;
    }
    /**
     * Set Language_Description value
     * @param string $language_Description
     * @return \StructType\Language_ReferenceType
     */
    public function setLanguage_Description($language_Description = null)
    {
        // validation for constraint: string
        if (!is_null($language_Description) && !is_string($language_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language_Description, true), gettype($language_Description)), __LINE__);
        }
        $this->Language_Description = $language_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Language_ReferenceType
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
