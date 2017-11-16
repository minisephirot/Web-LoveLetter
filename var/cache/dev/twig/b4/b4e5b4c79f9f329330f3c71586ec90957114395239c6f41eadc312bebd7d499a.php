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
        $__internal_b8baf1492572c528d4349776b3bcd7571a95f3f36e5827c647757a702dc7ff6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8baf1492572c528d4349776b3bcd7571a95f3f36e5827c647757a702dc7ff6e->enter($__internal_b8baf1492572c528d4349776b3bcd7571a95f3f36e5827c647757a702dc7ff6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_150deddd3c4f577eafebfb3577d97c637fdb1312b1e69dbd0b67a090902b9938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150deddd3c4f577eafebfb3577d97c637fdb1312b1e69dbd0b67a090902b9938->enter($__internal_150deddd3c4f577eafebfb3577d97c637fdb1312b1e69dbd0b67a090902b9938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_b8baf1492572c528d4349776b3bcd7571a95f3f36e5827c647757a702dc7ff6e->leave($__internal_b8baf1492572c528d4349776b3bcd7571a95f3f36e5827c647757a702dc7ff6e_prof);

        
        $__internal_150deddd3c4f577eafebfb3577d97c637fdb1312b1e69dbd0b67a090902b9938->leave($__internal_150deddd3c4f577eafebfb3577d97c637fdb1312b1e69dbd0b67a090902b9938_prof);

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
