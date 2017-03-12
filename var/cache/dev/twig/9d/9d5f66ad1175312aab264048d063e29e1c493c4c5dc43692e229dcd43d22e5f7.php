<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f96348cf21af204e4e3c698ff3cb1fefaf87c28b00d1d758c06bcdc3fa9f19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f96348cf21af204e4e3c698ff3cb1fefaf87c28b00d1d758c06bcdc3fa9f19d->enter($__internal_4f96348cf21af204e4e3c698ff3cb1fefaf87c28b00d1d758c06bcdc3fa9f19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c2ed5e72a07f28c8c371e4d7dd55a4288583dbb44272e9eaff77f2300624903c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ed5e72a07f28c8c371e4d7dd55a4288583dbb44272e9eaff77f2300624903c->enter($__internal_c2ed5e72a07f28c8c371e4d7dd55a4288583dbb44272e9eaff77f2300624903c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4f96348cf21af204e4e3c698ff3cb1fefaf87c28b00d1d758c06bcdc3fa9f19d->leave($__internal_4f96348cf21af204e4e3c698ff3cb1fefaf87c28b00d1d758c06bcdc3fa9f19d_prof);

        
        $__internal_c2ed5e72a07f28c8c371e4d7dd55a4288583dbb44272e9eaff77f2300624903c->leave($__internal_c2ed5e72a07f28c8c371e4d7dd55a4288583dbb44272e9eaff77f2300624903c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81da18023da957e3247b3c6fa1388fd6af77064b3ee98be0ca6db881308c6e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81da18023da957e3247b3c6fa1388fd6af77064b3ee98be0ca6db881308c6e38->enter($__internal_81da18023da957e3247b3c6fa1388fd6af77064b3ee98be0ca6db881308c6e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_223a9312d9550c41eceb83842917ad7d9684352e61421b5a0ab08f311879abb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223a9312d9550c41eceb83842917ad7d9684352e61421b5a0ab08f311879abb2->enter($__internal_223a9312d9550c41eceb83842917ad7d9684352e61421b5a0ab08f311879abb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_223a9312d9550c41eceb83842917ad7d9684352e61421b5a0ab08f311879abb2->leave($__internal_223a9312d9550c41eceb83842917ad7d9684352e61421b5a0ab08f311879abb2_prof);

        
        $__internal_81da18023da957e3247b3c6fa1388fd6af77064b3ee98be0ca6db881308c6e38->leave($__internal_81da18023da957e3247b3c6fa1388fd6af77064b3ee98be0ca6db881308c6e38_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d2e1c8b7d933efc5a64664834f57ea612377072562672f8e05a3227c5a2f7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2e1c8b7d933efc5a64664834f57ea612377072562672f8e05a3227c5a2f7cc->enter($__internal_5d2e1c8b7d933efc5a64664834f57ea612377072562672f8e05a3227c5a2f7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44b6aa4db8eb3bd77630863127deddbf0e81ea6cb1f912b975bdb3c81bc9d59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b6aa4db8eb3bd77630863127deddbf0e81ea6cb1f912b975bdb3c81bc9d59e->enter($__internal_44b6aa4db8eb3bd77630863127deddbf0e81ea6cb1f912b975bdb3c81bc9d59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_44b6aa4db8eb3bd77630863127deddbf0e81ea6cb1f912b975bdb3c81bc9d59e->leave($__internal_44b6aa4db8eb3bd77630863127deddbf0e81ea6cb1f912b975bdb3c81bc9d59e_prof);

        
        $__internal_5d2e1c8b7d933efc5a64664834f57ea612377072562672f8e05a3227c5a2f7cc->leave($__internal_5d2e1c8b7d933efc5a64664834f57ea612377072562672f8e05a3227c5a2f7cc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0499ae54c427a8bc665c77db3618bf6d6f83e2ef8c265ccd0476b72eb3127475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0499ae54c427a8bc665c77db3618bf6d6f83e2ef8c265ccd0476b72eb3127475->enter($__internal_0499ae54c427a8bc665c77db3618bf6d6f83e2ef8c265ccd0476b72eb3127475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63f5e80c641f4d7810f0c4dc9bfe1bf2c3ebee7c237339ec3a57dbe8b2b7058f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f5e80c641f4d7810f0c4dc9bfe1bf2c3ebee7c237339ec3a57dbe8b2b7058f->enter($__internal_63f5e80c641f4d7810f0c4dc9bfe1bf2c3ebee7c237339ec3a57dbe8b2b7058f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63f5e80c641f4d7810f0c4dc9bfe1bf2c3ebee7c237339ec3a57dbe8b2b7058f->leave($__internal_63f5e80c641f4d7810f0c4dc9bfe1bf2c3ebee7c237339ec3a57dbe8b2b7058f_prof);

        
        $__internal_0499ae54c427a8bc665c77db3618bf6d6f83e2ef8c265ccd0476b72eb3127475->leave($__internal_0499ae54c427a8bc665c77db3618bf6d6f83e2ef8c265ccd0476b72eb3127475_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a44fc4a3118759eaeb740ecdff81ce9932059793cf7707de90e810663ff8009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a44fc4a3118759eaeb740ecdff81ce9932059793cf7707de90e810663ff8009->enter($__internal_2a44fc4a3118759eaeb740ecdff81ce9932059793cf7707de90e810663ff8009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fe6a493b1d994b8f194c2b0ba98cf981ca9f732a0b2f6ab902d0d1ac9cb3265e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6a493b1d994b8f194c2b0ba98cf981ca9f732a0b2f6ab902d0d1ac9cb3265e->enter($__internal_fe6a493b1d994b8f194c2b0ba98cf981ca9f732a0b2f6ab902d0d1ac9cb3265e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe6a493b1d994b8f194c2b0ba98cf981ca9f732a0b2f6ab902d0d1ac9cb3265e->leave($__internal_fe6a493b1d994b8f194c2b0ba98cf981ca9f732a0b2f6ab902d0d1ac9cb3265e_prof);

        
        $__internal_2a44fc4a3118759eaeb740ecdff81ce9932059793cf7707de90e810663ff8009->leave($__internal_2a44fc4a3118759eaeb740ecdff81ce9932059793cf7707de90e810663ff8009_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/symfony_tp/app/Resources/views/base.html.twig");
    }
}
