<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7493a6b978c39c0f545fc24394f63014f01661429df63121e6927bbfe17663a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_3d1799da508c358937480ee1dacae2cb37c57bb366bafc0d0400b9c1e4cf4038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1799da508c358937480ee1dacae2cb37c57bb366bafc0d0400b9c1e4cf4038->enter($__internal_3d1799da508c358937480ee1dacae2cb37c57bb366bafc0d0400b9c1e4cf4038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8b5e8c1896ee0a999164b455e6ff3aee30a8f221c9f4a8f03dbd84d367f30f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5e8c1896ee0a999164b455e6ff3aee30a8f221c9f4a8f03dbd84d367f30f27->enter($__internal_8b5e8c1896ee0a999164b455e6ff3aee30a8f221c9f4a8f03dbd84d367f30f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d1799da508c358937480ee1dacae2cb37c57bb366bafc0d0400b9c1e4cf4038->leave($__internal_3d1799da508c358937480ee1dacae2cb37c57bb366bafc0d0400b9c1e4cf4038_prof);

        
        $__internal_8b5e8c1896ee0a999164b455e6ff3aee30a8f221c9f4a8f03dbd84d367f30f27->leave($__internal_8b5e8c1896ee0a999164b455e6ff3aee30a8f221c9f4a8f03dbd84d367f30f27_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edff0518a792ac82408be456417e642bcd3c621a289285fabcf9bd80947df501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edff0518a792ac82408be456417e642bcd3c621a289285fabcf9bd80947df501->enter($__internal_edff0518a792ac82408be456417e642bcd3c621a289285fabcf9bd80947df501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7378161d30991899d890789fd0df8056cad9cdc8b4014fa71955b89f3b80579e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7378161d30991899d890789fd0df8056cad9cdc8b4014fa71955b89f3b80579e->enter($__internal_7378161d30991899d890789fd0df8056cad9cdc8b4014fa71955b89f3b80579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7378161d30991899d890789fd0df8056cad9cdc8b4014fa71955b89f3b80579e->leave($__internal_7378161d30991899d890789fd0df8056cad9cdc8b4014fa71955b89f3b80579e_prof);

        
        $__internal_edff0518a792ac82408be456417e642bcd3c621a289285fabcf9bd80947df501->leave($__internal_edff0518a792ac82408be456417e642bcd3c621a289285fabcf9bd80947df501_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_123373f25bba4553bb3233842ded144074662345aac80b47569beeb3b8a3a526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_123373f25bba4553bb3233842ded144074662345aac80b47569beeb3b8a3a526->enter($__internal_123373f25bba4553bb3233842ded144074662345aac80b47569beeb3b8a3a526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08dc85c2181bd8362d767772b88f78029d06df6b1c3a2f78ceed3ff937d8e93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dc85c2181bd8362d767772b88f78029d06df6b1c3a2f78ceed3ff937d8e93e->enter($__internal_08dc85c2181bd8362d767772b88f78029d06df6b1c3a2f78ceed3ff937d8e93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08dc85c2181bd8362d767772b88f78029d06df6b1c3a2f78ceed3ff937d8e93e->leave($__internal_08dc85c2181bd8362d767772b88f78029d06df6b1c3a2f78ceed3ff937d8e93e_prof);

        
        $__internal_123373f25bba4553bb3233842ded144074662345aac80b47569beeb3b8a3a526->leave($__internal_123373f25bba4553bb3233842ded144074662345aac80b47569beeb3b8a3a526_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
