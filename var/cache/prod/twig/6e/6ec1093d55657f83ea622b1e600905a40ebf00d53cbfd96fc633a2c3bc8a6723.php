<?php

/* FrontBundle::Widget/agent.html.twig */
class __TwigTemplate_bf11cb9b1cee1a8dfd83e6fefc6d0d96c9c982e926a85dd450293139d33e3211 extends Twig_Template
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
        echo "<div class=\"post-block\">
    <div ";
        // line 2
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "avatarImage"), "html", null, true);
            echo "');\"";
        }
        // line 3
        echo "         class=\"post-user-avatar\">
    </div><!-- /.post-user-avatar -->

    <div class=\"post-user-name\">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agent", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getDisplayName", array(), "method"), "html", null, true);
        echo "</a>
    </div><!-- /.post-user-name -->

    ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method")) {
            // line 11
            echo "        <div class=\"post-user-meta\">
            ";
            // line 12
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getPhone", array(), "method")) {
                // line 13
                echo "                <div class=\"post-user-meta-item\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getPhone", array(), "method"), "html", null, true);
                echo "
                </div><!-- /.post-user-meta-item -->
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getWebsite", array(), "method")) {
                // line 19
                echo "                <div class=\"post-user-meta-item\">
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getWebsite", array(), "method"), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, twig_trim_filter(twig_trim_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getWebsite", array(), "method"), "https://"), "http://"), "html", null, true);
                echo "
                    </a>
                </div><!-- /.post-user-meta-item -->
            ";
            }
            // line 25
            echo "        </div><!-- /.post-user-meta -->

        ";
            // line 27
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getFacebook", array(), "method") || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getTwitter", array(), "method")) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getLinkedin", array(), "method"))) {
                // line 28
                echo "            <div class=\"post-user-social\">
                ";
                // line 29
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getFacebook", array(), "method")) {
                    // line 30
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getFacebook", array(), "method"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-facebook\"></i>
                    </a>
                ";
                }
                // line 34
                echo "
                ";
                // line 35
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getTwitter", array(), "method")) {
                    // line 36
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getTwitter", array(), "method"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-twitter\"></i>
                    </a>
                ";
                }
                // line 40
                echo "
                ";
                // line 41
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getLinkedin", array(), "method")) {
                    // line 42
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "getProfile", array(), "method"), "getLinkedin", array(), "method"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-linkedin\"></i>
                    </a>
                ";
                }
                // line 46
                echo "            </div><!-- /.post-user-social -->
        ";
            }
            // line 48
            echo "    ";
        }
        // line 49
        echo "</div><!-- /.post-block -->";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Widget/agent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  126 => 48,  122 => 46,  114 => 42,  112 => 41,  109 => 40,  101 => 36,  99 => 35,  96 => 34,  88 => 30,  86 => 29,  83 => 28,  81 => 27,  77 => 25,  70 => 21,  66 => 20,  63 => 19,  61 => 18,  58 => 17,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  42 => 10,  34 => 7,  28 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Widget/agent.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Widget/agent.html.twig");
    }
}
