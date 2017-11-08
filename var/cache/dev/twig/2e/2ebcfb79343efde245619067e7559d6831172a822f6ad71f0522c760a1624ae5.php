<?php

/* FrontBundle::Post/row.html.twig */
class __TwigTemplate_fd3564075cb96539d301c6ff8184b11a26d681931035ec183ba7e98b29bf0cb4 extends Twig_Template
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
        $__internal_2686e08dc5c7f2658187f3724d757c2f98bc07a05343bf92c383f635bd66342c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2686e08dc5c7f2658187f3724d757c2f98bc07a05343bf92c383f635bd66342c->enter($__internal_2686e08dc5c7f2658187f3724d757c2f98bc07a05343bf92c383f635bd66342c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Post/row.html.twig"));

        $__internal_9824a195db9e1b9b7849692fd51d2f1dd35c4e7accffa1fc06631f7a18878442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9824a195db9e1b9b7849692fd51d2f1dd35c4e7accffa1fc06631f7a18878442->enter($__internal_9824a195db9e1b9b7849692fd51d2f1dd35c4e7accffa1fc06631f7a18878442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Post/row.html.twig"));

        // line 1
        echo "<div class=\"col-md-4 pull-left text-center\">
<div class=\"post\">
    <div class=\"post-inner\">  

        <div class=\"post-content\">
\t\t ";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 6, $this->getSourceContext()); })()), "getImageName", array(), "method"))) {
            // line 7
            echo "            <a class=\"post-image\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->getSourceContext()); })()), "getSlug", array(), "method"))), "html", null, true);
            echo "\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->getSourceContext()); })()), "image"), "html", null, true);
            echo "');\">
            </a><!-- /.post-image -->
        ";
        }
        // line 10
        echo "           ";
        // line 13
        echo "
            <h3 class=\"p-t-30\">
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 15, $this->getSourceContext()); })()), "getSlug", array(), "method"))), "html", null, true);
        echo "\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 16, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "
                </a>
            </h3>

            <div class=\"post-excerpt\">
                ";
        // line 21
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 21, $this->getSourceContext()); })()), "getDescription", array(), "method")) {
            // line 22
            echo "                    <p>";
            echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 22, $this->getSourceContext()); })()), "getDescription", array(), "method")), 0, 100) . " ..."), "html", null, true);
            echo "</p>
                ";
        }
        // line 24
        echo "            </div><!-- /.post-excerpt -->

            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 26, $this->getSourceContext()); })()), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"btn btn-primary-outline\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read More"), "html", null, true);
        echo "</a>
        </div><!-- /.post-content -->
\t\t</div>
    </div><!-- /.post-inner -->
</div><!-- /.post -->";
        
        $__internal_2686e08dc5c7f2658187f3724d757c2f98bc07a05343bf92c383f635bd66342c->leave($__internal_2686e08dc5c7f2658187f3724d757c2f98bc07a05343bf92c383f635bd66342c_prof);

        
        $__internal_9824a195db9e1b9b7849692fd51d2f1dd35c4e7accffa1fc06631f7a18878442->leave($__internal_9824a195db9e1b9b7849692fd51d2f1dd35c4e7accffa1fc06631f7a18878442_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Post/row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  69 => 24,  63 => 22,  61 => 21,  53 => 16,  49 => 15,  45 => 13,  43 => 10,  34 => 7,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-4 pull-left text-center\">
<div class=\"post\">
    <div class=\"post-inner\">  

        <div class=\"post-content\">
\t\t {% if post.getImageName() is not empty %}
            <a class=\"post-image\" href=\"{{ path('post_detail', {'slug': post.getSlug()})}}\" style=\"background-image: url('{{ vich_uploader_asset(post, 'image') }}');\">
            </a><!-- /.post-image -->
        {% endif %}
           {# {% if post.getCategory() %}
                <span class=\"post-category\">{{ post.getCategory().getName() }}</span>
            {% endif %} #}

            <h3 class=\"p-t-30\">
                <a href=\"{{ path('post_detail', {'slug': post.getSlug()})}}\">
                    {{ post.getName() }}
                </a>
            </h3>

            <div class=\"post-excerpt\">
                {% if post.getDescription() %}
                    <p>{{ post.getDescription()|striptags[:100] ~ ' ...' }}</p>
                {% endif %}
            </div><!-- /.post-excerpt -->

            <a href=\"{{ path('post_detail', {'slug': post.getSlug() })}}\" class=\"btn btn-primary-outline\">{{ 'Read More'|trans }}</a>
        </div><!-- /.post-content -->
\t\t</div>
    </div><!-- /.post-inner -->
</div><!-- /.post -->", "FrontBundle::Post/row.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Post/row.html.twig");
    }
}
