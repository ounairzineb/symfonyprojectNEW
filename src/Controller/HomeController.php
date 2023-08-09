<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Menu\HomeMenuBuilder; // Import the menu builder

class HomeController extends AbstractController
{
/**
* @Route("/", name="home")
*/
public function index(HomeMenuBuilder $menuBuilder): Response
{
return $this->render('home.html.twig', [
'mainMenu' => $menuBuilder->createMainMenu([]),
]);
}
}
