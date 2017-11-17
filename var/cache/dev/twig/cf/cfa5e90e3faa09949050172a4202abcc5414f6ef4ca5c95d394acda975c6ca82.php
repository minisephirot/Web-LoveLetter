<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_605113dc16a680cde5e2b104ef63349dfd6bad748ab191d4f45ffbc3a8c3c1ac extends Twig_Template
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
        $__internal_3592647198d857e3c64c88468a388c3643db829d2e7cc206795017f9af897337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3592647198d857e3c64c88468a388c3643db829d2e7cc206795017f9af897337->enter($__internal_3592647198d857e3c64c88468a388c3643db829d2e7cc206795017f9af897337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_7733bc865f0b0e360fda10dc849cb94f5cd2bab523868ea6b3aaaf2a1e576ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7733bc865f0b0e360fda10dc849cb94f5cd2bab523868ea6b3aaaf2a1e576ba9->enter($__internal_7733bc865f0b0e360fda10dc849cb94f5cd2bab523868ea6b3aaaf2a1e576ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3592647198d857e3c64c88468a388c3643db829d2e7cc206795017f9af897337->leave($__internal_3592647198d857e3c64c88468a388c3643db829d2e7cc206795017f9af897337_prof);

        
        $__internal_7733bc865f0b0e360fda10dc849cb94f5cd2bab523868ea6b3aaaf2a1e576ba9->leave($__internal_7733bc865f0b0e360fda10dc849cb94f5cd2bab523868ea6b3aaaf2a1e576ba9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
