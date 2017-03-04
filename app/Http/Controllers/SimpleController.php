<?php

namespace App\Http\Controllers;

/**
 * Class SimpleController
 */
class SimpleController extends Controller
{
    /**
     * @var
     */
    protected $special;

    /**
     * SimpleController constructor.
     *
     * @param $special
     */
    public function __construct($special)
    {
        $this->special = $special;
    }

    public function getListItems()
    {
        return view('simple', ['test' => 'Welcome to hell', 'special' => $this->special]);
    }
}
