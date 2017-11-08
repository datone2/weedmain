<?php

/* FrontBundle::Helper/page_title.html.twig */
class __TwigTemplate_644ab6c63563d522fd1264c8e633b6a3943281d667a161ca864f046318051024 extends Twig_Template
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
        if (array_key_exists("title", $context)) {
            // line 3
            echo "        <h2>";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h2>
    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if (array_key_exists("description", $context)) {
            // line 7
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "</div><!-- /.page-title -->";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Helper/page_title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  39 => 7,  37 => 6,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Helper/page_title.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Helper/page_title.html.twig");
    }
}
