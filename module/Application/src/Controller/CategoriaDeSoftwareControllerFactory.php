<?php
namespace Application\Controller;

use Application\Model\CategoriaDeSoftware;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;
use Laminas\Db\TableGateway\TableGateway;
use Application\Model\CategoriaDeSoftwareTable;
use Laminas\Db\ResultSet\ResultSet;

class CategoriaDeSoftwareControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $adapter = $container->get('Laminas\Db\Adapter');
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype(new CategoriaDeSoftware('codigo','categoria_software',$adapter));
        $tableGateway = new TableGateway('categoria_software', $adapter, null, $resultSetPrototype);
        $table = new CategoriaDeSoftwareTable($tableGateway);
        return new CategoriaDeSoftwareController($table);
    }
}