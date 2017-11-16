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
        $__internal_9c3f145bf77d678d8f33dfaa565d7ba5b498f52afd1ec0dc3cb660e4586abdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3f145bf77d678d8f33dfaa565d7ba5b498f52afd1ec0dc3cb660e4586abdfd->enter($__internal_9c3f145bf77d678d8f33dfaa565d7ba5b498f52afd1ec0dc3cb660e4586abdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_bed30d92847241aa0954c5e1b7add49c4e8456e925fb48a001efbc2ec2ed7b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed30d92847241aa0954c5e1b7add49c4e8456e925fb48a001efbc2ec2ed7b18->enter($__internal_bed30d92847241aa0954c5e1b7add49c4e8456e925fb48a001efbc2ec2ed7b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_9c3f145bf77d678d8f33dfaa565d7ba5b498f52afd1ec0dc3cb660e4586abdfd->leave($__internal_9c3f145bf77d678d8f33dfaa565d7ba5b498f52afd1ec0dc3cb660e4586abdfd_prof);

        
        $__internal_bed30d92847241aa0954c5e1b7add49c4e8456e925fb48a001efbc2ec2ed7b18->leave($__internal_bed30d92847241aa0954c5e1b7add49c4e8456e925fb48a001efbc2ec2ed7b18_prof);

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
