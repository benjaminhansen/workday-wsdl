<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Web_Address_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Primary Web Address can't be deleted when there are additional web addresses with the same Usage Type or the web address reference does not belong to the processing record. | Web Address Reference must match an existing (and not
 * deleted) web address in use by the person subject of this request. | Web Address Data and Usage Data is required unless you are deleting a Web Address. | Web Address Reference is required when you delete a web address. | You can't change a primary
 * web address to an additional web address or an additional web address to a primary web address. | You cannot specify the same usage type more than once for a contact instance. | Invalid Usage Type and Use For combination for Web Address. | A web
 * address instance.
 * @subpackage Structs
 */
class Person_Web_Address_DataType extends AbstractStructBase
{
    /**
     * The Web_Address_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all core Web Address data.
     * - minOccurs: 0
     * @var \StructType\Web_Address_Core_DataType
     */
    public $Web_Address_Data;
    /**
     * The Usage_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all Communication Method Usage data.
     * - minOccurs: 0
     * @var \StructType\Communication_Method_Usage_Information_DataType
     */
    public $Usage_Data;
    /**
     * The Web_Address_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Web Address Reference Instance
     * - minOccurs: 0
     * @var \StructType\Web_Address_ReferenceObjectType
     */
    public $Web_Address_Reference;
    /**
     * The Web_Address_ID
     * Meta information extracted from the WSDL
     * - documentation: New ID value used in web address updates. The ID cannot already be in use by another web address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Web_Address_ID;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to true in order to delete the referenced communication method. If this flag is set, the Reference ID field becomes required, and all other communication method fields that would otherwise be required will be optional
     * and meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Person_Web_Address_DataType
     * @uses Person_Web_Address_DataType::setWeb_Address_Data()
     * @uses Person_Web_Address_DataType::setUsage_Data()
     * @uses Person_Web_Address_DataType::setWeb_Address_Reference()
     * @uses Person_Web_Address_DataType::setWeb_Address_ID()
     * @uses Person_Web_Address_DataType::setDelete()
     * @param \StructType\Web_Address_Core_DataType $web_Address_Data
     * @param \StructType\Communication_Method_Usage_Information_DataType $usage_Data
     * @param \StructType\Web_Address_ReferenceObjectType $web_Address_Reference
     * @param string $web_Address_ID
     * @param bool $delete
     */
    public function __construct(\StructType\Web_Address_Core_DataType $web_Address_Data = null, \StructType\Communication_Method_Usage_Information_DataType $usage_Data = null, \StructType\Web_Address_ReferenceObjectType $web_Address_Reference = null, $web_Address_ID = null, $delete = null)
    {
        $this
            ->setWeb_Address_Data($web_Address_Data)
            ->setUsage_Data($usage_Data)
            ->setWeb_Address_Reference($web_Address_Reference)
            ->setWeb_Address_ID($web_Address_ID)
            ->setDelete($delete);
    }
    /**
     * Get Web_Address_Data value
     * @return \StructType\Web_Address_Core_DataType|null
     */
    public function getWeb_Address_Data()
    {
        return $this->Web_Address_Data;
    }
    /**
     * Set Web_Address_Data value
     * @param \StructType\Web_Address_Core_DataType $web_Address_Data
     * @return \StructType\Person_Web_Address_DataType
     */
    public function setWeb_Address_Data(\StructType\Web_Address_Core_DataType $web_Address_Data = null)
    {
        $this->Web_Address_Data = $web_Address_Data;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \StructType\Communication_Method_Usage_Information_DataType|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * Set Usage_Data value
     * @param \StructType\Communication_Method_Usage_Information_DataType $usage_Data
     * @return \StructType\Person_Web_Address_DataType
     */
    public function setUsage_Data(\StructType\Communication_Method_Usage_Information_DataType $usage_Data = null)
    {
        $this->Usage_Data = $usage_Data;
        return $this;
    }
    /**
     * Get Web_Address_Reference value
     * @return \StructType\Web_Address_ReferenceObjectType|null
     */
    public function getWeb_Address_Reference()
    {
        return $this->Web_Address_Reference;
    }
    /**
     * Set Web_Address_Reference value
     * @param \StructType\Web_Address_ReferenceObjectType $web_Address_Reference
     * @return \StructType\Person_Web_Address_DataType
     */
    public function setWeb_Address_Reference(\StructType\Web_Address_ReferenceObjectType $web_Address_Reference = null)
    {
        $this->Web_Address_Reference = $web_Address_Reference;
        return $this;
    }
    /**
     * Get Web_Address_ID value
     * @return string|null
     */
    public function getWeb_Address_ID()
    {
        return $this->Web_Address_ID;
    }
    /**
     * Set Web_Address_ID value
     * @param string $web_Address_ID
     * @return \StructType\Person_Web_Address_DataType
     */
    public function setWeb_Address_ID($web_Address_ID = null)
    {
        // validation for constraint: string
        if (!is_null($web_Address_ID) && !is_string($web_Address_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web_Address_ID, true), gettype($web_Address_ID)), __LINE__);
        }
        $this->Web_Address_ID = $web_Address_ID;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\Person_Web_Address_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_Web_Address_DataType
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
