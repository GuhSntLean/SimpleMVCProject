<?php

namespace Source\Config;

abstract class Routes{
  /**
   * @var array
   */
  private $routes = [];

  /**
   * @var string
   */
  private $defaultRoute;

  protected function listRoutes():array{
    
    /**
     * Tem que sempre seguir exemplos de rotas para que haja
     * problema com a suas chamadas na aplicacao.
     * Evite colocar nome de todas iguais, sempre verifique 
     * os controller que serão usados.
     */

    $this->routes[''] = 'HomeController@teste';
    $this->routes['/'] = 'HomeController@teste';

    return $this->routes;
  }

  /**
   * Ao adicionar o sempre o Controller se 
   * ele é existente e seu metodo para que não haja erro
   */
  protected function defaultParent():string{
    $this->defaultRoute = 'HomeController@index';
    return $this->defaultRoute;
  }

}