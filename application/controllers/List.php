<?php
/**
 * @name IndexController
 * @author yuxuefeng
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class ListController extends Yaf\Controller_Abstract {

    /**
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/sample/index/index/index/name/yuxuefeng 的时候, 你就会发现不同
     */
    public function showAction($name = "Stranger") {
        //1. fetch query
        $get = $this->getRequest()->getQuery("get", "default value");

        echo __METHOD__;die();

        return TRUE;
    }


    public function indexAction(){
        $param = $this->getRequest()->getParam("catId");
        print_r($param);
        echo __METHOD__;
        return false;
    }
}
