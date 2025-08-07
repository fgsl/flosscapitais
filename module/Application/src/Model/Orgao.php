<?php
namespace Application\Model;

use Fgsl\InputFilter\InputFilter;
use Fgsl\Model\AbstractActiveRecord;
use Laminas\Filter\StringTrim;
use Laminas\Filter\ToInt;
use Laminas\I18n\Validator\IsInt;
use Laminas\Validator\NotEmpty;
use Laminas\Validator\StringLength;

class Orgao extends AbstractActiveRecord
{
    public function getInputFilter(): InputFilter
    {
        if ($this->inputFilter == null){
            $inputFilter = new InputFilter();
            $inputFilter->addInput('nome');
            $inputFilter->addInput('tipo_orgao');
            $inputFilter->addInput('sigla',false);
            $inputFilter->addInput('desenvolveusl',false);
            $inputFilter->addFilter('codigo', new ToInt());
            $inputFilter->addFilter('nome', new StringTrim());
            $inputFilter->addFilter('tipo_orgao', new ToInt());
            $inputFilter->addFilter('sigla', new StringTrim());
            $inputFilter->addValidator('nome', new StringLength(['min'=>3,'max'=>80]));
            $inputFilter->addValidator('tipo_orgao', new IsInt());
            $inputFilter->addValidator('desenvolveusl', new NotEmpty(NotEmpty::NULL));
            $inputFilter->addChains();
            $this->inputFilter = $inputFilter;
        }
        return $this->inputFilter;
    }
    
    public function getArrayCopy()
    {
        $data = $this->data;
        
        if (empty($this->data['codigo'])){
            unset($data['codigo']);
        }

        return $data;
    }
    
    public function __get($name){
        switch ($name) {
            case 'total_desenvolveu_floss'      :
                return $this->data[$name];
            default:
                return parent::__get($name);
        }
    }
}