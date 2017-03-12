<?php

/* BiblioBundle::layout.html.twig */
class __TwigTemplate_7ba9ca879e177c9d29a010906d1e29ec0e66a4f5a9e591361a1039eac5b8377f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1000aa7ffb020f28778516d313f442dbc88e8375e8701ffb60c0bb5309686b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1000aa7ffb020f28778516d313f442dbc88e8375e8701ffb60c0bb5309686b5b->enter($__internal_1000aa7ffb020f28778516d313f442dbc88e8375e8701ffb60c0bb5309686b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle::layout.html.twig"));

        $__internal_09702b9473dd1bc5f2577f89248bed5864b6ddca491f6cbb14547f5f5b1590f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09702b9473dd1bc5f2577f89248bed5864b6ddca491f6cbb14547f5f5b1590f2->enter($__internal_09702b9473dd1bc5f2577f89248bed5864b6ddca491f6cbb14547f5f5b1590f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
</head>
<body>
<ul class=\"menu\">
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_livres");
        echo "\">Livres</a></li>
    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\">Admin</a></li>

    ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Se Déconnecter</a></li>
     ";
        } else {
            // line 16
            echo "         <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
            echo "\">Login</a></li>
    ";
        }
        // line 18
        echo "</ul>

<div id=\"content\">
    ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "</div>
</body>
</html>";
        
        $__internal_1000aa7ffb020f28778516d313f442dbc88e8375e8701ffb60c0bb5309686b5b->leave($__internal_1000aa7ffb020f28778516d313f442dbc88e8375e8701ffb60c0bb5309686b5b_prof);

        
        $__internal_09702b9473dd1bc5f2577f89248bed5864b6ddca491f6cbb14547f5f5b1590f2->leave($__internal_09702b9473dd1bc5f2577f89248bed5864b6ddca491f6cbb14547f5f5b1590f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_122b29160046e447201a364c8d348da2a13f88ad41151b8684b048a61ffaefd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122b29160046e447201a364c8d348da2a13f88ad41151b8684b048a61ffaefd3->enter($__internal_122b29160046e447201a364c8d348da2a13f88ad41151b8684b048a61ffaefd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb657346b370b3301c2f409bb41e369d004579c87af04ab5af225900c2ef3721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb657346b370b3301c2f409bb41e369d004579c87af04ab5af225900c2ef3721->enter($__internal_fb657346b370b3301c2f409bb41e369d004579c87af04ab5af225900c2ef3721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Devschool Bibliothèque";
        
        $__internal_fb657346b370b3301c2f409bb41e369d004579c87af04ab5af225900c2ef3721->leave($__internal_fb657346b370b3301c2f409bb41e369d004579c87af04ab5af225900c2ef3721_prof);

        
        $__internal_122b29160046e447201a364c8d348da2a13f88ad41151b8684b048a61ffaefd3->leave($__internal_122b29160046e447201a364c8d348da2a13f88ad41151b8684b048a61ffaefd3_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d4c4b584a42962d75519fb5641871da2e8d38b4ab4e4261deb1b316c47c462b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4c4b584a42962d75519fb5641871da2e8d38b4ab4e4261deb1b316c47c462b->enter($__internal_5d4c4b584a42962d75519fb5641871da2e8d38b4ab4e4261deb1b316c47c462b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a81a0abb1fa14b175686ca2950c8a413c54d38dd1fe7152d9c97cd581c76c26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81a0abb1fa14b175686ca2950c8a413c54d38dd1fe7152d9c97cd581c76c26f->enter($__internal_a81a0abb1fa14b175686ca2950c8a413c54d38dd1fe7152d9c97cd581c76c26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a81a0abb1fa14b175686ca2950c8a413c54d38dd1fe7152d9c97cd581c76c26f->leave($__internal_a81a0abb1fa14b175686ca2950c8a413c54d38dd1fe7152d9c97cd581c76c26f_prof);

        
        $__internal_5d4c4b584a42962d75519fb5641871da2e8d38b4ab4e4261deb1b316c47c462b->leave($__internal_5d4c4b584a42962d75519fb5641871da2e8d38b4ab4e4261deb1b316c47c462b_prof);

    }

    public function getTemplateName()
    {
        return "BiblioBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 21,  86 => 5,  74 => 22,  72 => 21,  67 => 18,  61 => 16,  55 => 14,  53 => 13,  48 => 11,  44 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Devschool Bibliothèque{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
</head>
<body>
<ul class=\"menu\">
    <li><a href=\"{{ path('page_livres') }}\">Livres</a></li>
    <li><a href=\"{{ path('admin') }}\">Admin</a></li>

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <li><a href=\"{{ path('logout') }}\">Se Déconnecter</a></li>
     {% else %}
         <li><a href=\"{{ path('login_check') }}\">Login</a></li>
    {% endif %}
</ul>

<div id=\"content\">
    {% block body %}{% endblock %}
</div>
</body>
</html>", "BiblioBundle::layout.html.twig", "/Applications/MAMP/htdocs/symfony_tp/src/Devschool/BiblioBundle/Resources/views/layout.html.twig");
    }
}
