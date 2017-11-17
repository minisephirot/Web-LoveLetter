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
        $__internal_3317de4517e80466d1151516d4df0f4ad7960a9ea10bc653e8f467419e0019fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3317de4517e80466d1151516d4df0f4ad7960a9ea10bc653e8f467419e0019fa->enter($__internal_3317de4517e80466d1151516d4df0f4ad7960a9ea10bc653e8f467419e0019fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d51ee7e7d3459bfffa713a3f38a9c83e642c735c21a364422937090d177fc565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51ee7e7d3459bfffa713a3f38a9c83e642c735c21a364422937090d177fc565->enter($__internal_d51ee7e7d3459bfffa713a3f38a9c83e642c735c21a364422937090d177fc565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_3317de4517e80466d1151516d4df0f4ad7960a9ea10bc653e8f467419e0019fa->leave($__internal_3317de4517e80466d1151516d4df0f4ad7960a9ea10bc653e8f467419e0019fa_prof);

        
        $__internal_d51ee7e7d3459bfffa713a3f38a9c83e642c735c21a364422937090d177fc565->leave($__internal_d51ee7e7d3459bfffa713a3f38a9c83e642c735c21a364422937090d177fc565_prof);

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
