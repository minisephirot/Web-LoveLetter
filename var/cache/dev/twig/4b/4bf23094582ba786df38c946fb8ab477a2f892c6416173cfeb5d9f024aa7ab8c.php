<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_5274da4d3167fb0e85b06669b4e54ebeb56657ab991642c140916f820bbfa65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b47e2e51a72d62d473d5169d8f7b320c2f3c7379f3bdd077b5c3c7e1361bc17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b47e2e51a72d62d473d5169d8f7b320c2f3c7379f3bdd077b5c3c7e1361bc17->enter($__internal_5b47e2e51a72d62d473d5169d8f7b320c2f3c7379f3bdd077b5c3c7e1361bc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_54ff576c9853c46045c725b1b0c58a0d6070081a0646896ac927b0cbc9016782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ff576c9853c46045c725b1b0c58a0d6070081a0646896ac927b0cbc9016782->enter($__internal_54ff576c9853c46045c725b1b0c58a0d6070081a0646896ac927b0cbc9016782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b47e2e51a72d62d473d5169d8f7b320c2f3c7379f3bdd077b5c3c7e1361bc17->leave($__internal_5b47e2e51a72d62d473d5169d8f7b320c2f3c7379f3bdd077b5c3c7e1361bc17_prof);

        
        $__internal_54ff576c9853c46045c725b1b0c58a0d6070081a0646896ac927b0cbc9016782->leave($__internal_54ff576c9853c46045c725b1b0c58a0d6070081a0646896ac927b0cbc9016782_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df9437514031dbbbc86627bdac2d3b9bc831ee6f1b8428e962052e82f59b9c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9437514031dbbbc86627bdac2d3b9bc831ee6f1b8428e962052e82f59b9c07->enter($__internal_df9437514031dbbbc86627bdac2d3b9bc831ee6f1b8428e962052e82f59b9c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a6fd671df2e939674743888580580b3d77f000200c713ea71b0e273bcaf99e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6fd671df2e939674743888580580b3d77f000200c713ea71b0e273bcaf99e4->enter($__internal_2a6fd671df2e939674743888580580b3d77f000200c713ea71b0e273bcaf99e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_2a6fd671df2e939674743888580580b3d77f000200c713ea71b0e273bcaf99e4->leave($__internal_2a6fd671df2e939674743888580580b3d77f000200c713ea71b0e273bcaf99e4_prof);

        
        $__internal_df9437514031dbbbc86627bdac2d3b9bc831ee6f1b8428e962052e82f59b9c07->leave($__internal_df9437514031dbbbc86627bdac2d3b9bc831ee6f1b8428e962052e82f59b9c07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
