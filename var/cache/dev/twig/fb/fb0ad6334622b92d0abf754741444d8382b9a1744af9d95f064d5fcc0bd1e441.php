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
        $__internal_c879049fc301ebbcc3c425d388a9e60bf0e8fa5fd4968964bc907e56d17ebdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c879049fc301ebbcc3c425d388a9e60bf0e8fa5fd4968964bc907e56d17ebdec->enter($__internal_c879049fc301ebbcc3c425d388a9e60bf0e8fa5fd4968964bc907e56d17ebdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:admin.html.twig"));

        $__internal_d860f907d2c4fcbdf974f350434538c0adabd012ada2812101922933967d1f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d860f907d2c4fcbdf974f350434538c0adabd012ada2812101922933967d1f3e->enter($__internal_d860f907d2c4fcbdf974f350434538c0adabd012ada2812101922933967d1f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c879049fc301ebbcc3c425d388a9e60bf0e8fa5fd4968964bc907e56d17ebdec->leave($__internal_c879049fc301ebbcc3c425d388a9e60bf0e8fa5fd4968964bc907e56d17ebdec_prof);

        
        $__internal_d860f907d2c4fcbdf974f350434538c0adabd012ada2812101922933967d1f3e->leave($__internal_d860f907d2c4fcbdf974f350434538c0adabd012ada2812101922933967d1f3e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_81f5bd5b139ad99401ed4e2e5232c18e32a513a8dd8fe6333fd020a9d518fb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f5bd5b139ad99401ed4e2e5232c18e32a513a8dd8fe6333fd020a9d518fb7b->enter($__internal_81f5bd5b139ad99401ed4e2e5232c18e32a513a8dd8fe6333fd020a9d518fb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84cb07f94936a3bb8efcf1ad2a0350b43da4508dad447a21738e03903a62ae6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cb07f94936a3bb8efcf1ad2a0350b43da4508dad447a21738e03903a62ae6e->enter($__internal_84cb07f94936a3bb8efcf1ad2a0350b43da4508dad447a21738e03903a62ae6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " <h1> Page Admin</h1> ";
        
        $__internal_84cb07f94936a3bb8efcf1ad2a0350b43da4508dad447a21738e03903a62ae6e->leave($__internal_84cb07f94936a3bb8efcf1ad2a0350b43da4508dad447a21738e03903a62ae6e_prof);

        
        $__internal_81f5bd5b139ad99401ed4e2e5232c18e32a513a8dd8fe6333fd020a9d518fb7b->leave($__internal_81f5bd5b139ad99401ed4e2e5232c18e32a513a8dd8fe6333fd020a9d518fb7b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a79f714814ac5e3528782fdf8d37f276ae255c65406d7922919f60234f63333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a79f714814ac5e3528782fdf8d37f276ae255c65406d7922919f60234f63333->enter($__internal_0a79f714814ac5e3528782fdf8d37f276ae255c65406d7922919f60234f63333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e9c9550fa0e73eec2e8ebc323dce73c741a7a4206b856d6264b3a645c759817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9c9550fa0e73eec2e8ebc323dce73c741a7a4206b856d6264b3a645c759817->enter($__internal_9e9c9550fa0e73eec2e8ebc323dce73c741a7a4206b856d6264b3a645c759817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "    <h2> Vous êtes un admin </h2>

    ";
        } else {
            // line 11
            echo "        <h2> Vous n'êtes pas autorisés à voir cette page </h2>

";
        }
        
        $__internal_9e9c9550fa0e73eec2e8ebc323dce73c741a7a4206b856d6264b3a645c759817->leave($__internal_9e9c9550fa0e73eec2e8ebc323dce73c741a7a4206b856d6264b3a645c759817_prof);

        
        $__internal_0a79f714814ac5e3528782fdf8d37f276ae255c65406d7922919f60234f63333->leave($__internal_0a79f714814ac5e3528782fdf8d37f276ae255c65406d7922919f60234f63333_prof);

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
        return array (  75 => 11,  70 => 8,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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


{%  block title %} <h1> Page Admin</h1> {%  endblock %}

{%  block body %}
{% if is_granted('ROLE_ADMIN') %}
    <h2> Vous êtes un admin </h2>

    {% else %}
        <h2> Vous n'êtes pas autorisés à voir cette page </h2>

{% endif %}
{% endblock %}", "OCUserBundle:Security:admin.html.twig", "/Applications/MAMP/htdocs/symfony_tp/src/OC/UserBundle/Resources/views/Security/admin.html.twig");
    }
}
