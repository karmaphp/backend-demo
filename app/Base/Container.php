<?php namespace App\Base;

use DI\ContainerBuilder;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * @property Request request
 * @property Response response
 */
class Container extends \DI\Container
{
    /**
     * @return Container
     */
    public static function build()
    {
        // builder
        $builder = new ContainerBuilder(self::class);

        $builder->useAnnotations(true);

        $builder->addDefinitions(__DIR__ . '/di/config.php');
        $builder->addDefinitions(__DIR__ . '/di/custom.php');

        /** @var Container $container */
        $container = $builder->build();

        // display error details
        $container->set('settings.displayErrorDetails', getenv('APP_DEBUG'));

        // geriye dönelim
        return $container;
    }

    public function __get($name)
    {
        return $this->get($name);
    }

    public function __set($name, $value)
    {
        $this->set($name, $value);
    }
}
