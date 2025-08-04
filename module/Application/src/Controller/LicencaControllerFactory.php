<?php
namespace Application\Controller;

use Application\Model\Licenca;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;
use Laminas\Db\TableGateway\TableGateway;
use Application\Model\LicencaTable;
use Laminas\Db\ResultSet\ResultSet;

class LicencaControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $adapter = $container->get('Laminas\Db\Adapter');
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype(new Licenca('codigo','licenca',$adapter));
        $tableGateway = new TableGateway('licenca', $adapter, null, $resultSetPrototype);
        $table = new LicencaTable($tableGateway);
        return new LicencaController($table);
    }
}