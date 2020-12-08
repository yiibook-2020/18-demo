<?php
namespace Libs;

class Controller {

    /**
     * 引入模版，将数据传递给模版
     */
    public function response($view, $data = []) {
        $fileName = TPL_PATH . '/' . $view . '.php';
        if (!file_exists($fileName)) {
            return 'View ' . $view . ' is not exists';
        }
        extract($data);
        require_once $fileName;
    }


    /**
     * 返回Json数据，用于ajax或者接口数据返回
     */

    public function responseJson($status = 200, $message = '', $data = []) {
        return json_encode(compact('status', 'message', 'data'));
    }

}