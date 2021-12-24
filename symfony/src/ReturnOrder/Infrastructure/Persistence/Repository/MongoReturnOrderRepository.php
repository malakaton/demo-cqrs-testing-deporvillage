<?php

declare(strict_types=1);

namespace App\ReturnOrder\Infrastructure\Persistence\Repository;

use App\ReturnOrder\Domain\Model\ReturnOrder;
use App\ReturnOrder\Domain\Repository\ReturnOrderRepository;
use App\ReturnOrder\Domain\ValueObject\CustomerName;
use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;
use App\Shared\Domain\ValueObject\Country;
use App\Shared\Domain\ValueObject\MongoId;
use App\Shared\Infrastructure\Persistence\ReadModel\Exception\NotFoundException;
use Doctrine\ODM\MongoDB\DocumentManager;
use MongoDB\BSON\ObjectId;
use MongoDB\Collection;

class MongoReturnOrderRepository implements ReturnOrderRepository
{
    private DocumentManager $dbManager;
    private Collection $dbCollection;

    /**
     * MongoReturnOrderRepository constructor.
     */
    public function __construct(DocumentManager $dbManager)
    {
        $this->dbManager = $dbManager;
        $this->dbCollection = $dbManager->getDocumentCollection(ReturnOrder::class);
    }

    public function save(ReturnOrder $returnOrder): void
    {
        $this->dbManager->persist($returnOrder);
        $this->dbManager->flush();
    }

    /**
     * @throws NotFoundException
     */
    public function getById(ReturnOrderId $returnOrderId): ReturnOrder
    {
        $result = $this->dbCollection->findOne(
            [
                '_id' => new ObjectId($returnOrderId->value())
            ]
        );

        if ($result === null) {
            throw new NotFoundException();
        }

        return ReturnOrder::create(
            $returnOrderId,
            CustomerName::fromValue($result['customerName']),
            Country::fromValue($result['country']),
            MongoId::fromValue($result['orderUuid'])
        );
    }
}
