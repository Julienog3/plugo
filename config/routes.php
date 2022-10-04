<?php 

const ROUTES = [
    'home' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'home',
    ],
    'legal_notice' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'legalNotice',
    ],
    'offers' => [
        'controller' => App\Controller\OfferController::class,
        'method' => 'test',
    ],
    'meeting' => [
        'controller' => App\Controller\MeetingController::class,
        'method' => 'show',
    ],
    'meeting_remove' => [
        'controller' => App\Controller\MeetingController::class,
        'method' => 'remove',
    ],
    'meeting_add' => [
        'controller' => App\Controller\MeetingController::class,
        'method' => 'add',
    ],
    'meeting_modify' => [
        'controller' => App\Controller\MeetingController::class,
        'method' => 'modify',
    ]
];