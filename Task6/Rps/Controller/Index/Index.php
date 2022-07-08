<?php
namespace Task6\Rps\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Controller\Result\JsonFactory;
use Task6\Rps\Api\RpsEntityRepositoryInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Context
     */
    protected Context $context;

    /**
     * @var resourceConnection
     */
    protected resourceConnection $resourceConnection;

    /**
     * @var JsonFactory
     */
    protected JsonFactory $JsonFactory;

    /**
     * @var RpsEntityRepositoryInterface
     */
    private RpsEntityRepositoryInterface $RpsEntityRepositoryInterface;

    public function __construct(
        Context $context,
        JsonFactory $JsonFactory,
        RpsEntityRepositoryInterface $rpsEntityRepositoryInterface,
        resourceConnection $resourceConnection
    ) {
        $this->RpsEntityRepositoryInterface = $rpsEntityRepositoryInterface;
        $this->JsonFactory = $JsonFactory;
        $this->resourceConnection = $resourceConnection;
        return parent::__construct($context);
    }

    public function execute()
    {
        $connection = $this->resourceConnection->getConnection();

//        ======================= two row data fetching===========================
        $tableName = $connection->getTableName('rps');
        $query = $connection->Select()
            ->from($tableName)
            ->where('entity_id IN (?)', [1,2]);

        $fetchData = $connection->fetchAssoc($query);
        echo "<pre>";
        var_dump($fetchData);


//        ===========================================join keyword====================
        $city = $connection->getTableName('city');

        $Personal = $connection->getTableName('Personal');

        $query = $connection->select()->from(['per' => $Personal])
            ->joinLeft(
                ['city' => $city],
                'per.city = city.cid',
                ['cityname']
            );
        echo "<pre>";
        var_dump($connection->fetchAll($query));


//        =====================================by id json data===============================================

        $json = $this->JsonFactory->create();
        $data =  $this->RpsEntityRepositoryInterface->getById(1);
        $ww = ['firstname'=>$data->getFirstname(),
            'lastname'=>$data->getLastName(),
            'email'=>$data->getEmail(),
            'address'=>$data->getAddress()];

        return $json->setData($ww);
    }
}
