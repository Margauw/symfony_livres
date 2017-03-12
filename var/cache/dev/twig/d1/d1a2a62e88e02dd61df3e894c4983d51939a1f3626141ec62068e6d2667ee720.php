<?php

/* DevschoolAdminBundle:Genre:list.html.twig */
class __TwigTemplate_d9dd4927b9e5ececc30081aba8ea13cbeb0c6cfc3295d7f77a42202d9874dc36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec868a367c3cae0444341e0e774212150292234fd0aa4e2d537cd94afab8bc23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec868a367c3cae0444341e0e774212150292234fd0aa4e2d537cd94afab8bc23->enter($__internal_ec868a367c3cae0444341e0e774212150292234fd0aa4e2d537cd94afab8bc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Genre:list.html.twig"));

        $__internal_11ffe41f673865a0f5c71991b5704c8f3a1c5cfacfe16d44e25564197fbbb45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ffe41f673865a0f5c71991b5704c8f3a1c5cfacfe16d44e25564197fbbb45b->enter($__internal_11ffe41f673865a0f5c71991b5704c8f3a1c5cfacfe16d44e25564197fbbb45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Genre:list.html.twig"));

        // line 1
        echo "<h1>Liste des genres :</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "nom", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>


    <h1> Modification</h1>
    <ul>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 12
            echo "        <li>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_modif", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "nom", array()), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_supprimer", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>

        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>

<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_ajout");
        echo "\">Ajouter</a>";
        
        $__internal_ec868a367c3cae0444341e0e774212150292234fd0aa4e2d537cd94afab8bc23->leave($__internal_ec868a367c3cae0444341e0e774212150292234fd0aa4e2d537cd94afab8bc23_prof);

        
        $__internal_11ffe41f673865a0f5c71991b5704c8f3a1c5cfacfe16d44e25564197fbbb45b->leave($__internal_11ffe41f673865a0f5c71991b5704c8f3a1c5cfacfe16d44e25564197fbbb45b_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolAdminBundle:Genre:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  72 => 18,  62 => 14,  56 => 13,  53 => 12,  49 => 11,  42 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Liste des genres :</h1>
<ul>
    {% for genre in genres %}
        <li>{{ genre.nom }}</li>
    {% endfor %}
</ul>


    <h1> Modification</h1>
    <ul>
    {% for genre in genres %}
        <li>
            <a href=\"{{ path('admin_genre_modif', {'id': genre.id}) }}\">{{ genre.nom }}</a>
            <a href=\"{{ path('admin_genre_supprimer', {'id': genre.id}) }}\">Supprimer</a>

        </li>
    {% endfor %}
    </ul>

<a href=\"{{ path('admin_genre_ajout') }}\">Ajouter</a>", "DevschoolAdminBundle:Genre:list.html.twig", "/Applications/MAMP/htdocs/symfony_tp/src/Devschool/AdminBundle/Resources/views/Genre/list.html.twig");
    }
}
