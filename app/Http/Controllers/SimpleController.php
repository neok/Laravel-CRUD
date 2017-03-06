<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
                'offer'       => $this->offer,
                'serviceData' => $this->service->getData(),
            ]
        );
    }

    /**
     * @todo add middlware
     *
     * @param $id
     *
     * @return mixed
     */
    public function getUser($id)
    {
        return User::find($id);
    }

    /**
     * @param Request $request
     *
     * @return Response
     * @todo add middlware
     */
    public function createUser(Request $request)
    {
        // no validation etc, just a simple test
        $user           = new User();
        $user->username = $request->get('name');
        $user->email    = $request->get('email');
        $user->password = password_hash($request->get('password'), PASSWORD_DEFAULT);
        $user->save();

        return new Response('OK');
    }
}
