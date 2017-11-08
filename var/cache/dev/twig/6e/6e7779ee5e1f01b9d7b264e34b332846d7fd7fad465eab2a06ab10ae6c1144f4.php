<?php

/* FrontBundle::Helper/hero.html.twig */
class __TwigTemplate_d4f318bea9803f80c98da3a741ffd3a35e7355ab6e22e5ee4382dcbc7f0a67d7 extends Twig_Template
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
        $__internal_0e31f80c9b2f3cc3753fb88a5551d0cd31e9f2b4bb7e4e67ca0a5b7ba3252aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e31f80c9b2f3cc3753fb88a5551d0cd31e9f2b4bb7e4e67ca0a5b7ba3252aa3->enter($__internal_0e31f80c9b2f3cc3753fb88a5551d0cd31e9f2b4bb7e4e67ca0a5b7ba3252aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/hero.html.twig"));

        $__internal_c63e3c80633d691e66d8fb9a9d64a73a543ef2315e3af4fa4379cab36f5cea46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63e3c80633d691e66d8fb9a9d64a73a543ef2315e3af4fa4379cab36f5cea46->enter($__internal_c63e3c80633d691e66d8fb9a9d64a73a543ef2315e3af4fa4379cab36f5cea46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Helper/hero.html.twig"));

        // line 1
        echo "<div class=\"hero-wrapper\">
    <div class=\"hero\">
        <div class=\"container\">
            <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search City Gems"), "html", null, true);
        echo "</h1>
            <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Find the best spots or places in your city by using our directory theme. Start listing anything today."), "html", null, true);
        echo "</p>

            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("name" => "filter-hero-form"));
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

            ";
        // line 11
        if (twig_length_filter($this->env, (isset($context["categories_popular"]) || array_key_exists("categories_popular", $context) ? $context["categories_popular"] : (function () { throw new Twig_Error_Runtime('Variable "categories_popular" does not exist.', 11, $this->getSourceContext()); })()))) {
            // line 12
            echo "                <div class=\"hero-categories text-center\">
                    <strong class=\"col-md-12\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popular categories"), "html", null, true);
            echo "</strong>

                    <ul>
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories_popular"]) || array_key_exists("categories_popular", $context) ? $context["categories_popular"] : (function () { throw new Twig_Error_Runtime('Variable "categories_popular" does not exist.', 16, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 17
                echo "                            <li>
                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getSlug", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t";
                // line 20
                $context["imagePath"] = "";
                // line 21
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method") == "Travel")) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "airplane.png";
                    // line 23
                    echo "\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method") == "Dispensarys")) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "disipline.png";
                    // line 25
                    echo "\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method") == "Delivery")) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "delivery.png";
                    // line 27
                    echo "\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method") == "Doctor")) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "doctor.png";
                    // line 29
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    $context["imagePath"] = "noimage.gif";
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . (isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new Twig_Error_Runtime('Variable "imagePath" does not exist.', 32, $this->getSourceContext()); })()))), "html", null, true);
                echo "\" class=\"p-10\">
\t\t\t\t\t\t\t\t<div class='color-black'>
                                    ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method"), "html", null, true);
                echo " ";
                // line 35
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </a>";
                // line 37
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </ul>
                </div><!-- /.hero-categories -->
            ";
        }
        // line 42
        echo "        </div><!-- /.container -->
    </div><!-- /.hero -->
</div><!-- /.hero-wrapper -->";
        
        $__internal_0e31f80c9b2f3cc3753fb88a5551d0cd31e9f2b4bb7e4e67ca0a5b7ba3252aa3->leave($__internal_0e31f80c9b2f3cc3753fb88a5551d0cd31e9f2b4bb7e4e67ca0a5b7ba3252aa3_prof);

        
        $__internal_c63e3c80633d691e66d8fb9a9d64a73a543ef2315e3af4fa4379cab36f5cea46->leave($__internal_c63e3c80633d691e66d8fb9a9d64a73a543ef2315e3af4fa4379cab36f5cea46_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Helper/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  130 => 39,  123 => 37,  119 => 35,  116 => 34,  110 => 32,  104 => 30,  101 => 29,  98 => 28,  95 => 27,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  77 => 21,  75 => 20,  70 => 18,  67 => 17,  63 => 16,  57 => 13,  54 => 12,  52 => 11,  47 => 9,  43 => 8,  39 => 7,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"hero-wrapper\">
    <div class=\"hero\">
        <div class=\"container\">
            <h1>{{ 'Search City Gems'|trans }}</h1>
            <p>{{ 'Find the best spots or places in your city by using our directory theme. Start listing anything today.'|trans }}</p>

            {{ form_start(filter, {'name': 'filter-hero-form'}) }}
            {{ form_widget(filter) }}
            {{ form_end(filter) }}

            {% if categories_popular|length %}
                <div class=\"hero-categories text-center\">
                    <strong class=\"col-md-12\">{{ 'Popular categories'|trans }}</strong>

                    <ul>
                        {% for category in categories_popular %}
                            <li>
                                <a href=\"{{ path('category_detail', {'slug': category.getSlug()})}}\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t{% set imagePath = '' %}
\t\t\t\t\t\t\t\t{% if category.getName() == 'Travel' %}
\t\t\t\t\t\t\t\t{% set imagePath = 'airplane.png' %}
\t\t\t\t\t\t\t\t{% elseif category.getName() == 'Dispensarys' %}
\t\t\t\t\t\t\t\t{% set imagePath = 'disipline.png' %}
\t\t\t\t\t\t\t\t{% elseif category.getName() == 'Delivery' %}
\t\t\t\t\t\t\t\t{% set imagePath = 'delivery.png' %}
\t\t\t\t\t\t\t\t{% elseif category.getName() == 'Doctor' %}
\t\t\t\t\t\t\t\t{% set imagePath = 'doctor.png' %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{% set imagePath = 'noimage.gif' %}\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/'~imagePath)}}\" class=\"p-10\">
\t\t\t\t\t\t\t\t<div class='color-black'>
                                    {{ category.getName() }} {# <span>({{ category.getListings()|length }})</span> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </a>{#{% if not loop.last %},{% endif %}#}</li>
                        {% endfor %}
                    </ul>
                </div><!-- /.hero-categories -->
            {% endif %}
        </div><!-- /.container -->
    </div><!-- /.hero -->
</div><!-- /.hero-wrapper -->", "FrontBundle::Helper/hero.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/hero.html.twig");
    }
}
