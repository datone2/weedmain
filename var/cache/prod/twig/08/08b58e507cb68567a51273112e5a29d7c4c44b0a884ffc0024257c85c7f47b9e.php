<?php

/* AdminBundle::Helper/page_title.html.twig */
class __TwigTemplate_d181aeb6783122206b7e62a4bf838dc3d3fdf7bf43fc93a19a06aa0b9cf193a4 extends Twig_Template
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
        echo "<div class=\"page-title ";
        if (array_key_exists("class", $context)) {
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        }
        echo "\">
    ";
        // line 2
        if (array_key_exists("breadcrumbs", $context)) {
            // line 3
            echo "        <ol class=\"breadcrumb\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 5
                echo "                ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "link", array(), "any", true, true)) {
                    // line 6
                    echo "                    <li class=\"breadcrumb-item\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "title", array()), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 8
                    echo "                    <li class=\"breadcrumb-item active\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "title", array()), "html", null, true);
                    echo "</li>
                ";
                }
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ol>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (array_key_exists("title", $context)) {
            // line 15
            echo "        <h2>";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h2>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if (array_key_exists("actions", $context)) {
            // line 19
            echo "        <div class=\"page-title-actions\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 21
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "link", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                    ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array()), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div><!-- /.page-title-actions -->
    ";
        }
        // line 27
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "AdminBundle::Helper/page_title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  99 => 25,  90 => 22,  85 => 21,  81 => 20,  78 => 19,  76 => 18,  73 => 17,  67 => 15,  65 => 14,  62 => 13,  58 => 11,  52 => 10,  46 => 8,  38 => 6,  35 => 5,  31 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::Helper/page_title.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/AdminBundle/Resources/views/Helper/page_title.html.twig");
    }
}
