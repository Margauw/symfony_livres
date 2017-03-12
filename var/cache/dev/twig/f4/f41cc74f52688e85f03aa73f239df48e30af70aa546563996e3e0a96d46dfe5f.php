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
        $__internal_bc66b88ef335974653a264269c5395a20f7bf02ae79ad7b8f3d2bdb3bf5606e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc66b88ef335974653a264269c5395a20f7bf02ae79ad7b8f3d2bdb3bf5606e7->enter($__internal_bc66b88ef335974653a264269c5395a20f7bf02ae79ad7b8f3d2bdb3bf5606e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_eb78d01c89ac5bfdf99274e737b50632d9579865c1851c69b834bfc64ada2dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb78d01c89ac5bfdf99274e737b50632d9579865c1851c69b834bfc64ada2dee->enter($__internal_eb78d01c89ac5bfdf99274e737b50632d9579865c1851c69b834bfc64ada2dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc66b88ef335974653a264269c5395a20f7bf02ae79ad7b8f3d2bdb3bf5606e7->leave($__internal_bc66b88ef335974653a264269c5395a20f7bf02ae79ad7b8f3d2bdb3bf5606e7_prof);

        
        $__internal_eb78d01c89ac5bfdf99274e737b50632d9579865c1851c69b834bfc64ada2dee->leave($__internal_eb78d01c89ac5bfdf99274e737b50632d9579865c1851c69b834bfc64ada2dee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c19c310f2b78d4768f868eb3e49bbfd50923b09e869df1fe6d5405ab1cedc5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19c310f2b78d4768f868eb3e49bbfd50923b09e869df1fe6d5405ab1cedc5d0->enter($__internal_c19c310f2b78d4768f868eb3e49bbfd50923b09e869df1fe6d5405ab1cedc5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_09127b6de30bf462b4360995597ffb8def8b3eb0bea4aee280794fc4994274d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09127b6de30bf462b4360995597ffb8def8b3eb0bea4aee280794fc4994274d0->enter($__internal_09127b6de30bf462b4360995597ffb8def8b3eb0bea4aee280794fc4994274d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_09127b6de30bf462b4360995597ffb8def8b3eb0bea4aee280794fc4994274d0->leave($__internal_09127b6de30bf462b4360995597ffb8def8b3eb0bea4aee280794fc4994274d0_prof);

        
        $__internal_c19c310f2b78d4768f868eb3e49bbfd50923b09e869df1fe6d5405ab1cedc5d0->leave($__internal_c19c310f2b78d4768f868eb3e49bbfd50923b09e869df1fe6d5405ab1cedc5d0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a7e83e2b6a7ee94a6d7cc44dbe1fc8f447c6535a27d5095ab020e8350eb3a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7e83e2b6a7ee94a6d7cc44dbe1fc8f447c6535a27d5095ab020e8350eb3a0f->enter($__internal_5a7e83e2b6a7ee94a6d7cc44dbe1fc8f447c6535a27d5095ab020e8350eb3a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bca97510a62f2ad9ef3b5c62444a66935e6f38e6f9b03bfaa3ed1bb6e21b5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bca97510a62f2ad9ef3b5c62444a66935e6f38e6f9b03bfaa3ed1bb6e21b5e0->enter($__internal_6bca97510a62f2ad9ef3b5c62444a66935e6f38e6f9b03bfaa3ed1bb6e21b5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6bca97510a62f2ad9ef3b5c62444a66935e6f38e6f9b03bfaa3ed1bb6e21b5e0->leave($__internal_6bca97510a62f2ad9ef3b5c62444a66935e6f38e6f9b03bfaa3ed1bb6e21b5e0_prof);

        
        $__internal_5a7e83e2b6a7ee94a6d7cc44dbe1fc8f447c6535a27d5095ab020e8350eb3a0f->leave($__internal_5a7e83e2b6a7ee94a6d7cc44dbe1fc8f447c6535a27d5095ab020e8350eb3a0f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_367830b7d729a8e7b570dba36000ac7804f0bb43bc22bab08cbf835704a37753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367830b7d729a8e7b570dba36000ac7804f0bb43bc22bab08cbf835704a37753->enter($__internal_367830b7d729a8e7b570dba36000ac7804f0bb43bc22bab08cbf835704a37753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_597c2e4c11ee59c900fe175fac4e51be07d2d76b00808bb6f87b74d6e93ec37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597c2e4c11ee59c900fe175fac4e51be07d2d76b00808bb6f87b74d6e93ec37b->enter($__internal_597c2e4c11ee59c900fe175fac4e51be07d2d76b00808bb6f87b74d6e93ec37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_597c2e4c11ee59c900fe175fac4e51be07d2d76b00808bb6f87b74d6e93ec37b->leave($__internal_597c2e4c11ee59c900fe175fac4e51be07d2d76b00808bb6f87b74d6e93ec37b_prof);

        
        $__internal_367830b7d729a8e7b570dba36000ac7804f0bb43bc22bab08cbf835704a37753->leave($__internal_367830b7d729a8e7b570dba36000ac7804f0bb43bc22bab08cbf835704a37753_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/symfony_livres/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
