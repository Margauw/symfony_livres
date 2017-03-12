<?php

/* OCUserBundle:Security:admin.html.twig */
class __TwigTemplate_bad4bacc03c5ab2512d8524ad2e5229f551072cd741fce259a6125de82ab4710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiblioBundle::layout.html.twig", "OCUserBundle:Security:admin.html.twig", 1);
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
        $__internal_432c52fb3d31cf8f72096144d483e94b95fa2739aa7e249eafc8c0aa620bfc0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432c52fb3d31cf8f72096144d483e94b95fa2739aa7e249eafc8c0aa620bfc0b->enter($__internal_432c52fb3d31cf8f72096144d483e94b95fa2739aa7e249eafc8c0aa620bfc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:admin.html.twig"));

        $__internal_d189ddde7e2a6dca30bc9b8f63e7f4ded9e1c11a0cf212eb8633abf2a7971bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d189ddde7e2a6dca30bc9b8f63e7f4ded9e1c11a0cf212eb8633abf2a7971bfe->enter($__internal_d189ddde7e2a6dca30bc9b8f63e7f4ded9e1c11a0cf212eb8633abf2a7971bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_432c52fb3d31cf8f72096144d483e94b95fa2739aa7e249eafc8c0aa620bfc0b->leave($__internal_432c52fb3d31cf8f72096144d483e94b95fa2739aa7e249eafc8c0aa620bfc0b_prof);

        
        $__internal_d189ddde7e2a6dca30bc9b8f63e7f4ded9e1c11a0cf212eb8633abf2a7971bfe->leave($__internal_d189ddde7e2a6dca30bc9b8f63e7f4ded9e1c11a0cf212eb8633abf2a7971bfe_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c72420e82af4c0b92994b98ee0b33cca395e98dc9027f0a48e0d7f70621e45f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72420e82af4c0b92994b98ee0b33cca395e98dc9027f0a48e0d7f70621e45f1->enter($__internal_c72420e82af4c0b92994b98ee0b33cca395e98dc9027f0a48e0d7f70621e45f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c68a26fed445922169f6edcfcc962c1b51c4fa49e15d299b291f51f9514389c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68a26fed445922169f6edcfcc962c1b51c4fa49e15d299b291f51f9514389c7->enter($__internal_c68a26fed445922169f6edcfcc962c1b51c4fa49e15d299b291f51f9514389c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "  Page Admin<";
        
        $__internal_c68a26fed445922169f6edcfcc962c1b51c4fa49e15d299b291f51f9514389c7->leave($__internal_c68a26fed445922169f6edcfcc962c1b51c4fa49e15d299b291f51f9514389c7_prof);

        
        $__internal_c72420e82af4c0b92994b98ee0b33cca395e98dc9027f0a48e0d7f70621e45f1->leave($__internal_c72420e82af4c0b92994b98ee0b33cca395e98dc9027f0a48e0d7f70621e45f1_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cc1449716e4228447a1e6599def8ebed17a4cb0a5e44feecf8b591eaa6c9f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc1449716e4228447a1e6599def8ebed17a4cb0a5e44feecf8b591eaa6c9f6a->enter($__internal_3cc1449716e4228447a1e6599def8ebed17a4cb0a5e44feecf8b591eaa6c9f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f75f6a27a07b0194ab6ecc9286ecdb09197e25c9972aa87679ec1d4e26ca94d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75f6a27a07b0194ab6ecc9286ecdb09197e25c9972aa87679ec1d4e26ca94d4->enter($__internal_f75f6a27a07b0194ab6ecc9286ecdb09197e25c9972aa87679ec1d4e26ca94d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1> Page Admin </h1>
";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "    <h2> Vous êtes un admin </h2>

    ";
        } else {
            // line 12
            echo "        <h2> Vous n'êtes pas autorisés à voir cette page </h2>

";
        }
        
        $__internal_f75f6a27a07b0194ab6ecc9286ecdb09197e25c9972aa87679ec1d4e26ca94d4->leave($__internal_f75f6a27a07b0194ab6ecc9286ecdb09197e25c9972aa87679ec1d4e26ca94d4_prof);

        
        $__internal_3cc1449716e4228447a1e6599def8ebed17a4cb0a5e44feecf8b591eaa6c9f6a->leave($__internal_3cc1449716e4228447a1e6599def8ebed17a4cb0a5e44feecf8b591eaa6c9f6a_prof);

    }

    public function getTemplateName()
    {
        return "OCUserBundle:Security:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  73 => 9,  71 => 8,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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


{%  block title %}  Page Admin<{%  endblock %}

{%  block body %}
    <h1> Page Admin </h1>
{% if is_granted('ROLE_ADMIN') %}
    <h2> Vous êtes un admin </h2>

    {% else %}
        <h2> Vous n'êtes pas autorisés à voir cette page </h2>

{% endif %}
{% endblock %}", "OCUserBundle:Security:admin.html.twig", "/Applications/MAMP/htdocs/symfony_livres/src/OC/UserBundle/Resources/views/Security/admin.html.twig");
    }
}
