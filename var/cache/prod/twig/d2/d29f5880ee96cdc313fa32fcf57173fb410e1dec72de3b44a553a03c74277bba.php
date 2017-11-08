<?php

/* FrontBundle::Category/index.html.twig */
class __TwigTemplate_459520cea0134cff77e5cad932bab748a23698f09dbc2d789d59d3a971c22e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Category/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"container\">
\t\t";
        // line 9
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle::Category/index.html.twig", 9)->display($context);
        echo "\t\t

\t\t<div class=\"content\">\t\t\t
\t\t\t";
        // line 12
        if (twig_length_filter($this->env, ($context["categories"] ?? null))) {
            // line 13
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"term\">
\t\t\t\t\t\t\t\t<div class=\"term-name\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_detail", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getSlug", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getName", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div><!-- /.term-name -->

\t\t\t\t\t\t\t\t<div class=\"term-count\">
\t\t\t\t\t\t\t\t\t(";
                // line 24
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "getListings", array(), "method")), "html", null, true);
                echo ")
\t\t\t\t\t\t\t\t</div><!-- /.term-count -->
\t\t\t\t\t\t\t</div><!-- /.term -->
\t\t\t\t\t\t</div><!-- /.col-* -->
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t</div><!-- /.row -->

\t            <div class=\"navigation\">
\t                ";
            // line 32
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["categories"] ?? null));
            echo "
\t            </div><!-- /.navigation -->\t\t\t\t\t
\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle::Category/index.html.twig", 35)->display($context);
            // line 36
            echo "\t\t\t";
        }
        echo "\t\t\t
\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  98 => 35,  92 => 32,  87 => 29,  76 => 24,  68 => 19,  64 => 18,  59 => 15,  55 => 14,  52 => 13,  50 => 12,  44 => 9,  41 => 8,  38 => 7,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Category/index.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Category/index.html.twig");
    }
}
