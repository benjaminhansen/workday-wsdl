<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service_Center_Representative_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Service Center Representative response data.
 * @subpackage Structs
 */
class Service_Center_Representative_Response_DataType extends AbstractStructBase
{
    /**
     * The Service_Center_Representative
     * Meta information extracted from the WSDL
     * - documentation: Element containing Service Center Representative data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Service_Center_RepresentativeType[]
     */
    public $Service_Center_Representative;
    /**
     * Constructor method for Service_Center_Representative_Response_DataType
     * @uses Service_Center_Representative_Response_DataType::setService_Center_Representative()
     * @param \StructType\Service_Center_RepresentativeType[] $service_Center_Representative
     */
    public function __construct(array $service_Center_Representative = array())
    {
        $this
            ->setService_Center_Representative($service_Center_Representative);
    }
    /**
     * Get Service_Center_Representative value
     * @return \StructType\Service_Center_RepresentativeType[]|null
     */
    public function getService_Center_Representative()
    {
        return $this->Service_Center_Representative;
    }
    /**
     * This method is responsible for validating the values passed to the setService_Center_Representative method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService_Center_Representative method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateService_Center_RepresentativeForArrayConstraintsFromSetService_Center_Representative(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $service_Center_Representative_Response_DataTypeService_Center_RepresentativeItem) {
            // validation for constraint: itemType
            if (!$service_Center_Representative_Response_DataTypeService_Center_RepresentativeItem instanceof \StructType\Service_Center_RepresentativeType) {
                $invalidValues[] = is_object($service_Center_Representative_Response_DataTypeService_Center_RepresentativeItem) ? get_class($service_Center_Representative_Response_DataTypeService_Center_RepresentativeItem) : sprintf('%s(%s)', gettype($service_Center_Representative_Response_DataTypeService_Center_RepresentativeItem), var_export($service_Center_Representative_Response_DataTypeService_Center_RepresentativeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service_Center_Representative property can only contain items of type \StructType\Service_Center_RepresentativeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Service_Center_Representative value
     * @throws \InvalidArgumentException
     * @param \StructType\Service_Center_RepresentativeType[] $service_Center_Representative
     * @return \StructType\Service_Center_Representative_Response_DataType
     */
    public function setService_Center_Representative(array $service_Center_Representative = array())
    {
        // validation for constraint: array
        if ('' !== ($service_Center_RepresentativeArrayErrorMessage = self::validateService_Center_RepresentativeForArrayConstraintsFromSetService_Center_Representative($service_Center_Representative))) {
            throw new \InvalidArgumentException($service_Center_RepresentativeArrayErrorMessage, __LINE__);
        }
        $this->Service_Center_Representative = $service_Center_Representative;
        return $this;
    }
    /**
     * Add item to Service_Center_Representative value
     * @throws \InvalidArgumentException
     * @param \StructType\Service_Center_RepresentativeType $item
     * @return \StructType\Service_Center_Representative_Response_DataType
     */
    public function addToService_Center_Representative(\StructType\Service_Center_RepresentativeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Service_Center_RepresentativeType) {
            throw new \InvalidArgumentException(sprintf('The Service_Center_Representative property can only contain items of type \StructType\Service_Center_RepresentativeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Service_Center_Representative[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Service_Center_Representative_Response_DataType
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
