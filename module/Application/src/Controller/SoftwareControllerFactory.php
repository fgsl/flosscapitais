<?php
namespace Application\Controller;

use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\Db\TableGateway\TableGateway;
use Application\Model\SoftwareTable;
use Application\Model\CategoriaDeSoftwareTable;
use Application\Model\LicencaTable;
use Application\Model\Software;
use Laminas\Db\ResultSet\ResultSet;
use Psr\Container\ContainerInterface;

class SoftwareControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $adapter = $container->get('Laminas\Db\Adapter');
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype(new Software('codigo','software',$adapter));
        $tableGateway = new TableGateway('software', $adapter, null, $resultSetPrototype);
        $table = new SoftwareTable($tableGateway);
        $tableGateway = new TableGateway('categoria_software', $adapter);
        $categoriaTable = new CategoriaDeSoftwareTable($tableGateway);
        $tableGateway = new TableGateway('licenca', $adapter);
        $licencaTable = new LicencaTable($tableGateway);
        $softwareController = new SoftwareController($table, $categoriaTable);
        $softwareController->setOtherParentTable($licencaTable);
        return $softwareController;
    }
}