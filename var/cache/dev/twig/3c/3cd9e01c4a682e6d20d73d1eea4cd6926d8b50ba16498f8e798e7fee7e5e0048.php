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
        $__internal_ecaca71758715a55ffba394197bf6020690a4a60a84781a482669667870c3c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecaca71758715a55ffba394197bf6020690a4a60a84781a482669667870c3c75->enter($__internal_ecaca71758715a55ffba394197bf6020690a4a60a84781a482669667870c3c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a63a368a89ff37c7ff7e6f7de01657b41e75fc6aaae9da68e421d04455d27eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63a368a89ff37c7ff7e6f7de01657b41e75fc6aaae9da68e421d04455d27eae->enter($__internal_a63a368a89ff37c7ff7e6f7de01657b41e75fc6aaae9da68e421d04455d27eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecaca71758715a55ffba394197bf6020690a4a60a84781a482669667870c3c75->leave($__internal_ecaca71758715a55ffba394197bf6020690a4a60a84781a482669667870c3c75_prof);

        
        $__internal_a63a368a89ff37c7ff7e6f7de01657b41e75fc6aaae9da68e421d04455d27eae->leave($__internal_a63a368a89ff37c7ff7e6f7de01657b41e75fc6aaae9da68e421d04455d27eae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef89be6d0608726dc6da466267dc0719e1da1f2c9c27477003c285c40286c40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef89be6d0608726dc6da466267dc0719e1da1f2c9c27477003c285c40286c40a->enter($__internal_ef89be6d0608726dc6da466267dc0719e1da1f2c9c27477003c285c40286c40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a3aaaa90996d5f14e9efec4c8aded2a5f8f6ec874b851d9c987e0f4e3ccc92fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3aaaa90996d5f14e9efec4c8aded2a5f8f6ec874b851d9c987e0f4e3ccc92fd->enter($__internal_a3aaaa90996d5f14e9efec4c8aded2a5f8f6ec874b851d9c987e0f4e3ccc92fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3aaaa90996d5f14e9efec4c8aded2a5f8f6ec874b851d9c987e0f4e3ccc92fd->leave($__internal_a3aaaa90996d5f14e9efec4c8aded2a5f8f6ec874b851d9c987e0f4e3ccc92fd_prof);

        
        $__internal_ef89be6d0608726dc6da466267dc0719e1da1f2c9c27477003c285c40286c40a->leave($__internal_ef89be6d0608726dc6da466267dc0719e1da1f2c9c27477003c285c40286c40a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_310272e11573506aa0e59a1d89fcd210b734355f21c84694b831d33f199b52ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310272e11573506aa0e59a1d89fcd210b734355f21c84694b831d33f199b52ea->enter($__internal_310272e11573506aa0e59a1d89fcd210b734355f21c84694b831d33f199b52ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ecb404c2f9c363732f674b1246052ad8ec0dc79738797bcb355d9b3ef18c7a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb404c2f9c363732f674b1246052ad8ec0dc79738797bcb355d9b3ef18c7a07->enter($__internal_ecb404c2f9c363732f674b1246052ad8ec0dc79738797bcb355d9b3ef18c7a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ecb404c2f9c363732f674b1246052ad8ec0dc79738797bcb355d9b3ef18c7a07->leave($__internal_ecb404c2f9c363732f674b1246052ad8ec0dc79738797bcb355d9b3ef18c7a07_prof);

        
        $__internal_310272e11573506aa0e59a1d89fcd210b734355f21c84694b831d33f199b52ea->leave($__internal_310272e11573506aa0e59a1d89fcd210b734355f21c84694b831d33f199b52ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4009d1913152b9bf8fd82f51d5b1ece8f968ca9d0da12487b63bf58a31ec3288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4009d1913152b9bf8fd82f51d5b1ece8f968ca9d0da12487b63bf58a31ec3288->enter($__internal_4009d1913152b9bf8fd82f51d5b1ece8f968ca9d0da12487b63bf58a31ec3288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f49d9b2a4852a3db73f161e96311cdef05340441003ba556111058b9bc4a8f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49d9b2a4852a3db73f161e96311cdef05340441003ba556111058b9bc4a8f6f->enter($__internal_f49d9b2a4852a3db73f161e96311cdef05340441003ba556111058b9bc4a8f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f49d9b2a4852a3db73f161e96311cdef05340441003ba556111058b9bc4a8f6f->leave($__internal_f49d9b2a4852a3db73f161e96311cdef05340441003ba556111058b9bc4a8f6f_prof);

        
        $__internal_4009d1913152b9bf8fd82f51d5b1ece8f968ca9d0da12487b63bf58a31ec3288->leave($__internal_4009d1913152b9bf8fd82f51d5b1ece8f968ca9d0da12487b63bf58a31ec3288_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symfony_tp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
