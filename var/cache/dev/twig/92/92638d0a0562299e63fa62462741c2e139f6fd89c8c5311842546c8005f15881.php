<?php

/* BiblioBundle:Livre:show.html.twig */
class __TwigTemplate_99c7fd5891a036af4bc914c5a61b7a5d38e107d7e57fe7726f6f200053197214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiblioBundle::layout.html.twig", "BiblioBundle:Livre:show.html.twig", 1);
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
        $__internal_59dc917a6f951678bd44a5d38025e65987e7fbe2e7cd0af299c96e2bc1e7c0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59dc917a6f951678bd44a5d38025e65987e7fbe2e7cd0af299c96e2bc1e7c0ce->enter($__internal_59dc917a6f951678bd44a5d38025e65987e7fbe2e7cd0af299c96e2bc1e7c0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Livre:show.html.twig"));

        $__internal_e3e11291dce7a6f8dccc9a62ec4c19d63f453900699b1cb36b37f384117afae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e11291dce7a6f8dccc9a62ec4c19d63f453900699b1cb36b37f384117afae8->enter($__internal_e3e11291dce7a6f8dccc9a62ec4c19d63f453900699b1cb36b37f384117afae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Livre:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59dc917a6f951678bd44a5d38025e65987e7fbe2e7cd0af299c96e2bc1e7c0ce->leave($__internal_59dc917a6f951678bd44a5d38025e65987e7fbe2e7cd0af299c96e2bc1e7c0ce_prof);

        
        $__internal_e3e11291dce7a6f8dccc9a62ec4c19d63f453900699b1cb36b37f384117afae8->leave($__internal_e3e11291dce7a6f8dccc9a62ec4c19d63f453900699b1cb36b37f384117afae8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a45e15114386a00414bef4697f366af1ba3f602da326659a73341dbc6f2544b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45e15114386a00414bef4697f366af1ba3f602da326659a73341dbc6f2544b9->enter($__internal_a45e15114386a00414bef4697f366af1ba3f602da326659a73341dbc6f2544b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a0410ac82b7488c41e92b80685878718fa66825459b19d2a1bfb0c31b2c915b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0410ac82b7488c41e92b80685878718fa66825459b19d2a1bfb0c31b2c915b->enter($__internal_5a0410ac82b7488c41e92b80685878718fa66825459b19d2a1bfb0c31b2c915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<h1> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "titre", array()), "html", null, true);
        echo "</h1>";
        
        $__internal_5a0410ac82b7488c41e92b80685878718fa66825459b19d2a1bfb0c31b2c915b->leave($__internal_5a0410ac82b7488c41e92b80685878718fa66825459b19d2a1bfb0c31b2c915b_prof);

        
        $__internal_a45e15114386a00414bef4697f366af1ba3f602da326659a73341dbc6f2544b9->leave($__internal_a45e15114386a00414bef4697f366af1ba3f602da326659a73341dbc6f2544b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ca3fc9b9890c7fabe4abf5c0d20778ceeb33924ee48952b887cd334287c1773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca3fc9b9890c7fabe4abf5c0d20778ceeb33924ee48952b887cd334287c1773->enter($__internal_5ca3fc9b9890c7fabe4abf5c0d20778ceeb33924ee48952b887cd334287c1773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81cbe340d53ab615baf6d251a57ba942cd709e4ba3b66ccbfae91ea3208013fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cbe340d53ab615baf6d251a57ba942cd709e4ba3b66ccbfae91ea3208013fe->enter($__internal_81cbe340d53ab615baf6d251a57ba942cd709e4ba3b66ccbfae91ea3208013fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<strong> Ecrit par : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "auteur", array()), "html", null, true);
        echo "</strong>
<p> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "description", array()), "html", null, true);
        echo "</p>
<span> Nombre de pages : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "nombrePages", array()), "html", null, true);
        echo "</span>
<p><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_livres");
        echo "\">Retour</a></p>
";
        
        $__internal_81cbe340d53ab615baf6d251a57ba942cd709e4ba3b66ccbfae91ea3208013fe->leave($__internal_81cbe340d53ab615baf6d251a57ba942cd709e4ba3b66ccbfae91ea3208013fe_prof);

        
        $__internal_5ca3fc9b9890c7fabe4abf5c0d20778ceeb33924ee48952b887cd334287c1773->leave($__internal_5ca3fc9b9890c7fabe4abf5c0d20778ceeb33924ee48952b887cd334287c1773_prof);

    }

    public function getTemplateName()
    {
        return "BiblioBundle:Livre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 9,  79 => 8,  75 => 7,  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
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

{%  block title %}<h1> {{ livre.titre }}</h1>{% endblock %}

{%  block body %}
<strong> Ecrit par : {{ livre.auteur }}</strong>
<p> {{ livre.description }}</p>
<span> Nombre de pages : {{ livre.nombrePages }}</span>
<p><a href=\"{{ path('page_livres') }}\">Retour</a></p>
{% endblock %}", "BiblioBundle:Livre:show.html.twig", "/Applications/MAMP/htdocs/symfony_tp/src/Devschool/BiblioBundle/Resources/views/Livre/show.html.twig");
    }
}
