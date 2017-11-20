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
        $__internal_b75c9c6b885d7829c9628e4400e852ea4c1a280a992cc6ad6fee0d710fb319e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75c9c6b885d7829c9628e4400e852ea4c1a280a992cc6ad6fee0d710fb319e8->enter($__internal_b75c9c6b885d7829c9628e4400e852ea4c1a280a992cc6ad6fee0d710fb319e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_47b180ff6ada5620e5539b13aa370b4567390b5cf95648556360b5e9f6498b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b180ff6ada5620e5539b13aa370b4567390b5cf95648556360b5e9f6498b62->enter($__internal_47b180ff6ada5620e5539b13aa370b4567390b5cf95648556360b5e9f6498b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_b75c9c6b885d7829c9628e4400e852ea4c1a280a992cc6ad6fee0d710fb319e8->leave($__internal_b75c9c6b885d7829c9628e4400e852ea4c1a280a992cc6ad6fee0d710fb319e8_prof);

        
        $__internal_47b180ff6ada5620e5539b13aa370b4567390b5cf95648556360b5e9f6498b62->leave($__internal_47b180ff6ada5620e5539b13aa370b4567390b5cf95648556360b5e9f6498b62_prof);

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
