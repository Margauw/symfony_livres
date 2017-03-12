<?php

/* DevschoolAdminBundle:Default:index.html.twig */
class __TwigTemplate_c723abf866332734bf0f8d823b0a4b557e94d0538a3457e5e4e6a15d53dc1447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiblioBundle::layout.html.twig", "DevschoolAdminBundle:Default:index.html.twig", 1);
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
        $__internal_e936b51cc87a2b63aed8be8d6547eda0707886185070e5270c6788c814f245e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e936b51cc87a2b63aed8be8d6547eda0707886185070e5270c6788c814f245e6->enter($__internal_e936b51cc87a2b63aed8be8d6547eda0707886185070e5270c6788c814f245e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Default:index.html.twig"));

        $__internal_66d3d9c61874d40ce5aa0c0be8422b01a4cd4220edf74a11e575fd19c8cd370f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d3d9c61874d40ce5aa0c0be8422b01a4cd4220edf74a11e575fd19c8cd370f->enter($__internal_66d3d9c61874d40ce5aa0c0be8422b01a4cd4220edf74a11e575fd19c8cd370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e936b51cc87a2b63aed8be8d6547eda0707886185070e5270c6788c814f245e6->leave($__internal_e936b51cc87a2b63aed8be8d6547eda0707886185070e5270c6788c814f245e6_prof);

        
        $__internal_66d3d9c61874d40ce5aa0c0be8422b01a4cd4220edf74a11e575fd19c8cd370f->leave($__internal_66d3d9c61874d40ce5aa0c0be8422b01a4cd4220edf74a11e575fd19c8cd370f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a47557267510eba638b5440172d4efdf43aa829f999a7b45fdcd5024929954a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47557267510eba638b5440172d4efdf43aa829f999a7b45fdcd5024929954a2->enter($__internal_a47557267510eba638b5440172d4efdf43aa829f999a7b45fdcd5024929954a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41bccd28d967668ab9ec8c689d60db00049c1257d224b745f8c5c9129648d519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bccd28d967668ab9ec8c689d60db00049c1257d224b745f8c5c9129648d519->enter($__internal_41bccd28d967668ab9ec8c689d60db00049c1257d224b745f8c5c9129648d519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello world ";
        
        $__internal_41bccd28d967668ab9ec8c689d60db00049c1257d224b745f8c5c9129648d519->leave($__internal_41bccd28d967668ab9ec8c689d60db00049c1257d224b745f8c5c9129648d519_prof);

        
        $__internal_a47557267510eba638b5440172d4efdf43aa829f999a7b45fdcd5024929954a2->leave($__internal_a47557267510eba638b5440172d4efdf43aa829f999a7b45fdcd5024929954a2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_93f062e70a3cef105d13116d4aa7fa24770b94203e67fea3f672302ad82e7072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f062e70a3cef105d13116d4aa7fa24770b94203e67fea3f672302ad82e7072->enter($__internal_93f062e70a3cef105d13116d4aa7fa24770b94203e67fea3f672302ad82e7072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45c4785c8c46ad8af4bbfc9c22c6d23530b368433547e06a250f6503a015d29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c4785c8c46ad8af4bbfc9c22c6d23530b368433547e06a250f6503a015d29f->enter($__internal_45c4785c8c46ad8af4bbfc9c22c6d23530b368433547e06a250f6503a015d29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1> Hello World</h1>
";
        
        $__internal_45c4785c8c46ad8af4bbfc9c22c6d23530b368433547e06a250f6503a015d29f->leave($__internal_45c4785c8c46ad8af4bbfc9c22c6d23530b368433547e06a250f6503a015d29f_prof);

        
        $__internal_93f062e70a3cef105d13116d4aa7fa24770b94203e67fea3f672302ad82e7072->leave($__internal_93f062e70a3cef105d13116d4aa7fa24770b94203e67fea3f672302ad82e7072_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{%  block title %}Hello world {%  endblock %}

{%  block body %}
    <h1> Hello World</h1>
{%  endblock %}
", "DevschoolAdminBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symfony_livres/src/Devschool/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
