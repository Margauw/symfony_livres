<?php

/* DevschoolAdminBundle:Genre:form.html.twig */
class __TwigTemplate_6eab32a752b46f7c34c64b674aa038b00e19e7cc79b5487ad1543118009106d7 extends Twig_Template
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
        $__internal_98df560236d1ab18f3d44b31d28f49d93a6a90848afabe326f00b15cd8948ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98df560236d1ab18f3d44b31d28f49d93a6a90848afabe326f00b15cd8948ca6->enter($__internal_98df560236d1ab18f3d44b31d28f49d93a6a90848afabe326f00b15cd8948ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Genre:form.html.twig"));

        $__internal_19d8eaa0bacd9f817b9a8323d18033d0350c22d0c14980fe19c3f78d883b788a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d8eaa0bacd9f817b9a8323d18033d0350c22d0c14980fe19c3f78d883b788a->enter($__internal_19d8eaa0bacd9f817b9a8323d18033d0350c22d0c14980fe19c3f78d883b788a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Genre:form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_98df560236d1ab18f3d44b31d28f49d93a6a90848afabe326f00b15cd8948ca6->leave($__internal_98df560236d1ab18f3d44b31d28f49d93a6a90848afabe326f00b15cd8948ca6_prof);

        
        $__internal_19d8eaa0bacd9f817b9a8323d18033d0350c22d0c14980fe19c3f78d883b788a->leave($__internal_19d8eaa0bacd9f817b9a8323d18033d0350c22d0c14980fe19c3f78d883b788a_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolAdminBundle:Genre:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}", "DevschoolAdminBundle:Genre:form.html.twig", "/Applications/MAMP/htdocs/symfony_tp/src/Devschool/AdminBundle/Resources/views/Genre/form.html.twig");
    }
}
