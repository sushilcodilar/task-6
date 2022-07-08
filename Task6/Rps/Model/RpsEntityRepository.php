<?php
namespace Task6\Rps\Model;

use Task6\Rps\Api\RpsEntityRepositoryInterface;
use Task6\Rps\Model\ResourceModel\Rps as ResourceModel;
use Task6\Rps\Model\RpsFactory as Rps;

class RpsEntityRepository implements RpsEntityRepositoryInterface
{

    /**
     * @var ResourceModel
     */
    private ResourceModel $ResourceModel;
    /**
     * @var Rps
     */
    private Rps $RpsFactory;


    /**
     * SachinEntityRepository constructor.
     *
     * @param ResourceModel $ResourceModel
     * @param Rps $RpsFactory

     */
    public function __construct(
        ResourceModel $ResourceModel,
        Rps $RpsFactory
    ) {
        $this->ResourceModel = $ResourceModel;
        $this->RpsFactory = $RpsFactory;

    }

    /**
     * Get entity by id
     *
     * @param string $entityId
     * @return \Task6\Rps\Model\Rps
     */
    public function getById(string $entityId)
    {
        $entity = $this->RpsFactory->create();
        $this->ResourceModel->load($entity, $entityId);
        return $entity;
    }
}
