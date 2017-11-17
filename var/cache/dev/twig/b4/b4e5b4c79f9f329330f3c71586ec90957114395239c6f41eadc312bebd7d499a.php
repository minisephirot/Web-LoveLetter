<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_443f6a4c399f6bedf5856d08eac0eea5bdb4340a7da1fe28af3ad2edfe62edaa extends Twig_Template
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
        $__internal_5e50bed8723a4a8c6e78c9345ff57e91e3ac8435009bfad4f49e870874b0cad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e50bed8723a4a8c6e78c9345ff57e91e3ac8435009bfad4f49e870874b0cad8->enter($__internal_5e50bed8723a4a8c6e78c9345ff57e91e3ac8435009bfad4f49e870874b0cad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_5c5555a842bb13e1445a7574fa9a37ac8c140dac693ba0e429ec013fcf38414b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5555a842bb13e1445a7574fa9a37ac8c140dac693ba0e429ec013fcf38414b->enter($__internal_5c5555a842bb13e1445a7574fa9a37ac8c140dac693ba0e429ec013fcf38414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5e50bed8723a4a8c6e78c9345ff57e91e3ac8435009bfad4f49e870874b0cad8->leave($__internal_5e50bed8723a4a8c6e78c9345ff57e91e3ac8435009bfad4f49e870874b0cad8_prof);

        
        $__internal_5c5555a842bb13e1445a7574fa9a37ac8c140dac693ba0e429ec013fcf38414b->leave($__internal_5c5555a842bb13e1445a7574fa9a37ac8c140dac693ba0e429ec013fcf38414b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
