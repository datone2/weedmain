<?php

/* FrontBundle::Product/row.html.twig */
class __TwigTemplate_aad3c541e27d077cfc9f1276b0992df178cf4f3345467d1409cb5b90adbee001 extends Twig_Template
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
        $__internal_02f79a702ba7fad68c340ec38d800329311ae571e70935a105f98b8df0dd18d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f79a702ba7fad68c340ec38d800329311ae571e70935a105f98b8df0dd18d1->enter($__internal_02f79a702ba7fad68c340ec38d800329311ae571e70935a105f98b8df0dd18d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Product/row.html.twig"));

        $__internal_014aae0e12eb8ca988305f5e86d8fd3f90edea8fd2dfc84c0fa07870bc0c3b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014aae0e12eb8ca988305f5e86d8fd3f90edea8fd2dfc84c0fa07870bc0c3b78->enter($__internal_014aae0e12eb8ca988305f5e86d8fd3f90edea8fd2dfc84c0fa07870bc0c3b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Product/row.html.twig"));

        // line 1
        echo "<div class=\"bg-detail-pdl\" style=\"margin-bottom: 12px;\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"item-heading--title grid-3-5 grid-md-2-5 col-md-6 pdr0\">
\t\t\t\t<a data-toggle=\"collapse\" data-target=\"#pDesc";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\" id=\"clickeventdiv\"><i id=\"clickevent\" onclick=\"onclickBody(this)\" class=\"fa fa-plus-circle\" style=\"font-size: 22px;vertical-align: top;\"></i></a>
\t\t\t\t<h3 style=\"margin:0;display: inline;\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "getProductName", array(), "method")), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"item-heading--prices grid-1 grid-md-2-5 col-md-6 pdr0\">\t
\t\t\t\t";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->getSourceContext()); })()), "getPriceGram", array(), "method")) {
            // line 10
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">";
            // line 11
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->getSourceContext()); })()), "getPriceGram", array(), "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 11, $this->getSourceContext()); })())), "html", null, true);
            echo "</span><br> 1 GRAM 
\t\t\t\t</div>";
        }
        // line 13
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 13, $this->getSourceContext()); })()), "getPrice2Gram", array(), "method")) {
            echo "<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 15, $this->getSourceContext()); })()), "getPrice2Gram", array(), "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 15, $this->getSourceContext()); })())), "html", null, true);
            echo "</span><br> 2 GRAM 
\t\t\t\t</div>";
        }
        // line 17
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->getSourceContext()); })()), "getPrice35Gram", array(), "method")) {
            // line 18
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 20, $this->getSourceContext()); })()), "getPrice35Gram", array(), "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 20, $this->getSourceContext()); })())), "html", null, true);
            echo "</span><br> 3.5 GRAM 
\t\t\t\t</div>";
        }
        // line 22
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->getSourceContext()); })()), "getPrice4Gram", array(), "method")) {
            // line 23
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 25, $this->getSourceContext()); })()), "getPrice4Gram", array(), "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 25, $this->getSourceContext()); })())), "html", null, true);
            echo "</span><br> 4 GRAM 
\t\t\t\t</div>";
        }
        // line 27
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 27, $this->getSourceContext()); })()), "getPrice7Gram", array(), "method")) {
            // line 28
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 30, $this->getSourceContext()); })()), "getPrice7Gram", array(), "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 30, $this->getSourceContext()); })())), "html", null, true);
            echo "</span><br> 7 GRAM 
\t\t\t\t</div>";
        }
        // line 32
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 32, $this->getSourceContext()); })()), "getPrice14Gram", array(), "method")) {
            // line 33
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 35, $this->getSourceContext()); })()), "getPrice14Gram", array(), "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 35, $this->getSourceContext()); })())), "html", null, true);
            echo "</span><br> 14 GRAM
\t\t\t\t</div>";
        }
        // line 37
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 37, $this->getSourceContext()); })()), "getPrice28Gram", array(), "method")) {
            // line 38
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 40, $this->getSourceContext()); })()), "getPrice28Gram", array(), "method"), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 40, $this->getSourceContext()); })())), "html", null, true);
            echo "</span><br> 28 GRAM 
\t\t\t\t</div>";
        }
        // line 42
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div id=\"pDesc";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 47, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\" class=\"collapse\" style=\"padding:0px 15px\">";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 47, $this->getSourceContext()); })()), "getDescription", array(), "method");
        echo "</div>
\t\t\t<div class=\"table-card-subtitle col-md-12\">
\t\t\t\t";
        // line 49
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 49, $this->getSourceContext()); })()), "getPercentageThc", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 49, $this->getSourceContext()); })()), "getPercentageThc", array(), "method")), "html", null, true);
            echo "% THC";
        }
        echo "&nbsp;
\t\t\t\t";
        // line 50
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 50, $this->getSourceContext()); })()), "getPercentageThca", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 50, $this->getSourceContext()); })()), "getPercentageThca", array(), "method")), "html", null, true);
            echo "% THCA";
        }
        echo "&nbsp;
\t\t\t\t";
        // line 51
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 51, $this->getSourceContext()); })()), "getPercentageCbd", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 51, $this->getSourceContext()); })()), "getPercentageCbd", array(), "method")), "html", null, true);
            echo "% CBD";
        }
        echo "&nbsp;
\t\t\t\t";
        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 52, $this->getSourceContext()); })()), "getPercentageCba", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 52, $this->getSourceContext()); })()), "getPercentageCba", array(), "method")), "html", null, true);
            echo "% CBA";
        }
        echo "&nbsp;
\t\t\t\t";
        // line 53
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 53, $this->getSourceContext()); })()), "getPercentageCbn", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 53, $this->getSourceContext()); })()), "getPercentageCbn", array(), "method")), "html", null, true);
            echo "% CBN";
        }
        echo "\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_02f79a702ba7fad68c340ec38d800329311ae571e70935a105f98b8df0dd18d1->leave($__internal_02f79a702ba7fad68c340ec38d800329311ae571e70935a105f98b8df0dd18d1_prof);

        
        $__internal_014aae0e12eb8ca988305f5e86d8fd3f90edea8fd2dfc84c0fa07870bc0c3b78->leave($__internal_014aae0e12eb8ca988305f5e86d8fd3f90edea8fd2dfc84c0fa07870bc0c3b78_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Product/row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 53,  157 => 52,  150 => 51,  143 => 50,  136 => 49,  129 => 47,  122 => 42,  117 => 40,  113 => 38,  110 => 37,  105 => 35,  101 => 33,  98 => 32,  93 => 30,  89 => 28,  86 => 27,  81 => 25,  77 => 23,  74 => 22,  69 => 20,  65 => 18,  62 => 17,  57 => 15,  51 => 13,  46 => 11,  43 => 10,  41 => 9,  35 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"bg-detail-pdl\" style=\"margin-bottom: 12px;\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"item-heading--title grid-3-5 grid-md-2-5 col-md-6 pdr0\">
\t\t\t\t<a data-toggle=\"collapse\" data-target=\"#pDesc{{ product.getId()}}\" id=\"clickeventdiv\"><i id=\"clickevent\" onclick=\"onclickBody(this)\" class=\"fa fa-plus-circle\" style=\"font-size: 22px;vertical-align: top;\"></i></a>
\t\t\t\t<h3 style=\"margin:0;display: inline;\">{{ product.getProductName()|trans }}</h3>
\t\t\t</div>
\t\t\t<div class=\"item-heading--prices grid-1 grid-md-2-5 col-md-6 pdr0\">\t
\t\t\t\t{% if product.getPriceGram() %}
\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">{{ product.getPriceGram()|localizedcurrency(currency) }}</span><br> 1 GRAM 
\t\t\t\t</div>{% endif %}
\t\t\t\t{% if product.getPrice2Gram() %}<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t{{ product.getPrice2Gram()|localizedcurrency(currency) }}</span><br> 2 GRAM 
\t\t\t\t</div>{% endif %}
\t\t\t\t{% if product.getPrice35Gram() %}
\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t{{ product.getPrice35Gram()|localizedcurrency(currency) }}</span><br> 3.5 GRAM 
\t\t\t\t</div>{% endif %}
\t\t\t\t{% if product.getPrice4Gram() %}
\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t{{ product.getPrice4Gram()|localizedcurrency(currency) }}</span><br> 4 GRAM 
\t\t\t\t</div>{% endif %}
\t\t\t\t{% if product.getPrice7Gram() %}
\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t{{ product.getPrice7Gram()|localizedcurrency(currency) }}</span><br> 7 GRAM 
\t\t\t\t</div>{% endif %}
\t\t\t\t{% if product.getPrice14Gram() %}
\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t{{ product.getPrice14Gram()|localizedcurrency(currency) }}</span><br> 14 GRAM
\t\t\t\t</div>{% endif %}
\t\t\t\t{% if product.getPrice28Gram() %}
\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t{{ product.getPrice28Gram()|localizedcurrency(currency) }}</span><br> 28 GRAM 
\t\t\t\t</div>{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div id=\"pDesc{{ product.getId()}}\" class=\"collapse\" style=\"padding:0px 15px\">{{ product.getDescription()|raw }}</div>
\t\t\t<div class=\"table-card-subtitle col-md-12\">
\t\t\t\t{% if product.getPercentageThc() %}{{product.getPercentageThc()|trans}}% THC{% endif %}&nbsp;
\t\t\t\t{% if product.getPercentageThca() %}{{product.getPercentageThca()|trans}}% THCA{% endif %}&nbsp;
\t\t\t\t{% if product.getPercentageCbd() %}{{product.getPercentageCbd()|trans}}% CBD{% endif %}&nbsp;
\t\t\t\t{% if product.getPercentageCba() %}{{product.getPercentageCba()|trans}}% CBA{% endif %}&nbsp;
\t\t\t\t{% if product.getPercentageCbn() %}{{product.getPercentageCbn()|trans}}% CBN{% endif %}\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

", "FrontBundle::Product/row.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Product/row.html.twig");
    }
}
