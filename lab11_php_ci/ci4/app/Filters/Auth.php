<?php namespace App\Filters;

use Codeigniter\HTTP\RequestInterface;
use Codeigniter\HTTP\ResponseInterface;
use Codeigniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public funtion before(RequestInterface $request, $arguments = null)
    {
        // jika user belum login
        if(! session()->get('logged_in')){
            // maka redirect ke halaman login
            return redirect()->to('/user/login');
        }
    }

    public function after(RequestInterafce $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
