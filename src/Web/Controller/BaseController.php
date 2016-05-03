<?php

namespace src\web\Controller;

use Controller;

class BaseController extends Controller
{
    public function __construct()
    {   
        require(__ROOT__."/core/common.php");
    }

    public function createJsonResponse($data, $info, $status)
    {
        return new \Response(json_encode(['status' => $status, 'info' => $info, 'data' => $data]));
    }

    public function isLogin($token)
    {
        return D('Login') -> isLogin($token);
    }
}
