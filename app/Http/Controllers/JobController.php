<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        // massage query
        $request->session()->put('key', '');
        $arr_key = ($request->session()->get('key')) ? $request->session()->get('key') : [];
        $keywords = ($request->key) ? $request->key : '';
        array_push($arr_key, $keywords);
        $request->session()->put('key', $arr_key);

            //call cloudsearch
        $client = new Client(); //GuzzleHttp\Client
        // get result
        $result = $client->request('GET', 'http://search-tagnology-jobs-dxyvozvy5yf53gbqqwvbwrpc44.ap-southeast-1.cloudsearch.amazonaws.com/2013-01-01/search?', [
            'query' => ['q' => $keywords]
        ]);
        // pass to data
        $data = json_decode($result->getBody()->getContents())->hits->hit;
        $suggests = ['test', 'dental'];

        return view('welcome', compact('data', 'keywords' , 'arr_key', 'suggests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
