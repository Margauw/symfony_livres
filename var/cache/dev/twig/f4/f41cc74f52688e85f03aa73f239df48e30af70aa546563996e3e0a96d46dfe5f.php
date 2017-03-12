<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a36f511c65d1b4d833c2b1129dc05bbd03a6e40d5bca3551ed145535538e5a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36f511c65d1b4d833c2b1129dc05bbd03a6e40d5bca3551ed145535538e5a73->enter($__internal_a36f511c65d1b4d833c2b1129dc05bbd03a6e40d5bca3551ed145535538e5a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_aca3e646b2bdec3ad4935ca834c7490ff3a0ffd5f13ee035d55ef3a9799348ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca3e646b2bdec3ad4935ca834c7490ff3a0ffd5f13ee035d55ef3a9799348ea->enter($__internal_aca3e646b2bdec3ad4935ca834c7490ff3a0ffd5f13ee035d55ef3a9799348ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a36f511c65d1b4d833c2b1129dc05bbd03a6e40d5bca3551ed145535538e5a73->leave($__internal_a36f511c65d1b4d833c2b1129dc05bbd03a6e40d5bca3551ed145535538e5a73_prof);

        
        $__internal_aca3e646b2bdec3ad4935ca834c7490ff3a0ffd5f13ee035d55ef3a9799348ea->leave($__internal_aca3e646b2bdec3ad4935ca834c7490ff3a0ffd5f13ee035d55ef3a9799348ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8dd4d1c87d04781e04fce193731cfe912ddb77194a944c6d3951fe70d7930b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd4d1c87d04781e04fce193731cfe912ddb77194a944c6d3951fe70d7930b6c->enter($__internal_8dd4d1c87d04781e04fce193731cfe912ddb77194a944c6d3951fe70d7930b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a2b079d0f585fa8206f505fa5b0097b70da90e8bb34b1b7ebbaecabf1fb6aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2b079d0f585fa8206f505fa5b0097b70da90e8bb34b1b7ebbaecabf1fb6aa8->enter($__internal_6a2b079d0f585fa8206f505fa5b0097b70da90e8bb34b1b7ebbaecabf1fb6aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6a2b079d0f585fa8206f505fa5b0097b70da90e8bb34b1b7ebbaecabf1fb6aa8->leave($__internal_6a2b079d0f585fa8206f505fa5b0097b70da90e8bb34b1b7ebbaecabf1fb6aa8_prof);

        
        $__internal_8dd4d1c87d04781e04fce193731cfe912ddb77194a944c6d3951fe70d7930b6c->leave($__internal_8dd4d1c87d04781e04fce193731cfe912ddb77194a944c6d3951fe70d7930b6c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_94bd2c2cce8aeb5da4f1f118a3f47b552d64d82a6f4d944a1efc837e2f33b86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bd2c2cce8aeb5da4f1f118a3f47b552d64d82a6f4d944a1efc837e2f33b86e->enter($__internal_94bd2c2cce8aeb5da4f1f118a3f47b552d64d82a6f4d944a1efc837e2f33b86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78ffaa6d55711d6b57d12517370efb360395a3c4031d6a85cd51280fd0ed3587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ffaa6d55711d6b57d12517370efb360395a3c4031d6a85cd51280fd0ed3587->enter($__internal_78ffaa6d55711d6b57d12517370efb360395a3c4031d6a85cd51280fd0ed3587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78ffaa6d55711d6b57d12517370efb360395a3c4031d6a85cd51280fd0ed3587->leave($__internal_78ffaa6d55711d6b57d12517370efb360395a3c4031d6a85cd51280fd0ed3587_prof);

        
        $__internal_94bd2c2cce8aeb5da4f1f118a3f47b552d64d82a6f4d944a1efc837e2f33b86e->leave($__internal_94bd2c2cce8aeb5da4f1f118a3f47b552d64d82a6f4d944a1efc837e2f33b86e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e3ca1c576d6d9e86476c763c56d4216662c67c06788adfc76b63f5c62c0e96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3ca1c576d6d9e86476c763c56d4216662c67c06788adfc76b63f5c62c0e96c->enter($__internal_2e3ca1c576d6d9e86476c763c56d4216662c67c06788adfc76b63f5c62c0e96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c227aae8f2d38f6aaa049a78f45272193f698933a0333cd94b0ef9f7efd3fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c227aae8f2d38f6aaa049a78f45272193f698933a0333cd94b0ef9f7efd3fcd->enter($__internal_9c227aae8f2d38f6aaa049a78f45272193f698933a0333cd94b0ef9f7efd3fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9c227aae8f2d38f6aaa049a78f45272193f698933a0333cd94b0ef9f7efd3fcd->leave($__internal_9c227aae8f2d38f6aaa049a78f45272193f698933a0333cd94b0ef9f7efd3fcd_prof);

        
        $__internal_2e3ca1c576d6d9e86476c763c56d4216662c67c06788adfc76b63f5c62c0e96c->leave($__internal_2e3ca1c576d6d9e86476c763c56d4216662c67c06788adfc76b63f5c62c0e96c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/symfony_tp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
