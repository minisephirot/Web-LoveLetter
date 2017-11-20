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
        $__internal_22a3b0f5219b13d293cf808d4223662e12f917512bea6efe462fcc89be659d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a3b0f5219b13d293cf808d4223662e12f917512bea6efe462fcc89be659d52->enter($__internal_22a3b0f5219b13d293cf808d4223662e12f917512bea6efe462fcc89be659d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a01e8fa837fa435ecdfa768fea8451a291087cbf2bf59ff4baf4a17f5382661b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01e8fa837fa435ecdfa768fea8451a291087cbf2bf59ff4baf4a17f5382661b->enter($__internal_a01e8fa837fa435ecdfa768fea8451a291087cbf2bf59ff4baf4a17f5382661b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_22a3b0f5219b13d293cf808d4223662e12f917512bea6efe462fcc89be659d52->leave($__internal_22a3b0f5219b13d293cf808d4223662e12f917512bea6efe462fcc89be659d52_prof);

        
        $__internal_a01e8fa837fa435ecdfa768fea8451a291087cbf2bf59ff4baf4a17f5382661b->leave($__internal_a01e8fa837fa435ecdfa768fea8451a291087cbf2bf59ff4baf4a17f5382661b_prof);

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
