<?php

/* AppBundle::Email/user_registered.html.twig */
class __TwigTemplate_06f1218f225503a2f82198b912e5600c4648aa7a8a4d7dc904d6291a82edd883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Hi,

your user account has been succesfully created. Your account name is %username% and e-mail account is %email%.", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getUsername", array(), "method"), "%email%" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getEmail", array(), "method")), "messages");
    }

    public function getTemplateName()
    {
        return "AppBundle::Email/user_registered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::Email/user_registered.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AppBundle/Resources/views/Email/user_registered.html.twig");
    }
}
