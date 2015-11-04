<?php

namespace Xadmin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Xadmin\Repositories\TagRepo;

class DashboardController extends Controller
{
    protected $tagRepo;

    public function __construct(TagRepo $tagRepo){
        $this->tagRepo = $tagRepo;
    }

    public function index()
    {
        
        return view('cms::dashboard');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
