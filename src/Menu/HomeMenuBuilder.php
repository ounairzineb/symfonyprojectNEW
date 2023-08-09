<?php
// src/Menu/HomeMenuBuilder.php
namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Knp\Menu\ItemInterface;

class HomeMenuBuilder
{
private $factory;
private $requestStack;

public function __construct(FactoryInterface $factory, RequestStack $requestStack)
{
$this->factory = $factory;
$this->requestStack = $requestStack;
}

public function createMainMenu(array $options): ItemInterface
{
$menu = $this->factory->createItem('root');

$menu->addChild('Products', ['route' => 'app_product_index']);
$menu->addChild('Categories', ['route' => 'app_category_index']);

return $menu;
}
}
