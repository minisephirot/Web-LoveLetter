<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fb10407335196a932bff325691d154db9990813425fc19f532b3227c4db42927 extends Twig_Template
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
        $__internal_7568ce2e579bf94e2f829c17f297cca2cc97998b76bd34ff67f2b09a6e28e4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7568ce2e579bf94e2f829c17f297cca2cc97998b76bd34ff67f2b09a6e28e4f7->enter($__internal_7568ce2e579bf94e2f829c17f297cca2cc97998b76bd34ff67f2b09a6e28e4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0d927e4d9956a9d7755ba476503c1d883248f9e538cf7860fc8a71915c415175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d927e4d9956a9d7755ba476503c1d883248f9e538cf7860fc8a71915c415175->enter($__internal_0d927e4d9956a9d7755ba476503c1d883248f9e538cf7860fc8a71915c415175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_7568ce2e579bf94e2f829c17f297cca2cc97998b76bd34ff67f2b09a6e28e4f7->leave($__internal_7568ce2e579bf94e2f829c17f297cca2cc97998b76bd34ff67f2b09a6e28e4f7_prof);

        
        $__internal_0d927e4d9956a9d7755ba476503c1d883248f9e538cf7860fc8a71915c415175->leave($__internal_0d927e4d9956a9d7755ba476503c1d883248f9e538cf7860fc8a71915c415175_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
