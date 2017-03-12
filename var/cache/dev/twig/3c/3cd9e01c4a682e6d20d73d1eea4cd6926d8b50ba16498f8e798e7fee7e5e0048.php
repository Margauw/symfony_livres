<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22a3f88bd6e0f61e1315a6d05131302da5f2b1ecad99094b4edcabc681443ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a3f88bd6e0f61e1315a6d05131302da5f2b1ecad99094b4edcabc681443ba9->enter($__internal_22a3f88bd6e0f61e1315a6d05131302da5f2b1ecad99094b4edcabc681443ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f44e64384ef235d108292fcbc6d724db4ad65b9a736a25607eef160440bd4c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44e64384ef235d108292fcbc6d724db4ad65b9a736a25607eef160440bd4c93->enter($__internal_f44e64384ef235d108292fcbc6d724db4ad65b9a736a25607eef160440bd4c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a3f88bd6e0f61e1315a6d05131302da5f2b1ecad99094b4edcabc681443ba9->leave($__internal_22a3f88bd6e0f61e1315a6d05131302da5f2b1ecad99094b4edcabc681443ba9_prof);

        
        $__internal_f44e64384ef235d108292fcbc6d724db4ad65b9a736a25607eef160440bd4c93->leave($__internal_f44e64384ef235d108292fcbc6d724db4ad65b9a736a25607eef160440bd4c93_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b4b757bfa8e7b52c9892af66071c143b0c2987a75327714bb5d5ebb11de1f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4b757bfa8e7b52c9892af66071c143b0c2987a75327714bb5d5ebb11de1f04->enter($__internal_3b4b757bfa8e7b52c9892af66071c143b0c2987a75327714bb5d5ebb11de1f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1da52d0370a08cc5ba47ea0b4f01a024134d071abe2e8d2dcbe1078597aa06f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da52d0370a08cc5ba47ea0b4f01a024134d071abe2e8d2dcbe1078597aa06f3->enter($__internal_1da52d0370a08cc5ba47ea0b4f01a024134d071abe2e8d2dcbe1078597aa06f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1da52d0370a08cc5ba47ea0b4f01a024134d071abe2e8d2dcbe1078597aa06f3->leave($__internal_1da52d0370a08cc5ba47ea0b4f01a024134d071abe2e8d2dcbe1078597aa06f3_prof);

        
        $__internal_3b4b757bfa8e7b52c9892af66071c143b0c2987a75327714bb5d5ebb11de1f04->leave($__internal_3b4b757bfa8e7b52c9892af66071c143b0c2987a75327714bb5d5ebb11de1f04_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_520436b1f87d89966b77d700493324b6ab9cd818a4c22751362c692128e0b188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520436b1f87d89966b77d700493324b6ab9cd818a4c22751362c692128e0b188->enter($__internal_520436b1f87d89966b77d700493324b6ab9cd818a4c22751362c692128e0b188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00af00fd75935e90d72d385ee3a29f624748e3465c010acf4b9532d09907dd0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00af00fd75935e90d72d385ee3a29f624748e3465c010acf4b9532d09907dd0c->enter($__internal_00af00fd75935e90d72d385ee3a29f624748e3465c010acf4b9532d09907dd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_00af00fd75935e90d72d385ee3a29f624748e3465c010acf4b9532d09907dd0c->leave($__internal_00af00fd75935e90d72d385ee3a29f624748e3465c010acf4b9532d09907dd0c_prof);

        
        $__internal_520436b1f87d89966b77d700493324b6ab9cd818a4c22751362c692128e0b188->leave($__internal_520436b1f87d89966b77d700493324b6ab9cd818a4c22751362c692128e0b188_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb6dc38de50b0250d7a483aef6914a486b5c36909a006396b8a5d7db0ea3c0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6dc38de50b0250d7a483aef6914a486b5c36909a006396b8a5d7db0ea3c0a7->enter($__internal_fb6dc38de50b0250d7a483aef6914a486b5c36909a006396b8a5d7db0ea3c0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7caada2bf66bbd1c978771d9acd6faecd89e5fd5f037016b8f08a9ad0b24b354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7caada2bf66bbd1c978771d9acd6faecd89e5fd5f037016b8f08a9ad0b24b354->enter($__internal_7caada2bf66bbd1c978771d9acd6faecd89e5fd5f037016b8f08a9ad0b24b354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7caada2bf66bbd1c978771d9acd6faecd89e5fd5f037016b8f08a9ad0b24b354->leave($__internal_7caada2bf66bbd1c978771d9acd6faecd89e5fd5f037016b8f08a9ad0b24b354_prof);

        
        $__internal_fb6dc38de50b0250d7a483aef6914a486b5c36909a006396b8a5d7db0ea3c0a7->leave($__internal_fb6dc38de50b0250d7a483aef6914a486b5c36909a006396b8a5d7db0ea3c0a7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symfony_livres/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
