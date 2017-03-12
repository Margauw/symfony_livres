<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6bef94f59d3a981faa37e38061d5069a252d3357475b69f1254b20cb037e609c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bef94f59d3a981faa37e38061d5069a252d3357475b69f1254b20cb037e609c->enter($__internal_6bef94f59d3a981faa37e38061d5069a252d3357475b69f1254b20cb037e609c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0259569e77ba8435ca758cad8076ecb6ae20ecbdd547b97a08d35de644d80069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0259569e77ba8435ca758cad8076ecb6ae20ecbdd547b97a08d35de644d80069->enter($__internal_0259569e77ba8435ca758cad8076ecb6ae20ecbdd547b97a08d35de644d80069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bef94f59d3a981faa37e38061d5069a252d3357475b69f1254b20cb037e609c->leave($__internal_6bef94f59d3a981faa37e38061d5069a252d3357475b69f1254b20cb037e609c_prof);

        
        $__internal_0259569e77ba8435ca758cad8076ecb6ae20ecbdd547b97a08d35de644d80069->leave($__internal_0259569e77ba8435ca758cad8076ecb6ae20ecbdd547b97a08d35de644d80069_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_269f20113f1c0fb2903780f77700d7ca8d9b20fdb058c9a90a44270ea44121cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269f20113f1c0fb2903780f77700d7ca8d9b20fdb058c9a90a44270ea44121cc->enter($__internal_269f20113f1c0fb2903780f77700d7ca8d9b20fdb058c9a90a44270ea44121cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_931aeccd9d84c9037b90a012787513c428ca577c84bf0b1ba00956a8ee9ec066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931aeccd9d84c9037b90a012787513c428ca577c84bf0b1ba00956a8ee9ec066->enter($__internal_931aeccd9d84c9037b90a012787513c428ca577c84bf0b1ba00956a8ee9ec066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_931aeccd9d84c9037b90a012787513c428ca577c84bf0b1ba00956a8ee9ec066->leave($__internal_931aeccd9d84c9037b90a012787513c428ca577c84bf0b1ba00956a8ee9ec066_prof);

        
        $__internal_269f20113f1c0fb2903780f77700d7ca8d9b20fdb058c9a90a44270ea44121cc->leave($__internal_269f20113f1c0fb2903780f77700d7ca8d9b20fdb058c9a90a44270ea44121cc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad0412be1fd7eb48e1ae53977c47d5a2573ea8490400b7504418dd113d77561a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0412be1fd7eb48e1ae53977c47d5a2573ea8490400b7504418dd113d77561a->enter($__internal_ad0412be1fd7eb48e1ae53977c47d5a2573ea8490400b7504418dd113d77561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_94ec80a5c8e61055d9cbbd41c54d9da16c2a043d24b4ef0f53a70286a14d68d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ec80a5c8e61055d9cbbd41c54d9da16c2a043d24b4ef0f53a70286a14d68d3->enter($__internal_94ec80a5c8e61055d9cbbd41c54d9da16c2a043d24b4ef0f53a70286a14d68d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_94ec80a5c8e61055d9cbbd41c54d9da16c2a043d24b4ef0f53a70286a14d68d3->leave($__internal_94ec80a5c8e61055d9cbbd41c54d9da16c2a043d24b4ef0f53a70286a14d68d3_prof);

        
        $__internal_ad0412be1fd7eb48e1ae53977c47d5a2573ea8490400b7504418dd113d77561a->leave($__internal_ad0412be1fd7eb48e1ae53977c47d5a2573ea8490400b7504418dd113d77561a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cea96230d901ab8dcc367934ff22c7c509a91ce3d2b925e538604b0b16853a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cea96230d901ab8dcc367934ff22c7c509a91ce3d2b925e538604b0b16853a0->enter($__internal_3cea96230d901ab8dcc367934ff22c7c509a91ce3d2b925e538604b0b16853a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b2ccd99dd783e39b1bdd88894bebb2e723ade78b45171c9191af1a332c64d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2ccd99dd783e39b1bdd88894bebb2e723ade78b45171c9191af1a332c64d1c->enter($__internal_5b2ccd99dd783e39b1bdd88894bebb2e723ade78b45171c9191af1a332c64d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5b2ccd99dd783e39b1bdd88894bebb2e723ade78b45171c9191af1a332c64d1c->leave($__internal_5b2ccd99dd783e39b1bdd88894bebb2e723ade78b45171c9191af1a332c64d1c_prof);

        
        $__internal_3cea96230d901ab8dcc367934ff22c7c509a91ce3d2b925e538604b0b16853a0->leave($__internal_3cea96230d901ab8dcc367934ff22c7c509a91ce3d2b925e538604b0b16853a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/symfony_tp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
