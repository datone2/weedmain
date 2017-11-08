<?php

/* FrontBundle::Widget/position.html.twig */
class __TwigTemplate_604b1b5fbaa73f4a154ce0fe7d9fc3ed3726499d5be4f067045c35ed227aa86d extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLatitude", array(), "method") && twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLongitude", array(), "method"))) {
            // line 2
            echo "    <div class=\"post-block\">
        ";
            // line 3
            ob_start();
            // line 4
            echo "            <div id=\"google-map-object\"
                 ";
            // line 5
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFeaturedImage", array(), "method")) {
                echo "data-image=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getFeaturedImage", array(), "method"), "image"), "html", null, true);
                echo "\"";
            }
            // line 6
            echo "                 ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLatitude", array(), "method")) {
                echo "data-latitude=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLatitude", array(), "method"), "html", null, true);
                echo "\"";
            }
            // line 7
            echo "                 ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLongitude", array(), "method")) {
                echo "data-longitude=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLongitude", array(), "method"), "html", null, true);
                echo "\"";
            }
            // line 8
            echo "                 class=\"google-map-position\"></div>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 10
            echo "
        <div class=\"google-map-content\">
            <div class=\"google-map-address\">
                ";
            // line 13
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getAddress", array(), "method")) {
                // line 14
                echo "                    <address>";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getAddress", array(), "method"), "html", null, true));
                echo "</address>
                ";
            }
            // line 16
            echo "            </div><!-- /.google-map-address -->

            <div class=\"google-map-direction\">
                <a href=\"https://maps.google.com?daddr=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLatitude", array(), "method"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["listing"] ?? null), "getLongitude", array(), "method"), "html", null, true);
            echo "\" target=\"_blank\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Get Direction"), "html", null, true);
            echo " <i class=\"fa fa-long-arrow-right\"></i>
                </a>
            </div><!-- /.google-map-direction -->
        </div><!-- /.google-map-content -->
    </div><!-- /.post-block -->
";
        }
    }

    public function getTemplateName()
    {
        return "FrontBundle::Widget/position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  71 => 19,  66 => 16,  60 => 14,  58 => 13,  53 => 10,  49 => 8,  42 => 7,  35 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Widget/position.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/position.html.twig");
    }
}
