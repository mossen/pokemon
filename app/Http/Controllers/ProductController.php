<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Mockery\CountValidator\Exception;

class ProductController extends Controller
{
    /**
     * Display a index page.
     */
    public function index()
    {
        return view('home.index');
    }


    public function handel(Request $request)
    {
        $rules =
            [
                'url' => 'required'
            ];

        //If request is not Ajax response by PHP
        if (!$request->ajax())
        {
            //Call the validator
            $this->validate($request, $rules);

            $url = $request->url;
            $products = $this->getProductsByUrl($url);

            if ('error' == $products) {
                return redirect()->action('ProductController@index')
                    ->withErrors('Link or file is corrupted.');
            }

            return view('home.index', ['products' => $products]);
        }

        return $this->ajaxRequest($request->url);

    }

    //Fetch data xml file from the url and parse it
    public function getProductsByUrl($url)
    {
        try {
            if ( !$getContent = @file_get_contents($url)) {
                throw new Exception('error', 123);
            }

            if ( !$products = @simplexml_load_string($getContent, 'SimpleXMLElement', LIBXML_NOCDATA) ) {
                throw new Exception('error', 123);
            }

            return $products;

        }
        catch (Exception $e) {
            return 'error';
        }

    }

    //Handel AJAX request
    public function ajaxRequest($url)
    {
        $products = $this->getProductsByUrl($url);
        if ($products == 'error')
        {
            header('HTTP/1.1 500 Internal Server Booboo');
            header('Content-Type: application/json; charset=UTF-8');
            return(json_encode(array('message' => 'ERROR', 'code' => 1337)));
        }
        return json_encode($products);
    }

}
