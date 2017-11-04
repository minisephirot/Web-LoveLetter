<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b4058bacedb8aab3abd740a863a908ee8e0e3234d7dee1dc299077c948081f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ced1e1a3e0fab924ff67f908ad3ca9040841be2b782555f154d46f5cf0fb10e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ced1e1a3e0fab924ff67f908ad3ca9040841be2b782555f154d46f5cf0fb10e->enter($__internal_7ced1e1a3e0fab924ff67f908ad3ca9040841be2b782555f154d46f5cf0fb10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_1b41127e0c42f0d646fce1bee36061845b76b698ceaa30654e5b3dadc05ef759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b41127e0c42f0d646fce1bee36061845b76b698ceaa30654e5b3dadc05ef759->enter($__internal_1b41127e0c42f0d646fce1bee36061845b76b698ceaa30654e5b3dadc05ef759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ced1e1a3e0fab924ff67f908ad3ca9040841be2b782555f154d46f5cf0fb10e->leave($__internal_7ced1e1a3e0fab924ff67f908ad3ca9040841be2b782555f154d46f5cf0fb10e_prof);

        
        $__internal_1b41127e0c42f0d646fce1bee36061845b76b698ceaa30654e5b3dadc05ef759->leave($__internal_1b41127e0c42f0d646fce1bee36061845b76b698ceaa30654e5b3dadc05ef759_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68bb33f2216cf4c4f7cce436a847a1060c75ee07ff6c2d772e56bce5109beab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68bb33f2216cf4c4f7cce436a847a1060c75ee07ff6c2d772e56bce5109beab5->enter($__internal_68bb33f2216cf4c4f7cce436a847a1060c75ee07ff6c2d772e56bce5109beab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42ab7805fd6d89fe8ea334c9b6ebddd906ea6c7c1c72d7e8ce630913c1a12fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ab7805fd6d89fe8ea334c9b6ebddd906ea6c7c1c72d7e8ce630913c1a12fcd->enter($__internal_42ab7805fd6d89fe8ea334c9b6ebddd906ea6c7c1c72d7e8ce630913c1a12fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42ab7805fd6d89fe8ea334c9b6ebddd906ea6c7c1c72d7e8ce630913c1a12fcd->leave($__internal_42ab7805fd6d89fe8ea334c9b6ebddd906ea6c7c1c72d7e8ce630913c1a12fcd_prof);

        
        $__internal_68bb33f2216cf4c4f7cce436a847a1060c75ee07ff6c2d772e56bce5109beab5->leave($__internal_68bb33f2216cf4c4f7cce436a847a1060c75ee07ff6c2d772e56bce5109beab5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd82a646aa0cb354994764e3b381d774347be6dde6cf2190f7609e1f7f91f95a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd82a646aa0cb354994764e3b381d774347be6dde6cf2190f7609e1f7f91f95a->enter($__internal_dd82a646aa0cb354994764e3b381d774347be6dde6cf2190f7609e1f7f91f95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_279966a4169b935f5c51ba0fd822a3d118af313f09e0323a8031ba117f4567d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279966a4169b935f5c51ba0fd822a3d118af313f09e0323a8031ba117f4567d1->enter($__internal_279966a4169b935f5c51ba0fd822a3d118af313f09e0323a8031ba117f4567d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_279966a4169b935f5c51ba0fd822a3d118af313f09e0323a8031ba117f4567d1->leave($__internal_279966a4169b935f5c51ba0fd822a3d118af313f09e0323a8031ba117f4567d1_prof);

        
        $__internal_dd82a646aa0cb354994764e3b381d774347be6dde6cf2190f7609e1f7f91f95a->leave($__internal_dd82a646aa0cb354994764e3b381d774347be6dde6cf2190f7609e1f7f91f95a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
