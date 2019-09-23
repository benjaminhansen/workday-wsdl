<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reference_Letter_Event_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference Letter Event Element
 * @subpackage Structs
 */
class Reference_Letter_Event_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Worker Reference
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Document_Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: Language of Document Generated
     * - minOccurs: 0
     * @var \StructType\User_LanguageObjectType
     */
    public $Document_Language_Reference;
    /**
     * The Template_Reference
     * Meta information extracted from the WSDL
     * - documentation: Template Reference
     * @var \StructType\Reference_Letter_TemplateObjectType
     */
    public $Template_Reference;
    /**
     * Constructor method for Reference_Letter_Event_DataType
     * @uses Reference_Letter_Event_DataType::setWorker_Reference()
     * @uses Reference_Letter_Event_DataType::setDocument_Language_Reference()
     * @uses Reference_Letter_Event_DataType::setTemplate_Reference()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param \StructType\User_LanguageObjectType $document_Language_Reference
     * @param \StructType\Reference_Letter_TemplateObjectType $template_Reference
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, \StructType\User_LanguageObjectType $document_Language_Reference = null, \StructType\Reference_Letter_TemplateObjectType $template_Reference = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setDocument_Language_Reference($document_Language_Reference)
            ->setTemplate_Reference($template_Reference);
    }
    /**
     * Get Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \StructType\WorkerObjectType $worker_Reference
     * @return \StructType\Reference_Letter_Event_DataType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Document_Language_Reference value
     * @return \StructType\User_LanguageObjectType|null
     */
    public function getDocument_Language_Reference()
    {
        return $this->Document_Language_Reference;
    }
    /**
     * Set Document_Language_Reference value
     * @param \StructType\User_LanguageObjectType $document_Language_Reference
     * @return \StructType\Reference_Letter_Event_DataType
     */
    public function setDocument_Language_Reference(\StructType\User_LanguageObjectType $document_Language_Reference = null)
    {
        $this->Document_Language_Reference = $document_Language_Reference;
        return $this;
    }
    /**
     * Get Template_Reference value
     * @return \StructType\Reference_Letter_TemplateObjectType|null
     */
    public function getTemplate_Reference()
    {
        return $this->Template_Reference;
    }
    /**
     * Set Template_Reference value
     * @param \StructType\Reference_Letter_TemplateObjectType $template_Reference
     * @return \StructType\Reference_Letter_Event_DataType
     */
    public function setTemplate_Reference(\StructType\Reference_Letter_TemplateObjectType $template_Reference = null)
    {
        $this->Template_Reference = $template_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Reference_Letter_Event_DataType
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
