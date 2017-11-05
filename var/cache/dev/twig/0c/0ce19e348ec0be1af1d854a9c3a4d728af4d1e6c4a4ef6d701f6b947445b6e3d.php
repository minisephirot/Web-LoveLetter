<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d3b05c5963201c9e56e99730e6389dd766089796f54a34af144dfc9e775820d5 extends Twig_Template
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
        $__internal_07f9284e1fca3e1a9a2c406079faa3a0b97210940c3fbbc312509eb43f9ecf30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f9284e1fca3e1a9a2c406079faa3a0b97210940c3fbbc312509eb43f9ecf30->enter($__internal_07f9284e1fca3e1a9a2c406079faa3a0b97210940c3fbbc312509eb43f9ecf30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b192b41688d51de917bcfb6bdb04d2b4253a80ec7929b68382a4361a4093bf7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b192b41688d51de917bcfb6bdb04d2b4253a80ec7929b68382a4361a4093bf7d->enter($__internal_b192b41688d51de917bcfb6bdb04d2b4253a80ec7929b68382a4361a4093bf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_07f9284e1fca3e1a9a2c406079faa3a0b97210940c3fbbc312509eb43f9ecf30->leave($__internal_07f9284e1fca3e1a9a2c406079faa3a0b97210940c3fbbc312509eb43f9ecf30_prof);

        
        $__internal_b192b41688d51de917bcfb6bdb04d2b4253a80ec7929b68382a4361a4093bf7d->leave($__internal_b192b41688d51de917bcfb6bdb04d2b4253a80ec7929b68382a4361a4093bf7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
