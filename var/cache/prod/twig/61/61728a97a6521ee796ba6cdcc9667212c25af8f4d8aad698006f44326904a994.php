<?php

/* FrontBundle::Product/row.html.twig */
class __TwigTemplate_d408c2ea18b63cc5fb2ebe3dd743ac1b5c6d2a5bf518e7063aa8a5c94e0b548c extends Twig_Template
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
        echo "<div class=\"bg-detail-pdl\" style=\"margin-bottom: 12px;\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"item-heading--title grid-3-5 grid-md-2-5 col-md-6 pdr0\">
\t\t\t\t<a data-toggle=\"collapse\" data-target=\"#pDesc";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getId", array(), "method"), "html", null, true);
        echo "\" id=\"clickeventdiv\"><i id=\"clickevent\" onclick=\"onclickBody(this)\" class=\"fa fa-plus-circle\" style=\"font-size: 22px;vertical-align: top;\"></i></a>
\t\t\t\t<h3 style=\"margin:0;display: inline;\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getProductName", array(), "method")), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"item-heading--prices grid-1 grid-md-2-5 col-md-6 pdr0\">\t
\t\t\t\t";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPriceGram", array(), "method")) {
            // line 10
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">";
            // line 11
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPriceGram", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
            echo "</span><br> 1 GRAM 
\t\t\t\t</div>";
        }
        // line 13
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice2Gram", array(), "method")) {
            echo "<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice2Gram", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
            echo "</span><br> 2 GRAM 
\t\t\t\t</div>";
        }
        // line 17
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice35Gram", array(), "method")) {
            // line 18
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice35Gram", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
            echo "</span><br> 3.5 GRAM 
\t\t\t\t</div>";
        }
        // line 22
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice4Gram", array(), "method")) {
            // line 23
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice4Gram", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
            echo "</span><br> 4 GRAM 
\t\t\t\t</div>";
        }
        // line 27
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice7Gram", array(), "method")) {
            // line 28
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice7Gram", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
            echo "</span><br> 7 GRAM 
\t\t\t\t</div>";
        }
        // line 32
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice14Gram", array(), "method")) {
            // line 33
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice14Gram", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
            echo "</span><br> 14 GRAM
\t\t\t\t</div>";
        }
        // line 37
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice28Gram", array(), "method")) {
            // line 38
            echo "\t\t\t\t<div class=\"item-heading--price copy--centered col-md-12\">
\t\t\t\t\t<span class=\"colored price copy--xxs copy-sm--sm copy-md--md copy--bold\">
\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_localized_currency_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPrice28Gram", array(), "method"), ($context["currency"] ?? null)), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getId", array(), "method"), "html", null, true);
        echo "\" class=\"collapse\" style=\"padding:0px 15px\">";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getDescription", array(), "method");
        echo "</div>
\t\t\t<div class=\"table-card-subtitle col-md-12\">
\t\t\t\t";
        // line 49
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageThc", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageThc", array(), "method")), "html", null, true);
            echo "% THC";
        }
        echo "&nbsp;
\t\t\t\t";
        // line 50
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageThca", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageThca", array(), "method")), "html", null, true);
            echo "% THCA";
        }
        echo "&nbsp;
\t\t\t\t";
        // line 51
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageCbd", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageCbd", array(), "method")), "html", null, true);
            echo "% CBD";
        }
        echo "&nbsp;
\t\t\t\t";
        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageCba", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageCba", array(), "method")), "html", null, true);
            echo "% CBA";
        }
        echo "&nbsp;
\t\t\t\t";
        // line 53
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageCbn", array(), "method")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "getPercentageCbn", array(), "method")), "html", null, true);
            echo "% CBN";
        }
        echo "\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
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
        return array (  158 => 53,  151 => 52,  144 => 51,  137 => 50,  130 => 49,  123 => 47,  116 => 42,  111 => 40,  107 => 38,  104 => 37,  99 => 35,  95 => 33,  92 => 32,  87 => 30,  83 => 28,  80 => 27,  75 => 25,  71 => 23,  68 => 22,  63 => 20,  59 => 18,  56 => 17,  51 => 15,  45 => 13,  40 => 11,  37 => 10,  35 => 9,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Product/row.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Product/row.html.twig");
    }
}
