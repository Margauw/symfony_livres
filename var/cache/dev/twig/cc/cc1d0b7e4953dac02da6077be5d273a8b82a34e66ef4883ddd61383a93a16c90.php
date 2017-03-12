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
        $__internal_a3009546d63ae8d88d1c56676287d8e035c758e167700d5d0e63b650114bbc79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3009546d63ae8d88d1c56676287d8e035c758e167700d5d0e63b650114bbc79->enter($__internal_a3009546d63ae8d88d1c56676287d8e035c758e167700d5d0e63b650114bbc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        $__internal_8b62f5642be7123106ad52b8c66a318c3ca2dd4cf439bc791d0c870bfec0b3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b62f5642be7123106ad52b8c66a318c3ca2dd4cf439bc791d0c870bfec0b3ed->enter($__internal_8b62f5642be7123106ad52b8c66a318c3ca2dd4cf439bc791d0c870bfec0b3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3009546d63ae8d88d1c56676287d8e035c758e167700d5d0e63b650114bbc79->leave($__internal_a3009546d63ae8d88d1c56676287d8e035c758e167700d5d0e63b650114bbc79_prof);

        
        $__internal_8b62f5642be7123106ad52b8c66a318c3ca2dd4cf439bc791d0c870bfec0b3ed->leave($__internal_8b62f5642be7123106ad52b8c66a318c3ca2dd4cf439bc791d0c870bfec0b3ed_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_874791c6e30ac216b038cb5eb98b6a5228b05750d4674ec493a12e5aa69e8258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874791c6e30ac216b038cb5eb98b6a5228b05750d4674ec493a12e5aa69e8258->enter($__internal_874791c6e30ac216b038cb5eb98b6a5228b05750d4674ec493a12e5aa69e8258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_454f53f289bfde2208b668c07460e93e10846063c1432bb078b72cac04ac07cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454f53f289bfde2208b668c07460e93e10846063c1432bb078b72cac04ac07cd->enter($__internal_454f53f289bfde2208b668c07460e93e10846063c1432bb078b72cac04ac07cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login";
        
        $__internal_454f53f289bfde2208b668c07460e93e10846063c1432bb078b72cac04ac07cd->leave($__internal_454f53f289bfde2208b668c07460e93e10846063c1432bb078b72cac04ac07cd_prof);

        
        $__internal_874791c6e30ac216b038cb5eb98b6a5228b05750d4674ec493a12e5aa69e8258->leave($__internal_874791c6e30ac216b038cb5eb98b6a5228b05750d4674ec493a12e5aa69e8258_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbbea97ebb6ae550850b33e45f45911261b4a63d5d6a6cd5501451c8f5208aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbea97ebb6ae550850b33e45f45911261b4a63d5d6a6cd5501451c8f5208aaf->enter($__internal_fbbea97ebb6ae550850b33e45f45911261b4a63d5d6a6cd5501451c8f5208aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc2e99a31ae2a8b0ec750ebda148fbd81a6af6b27b12337322b2b572733d64d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2e99a31ae2a8b0ec750ebda148fbd81a6af6b27b12337322b2b572733d64d2->enter($__internal_fc2e99a31ae2a8b0ec750ebda148fbd81a6af6b27b12337322b2b572733d64d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc2e99a31ae2a8b0ec750ebda148fbd81a6af6b27b12337322b2b572733d64d2->leave($__internal_fc2e99a31ae2a8b0ec750ebda148fbd81a6af6b27b12337322b2b572733d64d2_prof);

        
        $__internal_fbbea97ebb6ae550850b33e45f45911261b4a63d5d6a6cd5501451c8f5208aaf->leave($__internal_fbbea97ebb6ae550850b33e45f45911261b4a63d5d6a6cd5501451c8f5208aaf_prof);

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


", "OCUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/symfony_tp/src/OC/UserBundle/Resources/views/Security/login.html.twig");
    }
}
