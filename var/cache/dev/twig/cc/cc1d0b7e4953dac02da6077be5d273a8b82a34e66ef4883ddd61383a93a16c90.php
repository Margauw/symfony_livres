<?php

/* OCUserBundle:Security:login.html.twig */
class __TwigTemplate_e1e59c2f94ed1b3f10ca6aa75857b90334b288b432705ef3ea9d34efaef1dbbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiblioBundle::layout.html.twig", "OCUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BiblioBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83e0b4d283ce4923d2b624063f91665e9b80e26e0f28f661a34dd773abcd713a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e0b4d283ce4923d2b624063f91665e9b80e26e0f28f661a34dd773abcd713a->enter($__internal_83e0b4d283ce4923d2b624063f91665e9b80e26e0f28f661a34dd773abcd713a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        $__internal_9a3d3782b868cc7e2c318324135825bf4c341ddf4299b80b14798c141aef29bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3d3782b868cc7e2c318324135825bf4c341ddf4299b80b14798c141aef29bf->enter($__internal_9a3d3782b868cc7e2c318324135825bf4c341ddf4299b80b14798c141aef29bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83e0b4d283ce4923d2b624063f91665e9b80e26e0f28f661a34dd773abcd713a->leave($__internal_83e0b4d283ce4923d2b624063f91665e9b80e26e0f28f661a34dd773abcd713a_prof);

        
        $__internal_9a3d3782b868cc7e2c318324135825bf4c341ddf4299b80b14798c141aef29bf->leave($__internal_9a3d3782b868cc7e2c318324135825bf4c341ddf4299b80b14798c141aef29bf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_50ed19eaca9d0fd707e400a65186174f26207b6cc9d1835dad68022787ec0374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ed19eaca9d0fd707e400a65186174f26207b6cc9d1835dad68022787ec0374->enter($__internal_50ed19eaca9d0fd707e400a65186174f26207b6cc9d1835dad68022787ec0374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fde04635fd36e6d3fa82ebd387e173ffdfad1b9b4f33e1758599eb6d9473a535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde04635fd36e6d3fa82ebd387e173ffdfad1b9b4f33e1758599eb6d9473a535->enter($__internal_fde04635fd36e6d3fa82ebd387e173ffdfad1b9b4f33e1758599eb6d9473a535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login";
        
        $__internal_fde04635fd36e6d3fa82ebd387e173ffdfad1b9b4f33e1758599eb6d9473a535->leave($__internal_fde04635fd36e6d3fa82ebd387e173ffdfad1b9b4f33e1758599eb6d9473a535_prof);

        
        $__internal_50ed19eaca9d0fd707e400a65186174f26207b6cc9d1835dad68022787ec0374->leave($__internal_50ed19eaca9d0fd707e400a65186174f26207b6cc9d1835dad68022787ec0374_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a2b3d06100144434d2e6e74aeab96cebfa4c5900dc5912c2db948757d7cb8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2b3d06100144434d2e6e74aeab96cebfa4c5900dc5912c2db948757d7cb8ea->enter($__internal_9a2b3d06100144434d2e6e74aeab96cebfa4c5900dc5912c2db948757d7cb8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b194f430928efa4144d003c66d4da3740c547bf91875f057d3e995b75fb022b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b194f430928efa4144d003c66d4da3740c547bf91875f057d3e995b75fb022b4->enter($__internal_b194f430928efa4144d003c66d4da3740c547bf91875f057d3e995b75fb022b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1> Login</h1>

 ";
        // line 11
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 12
            echo "     <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
 ";
        }
        // line 14
        echo "
    <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

";
        
        $__internal_b194f430928efa4144d003c66d4da3740c547bf91875f057d3e995b75fb022b4->leave($__internal_b194f430928efa4144d003c66d4da3740c547bf91875f057d3e995b75fb022b4_prof);

        
        $__internal_9a2b3d06100144434d2e6e74aeab96cebfa4c5900dc5912c2db948757d7cb8ea->leave($__internal_9a2b3d06100144434d2e6e74aeab96cebfa4c5900dc5912c2db948757d7cb8ea_prof);

    }

    public function getTemplateName()
    {
        return "OCUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  84 => 15,  81 => 14,  75 => 12,  73 => 11,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BiblioBundle::layout.html.twig' \t%}


{%  block title %} Login{%  endblock %}


{%  block body %}

    <h1> Login</h1>

 {% if error %}
     <div class=\"alert alert-danger\">{{ error.message }}</div>
 {% endif %}

    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

{%  endblock %}


", "OCUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/symfony_livres/src/OC/UserBundle/Resources/views/Security/login.html.twig");
    }
}
