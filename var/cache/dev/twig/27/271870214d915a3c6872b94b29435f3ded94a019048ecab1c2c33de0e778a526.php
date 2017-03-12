<?php

/* BiblioBundle:Livre:list.html.twig */
class __TwigTemplate_b2f5bd1611eaebcb1857683ea07ed0c05f7f813db1bdf90b45439ef2a1bc4ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BiblioBundle::layout.html.twig", "BiblioBundle:Livre:list.html.twig", 1);
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
        $__internal_337804ad762de32d98ba1322189fd38ae80ac668da31ceeacbc628450ea90246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337804ad762de32d98ba1322189fd38ae80ac668da31ceeacbc628450ea90246->enter($__internal_337804ad762de32d98ba1322189fd38ae80ac668da31ceeacbc628450ea90246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Livre:list.html.twig"));

        $__internal_aa38b2a03647b3bf8f0fb4bfd7d0516eaea711971ea65490461e92b3b9463cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa38b2a03647b3bf8f0fb4bfd7d0516eaea711971ea65490461e92b3b9463cf9->enter($__internal_aa38b2a03647b3bf8f0fb4bfd7d0516eaea711971ea65490461e92b3b9463cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Livre:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337804ad762de32d98ba1322189fd38ae80ac668da31ceeacbc628450ea90246->leave($__internal_337804ad762de32d98ba1322189fd38ae80ac668da31ceeacbc628450ea90246_prof);

        
        $__internal_aa38b2a03647b3bf8f0fb4bfd7d0516eaea711971ea65490461e92b3b9463cf9->leave($__internal_aa38b2a03647b3bf8f0fb4bfd7d0516eaea711971ea65490461e92b3b9463cf9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5014c5e0cf1ff8587093502843df9e47660feb48b2d753c92566315d81d7582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5014c5e0cf1ff8587093502843df9e47660feb48b2d753c92566315d81d7582->enter($__internal_d5014c5e0cf1ff8587093502843df9e47660feb48b2d753c92566315d81d7582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a317dd6ff6929b3d8ba85fdd5922fee9b214a42093a2590f360b7c36c9530aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a317dd6ff6929b3d8ba85fdd5922fee9b214a42093a2590f360b7c36c9530aac->enter($__internal_a317dd6ff6929b3d8ba85fdd5922fee9b214a42093a2590f360b7c36c9530aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<h1>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["titre"] ?? $this->getContext($context, "titre"))), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["livres"] ?? $this->getContext($context, "livres"))), "html", null, true);
        echo ")</h1> ";
        
        $__internal_a317dd6ff6929b3d8ba85fdd5922fee9b214a42093a2590f360b7c36c9530aac->leave($__internal_a317dd6ff6929b3d8ba85fdd5922fee9b214a42093a2590f360b7c36c9530aac_prof);

        
        $__internal_d5014c5e0cf1ff8587093502843df9e47660feb48b2d753c92566315d81d7582->leave($__internal_d5014c5e0cf1ff8587093502843df9e47660feb48b2d753c92566315d81d7582_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c107f6f80b986414c948a4b478b187031a1ab136baf543e23e46a05e263ca72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c107f6f80b986414c948a4b478b187031a1ab136baf543e23e46a05e263ca72->enter($__internal_5c107f6f80b986414c948a4b478b187031a1ab136baf543e23e46a05e263ca72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e24b1126c1a2c801e1f26b4fce48eedc06daa4f535a1fe06241df383f64bb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e24b1126c1a2c801e1f26b4fce48eedc06daa4f535a1fe06241df383f64bb79->enter($__internal_0e24b1126c1a2c801e1f26b4fce48eedc06daa4f535a1fe06241df383f64bb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <ul class=\"liste\">

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livres"] ?? $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 9
            echo "            <li>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_livre", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "titre", array()), "html", null, true);
            echo "</a></h2>
                ";
            // line 11
            if (($this->getAttribute($context["livre"], "auteur", array()) == "J. K. Rowling")) {
                // line 12
                echo "                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "auteur", array()), "html", null, true);
                echo "</strong>
                ";
            } else {
                // line 14
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "auteur", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 16
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
";
        
        $__internal_0e24b1126c1a2c801e1f26b4fce48eedc06daa4f535a1fe06241df383f64bb79->leave($__internal_0e24b1126c1a2c801e1f26b4fce48eedc06daa4f535a1fe06241df383f64bb79_prof);

        
        $__internal_5c107f6f80b986414c948a4b478b187031a1ab136baf543e23e46a05e263ca72->leave($__internal_5c107f6f80b986414c948a4b478b187031a1ab136baf543e23e46a05e263ca72_prof);

    }

    public function getTemplateName()
    {
        return "BiblioBundle:Livre:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 18,  103 => 16,  97 => 14,  91 => 12,  89 => 11,  83 => 10,  80 => 9,  76 => 8,  72 => 6,  63 => 5,  41 => 3,  11 => 1,);
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

{%  block title %}<h1>{{ titre|upper }} ({{ livres|length }})</h1> {%  endblock %}

{%  block body %}
    <ul class=\"liste\">

        {% for livre in livres %}
            <li>
                <h2><a href=\"{{ path('page_livre', {'id': livre.id}) }}\">{{ livre.titre }}</a></h2>
                {% if livre.auteur == \"J. K. Rowling\" %}
                <strong>{{ livre.auteur }}</strong>
                {% else %}
                <span>{{ livre.auteur }}</span>
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{%  endblock %}", "BiblioBundle:Livre:list.html.twig", "/Applications/MAMP/htdocs/symfony_tp/src/Devschool/BiblioBundle/Resources/views/Livre/list.html.twig");
    }
}
