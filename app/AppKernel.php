<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

	        // Fieldsets
	        new AdamQuaile\Bundle\FieldsetBundle\AdamQuaileFieldsetBundle(),

	        // Assetic
	        new Symfony\Bundle\AsseticBundle\AsseticBundle(),

	        // FOS - User
	        new FOS\UserBundle\FOSUserBundle(),

	        // Vich Uploader
	        new Vich\UploaderBundle\VichUploaderBundle(),

	        // Pagination
	        new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Sonata\DatagridBundle\SonataDatagridBundle(),
	        // Payum
	        new Payum\Bundle\PayumBundle\PayumBundle(),
            new Sonata\PageBundle\SonataPageBundle(),
	        // Appplication
	        new DirectoryPlatform\AdminBundle\AdminBundle(),
	        new DirectoryPlatform\AppBundle\AppBundle(),
	        new DirectoryPlatform\FrontBundle\FrontBundle(),
            // sonata

            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\CacheBundle\SonataCacheBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),

            //seo
	        new Sonata\SeoBundle\SonataSeoBundle(),
            new Symfony\Cmf\Bundle\SeoBundle\CmfSeoBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Sonata\NotificationBundle\SonataNotificationBundle(),
	        
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();

            if ('dev' === $this->getEnvironment()) {
                $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
                $bundles[] = new Symfony\Bundle\WebServerBundle\WebServerBundle();
            }
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
