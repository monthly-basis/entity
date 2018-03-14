<?php
namespace LeoGalleguillos\Entity;

use LeoGalleguillos\Entity\Model\Factory as EntityFactory;
use LeoGalleguillos\Entity\Model\Service as EntityService;
use LeoGalleguillos\Entity\Model\Table as EntityTable;
use LeoGalleguillos\Entity\View\Helper as EntityHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                ],
                'factories' => [
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                EntityFactory\EntityType::class => function ($serviceManager) {
                    return new EntityFactory\EntityType(
                        $serviceManager->get(EntityTable\EntityType::class)
                    );
                },
                EntityTable\EntityType::class => function ($serviceManager) {
                    return new EntityTable\EntityType(
                        $serviceManager->get('main')
                    );
                },
            ],
        ];
    }
}
