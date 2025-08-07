<?php
namespace Application\Model;

use Fgsl\Db\TableGateway\AbstractTableGateway;
use Laminas\Db\ResultSet\ResultSetInterface;
use Laminas\Db\Sql\Select;
use Laminas\Db\Sql\Where;
use Laminas\Db\Sql\Expression;

class OrgaoTable extends AbstractTableGateway
{
    protected string $keyName = 'codigo';
    
    protected string $modelName = 'Application\Model\Orgao';
    
    /**
     *
     * @param string $where
     * @return ResultSetInterface
     */
    public function getModels($where = null, $order = null): ResultSetInterface
    {
        $select = $this->getSelect();
        if (!is_null($where)){
            $select->where(['orgao.codigo' => $where['codigo']]);
        }
        $resultSet = $this->tableGateway->selectWith($select);
        return $resultSet;
    }
    
    /**
     *
     * @return \Laminas\Db\Sql\Select
     */
    public function getSelect(): Select
    {
        $select = new Select($this->tableGateway->getTable());        
        $select->join('tipo_orgao', 'orgao.tipo_orgao=tipo_orgao.codigo',['tipo' => 'nome']);
        $select->order('nome');
        return $select;
    }
    
    /**
     *
     * @return \Laminas\Db\Sql\Select
     */
    public function getSelectByName($name)
    {
        $select = $this->getSelect();
        $where = new Where();
        $where->like('orgao.nome', '%' . $name . '%');
        $select->where($where);
        return $select;
    }
    
    /**
     *
     * @return \Laminas\Db\Sql\Select
     */
    public function getSelectByAcronym($acronym)
    {
        $select = $this->getSelect();
        $where = new Where();
        $where->like('orgao.sigla', '%' . $acronym . '%');
        $select->where($where);
        return $select;
    }
    
    /**
     *
     * @return \Laminas\Db\Sql\Select
     */
    public function getTotalDeOrgaos()
    {
        $select = new Select($this->tableGateway->getTable());
        $select->columns(['total_orgaos' => new Expression('count(*)')]);
        $resultSet = $this->tableGateway->selectWith($select);
        return $resultSet->current()->total_orgaos ?? 0;
    }
    
    /**
     *
     * @return \Laminas\Db\Sql\Select
     */
    public function getTotalDesenvolveuFloss()
    {
        $select = new Select($this->tableGateway->getTable());
        $select->columns(['total_desenvolveu_floss' => new Expression('count(desenvolveusl)')]);
        $select->where(['desenvolveusl' => true]);
        $resultSet = $this->tableGateway->selectWith($select);
        return $resultSet->current()->total_desenvolveu_floss ?? 0;
    }
    
    /**
     *
     * @return \Laminas\Db\Sql\Select
     */
    public function getSelectProdutoresDeSoftwaresLivres()
    {
        $select = $this->getSelect();
        $select->where(['desenvolveusl' => true]);
        return $select;
    }
}
