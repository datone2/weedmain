<?php

/* FrontBundle::Helper/content_title.html.twig */
class __TwigTemplate_0b2acf0d863e65b04a1cac9c020f8fe0a7c45cd2ccc64fbfca9ff6aa5af4aee1 extends Twig_Template
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
        echo "<div class=\"content-title ";
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
            echo "        <h2>
            ";
            // line 16
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "

            ";
            // line 18
            if (array_key_exists("subtitle", $context)) {
                // line 19
                echo "                <small>";
                echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
                echo "</small>
            ";
            }
            // line 21
            echo "        </h2>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if (array_key_exists("description", $context)) {
            // line 25
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if (array_key_exists("actions", $context)) {
            // line 29
            echo "        <div class=\"content-title-actions\">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 31
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "link", array()), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array()), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </div><!-- /.content-title-actions -->
    ";
        }
        // line 36
        echo "        
</div><!-- /.content-title -->";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Helper/content_title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  124 => 35,  115 => 32,  110 => 31,  106 => 30,  103 => 29,  101 => 28,  98 => 27,  92 => 25,  90 => 24,  87 => 23,  83 => 21,  77 => 19,  75 => 18,  70 => 16,  67 => 15,  65 => 14,  62 => 13,  58 => 11,  52 => 10,  46 => 8,  38 => 6,  35 => 5,  31 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Helper/content_title.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/content_title.html.twig");
    }
}
