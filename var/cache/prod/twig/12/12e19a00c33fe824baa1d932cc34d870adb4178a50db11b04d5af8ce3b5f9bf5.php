<?php

/* FrontBundle::Location/detail.html.twig */
class __TwigTemplate_742aae3ab3fe0472267c51cf1d1369a8f2c98034c49d8fbf1edf2051fa1a620b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Location/detail.html.twig", 1);
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
        $context["title"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["location"] ?? null), "getName", array(), "method");
        // line 5
        $context["subtitle"] = ((twig_length_filter($this->env, ($context["listings"] ?? null)) . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("listings available"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"container\">
\t\t";
        // line 13
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle::Location/detail.html.twig", 13)->display($context);
        echo "\t\t

\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 17
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
            // line 18
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listings"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listing"]) {
                // line 19
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t";
                // line 20
                $this->loadTemplate("FrontBundle::Listing/box.html.twig", "FrontBundle::Location/detail.html.twig", 20)->display($context);
                // line 21
                echo "\t\t\t\t\t\t</div><!-- /.col-* -->
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t\t";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle::Location/detail.html.twig", 24)->display($context);
            // line 25
            echo "\t\t\t\t";
        }
        // line 26
        echo "\t\t\t</div><!-- /.row -->
\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Location/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  103 => 25,  100 => 24,  97 => 23,  82 => 21,  80 => 20,  77 => 19,  59 => 18,  57 => 17,  50 => 13,  47 => 12,  44 => 11,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Location/detail.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Location/detail.html.twig");
    }
}
