<?php

/* FrontBundle::Location/box.html.twig */
class __TwigTemplate_b0554a23ff5d6b64809c9b1d4fc7b7007765d5b334f9c4e1d6a3012af3fa66ee extends Twig_Template
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
        $__internal_ed9e64e0085360ef28a5c2763488ea57f28d58cc64f72a21d52d516b0658410b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9e64e0085360ef28a5c2763488ea57f28d58cc64f72a21d52d516b0658410b->enter($__internal_ed9e64e0085360ef28a5c2763488ea57f28d58cc64f72a21d52d516b0658410b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Location/box.html.twig"));

        $__internal_594c78c8ad6b66a864b3762ce7bc0ba7acb234bcb9ff03d8b36a54eed37d92b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594c78c8ad6b66a864b3762ce7bc0ba7acb234bcb9ff03d8b36a54eed37d92b7->enter($__internal_594c78c8ad6b66a864b3762ce7bc0ba7acb234bcb9ff03d8b36a54eed37d92b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::Location/box.html.twig"));

        // line 1
        echo "<div class=\"location\" ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 1, $this->getSourceContext()); })()), "getImageName", array(), "method")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 1, $this->getSourceContext()); })()), "image"), "html", null, true);
            echo "');\"";
        }
        echo ">
    <div class=\"location-inner\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("location_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 3, $this->getSourceContext()); })()), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"location-link\"></a>

        <div class=\"location-content\">
            <div class=\"location-title\">
                <h5>
                    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("location_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"text-decoration-none color-white\">
                        ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 9, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "
                    </a>
                </h5>
";
        // line 18
        echo "            </div><!-- /.location-title -->

            ";
        // line 21
        echo "        </div>
    </div><!-- /.location-inner -->
</div><!-- /.location-->";
        
        $__internal_ed9e64e0085360ef28a5c2763488ea57f28d58cc64f72a21d52d516b0658410b->leave($__internal_ed9e64e0085360ef28a5c2763488ea57f28d58cc64f72a21d52d516b0658410b_prof);

        
        $__internal_594c78c8ad6b66a864b3762ce7bc0ba7acb234bcb9ff03d8b36a54eed37d92b7->leave($__internal_594c78c8ad6b66a864b3762ce7bc0ba7acb234bcb9ff03d8b36a54eed37d92b7_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::Location/box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  53 => 18,  47 => 9,  43 => 8,  35 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"location\" {% if location.getImageName() %}style=\"background-image: url('{{ vich_uploader_asset(location, 'image') }}');\"{% endif %}>
    <div class=\"location-inner\">
        <a href=\"{{ path('location_detail', {'slug': location.getSlug()}) }}\" class=\"location-link\"></a>

        <div class=\"location-content\">
            <div class=\"location-title\">
                <h5>
                    <a href=\"{{ path('location_detail', {'slug': location.getSlug()}) }}\" class=\"text-decoration-none color-white\">
                        {{ location.getName() }}
                    </a>
                </h5>
{#
                <p>                
\t                {% transchoice location.getListings()|length %}
\t                    {0} No available listings|{1} %count% available listing|]1,Inf[%count% available listings
\t                {% endtranschoice %}                \t
                </p> #}
            </div><!-- /.location-title -->

            {#<a href=\"{{ path('location_detail', {'slug': location.getSlug()})}}\" class=\"btn btn-primary\">{{ 'Show all'|trans }}</a>#}
        </div>
    </div><!-- /.location-inner -->
</div><!-- /.location-->", "FrontBundle::Location/box.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Location/box.html.twig");
    }
}
