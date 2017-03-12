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
        $__internal_3b5c828a991e1a1379bcf7d3b17aadda4a5a3c33fda7fdd99fad4667a393bc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5c828a991e1a1379bcf7d3b17aadda4a5a3c33fda7fdd99fad4667a393bc4e->enter($__internal_3b5c828a991e1a1379bcf7d3b17aadda4a5a3c33fda7fdd99fad4667a393bc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2bb4c152ccf66a85b4c035cfb231695be33908a355a9ffd3468c73ba361357d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb4c152ccf66a85b4c035cfb231695be33908a355a9ffd3468c73ba361357d2->enter($__internal_2bb4c152ccf66a85b4c035cfb231695be33908a355a9ffd3468c73ba361357d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b5c828a991e1a1379bcf7d3b17aadda4a5a3c33fda7fdd99fad4667a393bc4e->leave($__internal_3b5c828a991e1a1379bcf7d3b17aadda4a5a3c33fda7fdd99fad4667a393bc4e_prof);

        
        $__internal_2bb4c152ccf66a85b4c035cfb231695be33908a355a9ffd3468c73ba361357d2->leave($__internal_2bb4c152ccf66a85b4c035cfb231695be33908a355a9ffd3468c73ba361357d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f553449f65762d0ce9772c810da49b0776b268c18f3f34eb909fa5e2d31a8078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f553449f65762d0ce9772c810da49b0776b268c18f3f34eb909fa5e2d31a8078->enter($__internal_f553449f65762d0ce9772c810da49b0776b268c18f3f34eb909fa5e2d31a8078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e37dc3cf558c8178571ec2fdec2eb07a9027af4f01fee17bf156ceb5f0742c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37dc3cf558c8178571ec2fdec2eb07a9027af4f01fee17bf156ceb5f0742c87->enter($__internal_e37dc3cf558c8178571ec2fdec2eb07a9027af4f01fee17bf156ceb5f0742c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e37dc3cf558c8178571ec2fdec2eb07a9027af4f01fee17bf156ceb5f0742c87->leave($__internal_e37dc3cf558c8178571ec2fdec2eb07a9027af4f01fee17bf156ceb5f0742c87_prof);

        
        $__internal_f553449f65762d0ce9772c810da49b0776b268c18f3f34eb909fa5e2d31a8078->leave($__internal_f553449f65762d0ce9772c810da49b0776b268c18f3f34eb909fa5e2d31a8078_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7b2e74266e692806f5bb2e6f79d6e1def4a4c4473f895d3ef76e6d5630142d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b2e74266e692806f5bb2e6f79d6e1def4a4c4473f895d3ef76e6d5630142d1->enter($__internal_c7b2e74266e692806f5bb2e6f79d6e1def4a4c4473f895d3ef76e6d5630142d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d74779f476ed73360d88838ae9fc01bc41119c92c6715073a525abd29b3870a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d74779f476ed73360d88838ae9fc01bc41119c92c6715073a525abd29b3870a->enter($__internal_2d74779f476ed73360d88838ae9fc01bc41119c92c6715073a525abd29b3870a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2d74779f476ed73360d88838ae9fc01bc41119c92c6715073a525abd29b3870a->leave($__internal_2d74779f476ed73360d88838ae9fc01bc41119c92c6715073a525abd29b3870a_prof);

        
        $__internal_c7b2e74266e692806f5bb2e6f79d6e1def4a4c4473f895d3ef76e6d5630142d1->leave($__internal_c7b2e74266e692806f5bb2e6f79d6e1def4a4c4473f895d3ef76e6d5630142d1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24662ffae78c794e1466d1f571360047ab61144c05b68331b915becabdeefd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24662ffae78c794e1466d1f571360047ab61144c05b68331b915becabdeefd2f->enter($__internal_24662ffae78c794e1466d1f571360047ab61144c05b68331b915becabdeefd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bead97a9aaceb265984d1b340ced3ee731c5a09acbdd69bcb5f67b0f06670e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bead97a9aaceb265984d1b340ced3ee731c5a09acbdd69bcb5f67b0f06670e35->enter($__internal_bead97a9aaceb265984d1b340ced3ee731c5a09acbdd69bcb5f67b0f06670e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bead97a9aaceb265984d1b340ced3ee731c5a09acbdd69bcb5f67b0f06670e35->leave($__internal_bead97a9aaceb265984d1b340ced3ee731c5a09acbdd69bcb5f67b0f06670e35_prof);

        
        $__internal_24662ffae78c794e1466d1f571360047ab61144c05b68331b915becabdeefd2f->leave($__internal_24662ffae78c794e1466d1f571360047ab61144c05b68331b915becabdeefd2f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/symfony_livres/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
