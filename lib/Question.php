<?php
namespace Php8user;

use Php8user\DataSource;
use Php8user\Common;
use Php8user\Config;

class Question
{

    private $conn;
    public $common;
    public $config;

    function __construct()
    {
        require_once 'DataSource.php';
        require_once 'Common.php';
        require_once 'Config.php';

        $this->conn = new DataSource();
        $this->common = new Common();
        $this->config = new Config();
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM tbl_product";
        $perpage = $this->config::PER_PAGE_LIMIT;
        $currentPage = 1;
        if (isset($_GET['pageNumber'])) {
            $currentPage = $_GET['pageNumber'];
        }
        $startPage = ($currentPage - 1) * $perpage;
        $href = "index.php?";
        if (! empty($_GET['type']) && $_GET['type'] == "prev-next-link") {
            $href = $href . "type=prev-next-link&";
        } else {
            $href = $href . "type=number-link&";
        }
        if ($startPage < 0) {
            $startPage = 0;
        }
        $query = $sql . " limit " . $startPage . "," . $perpage;
        $result = $this->conn->select($query);
        if (! empty($result)) {
            $count = $this->conn->getRecordCount($sql);
            $result["perpage"] = $this->common->showperpage($count, $perpage, $href);
        }
        return $result;
    }
}
?>