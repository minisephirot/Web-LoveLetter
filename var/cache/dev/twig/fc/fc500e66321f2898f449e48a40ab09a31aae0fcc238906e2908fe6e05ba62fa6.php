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
        $__internal_87d1455b511a882f17af724f35482f8b2193829b5b82d72498ec7de550049312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d1455b511a882f17af724f35482f8b2193829b5b82d72498ec7de550049312->enter($__internal_87d1455b511a882f17af724f35482f8b2193829b5b82d72498ec7de550049312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ca6a0f26cc2d8ceaf8b773b7ee754812c8ba60a80777135fd4c97f1d4678e360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6a0f26cc2d8ceaf8b773b7ee754812c8ba60a80777135fd4c97f1d4678e360->enter($__internal_ca6a0f26cc2d8ceaf8b773b7ee754812c8ba60a80777135fd4c97f1d4678e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_87d1455b511a882f17af724f35482f8b2193829b5b82d72498ec7de550049312->leave($__internal_87d1455b511a882f17af724f35482f8b2193829b5b82d72498ec7de550049312_prof);

        
        $__internal_ca6a0f26cc2d8ceaf8b773b7ee754812c8ba60a80777135fd4c97f1d4678e360->leave($__internal_ca6a0f26cc2d8ceaf8b773b7ee754812c8ba60a80777135fd4c97f1d4678e360_prof);

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
