<?php
namespace Controllers\Home;

use Libs\Controller;
use Libs\Page;
use Models\Article;

class IndexController extends Controller {
    public function index() {
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $pageSize = 3;

        $offset = ($page - 1) * $pageSize;
        $articleModel = new Article();
        $count = count($articleModel->get('status = 1'));
        $articleLists = $articleModel->get('status = 1', 'id desc', $offset . ', ' . $pageSize);

        $p = new Page($pageSize, $count);
        $pageHtml = $p->show();
        return $this->response('home/index/index', compact('articleLists', 'pageHtml'));
    }
}