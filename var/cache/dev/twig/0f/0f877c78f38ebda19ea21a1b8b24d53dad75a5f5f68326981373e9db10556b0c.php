<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_afb3eeb3c1d8df88f47a71cb3bb393bc932697c97af9e32712f9432e1821b6f2 extends Twig_Template
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
        $__internal_036f3cb9f9c37371958c1d47a9d0afeec981ba6f59053bdca44f939a148bbb0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036f3cb9f9c37371958c1d47a9d0afeec981ba6f59053bdca44f939a148bbb0e->enter($__internal_036f3cb9f9c37371958c1d47a9d0afeec981ba6f59053bdca44f939a148bbb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8c55dd7fae268632dcc9ecdbc4d49efc2caaf6f308386d26d5147827fc925c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c55dd7fae268632dcc9ecdbc4d49efc2caaf6f308386d26d5147827fc925c4d->enter($__internal_8c55dd7fae268632dcc9ecdbc4d49efc2caaf6f308386d26d5147827fc925c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_036f3cb9f9c37371958c1d47a9d0afeec981ba6f59053bdca44f939a148bbb0e->leave($__internal_036f3cb9f9c37371958c1d47a9d0afeec981ba6f59053bdca44f939a148bbb0e_prof);

        
        $__internal_8c55dd7fae268632dcc9ecdbc4d49efc2caaf6f308386d26d5147827fc925c4d->leave($__internal_8c55dd7fae268632dcc9ecdbc4d49efc2caaf6f308386d26d5147827fc925c4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
