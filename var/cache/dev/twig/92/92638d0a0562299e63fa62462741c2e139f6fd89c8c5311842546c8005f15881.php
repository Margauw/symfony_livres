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
        $__internal_72d5276e861f0861ec5b216b8e75542f6bcfbe693762c2ae035b64e95844b23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d5276e861f0861ec5b216b8e75542f6bcfbe693762c2ae035b64e95844b23b->enter($__internal_72d5276e861f0861ec5b216b8e75542f6bcfbe693762c2ae035b64e95844b23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Livre:show.html.twig"));

        $__internal_a13df82d83bb4d21459da37681529fda4e7b0b5f9beb37b179a80eba5f4f9a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13df82d83bb4d21459da37681529fda4e7b0b5f9beb37b179a80eba5f4f9a80->enter($__internal_a13df82d83bb4d21459da37681529fda4e7b0b5f9beb37b179a80eba5f4f9a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Livre:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d5276e861f0861ec5b216b8e75542f6bcfbe693762c2ae035b64e95844b23b->leave($__internal_72d5276e861f0861ec5b216b8e75542f6bcfbe693762c2ae035b64e95844b23b_prof);

        
        $__internal_a13df82d83bb4d21459da37681529fda4e7b0b5f9beb37b179a80eba5f4f9a80->leave($__internal_a13df82d83bb4d21459da37681529fda4e7b0b5f9beb37b179a80eba5f4f9a80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2152086187f4f9a090af00681c7e52dae2509606a1b4e9d00baa26bd57a9a1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2152086187f4f9a090af00681c7e52dae2509606a1b4e9d00baa26bd57a9a1b3->enter($__internal_2152086187f4f9a090af00681c7e52dae2509606a1b4e9d00baa26bd57a9a1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68773bdb89dd6862d4d53d5167fc20ff4984626f850ba9cbfdce8931ccd33108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68773bdb89dd6862d4d53d5167fc20ff4984626f850ba9cbfdce8931ccd33108->enter($__internal_68773bdb89dd6862d4d53d5167fc20ff4984626f850ba9cbfdce8931ccd33108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<h1> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["livre"] ?? $this->getContext($context, "livre")), "titre", array()), "html", null, true);
        echo "</h1>";
        
        $__internal_68773bdb89dd6862d4d53d5167fc20ff4984626f850ba9cbfdce8931ccd33108->leave($__internal_68773bdb89dd6862d4d53d5167fc20ff4984626f850ba9cbfdce8931ccd33108_prof);

        
        $__internal_2152086187f4f9a090af00681c7e52dae2509606a1b4e9d00baa26bd57a9a1b3->leave($__internal_2152086187f4f9a090af00681c7e52dae2509606a1b4e9d00baa26bd57a9a1b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9002819dbef04825ec59a419c412e44046f49139ec13ede30c0f87ee0bd6b170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9002819dbef04825ec59a419c412e44046f49139ec13ede30c0f87ee0bd6b170->enter($__internal_9002819dbef04825ec59a419c412e44046f49139ec13ede30c0f87ee0bd6b170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a86353ffbf74d61c4077828cb764b6906039eb7191bab1de22af85e5f23ba927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86353ffbf74d61c4077828cb764b6906039eb7191bab1de22af85e5f23ba927->enter($__internal_a86353ffbf74d61c4077828cb764b6906039eb7191bab1de22af85e5f23ba927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a86353ffbf74d61c4077828cb764b6906039eb7191bab1de22af85e5f23ba927->leave($__internal_a86353ffbf74d61c4077828cb764b6906039eb7191bab1de22af85e5f23ba927_prof);

        
        $__internal_9002819dbef04825ec59a419c412e44046f49139ec13ede30c0f87ee0bd6b170->leave($__internal_9002819dbef04825ec59a419c412e44046f49139ec13ede30c0f87ee0bd6b170_prof);

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
{% endblock %}", "BiblioBundle:Livre:show.html.twig", "/Applications/MAMP/htdocs/symfony_livres/src/Devschool/BiblioBundle/Resources/views/Livre/show.html.twig");
    }
}
