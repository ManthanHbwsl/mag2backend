<?php 
declare(strict_types= 1);
namespace Training\DependencyExample\Model;

use Magento\Framework\DataObject;

class Main 
{
    protected array $data;
    protected Injectable $injectable;
    protected NonInjectableFactory $nonInjectableFactory;
    protected MethodInjection $methodInjection;

    public function __construct(Injectable $injectable, NonInjectableFactory $nonInjectableFactory, MethodInjection $methodInjection ,array $data = [])
    {
        $this->data = $data;
        $this->data['id'] = "Manthan123";
        $this->injectable = $injectable;
        $this->nonInjectableFactory = $nonInjectableFactory;
        $this->methodInjection = $methodInjection;
        
    }
    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }

    public function getNonInjectable()
    {
        return $this->nonInjectableFactory->create();
    }

    public function getMethodInjectionName() : string{
        $dataObj = new DataObject(['name' => 'name by method injection']);
        return $this->methodInjection->getName($dataObj);
    }
}