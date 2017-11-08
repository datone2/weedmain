<?php

/* FrontBundle::Post/row.html.twig */
class __TwigTemplate_68912e2672261e357fc6068d039bfb5e3812c77b1dfda7e3e01ca18e6010604f extends Twig_Template
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
        echo "<div class=\"col-md-4 pull-left text-center\">
<div class=\"post\">
    <div class=\"post-inner\">  

        <div class=\"post-content\">
\t\t ";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "getImageName", array(), "method"))) {
            // line 7
            echo "            <a class=\"post-image\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "getSlug", array(), "method"))), "html", null, true);
            echo "\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["post"] ?? null), "image"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "
                </a>
            </h3>

            <div class=\"post-excerpt\">
                ";
        // line 21
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "getDescription", array(), "method")) {
            // line 22
            echo "                    <p>";
            echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "getDescription", array(), "method")), 0, 100) . " ..."), "html", null, true);
            echo "</p>
                ";
        }
        // line 24
        echo "            </div><!-- /.post-excerpt -->

            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "getSlug", array(), "method"))), "html", null, true);
        echo "\" class=\"btn btn-primary-outline\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read More"), "html", null, true);
        echo "</a>
        </div><!-- /.post-content -->
\t\t</div>
    </div><!-- /.post-inner -->
</div><!-- /.post -->";
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
        return array (  67 => 26,  63 => 24,  57 => 22,  55 => 21,  47 => 16,  43 => 15,  39 => 13,  37 => 10,  28 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Post/row.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Post/row.html.twig");
    }
}
