<?php

/* FrontBundle::Category/detail.html.twig */
class __TwigTemplate_9aaeac19d6582c441389e6143f37fbe9b489241485d0abfc4549df547e2bda1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Category/detail.html.twig", 1);
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
        $context["title"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "getName", array(), "method");
        // line 7
        $context["subtitle"] = ((twig_length_filter($this->env, ($context["listings"] ?? null)) . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("listings available"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"container\">
\t\t";
        // line 11
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle::Category/detail.html.twig", 11)->display($context);
        echo "\t\t

\t\t<div class=\"content\">\t\t\t
\t\t\t";
        // line 14
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
            // line 15
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 16
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
                // line 17
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t";
                // line 18
                $this->loadTemplate("FrontBundle::Listing/box.html.twig", "FrontBundle::Category/detail.html.twig", 18)->display($context);
                // line 19
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
            // line 21
            echo "\t\t\t\t</div><!-- /.row -->
\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t\t
\t\t\t\t";
            // line 23
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle::Category/detail.html.twig", 23)->display($context);
            // line 24
            echo "\t\t\t";
        }
        // line 25
        echo "\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Category/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  103 => 24,  101 => 23,  98 => 22,  94 => 21,  79 => 19,  77 => 18,  74 => 17,  57 => 16,  54 => 15,  52 => 14,  46 => 11,  43 => 10,  40 => 9,  34 => 5,  30 => 1,  28 => 7,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Category/detail.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Category/detail.html.twig");
    }
}
