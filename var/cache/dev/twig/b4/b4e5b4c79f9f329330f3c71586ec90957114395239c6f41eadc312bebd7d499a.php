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
        $__internal_478f0c16870ef5f35007b21dab5c06e0a1216716e5dcb68204a7eeaf33cd5b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478f0c16870ef5f35007b21dab5c06e0a1216716e5dcb68204a7eeaf33cd5b51->enter($__internal_478f0c16870ef5f35007b21dab5c06e0a1216716e5dcb68204a7eeaf33cd5b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_a5260e21e8433a0e5064b96c6742b4b024f807416198e006a57f6ab958442781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5260e21e8433a0e5064b96c6742b4b024f807416198e006a57f6ab958442781->enter($__internal_a5260e21e8433a0e5064b96c6742b4b024f807416198e006a57f6ab958442781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_478f0c16870ef5f35007b21dab5c06e0a1216716e5dcb68204a7eeaf33cd5b51->leave($__internal_478f0c16870ef5f35007b21dab5c06e0a1216716e5dcb68204a7eeaf33cd5b51_prof);

        
        $__internal_a5260e21e8433a0e5064b96c6742b4b024f807416198e006a57f6ab958442781->leave($__internal_a5260e21e8433a0e5064b96c6742b4b024f807416198e006a57f6ab958442781_prof);

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
