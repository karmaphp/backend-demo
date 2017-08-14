<?php namespace App\Service\View;

class TwigService
{
    /**
     * @var \Twig_Environment
     */
    private $twig;

    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(ROOT_DIR . '/views/twig');
        $this->twig = new \Twig_Environment($loader, [
            'cache' => ROOT_DIR . '/views/twig_c',
        ]);
    }

    public function render($name, array $context = [])
    {
        return $this->twig->render($name, $context);
    }
}