<?php

/* BiblioBundle:Default:index.html.twig */
class __TwigTemplate_c2f5511297796fd4ded51f23c5b6b3165d63ada98e6a6740f797c029b3a9550d extends Twig_Template
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
        $__internal_b2050f4d68e5bc6b56b75bda5bda30a1b7fe789c6bbb5b5f1eaf954b93ab52b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2050f4d68e5bc6b56b75bda5bda30a1b7fe789c6bbb5b5f1eaf954b93ab52b4->enter($__internal_b2050f4d68e5bc6b56b75bda5bda30a1b7fe789c6bbb5b5f1eaf954b93ab52b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Default:index.html.twig"));

        $__internal_caa8185193f8ed4452df3b12f0f9c903d44c89d1d24828407089df370de9e49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa8185193f8ed4452df3b12f0f9c903d44c89d1d24828407089df370de9e49c->enter($__internal_caa8185193f8ed4452df3b12f0f9c903d44c89d1d24828407089df370de9e49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BiblioBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_b2050f4d68e5bc6b56b75bda5bda30a1b7fe789c6bbb5b5f1eaf954b93ab52b4->leave($__internal_b2050f4d68e5bc6b56b75bda5bda30a1b7fe789c6bbb5b5f1eaf954b93ab52b4_prof);

        
        $__internal_caa8185193f8ed4452df3b12f0f9c903d44c89d1d24828407089df370de9e49c->leave($__internal_caa8185193f8ed4452df3b12f0f9c903d44c89d1d24828407089df370de9e49c_prof);

    }

    public function getTemplateName()
    {
        return "BiblioBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "BiblioBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symfony_tp/src/Devschool/BiblioBundle/Resources/views/Default/index.html.twig");
    }
}
