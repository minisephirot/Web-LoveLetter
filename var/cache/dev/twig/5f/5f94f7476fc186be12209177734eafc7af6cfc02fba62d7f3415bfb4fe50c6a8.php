<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3c3f980554672e11da03518cfae9330598f803683e603d27fe2c5f5c021b6463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7d635baa4872f7ea79b9e173f4a44a6ffa91b7595106f828f845b6486ca564c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d635baa4872f7ea79b9e173f4a44a6ffa91b7595106f828f845b6486ca564c->enter($__internal_c7d635baa4872f7ea79b9e173f4a44a6ffa91b7595106f828f845b6486ca564c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9d426e862b779256cce0f20da97114b2f35aba5f825c70d5737f98b0a5c97b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d426e862b779256cce0f20da97114b2f35aba5f825c70d5737f98b0a5c97b96->enter($__internal_9d426e862b779256cce0f20da97114b2f35aba5f825c70d5737f98b0a5c97b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7d635baa4872f7ea79b9e173f4a44a6ffa91b7595106f828f845b6486ca564c->leave($__internal_c7d635baa4872f7ea79b9e173f4a44a6ffa91b7595106f828f845b6486ca564c_prof);

        
        $__internal_9d426e862b779256cce0f20da97114b2f35aba5f825c70d5737f98b0a5c97b96->leave($__internal_9d426e862b779256cce0f20da97114b2f35aba5f825c70d5737f98b0a5c97b96_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e5e7ffc7156248b2709930e6e0da7275b5df8302f2e2fd01f357792733c3d678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e7ffc7156248b2709930e6e0da7275b5df8302f2e2fd01f357792733c3d678->enter($__internal_e5e7ffc7156248b2709930e6e0da7275b5df8302f2e2fd01f357792733c3d678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_46e282ffcb3db1542c8517e0e0e44e3915d0b81d0708899f464f82204b29a4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e282ffcb3db1542c8517e0e0e44e3915d0b81d0708899f464f82204b29a4a3->enter($__internal_46e282ffcb3db1542c8517e0e0e44e3915d0b81d0708899f464f82204b29a4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_46e282ffcb3db1542c8517e0e0e44e3915d0b81d0708899f464f82204b29a4a3->leave($__internal_46e282ffcb3db1542c8517e0e0e44e3915d0b81d0708899f464f82204b29a4a3_prof);

        
        $__internal_e5e7ffc7156248b2709930e6e0da7275b5df8302f2e2fd01f357792733c3d678->leave($__internal_e5e7ffc7156248b2709930e6e0da7275b5df8302f2e2fd01f357792733c3d678_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b10a3a23f91385f3e42c272d7f856b9b0cc09db2011dddb7034cbe96e2aded57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10a3a23f91385f3e42c272d7f856b9b0cc09db2011dddb7034cbe96e2aded57->enter($__internal_b10a3a23f91385f3e42c272d7f856b9b0cc09db2011dddb7034cbe96e2aded57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd68b2aed91aba54e9659f5850f4792e50adb61db9f1f93f6ceb4deb898ba5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd68b2aed91aba54e9659f5850f4792e50adb61db9f1f93f6ceb4deb898ba5ba->enter($__internal_dd68b2aed91aba54e9659f5850f4792e50adb61db9f1f93f6ceb4deb898ba5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dd68b2aed91aba54e9659f5850f4792e50adb61db9f1f93f6ceb4deb898ba5ba->leave($__internal_dd68b2aed91aba54e9659f5850f4792e50adb61db9f1f93f6ceb4deb898ba5ba_prof);

        
        $__internal_b10a3a23f91385f3e42c272d7f856b9b0cc09db2011dddb7034cbe96e2aded57->leave($__internal_b10a3a23f91385f3e42c272d7f856b9b0cc09db2011dddb7034cbe96e2aded57_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
