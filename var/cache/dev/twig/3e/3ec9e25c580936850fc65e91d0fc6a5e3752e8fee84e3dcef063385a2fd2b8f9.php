<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_90c1a63aba124899c905d7d2339310ea4f9245a4e490e264b8efbccfdfc55f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2995ef4c6bf9c9adc7d46d2e67995bb56b5ba7db6d101ef445fd87a18b5175af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2995ef4c6bf9c9adc7d46d2e67995bb56b5ba7db6d101ef445fd87a18b5175af->enter($__internal_2995ef4c6bf9c9adc7d46d2e67995bb56b5ba7db6d101ef445fd87a18b5175af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_29c63ee5c884fa21a94e303320ede09bcbd3d042520a262cb6d79fa9e0cb85fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c63ee5c884fa21a94e303320ede09bcbd3d042520a262cb6d79fa9e0cb85fd->enter($__internal_29c63ee5c884fa21a94e303320ede09bcbd3d042520a262cb6d79fa9e0cb85fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2995ef4c6bf9c9adc7d46d2e67995bb56b5ba7db6d101ef445fd87a18b5175af->leave($__internal_2995ef4c6bf9c9adc7d46d2e67995bb56b5ba7db6d101ef445fd87a18b5175af_prof);

        
        $__internal_29c63ee5c884fa21a94e303320ede09bcbd3d042520a262cb6d79fa9e0cb85fd->leave($__internal_29c63ee5c884fa21a94e303320ede09bcbd3d042520a262cb6d79fa9e0cb85fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_118c6cd325f7a9630283a720cd9188497cda4353953f3c7acef35724c016c534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118c6cd325f7a9630283a720cd9188497cda4353953f3c7acef35724c016c534->enter($__internal_118c6cd325f7a9630283a720cd9188497cda4353953f3c7acef35724c016c534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db176e98f5cbe4efc039d6c53aa648d46ebeb1a5d76f337f27b72db5fdfec4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db176e98f5cbe4efc039d6c53aa648d46ebeb1a5d76f337f27b72db5fdfec4d9->enter($__internal_db176e98f5cbe4efc039d6c53aa648d46ebeb1a5d76f337f27b72db5fdfec4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_db176e98f5cbe4efc039d6c53aa648d46ebeb1a5d76f337f27b72db5fdfec4d9->leave($__internal_db176e98f5cbe4efc039d6c53aa648d46ebeb1a5d76f337f27b72db5fdfec4d9_prof);

        
        $__internal_118c6cd325f7a9630283a720cd9188497cda4353953f3c7acef35724c016c534->leave($__internal_118c6cd325f7a9630283a720cd9188497cda4353953f3c7acef35724c016c534_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/symfony_tp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
