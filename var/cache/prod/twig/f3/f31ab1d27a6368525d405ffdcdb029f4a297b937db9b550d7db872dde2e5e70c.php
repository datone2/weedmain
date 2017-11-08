<?php

/* FrontBundle::Location/box.html.twig */
class __TwigTemplate_ccaaab1ce986c7e9c6503ac4282f34b6408fff9988572129c17d55205bf6c8e1 extends Twig_Template
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
        echo "<div class=\"location\" ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["location"] ?? null), "getImageName", array(), "method")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["location"] ?? null), "image"), "html", null, true);
            echo "');\"";
        }
        echo ">
    <div class=\"location-inner\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("location_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["location"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"location-link\"></a>

        <div class=\"location-content\">
            <div class=\"location-title\">
                <h5>
                    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("location_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["location"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"text-decoration-none color-white\">
                        ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["location"] ?? null), "getName", array(), "method"), "html", null, true);
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
        return array (  51 => 21,  47 => 18,  41 => 9,  37 => 8,  29 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Location/box.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Location/box.html.twig");
    }
}
