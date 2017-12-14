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
        $arr_key = ($request->session()->get('key')) ? $request->session()->get('key') : [];
        $keywords = ($request->key) ? $request->key : '';

        //call cloudsearch
        $client = new Client(); //GuzzleHttp\Client

        if ($keywords) {
            if (!in_array($keywords, $arr_key)) {
                array_push($arr_key, $keywords);
            }
        }

        // get result
        if ($arr_key) {
            $request->session()->put('key', $arr_key);
            $result = $client->request('GET',
                'http://search-tagnology-jobs-dxyvozvy5yf53gbqqwvbwrpc44.ap-southeast-1.cloudsearch.amazonaws.com/2013-01-01/search?',
                [
                    'query' => ['q' => implode(" ", $arr_key)]
                ]);
        } else {
            $result = $client->request('GET',
                'http://search-tagnology-jobs-dxyvozvy5yf53gbqqwvbwrpc44.ap-southeast-1.cloudsearch.amazonaws.com/2013-01-01/search?',
                [
                    'query' => ['q' => 'matchall', 'q.parser' => 'structured']
                ]);
        }

        // pass to data
        $data = json_decode($result->getBody()->getContents())->hits->hit;


        return view('welcome', compact('data', 'keywords' , 'arr_key'));
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

    public function clear(Request $request)
    {
        $request->session()->put('key', '');

        return redirect('/');
    }

    public function remove(Request $request)
    {
        //

        $arr_key = $request->session()->get('key');

        $index = array_search($request->tag, $arr_key);
        unset($arr_key[$index]);
        $request->session()->put('key', $arr_key);
        return redirect('/');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
