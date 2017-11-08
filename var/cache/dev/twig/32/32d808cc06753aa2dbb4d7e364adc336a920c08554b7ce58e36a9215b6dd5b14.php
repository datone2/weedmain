<?php

/* AppBundle:Form:collection.html.twig */
class __TwigTemplate_c860ddc49c0f7719c4179d1f900c2eefd4cc907be2d3ae8cacd6ff402e53c53b extends Twig_Template
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
        $__internal_8968d606b5b32b19939c87da89c25602acc95814bddcb6d97ca8b0de723870ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8968d606b5b32b19939c87da89c25602acc95814bddcb6d97ca8b0de723870ff->enter($__internal_8968d606b5b32b19939c87da89c25602acc95814bddcb6d97ca8b0de723870ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Form:collection.html.twig"));

        $__internal_9e4a00f7072e03080cee806c7bdd4403b8168bdade5708922785e39c65af07c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4a00f7072e03080cee806c7bdd4403b8168bdade5708922785e39c65af07c2->enter($__internal_9e4a00f7072e03080cee806c7bdd4403b8168bdade5708922785e39c65af07c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Form:collection.html.twig"));

        // line 21
        echo "
";
        // line 22
        $this->displayBlock('collection_widget', $context, $blocks);
        
        $__internal_8968d606b5b32b19939c87da89c25602acc95814bddcb6d97ca8b0de723870ff->leave($__internal_8968d606b5b32b19939c87da89c25602acc95814bddcb6d97ca8b0de723870ff_prof);

        
        $__internal_9e4a00f7072e03080cee806c7bdd4403b8168bdade5708922785e39c65af07c2->leave($__internal_9e4a00f7072e03080cee806c7bdd4403b8168bdade5708922785e39c65af07c2_prof);

    }

    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_a77c74afa1d246451cefe799c79716f0a73c38e3e022fbb878daf55a9c9db9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77c74afa1d246451cefe799c79716f0a73c38e3e022fbb878daf55a9c9db9ca->enter($__internal_a77c74afa1d246451cefe799c79716f0a73c38e3e022fbb878daf55a9c9db9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_360e962ec3a520a8943b6cdaaf27c1246b499f84bb94513c064fe8b445b734ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360e962ec3a520a8943b6cdaaf27c1246b499f84bb94513c064fe8b445b734ab->enter($__internal_360e962ec3a520a8943b6cdaaf27c1246b499f84bb94513c064fe8b445b734ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 25
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 25, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 25, $this->getSourceContext()); })()), 'row')));
            // line 26
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 26, $this->getSourceContext()); })()), array("data-prototype-name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 26, $this->getSourceContext()); })()), "vars", array()), "name", array())));
            // line 27
            echo "        ";
        }
        // line 28
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-allow-add" => (((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 28, $this->getSourceContext()); })())) ? (1) : (0))));
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 29, $this->getSourceContext()); })()), array("data-allow-remove" => (((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 29, $this->getSourceContext()); })())) ? (1) : (0))));
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 30, $this->getSourceContext()); })()), array("data-name-prefix" => (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 30, $this->getSourceContext()); })())));
        // line 31
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_360e962ec3a520a8943b6cdaaf27c1246b499f84bb94513c064fe8b445b734ab->leave($__internal_360e962ec3a520a8943b6cdaaf27c1246b499f84bb94513c064fe8b445b734ab_prof);

        
        $__internal_a77c74afa1d246451cefe799c79716f0a73c38e3e022fbb878daf55a9c9db9ca->leave($__internal_a77c74afa1d246451cefe799c79716f0a73c38e3e022fbb878daf55a9c9db9ca_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Form:collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  68 => 30,  65 => 29,  62 => 28,  59 => 27,  56 => 26,  53 => 25,  50 => 24,  47 => 23,  29 => 22,  26 => 21,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
# jquery.collection.html.twig
#
# Adds the following html attributes to the root node of your collection fields:
#
# - data-prototype-name: placeholder used in the prototype to replace element indexes on the collection
# - data-allow-add: if set to false, plugin will automatically set allow_add option to false
# - data-allow-delete: if set to false, plugin will automatically set allow_remove option to false
# - data-name-prefix: contains the collection's prefix used in descendant field names
#
# Those information let you configure the plugin options automatically.
#
# If you are already using a form theme, you can use both by using:
# {%
#   form_theme myForm
#       'FuzAppBundle::my-form-theme.html.twig'
#       'FuzAppBundle::jquery.collection.html.twig'
#       ...
# %}
#}

{% block collection_widget %}
    {% spaceless %}
        {% if prototype is defined %}
            {% set attr = attr|merge({'data-prototype': form_row(prototype)}) %}
            {% set attr = attr|merge({'data-prototype-name': prototype.vars.name}) %}
        {% endif %}
        {% set attr = attr|merge({'data-allow-add': allow_add ? 1 : 0}) %}
        {% set attr = attr|merge({'data-allow-remove': allow_delete ? 1 : 0 }) %}
        {% set attr = attr|merge({'data-name-prefix': full_name}) %}
        {{ block('form_widget') }}
    {% endspaceless %}
{% endblock collection_widget %}", "AppBundle:Form:collection.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AppBundle/Resources/views/Form/collection.html.twig");
    }
}
