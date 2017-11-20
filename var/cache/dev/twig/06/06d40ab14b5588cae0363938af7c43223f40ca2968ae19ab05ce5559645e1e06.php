<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_d2a1fa0ba50fd155b6016b425014a2b8cb850b8143d62dbf31dbf9564787b9fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e5aafa5d6c1872ee774a7864fbdd83953f6673549b96eed2225ece14dc73b02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5aafa5d6c1872ee774a7864fbdd83953f6673549b96eed2225ece14dc73b02a->enter($__internal_e5aafa5d6c1872ee774a7864fbdd83953f6673549b96eed2225ece14dc73b02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_65d2b47ebec2a2c6ac3be88b4a8387ffa26dc0fa3d3d73144e2dfa49e2a4d42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d2b47ebec2a2c6ac3be88b4a8387ffa26dc0fa3d3d73144e2dfa49e2a4d42a->enter($__internal_65d2b47ebec2a2c6ac3be88b4a8387ffa26dc0fa3d3d73144e2dfa49e2a4d42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5aafa5d6c1872ee774a7864fbdd83953f6673549b96eed2225ece14dc73b02a->leave($__internal_e5aafa5d6c1872ee774a7864fbdd83953f6673549b96eed2225ece14dc73b02a_prof);

        
        $__internal_65d2b47ebec2a2c6ac3be88b4a8387ffa26dc0fa3d3d73144e2dfa49e2a4d42a->leave($__internal_65d2b47ebec2a2c6ac3be88b4a8387ffa26dc0fa3d3d73144e2dfa49e2a4d42a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_876378ebacf2022499111013f7090236164e5d044823744a5d6e8b2c2154ad71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876378ebacf2022499111013f7090236164e5d044823744a5d6e8b2c2154ad71->enter($__internal_876378ebacf2022499111013f7090236164e5d044823744a5d6e8b2c2154ad71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_82a64e12d7337133c75ca0da80f73ba75694b13d2cbf98fd80af3bfc6e86bfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a64e12d7337133c75ca0da80f73ba75694b13d2cbf98fd80af3bfc6e86bfd3->enter($__internal_82a64e12d7337133c75ca0da80f73ba75694b13d2cbf98fd80af3bfc6e86bfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_82a64e12d7337133c75ca0da80f73ba75694b13d2cbf98fd80af3bfc6e86bfd3->leave($__internal_82a64e12d7337133c75ca0da80f73ba75694b13d2cbf98fd80af3bfc6e86bfd3_prof);

        
        $__internal_876378ebacf2022499111013f7090236164e5d044823744a5d6e8b2c2154ad71->leave($__internal_876378ebacf2022499111013f7090236164e5d044823744a5d6e8b2c2154ad71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
