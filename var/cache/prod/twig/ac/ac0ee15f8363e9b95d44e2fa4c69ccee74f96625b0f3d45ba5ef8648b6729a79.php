<?php

/* AdamQuaileFieldsetBundle:Types:fieldset.html.twig */
class __TwigTemplate_b3a498c2f6eab3268e68c423638ee75fecb1b7a01900f40bb34c410aaabae4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('fieldset_widget', $context, $blocks);
    }

    public function block_fieldset_widget($context, array $blocks = array())
    {
        // line 2
        echo "        <fieldset ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">

            ";
        // line 4
        if ((array_key_exists("legend", $context) &&  !twig_test_empty(($context["legend"] ?? null)))) {
            // line 5
            echo "                <legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["legend"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            echo "</legend>
            ";
        }
        // line 7
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

        </fieldset>
";
    }

    public function getTemplateName()
    {
        return "AdamQuaileFieldsetBundle:Types:fieldset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 5,  32 => 4,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdamQuaileFieldsetBundle:Types:fieldset.html.twig", "/home/weedmain/dispensary.weedmain.com/vendor/adamquaile/symfony-fieldset-bundle/Resources/views/Types/fieldset.html.twig");
    }
}
