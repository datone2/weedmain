<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_87c5586020e6485cf745378d4ba8ca5ed07cf22d7d190dfc79836a9ad429ba4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::Layout/base_simple.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign In"), "html", null, true);
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
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
        echo "</h1>

        <p>
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Don't have an account? <a href=\"%link%\">Create new account</a>, it takes less than a minute.", array("%link%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register")), "messages");
        // line 15
        echo "        </p>

        ";
        // line 17
        $this->loadTemplate("FOSUserBundle:Security:login_content.html.twig", "@FOSUser/Security/login.html.twig", 17)->display($context);
        // line 18
        echo "
        <ul class=\"nav nav-pills\">
            <li class=\"nav-item\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return Back"), "html", null, true);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registration"), "html", null, true);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot Password?"), "html", null, true);
        echo "</a></li>
        </ul>
    </div><!-- /.form-center -->
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
        return new Twig_Source("", "@FOSUser/Security/login.html.twig", "/home/weedmain/dispensary.weedmain.com/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
