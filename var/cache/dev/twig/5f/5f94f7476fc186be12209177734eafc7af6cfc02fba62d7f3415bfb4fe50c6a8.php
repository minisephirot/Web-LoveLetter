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
        $__internal_20939fa00262c177d1ac473cad67fb3f44343f64a63d3182ae2b0c0be6501fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20939fa00262c177d1ac473cad67fb3f44343f64a63d3182ae2b0c0be6501fe7->enter($__internal_20939fa00262c177d1ac473cad67fb3f44343f64a63d3182ae2b0c0be6501fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d8149c85b41e8996cccdb8a39d0c07eeaee4275a8fbbff4b4393ff447e11b638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8149c85b41e8996cccdb8a39d0c07eeaee4275a8fbbff4b4393ff447e11b638->enter($__internal_d8149c85b41e8996cccdb8a39d0c07eeaee4275a8fbbff4b4393ff447e11b638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20939fa00262c177d1ac473cad67fb3f44343f64a63d3182ae2b0c0be6501fe7->leave($__internal_20939fa00262c177d1ac473cad67fb3f44343f64a63d3182ae2b0c0be6501fe7_prof);

        
        $__internal_d8149c85b41e8996cccdb8a39d0c07eeaee4275a8fbbff4b4393ff447e11b638->leave($__internal_d8149c85b41e8996cccdb8a39d0c07eeaee4275a8fbbff4b4393ff447e11b638_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0273f7947c00ee129446f02512db8ce2a8193b4f22849a7f9f108fa07995335b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0273f7947c00ee129446f02512db8ce2a8193b4f22849a7f9f108fa07995335b->enter($__internal_0273f7947c00ee129446f02512db8ce2a8193b4f22849a7f9f108fa07995335b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_351e504f1913720d755d30dd22e904ac4b31783527d02f376be47ea5bb67d94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351e504f1913720d755d30dd22e904ac4b31783527d02f376be47ea5bb67d94c->enter($__internal_351e504f1913720d755d30dd22e904ac4b31783527d02f376be47ea5bb67d94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_351e504f1913720d755d30dd22e904ac4b31783527d02f376be47ea5bb67d94c->leave($__internal_351e504f1913720d755d30dd22e904ac4b31783527d02f376be47ea5bb67d94c_prof);

        
        $__internal_0273f7947c00ee129446f02512db8ce2a8193b4f22849a7f9f108fa07995335b->leave($__internal_0273f7947c00ee129446f02512db8ce2a8193b4f22849a7f9f108fa07995335b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0511e2e424676f6cb4238d407ac37e6e5c884c9220907908cb3bfd559401baaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0511e2e424676f6cb4238d407ac37e6e5c884c9220907908cb3bfd559401baaf->enter($__internal_0511e2e424676f6cb4238d407ac37e6e5c884c9220907908cb3bfd559401baaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_635261eb8eae0ab191a09d2ab6eed7aa32e58042313c42ed0c9da37ea3c1790e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635261eb8eae0ab191a09d2ab6eed7aa32e58042313c42ed0c9da37ea3c1790e->enter($__internal_635261eb8eae0ab191a09d2ab6eed7aa32e58042313c42ed0c9da37ea3c1790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_635261eb8eae0ab191a09d2ab6eed7aa32e58042313c42ed0c9da37ea3c1790e->leave($__internal_635261eb8eae0ab191a09d2ab6eed7aa32e58042313c42ed0c9da37ea3c1790e_prof);

        
        $__internal_0511e2e424676f6cb4238d407ac37e6e5c884c9220907908cb3bfd559401baaf->leave($__internal_0511e2e424676f6cb4238d407ac37e6e5c884c9220907908cb3bfd559401baaf_prof);

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
