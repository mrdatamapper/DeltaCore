<?php


namespace Akademiano\Core;



trait ApplicationBaseComponentsTrait
{
    /**
     * @return \Pimple\Container
     */
    abstract public function getDiContainer();

    public function getLoader()
    {
        return $this->getDiContainer()["loader"];
    }

    /**
     * @return \Akademiano\HttpWarp\Environment
     */
    public function getEnvironment()
    {
        return $this->getDiContainer()["environment"];
    }

    /**
     * @return \Akademiano\HttpWarp\Request
     */
    public function getRequest()
    {
        return $this->getDiContainer()["request"];
    }

    /**
     * @return \Akademiano\HttpWarp\Response
     */
    public function getResponse()
    {
        return $this->getDiContainer()["response"];
    }

    /**
     * @return \Akademiano\SimplaView\ViewInterface
     */
    public function getView()
    {
        return $this->getDiContainer()["view"];
    }

    /**
     * @return \Akademiano\HttpWarp\Session
     */
    public function getSession()
    {
        return $this->getDiContainer()["session"];
    }

    /**
     * @return \Akademiano\Router\Router
     */
    public function getRouter()
    {
        return $this->getDiContainer()["router"];
    }

    //advanced

    /**
     * @return UserInterface|null
     */
    public function getCurrentUser()
    {
        $this->getDiContainer()["currentUser"];
    }

    public function getCurrentSite()
    {
        $this->getDiContainer()["currentSite"];
    }

}