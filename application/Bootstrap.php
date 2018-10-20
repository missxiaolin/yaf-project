<?php

/**
 * @name Bootstrap
 * @author mac
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{
    /**
     * 注册本地类前缀
     *
     * @param Yaf_Dispatcher $dispatcher
     * @return void
     */
    public function _initLoader (Yaf_Dispatcher $dispatcher) {
        Yaf_Loader::getInstance()->registerLocalNameSpace(
            array('enums')
        );
    }

    public function _initConfig()
    {
        //把配置保存起来
        $arrConfig = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $arrConfig);
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher)
    {
        //注册一个插件
        $objSamplePlugin = new SamplePlugin();
        $dispatcher->registerPlugin($objSamplePlugin);
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
        //在这里注册自己的路由协议,默认使用简单路由
//        /?m=index&c=index
//        $route = new Yaf_Route_Simple("m", "c", "a");
//        $router = Yaf_Dispatcher::getInstance()->getRouter();
//        $router->addRoute("name", $route);
    }

    public function _initView(Yaf_Dispatcher $dispatcher)
    {
        //在这里注册自己的view控制器，例如smarty,firekylin
    }
}
