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
        $__internal_9cd6cc35067022f994707af3f4a02f469f49d2c97fa8a03f465eb899a2c58e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd6cc35067022f994707af3f4a02f469f49d2c97fa8a03f465eb899a2c58e9e->enter($__internal_9cd6cc35067022f994707af3f4a02f469f49d2c97fa8a03f465eb899a2c58e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_fec52f691a0b21239d4b4456748b302182f124c64a5d2117a7998f0cc8b02485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec52f691a0b21239d4b4456748b302182f124c64a5d2117a7998f0cc8b02485->enter($__internal_fec52f691a0b21239d4b4456748b302182f124c64a5d2117a7998f0cc8b02485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_9cd6cc35067022f994707af3f4a02f469f49d2c97fa8a03f465eb899a2c58e9e->leave($__internal_9cd6cc35067022f994707af3f4a02f469f49d2c97fa8a03f465eb899a2c58e9e_prof);

        
        $__internal_fec52f691a0b21239d4b4456748b302182f124c64a5d2117a7998f0cc8b02485->leave($__internal_fec52f691a0b21239d4b4456748b302182f124c64a5d2117a7998f0cc8b02485_prof);

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
