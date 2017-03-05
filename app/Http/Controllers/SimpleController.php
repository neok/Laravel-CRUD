<?php

namespace App\Http\Controllers;

use App\Service\UserService;

/**
 * Class SimpleController
 */
class SimpleController extends Controller
{
    /**
     * @var
     */
    protected $offer;
    /**
     * @var UserService
     */
    protected $service;

    /**
     * SimpleController constructor.
     *
     * @param             $offer
     * @param UserService $service
     */
    public function __construct($offer, UserService $service)
    {
        $this->offer   = $offer;
        $this->service = $service;
    }

    public function getListItems()
    {
        return view(
            'simple',
            [
                'title'       => 'Playing with laravel',
                'offer'     => $this->offer,
                'serviceData' => $this->service->getData(),
            ]
        );
    }
}
