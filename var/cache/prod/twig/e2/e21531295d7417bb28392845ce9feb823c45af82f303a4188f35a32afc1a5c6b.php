<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_c77286476aa193ccf8d01a1b973bc47ea17864ab864aa54c302633e726ff13a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change Password");
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
        $this->loadTemplate("FrontBundle::Helper/content_title.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 9)->display($context);
        // line 10
        echo "
    \t";
        // line 11
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 11)->display($context);
        // line 12
        echo "    </div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/ChangePassword/change_password.html.twig", "/home/weedmain/dispensary.weedmain.com/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
