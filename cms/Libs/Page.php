<?php
namespace Libs;
class Page {
    private $currentPage;
    private $pageCount;

    public function __construct($pageSize, $count)
    {
        $this->pageCount = ceil($count / $pageSize);
        $this->currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
        if ($this->currentPage < 1) $this->currentPage = 1;
        if ($this->currentPage > $this->pageCount) $this->currentPage = $this->pageCount;
    }

    private function getUrl($page = 1)
    {
        $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false ? 'http' : 'https';
        $domain = $_SERVER['SERVER_NAME'];
        $uri = $_SERVER['REQUEST_URI'];
        $uriArray = parse_url($uri);
        $path = $uriArray['path'];
        if (!empty($uriArray['query'])) {
            parse_str($uriArray['query'], $params);
            unset($params['page']);
            $query = http_build_query($params);
        }
        $url = $protocol . '://' . $domain . $path;
        if (empty($query)) {
            $url = $url . '?page=' . $page;
        } else {
            $url = $url . '?' . $query . '&page=' . $page;
        }
        return $url;
    }

    public function show()
    {
        if ($this->pageCount <= 1) return '';
        $html = '<ul>';
        if ($this->currentPage != 1) {
            $html .= '<li><a href="' . $this->getUrl(1) . '">首页</a></li>';
            $html .= '<li><a href="' . $this->getUrl($this->currentPage - 1) . '">上一页</a></li>';
        }
        for($i = 1; $i <= $this->pageCount; $i++) {
            if ($i == $this->currentPage) {
                $html .= '<li><span>' . $i . '</span></li>';
            } else {
                $html .= '<li><a href="' . $this->getUrl($i) . '">' . $i . '</a></li>';
            }
        }
        if ($this->currentPage != $this->pageCount) {
            $html .= '<li><a href="' . $this->getUrl($this->currentPage + 1) . '">下一页</a></li>';
            $html .= '<li><a href="' . $this->getUrl($this->pageCount) . '">尾页</a></li>';
        }
        $html .= '</ul>';
        return $html;
    }
}