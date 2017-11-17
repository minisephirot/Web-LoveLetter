<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_5e40ba7bce8da452ccc5450423159c2c6483522102fb1ed28f35e3f6dd05ab98 extends Twig_Template
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
        $__internal_4c9304b4c030bb7de4affc61d376394d66c44bcc959ef6a0ace7cadbcaf196b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9304b4c030bb7de4affc61d376394d66c44bcc959ef6a0ace7cadbcaf196b0->enter($__internal_4c9304b4c030bb7de4affc61d376394d66c44bcc959ef6a0ace7cadbcaf196b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_2e3e4f96602eebd4f109f74340a458f9d067c53e15adbaf7413f0869810e314c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3e4f96602eebd4f109f74340a458f9d067c53e15adbaf7413f0869810e314c->enter($__internal_2e3e4f96602eebd4f109f74340a458f9d067c53e15adbaf7413f0869810e314c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_4c9304b4c030bb7de4affc61d376394d66c44bcc959ef6a0ace7cadbcaf196b0->leave($__internal_4c9304b4c030bb7de4affc61d376394d66c44bcc959ef6a0ace7cadbcaf196b0_prof);

        
        $__internal_2e3e4f96602eebd4f109f74340a458f9d067c53e15adbaf7413f0869810e314c->leave($__internal_2e3e4f96602eebd4f109f74340a458f9d067c53e15adbaf7413f0869810e314c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
