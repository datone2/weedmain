<?php

/* FrontBundle::Amenity/detail.html.twig */
class __TwigTemplate_b7e6e92cfed524cbf2b943ea679b89d4b1f2020fb10a387d029fb13778628c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "FrontBundle::Amenity/detail.html.twig", 1);
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
        $context["title"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["amenity"] ?? null), "getName", array(), "method");
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
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "FrontBundle::Amenity/detail.html.twig", 9)->display($context);
        echo "\t\t

\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 13
        if (twig_length_filter($this->env, ($context["listings"] ?? null))) {
            // line 14
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
                // line 15
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t";
                // line 16
                $this->loadTemplate("FrontBundle::Listing/box.html.twig", "FrontBundle::Amenity/detail.html.twig", 16)->display($context);
                // line 17
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
            // line 19
            echo "\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t";
            $this->loadTemplate("AppBundle::Helper/empty.html.twig", "FrontBundle::Amenity/detail.html.twig", 20)->display($context);
            // line 21
            echo "\t\t\t\t";
        }
        // line 22
        echo "\t\t\t</div><!-- /.row -->
\t\t</div><!-- /.content -->
\t</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::Amenity/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  97 => 21,  94 => 20,  91 => 19,  76 => 17,  74 => 16,  71 => 15,  53 => 14,  51 => 13,  44 => 9,  41 => 8,  38 => 7,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle::Amenity/detail.html.twig", "/home/weedmain/dispensary.weedmain.com/src/DirectoryPlatform/FrontBundle/Resources/views/Amenity/detail.html.twig");
    }
}
