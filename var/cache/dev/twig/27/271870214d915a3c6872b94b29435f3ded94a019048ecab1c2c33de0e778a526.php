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
        $__internal_cfc8e45a0c7b309047a596cecf674cdbc64cf664a334baf0a361758d743c4d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc8e45a0c7b309047a596cecf674cdbc64cf664a334baf0a361758d743c4d95->enter($__internal_cfc8e45a0c7b309047a596cecf674cdbc64cf664a334baf0a361758d743c4d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Livre:list.html.twig"));

        $__internal_ae9ec66dd6c19db4a1306a163c182da8048a7aef6e2b8b57a7e27fe4ea99f0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9ec66dd6c19db4a1306a163c182da8048a7aef6e2b8b57a7e27fe4ea99f0be->enter($__internal_ae9ec66dd6c19db4a1306a163c182da8048a7aef6e2b8b57a7e27fe4ea99f0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Livre:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc8e45a0c7b309047a596cecf674cdbc64cf664a334baf0a361758d743c4d95->leave($__internal_cfc8e45a0c7b309047a596cecf674cdbc64cf664a334baf0a361758d743c4d95_prof);

        
        $__internal_ae9ec66dd6c19db4a1306a163c182da8048a7aef6e2b8b57a7e27fe4ea99f0be->leave($__internal_ae9ec66dd6c19db4a1306a163c182da8048a7aef6e2b8b57a7e27fe4ea99f0be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_007924e5e1e23f50b78c2f7dcc43bbdb02ccd00642fe9e92bc9051e94827c77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007924e5e1e23f50b78c2f7dcc43bbdb02ccd00642fe9e92bc9051e94827c77a->enter($__internal_007924e5e1e23f50b78c2f7dcc43bbdb02ccd00642fe9e92bc9051e94827c77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_281ff725382dd6605e1e0262129e43368a62c33432712e3d95433bcabef54939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281ff725382dd6605e1e0262129e43368a62c33432712e3d95433bcabef54939->enter($__internal_281ff725382dd6605e1e0262129e43368a62c33432712e3d95433bcabef54939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<h1>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["titre"] ?? $this->getContext($context, "titre"))), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["livres"] ?? $this->getContext($context, "livres"))), "html", null, true);
        echo ")</h1> ";
        
        $__internal_281ff725382dd6605e1e0262129e43368a62c33432712e3d95433bcabef54939->leave($__internal_281ff725382dd6605e1e0262129e43368a62c33432712e3d95433bcabef54939_prof);

        
        $__internal_007924e5e1e23f50b78c2f7dcc43bbdb02ccd00642fe9e92bc9051e94827c77a->leave($__internal_007924e5e1e23f50b78c2f7dcc43bbdb02ccd00642fe9e92bc9051e94827c77a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_961d93022d22c67dc761e0849533b6d32c9a5b31eea867cca0d90d466f0aaadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961d93022d22c67dc761e0849533b6d32c9a5b31eea867cca0d90d466f0aaadb->enter($__internal_961d93022d22c67dc761e0849533b6d32c9a5b31eea867cca0d90d466f0aaadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d10987ac0cfab127508116830eba45fee83e23157977114498a9f9125124b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d10987ac0cfab127508116830eba45fee83e23157977114498a9f9125124b5a->enter($__internal_4d10987ac0cfab127508116830eba45fee83e23157977114498a9f9125124b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d10987ac0cfab127508116830eba45fee83e23157977114498a9f9125124b5a->leave($__internal_4d10987ac0cfab127508116830eba45fee83e23157977114498a9f9125124b5a_prof);

        
        $__internal_961d93022d22c67dc761e0849533b6d32c9a5b31eea867cca0d90d466f0aaadb->leave($__internal_961d93022d22c67dc761e0849533b6d32c9a5b31eea867cca0d90d466f0aaadb_prof);

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
{%  endblock %}", "BiblioBundle:Livre:list.html.twig", "/Applications/MAMP/htdocs/symfony_livres/src/Devschool/BiblioBundle/Resources/views/Livre/list.html.twig");
    }
}
