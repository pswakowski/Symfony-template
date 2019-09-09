<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
  /**
  * @Route("/")
  */
  public function Home()
  {
    $symfony_version = \Symfony\Component\HttpKernel\Kernel::VERSION;

    $response = new JsonResponse(array('message' => 'Welcome to Symfony template!',
            'symfony' => $symfony_version,
            'success' => true));
    return $response;
  }
}