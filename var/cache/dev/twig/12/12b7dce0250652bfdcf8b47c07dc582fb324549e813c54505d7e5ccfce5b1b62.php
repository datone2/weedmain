<?php

/* AdamQuaileFieldsetBundle:Types:fieldset.html.twig */
class __TwigTemplate_0f7abeee75e48bbe7dd8e4338b73872740c51557fb54fc4689e81681cc91c44d extends Twig_Template
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
        $__internal_848b4bbb64c09790199cd22892353f7640dcf9180ea70fa610af77a9bc6eb3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848b4bbb64c09790199cd22892353f7640dcf9180ea70fa610af77a9bc6eb3d1->enter($__internal_848b4bbb64c09790199cd22892353f7640dcf9180ea70fa610af77a9bc6eb3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdamQuaileFieldsetBundle:Types:fieldset.html.twig"));

        $__internal_bb11906e6848405cd568d0db0f15f423f8e599f0ee1bd7fd7fe10ca89b5612ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb11906e6848405cd568d0db0f15f423f8e599f0ee1bd7fd7fe10ca89b5612ea->enter($__internal_bb11906e6848405cd568d0db0f15f423f8e599f0ee1bd7fd7fe10ca89b5612ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdamQuaileFieldsetBundle:Types:fieldset.html.twig"));

        // line 1
        $this->displayBlock('fieldset_widget', $context, $blocks);
        
        $__internal_848b4bbb64c09790199cd22892353f7640dcf9180ea70fa610af77a9bc6eb3d1->leave($__internal_848b4bbb64c09790199cd22892353f7640dcf9180ea70fa610af77a9bc6eb3d1_prof);

        
        $__internal_bb11906e6848405cd568d0db0f15f423f8e599f0ee1bd7fd7fe10ca89b5612ea->leave($__internal_bb11906e6848405cd568d0db0f15f423f8e599f0ee1bd7fd7fe10ca89b5612ea_prof);

    }

    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_c84e6cbff4305cce21c6d1f396deca6000b8ab24f1c88ee49d87fd1f7505af71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84e6cbff4305cce21c6d1f396deca6000b8ab24f1c88ee49d87fd1f7505af71->enter($__internal_c84e6cbff4305cce21c6d1f396deca6000b8ab24f1c88ee49d87fd1f7505af71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        $__internal_1fb7cec2e19f526a2aeb1b0d14d59d982644c2dd955564964f842311a7150270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb7cec2e19f526a2aeb1b0d14d59d982644c2dd955564964f842311a7150270->enter($__internal_1fb7cec2e19f526a2aeb1b0d14d59d982644c2dd955564964f842311a7150270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        // line 2
        echo "        <fieldset ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">

            ";
        // line 4
        if ((array_key_exists("legend", $context) &&  !twig_test_empty((isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new Twig_Error_Runtime('Variable "legend" does not exist.', 4, $this->getSourceContext()); })())))) {
            // line 5
            echo "                <legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new Twig_Error_Runtime('Variable "legend" does not exist.', 5, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 5, $this->getSourceContext()); })())), "html", null, true);
            echo "</legend>
            ";
        }
        // line 7
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "

        </fieldset>
";
        
        $__internal_1fb7cec2e19f526a2aeb1b0d14d59d982644c2dd955564964f842311a7150270->leave($__internal_1fb7cec2e19f526a2aeb1b0d14d59d982644c2dd955564964f842311a7150270_prof);

        
        $__internal_c84e6cbff4305cce21c6d1f396deca6000b8ab24f1c88ee49d87fd1f7505af71->leave($__internal_c84e6cbff4305cce21c6d1f396deca6000b8ab24f1c88ee49d87fd1f7505af71_prof);

    }

    public function getTemplateName()
    {
        return "AdamQuaileFieldsetBundle:Types:fieldset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  52 => 5,  50 => 4,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block fieldset_widget %}
        <fieldset {{ block('widget_container_attributes') }}>

            {% if legend is defined and legend is not empty %}
                <legend>{{ legend | trans({}, translation_domain) }}</legend>
            {% endif %}
            {{ form_widget(form) }}

        </fieldset>
{% endblock %}", "AdamQuaileFieldsetBundle:Types:fieldset.html.twig", "/home/weedmain/dispensary.weedmain.com/vendor/adamquaile/symfony-fieldset-bundle/Resources/views/Types/fieldset.html.twig");
    }
}
