<?php

/* AppBundle:Form:collection.html.twig */
class __TwigTemplate_adef07ca9e9fc3b104db4e860d6f778717dd9713e37af8d7a82983c3e6ed912e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('collection_widget', $context, $blocks);
    }

    public function block_collection_widget($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 25
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')));
            // line 26
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype-name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["prototype"] ?? null), "vars", array()), "name", array())));
            // line 27
            echo "        ";
        }
        // line 28
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-allow-add" => ((($context["allow_add"] ?? null)) ? (1) : (0))));
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-allow-remove" => ((($context["allow_delete"] ?? null)) ? (1) : (0))));
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-name-prefix" => ($context["full_name"] ?? null)));
        // line 31
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "AppBundle:Form:collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 31,  50 => 30,  47 => 29,  44 => 28,  41 => 27,  38 => 26,  35 => 25,  32 => 24,  29 => 23,  23 => 22,  20 => 21,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Form:collection.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AppBundle/Resources/views/Form/collection.html.twig");
    }
}
