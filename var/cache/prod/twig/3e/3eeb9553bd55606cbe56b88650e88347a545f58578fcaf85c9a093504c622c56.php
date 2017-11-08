<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7699b6722f524600719bcb0b2b833b1ba2b168eb510afa6f24656f43334779e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base_simple.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::Layout/base_simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register"), "html", null, true);
    }

    // line 5
    public function block_body_class($context, array $blocks = array())
    {
        echo "page-center";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"form-center\">
\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account Registration"), "html", null, true);
        echo "</h1>

\t\t<p>
\t\t    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Already have an account? <a href=\"%link%\">Sign in</a> and start creating new jobs or profile.", array("%link%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login")), "messages");
        // line 15
        echo "\t\t</p>

        ";
        // line 17
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 17)->display($context);
        // line 18
        echo "
\t\t<ul class=\"nav nav-pills\">
\t\t    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return Back"), "html", null, true);
        echo "</a></li>
\t\t    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign In"), "html", null, true);
        echo "</a></li>
\t\t    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot Password?"), "html", null, true);
        echo "</a></li>
\t\t</ul>            
    </div>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  72 => 21,  66 => 20,  62 => 18,  60 => 17,  56 => 15,  54 => 12,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Registration/register.html.twig", "/home/weedmain/dispensary.weedmain.com/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
