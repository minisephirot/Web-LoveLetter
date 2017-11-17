<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a4fae4aef90fdd2708ae59143dd820e276cba814802c95d802ffafd794e62530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_b5ec0fd687786d7cc420a8c49de46ddc6fc5827f50f43fa54af49f0b041f1ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ec0fd687786d7cc420a8c49de46ddc6fc5827f50f43fa54af49f0b041f1ec4->enter($__internal_b5ec0fd687786d7cc420a8c49de46ddc6fc5827f50f43fa54af49f0b041f1ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_023ec77bb5a109fce052b5ff1ec2e43b155dae1a00b8446e149688d59ece6eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023ec77bb5a109fce052b5ff1ec2e43b155dae1a00b8446e149688d59ece6eca->enter($__internal_023ec77bb5a109fce052b5ff1ec2e43b155dae1a00b8446e149688d59ece6eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ec0fd687786d7cc420a8c49de46ddc6fc5827f50f43fa54af49f0b041f1ec4->leave($__internal_b5ec0fd687786d7cc420a8c49de46ddc6fc5827f50f43fa54af49f0b041f1ec4_prof);

        
        $__internal_023ec77bb5a109fce052b5ff1ec2e43b155dae1a00b8446e149688d59ece6eca->leave($__internal_023ec77bb5a109fce052b5ff1ec2e43b155dae1a00b8446e149688d59ece6eca_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3b3d9ec29fefeb2dbc6da48e36a5154e5ced604a478f70b516b03993fb6be9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3d9ec29fefeb2dbc6da48e36a5154e5ced604a478f70b516b03993fb6be9f0->enter($__internal_3b3d9ec29fefeb2dbc6da48e36a5154e5ced604a478f70b516b03993fb6be9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6a0577cabdbbfe0ba9a1d97032d76b6ef7cb550b9e5a166237594c9f1101f62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0577cabdbbfe0ba9a1d97032d76b6ef7cb550b9e5a166237594c9f1101f62e->enter($__internal_6a0577cabdbbfe0ba9a1d97032d76b6ef7cb550b9e5a166237594c9f1101f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6a0577cabdbbfe0ba9a1d97032d76b6ef7cb550b9e5a166237594c9f1101f62e->leave($__internal_6a0577cabdbbfe0ba9a1d97032d76b6ef7cb550b9e5a166237594c9f1101f62e_prof);

        
        $__internal_3b3d9ec29fefeb2dbc6da48e36a5154e5ced604a478f70b516b03993fb6be9f0->leave($__internal_3b3d9ec29fefeb2dbc6da48e36a5154e5ced604a478f70b516b03993fb6be9f0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_851c2327c29b752f940de9f76c2e401d7ea70a4a7ad70b8ae08dc4a7889ec191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851c2327c29b752f940de9f76c2e401d7ea70a4a7ad70b8ae08dc4a7889ec191->enter($__internal_851c2327c29b752f940de9f76c2e401d7ea70a4a7ad70b8ae08dc4a7889ec191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ba652e38f608e84289c7c616c20f4c982fc193457732e85223ef886ccf5d42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba652e38f608e84289c7c616c20f4c982fc193457732e85223ef886ccf5d42f->enter($__internal_4ba652e38f608e84289c7c616c20f4c982fc193457732e85223ef886ccf5d42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4ba652e38f608e84289c7c616c20f4c982fc193457732e85223ef886ccf5d42f->leave($__internal_4ba652e38f608e84289c7c616c20f4c982fc193457732e85223ef886ccf5d42f_prof);

        
        $__internal_851c2327c29b752f940de9f76c2e401d7ea70a4a7ad70b8ae08dc4a7889ec191->leave($__internal_851c2327c29b752f940de9f76c2e401d7ea70a4a7ad70b8ae08dc4a7889ec191_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
