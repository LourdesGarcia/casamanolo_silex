<?php

namespace Controllers;

use Silex\Application;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Silex\ControllerProviderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Cookie;




class CasamanoloController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers
            ->match('/', array($this, 'CasamanoloHome'))
            ->bind('casamanolo_home')
        ;

        return $controllers;
    }

    public function CasamanoloHome(Application $app, Request $request){
        $config = $app['config'];
        return $app['twig']->render('Casamanolo/index.html.twig', array());
    }


}
