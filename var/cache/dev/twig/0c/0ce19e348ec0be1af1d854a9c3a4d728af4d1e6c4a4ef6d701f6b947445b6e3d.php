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
        $__internal_b1ee5df48c6c22592c503de8cddba9b8730f25e7abc1b4b243acf5bf2c8ce5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ee5df48c6c22592c503de8cddba9b8730f25e7abc1b4b243acf5bf2c8ce5aa->enter($__internal_b1ee5df48c6c22592c503de8cddba9b8730f25e7abc1b4b243acf5bf2c8ce5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_d1e12024a6888f550ad9ab85d0fff15f9d3be6ecc4e6726a23a1ae1710ffd9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e12024a6888f550ad9ab85d0fff15f9d3be6ecc4e6726a23a1ae1710ffd9bf->enter($__internal_d1e12024a6888f550ad9ab85d0fff15f9d3be6ecc4e6726a23a1ae1710ffd9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_b1ee5df48c6c22592c503de8cddba9b8730f25e7abc1b4b243acf5bf2c8ce5aa->leave($__internal_b1ee5df48c6c22592c503de8cddba9b8730f25e7abc1b4b243acf5bf2c8ce5aa_prof);

        
        $__internal_d1e12024a6888f550ad9ab85d0fff15f9d3be6ecc4e6726a23a1ae1710ffd9bf->leave($__internal_d1e12024a6888f550ad9ab85d0fff15f9d3be6ecc4e6726a23a1ae1710ffd9bf_prof);

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
