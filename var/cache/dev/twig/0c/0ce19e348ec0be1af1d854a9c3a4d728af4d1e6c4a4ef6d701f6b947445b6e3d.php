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
        $__internal_077ab7abde298113e39c60a7b861d9110430c050c3c9254d683af85de8cd2731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077ab7abde298113e39c60a7b861d9110430c050c3c9254d683af85de8cd2731->enter($__internal_077ab7abde298113e39c60a7b861d9110430c050c3c9254d683af85de8cd2731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_7d8996c39433fb5fc3b3a63c4d8f4bac599cb1449cd69b11f7eefe164ae8dae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8996c39433fb5fc3b3a63c4d8f4bac599cb1449cd69b11f7eefe164ae8dae2->enter($__internal_7d8996c39433fb5fc3b3a63c4d8f4bac599cb1449cd69b11f7eefe164ae8dae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_077ab7abde298113e39c60a7b861d9110430c050c3c9254d683af85de8cd2731->leave($__internal_077ab7abde298113e39c60a7b861d9110430c050c3c9254d683af85de8cd2731_prof);

        
        $__internal_7d8996c39433fb5fc3b3a63c4d8f4bac599cb1449cd69b11f7eefe164ae8dae2->leave($__internal_7d8996c39433fb5fc3b3a63c4d8f4bac599cb1449cd69b11f7eefe164ae8dae2_prof);

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
