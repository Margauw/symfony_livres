<?php

/* DevschoolAdminBundle:Livre:list.html.twig */
class __TwigTemplate_5c4b364751a49d400ccd56f1601a191cb5efbd84ab360e05589f67cd0c30d6aa extends Twig_Template
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
        $__internal_1fa2874f0245a89f00de210fb6a5db8101d5cb009f9e2eca609c3d3cdba6eedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa2874f0245a89f00de210fb6a5db8101d5cb009f9e2eca609c3d3cdba6eedd->enter($__internal_1fa2874f0245a89f00de210fb6a5db8101d5cb009f9e2eca609c3d3cdba6eedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Livre:list.html.twig"));

        $__internal_1d8fa1d0212769bc0ec54ef8a69339f1cf067bce0b6466a582ed74a6e2f4a4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8fa1d0212769bc0ec54ef8a69339f1cf067bce0b6466a582ed74a6e2f4a4a5->enter($__internal_1d8fa1d0212769bc0ec54ef8a69339f1cf067bce0b6466a582ed74a6e2f4a4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Livre:list.html.twig"));

        // line 1
        echo "<h1>Liste des livres :</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livres"] ?? $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "titre", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>


<h1> Modification</h1>
<ul>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livres"] ?? $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 12
            echo "        <li>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_livre_modif", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "titre", array()), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_livre_supprimer", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>

        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>

<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_livre_ajout");
        echo "\">Ajouter</a>";
        
        $__internal_1fa2874f0245a89f00de210fb6a5db8101d5cb009f9e2eca609c3d3cdba6eedd->leave($__internal_1fa2874f0245a89f00de210fb6a5db8101d5cb009f9e2eca609c3d3cdba6eedd_prof);

        
        $__internal_1d8fa1d0212769bc0ec54ef8a69339f1cf067bce0b6466a582ed74a6e2f4a4a5->leave($__internal_1d8fa1d0212769bc0ec54ef8a69339f1cf067bce0b6466a582ed74a6e2f4a4a5_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolAdminBundle:Livre:list.html.twig";
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
        return new Twig_Source("<h1>Liste des livres :</h1>
<ul>
    {% for livre in livres %}
        <li>{{ livre.titre }}</li>
    {% endfor %}
</ul>


<h1> Modification</h1>
<ul>
    {% for livre in livres %}
        <li>
            <a href=\"{{ path('admin_livre_modif', {'id': livre.id}) }}\">{{ livre.titre }}</a>
            <a href=\"{{ path('admin_livre_supprimer', {'id': livre.id}) }}\">Supprimer</a>

        </li>
    {% endfor %}
</ul>

<a href=\"{{ path('admin_livre_ajout') }}\">Ajouter</a>", "DevschoolAdminBundle:Livre:list.html.twig", "/Applications/MAMP/htdocs/symfony_tp/src/Devschool/AdminBundle/Resources/views/Livre/list.html.twig");
    }
}
