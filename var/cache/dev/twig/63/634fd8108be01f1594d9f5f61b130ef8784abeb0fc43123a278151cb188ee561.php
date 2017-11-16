<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_37c700f53b6bcab7bbfb1fa24ff609e3d301d6cf37c0fe36f2debb6af4fcbab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_dea8d8d018751fbc25f0a96b25440b1c5ab7d2715aba2f068f776e05366a56df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea8d8d018751fbc25f0a96b25440b1c5ab7d2715aba2f068f776e05366a56df->enter($__internal_dea8d8d018751fbc25f0a96b25440b1c5ab7d2715aba2f068f776e05366a56df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_42b7c7e9fd7153dc40a30a8bddfe1f6eef175c625e68eddef0cd2dac1a469015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b7c7e9fd7153dc40a30a8bddfe1f6eef175c625e68eddef0cd2dac1a469015->enter($__internal_42b7c7e9fd7153dc40a30a8bddfe1f6eef175c625e68eddef0cd2dac1a469015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea8d8d018751fbc25f0a96b25440b1c5ab7d2715aba2f068f776e05366a56df->leave($__internal_dea8d8d018751fbc25f0a96b25440b1c5ab7d2715aba2f068f776e05366a56df_prof);

        
        $__internal_42b7c7e9fd7153dc40a30a8bddfe1f6eef175c625e68eddef0cd2dac1a469015->leave($__internal_42b7c7e9fd7153dc40a30a8bddfe1f6eef175c625e68eddef0cd2dac1a469015_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_944929402a32f7eb13fc5916028f593abb536c8f17fbcea9a921c779fca3bed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944929402a32f7eb13fc5916028f593abb536c8f17fbcea9a921c779fca3bed3->enter($__internal_944929402a32f7eb13fc5916028f593abb536c8f17fbcea9a921c779fca3bed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ec988702c4d1499feb2e4b346a46503b7e80a3d7a6f176fd73611821a96d6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec988702c4d1499feb2e4b346a46503b7e80a3d7a6f176fd73611821a96d6e4->enter($__internal_0ec988702c4d1499feb2e4b346a46503b7e80a3d7a6f176fd73611821a96d6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0ec988702c4d1499feb2e4b346a46503b7e80a3d7a6f176fd73611821a96d6e4->leave($__internal_0ec988702c4d1499feb2e4b346a46503b7e80a3d7a6f176fd73611821a96d6e4_prof);

        
        $__internal_944929402a32f7eb13fc5916028f593abb536c8f17fbcea9a921c779fca3bed3->leave($__internal_944929402a32f7eb13fc5916028f593abb536c8f17fbcea9a921c779fca3bed3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
