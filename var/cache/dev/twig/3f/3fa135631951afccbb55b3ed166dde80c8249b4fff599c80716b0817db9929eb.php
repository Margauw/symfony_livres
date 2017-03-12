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
        $__internal_f7463698fe0a4c37790239e860185c9def892446c554f58443e0bc09db03d6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7463698fe0a4c37790239e860185c9def892446c554f58443e0bc09db03d6db->enter($__internal_f7463698fe0a4c37790239e860185c9def892446c554f58443e0bc09db03d6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle::layout.html.twig"));

        $__internal_a8dc85cb8909d743e7747387105a4c89de1eb75ecbe4cf8bd852952e51a4347f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dc85cb8909d743e7747387105a4c89de1eb75ecbe4cf8bd852952e51a4347f->enter($__internal_a8dc85cb8909d743e7747387105a4c89de1eb75ecbe4cf8bd852952e51a4347f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle::layout.html.twig"));

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
        
        $__internal_f7463698fe0a4c37790239e860185c9def892446c554f58443e0bc09db03d6db->leave($__internal_f7463698fe0a4c37790239e860185c9def892446c554f58443e0bc09db03d6db_prof);

        
        $__internal_a8dc85cb8909d743e7747387105a4c89de1eb75ecbe4cf8bd852952e51a4347f->leave($__internal_a8dc85cb8909d743e7747387105a4c89de1eb75ecbe4cf8bd852952e51a4347f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8da36015856197073017bd6c23934e75ae810cd8ce451097773a1030d21e1f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da36015856197073017bd6c23934e75ae810cd8ce451097773a1030d21e1f8b->enter($__internal_8da36015856197073017bd6c23934e75ae810cd8ce451097773a1030d21e1f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c6863d625c0ab3e4227203d2c36a2644b4e02d37aa6aacdc38cddc46947086a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6863d625c0ab3e4227203d2c36a2644b4e02d37aa6aacdc38cddc46947086a->enter($__internal_6c6863d625c0ab3e4227203d2c36a2644b4e02d37aa6aacdc38cddc46947086a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Devschool Bibliothèque";
        
        $__internal_6c6863d625c0ab3e4227203d2c36a2644b4e02d37aa6aacdc38cddc46947086a->leave($__internal_6c6863d625c0ab3e4227203d2c36a2644b4e02d37aa6aacdc38cddc46947086a_prof);

        
        $__internal_8da36015856197073017bd6c23934e75ae810cd8ce451097773a1030d21e1f8b->leave($__internal_8da36015856197073017bd6c23934e75ae810cd8ce451097773a1030d21e1f8b_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f177b613ec4f32d61808e016e1b5204c0eb58721e8235451e3c32edaea5b839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f177b613ec4f32d61808e016e1b5204c0eb58721e8235451e3c32edaea5b839->enter($__internal_5f177b613ec4f32d61808e016e1b5204c0eb58721e8235451e3c32edaea5b839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68e021eed43c4a6cf911b3bad7843abd96a17689e10e438da943f0e74a388aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e021eed43c4a6cf911b3bad7843abd96a17689e10e438da943f0e74a388aa9->enter($__internal_68e021eed43c4a6cf911b3bad7843abd96a17689e10e438da943f0e74a388aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68e021eed43c4a6cf911b3bad7843abd96a17689e10e438da943f0e74a388aa9->leave($__internal_68e021eed43c4a6cf911b3bad7843abd96a17689e10e438da943f0e74a388aa9_prof);

        
        $__internal_5f177b613ec4f32d61808e016e1b5204c0eb58721e8235451e3c32edaea5b839->leave($__internal_5f177b613ec4f32d61808e016e1b5204c0eb58721e8235451e3c32edaea5b839_prof);

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
</html>", "BiblioBundle::layout.html.twig", "/Applications/MAMP/htdocs/symfony_livres/src/Devschool/BiblioBundle/Resources/views/layout.html.twig");
    }
}
