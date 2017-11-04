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
        $__internal_bbbf5839d7bd0376cc9b2e5979b8afc44d46ca56f4f6625df169b74d48900bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbbf5839d7bd0376cc9b2e5979b8afc44d46ca56f4f6625df169b74d48900bae->enter($__internal_bbbf5839d7bd0376cc9b2e5979b8afc44d46ca56f4f6625df169b74d48900bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f29c0e8ee8c7bfe64b4963f24816446e33f409bf4f560d4ed445eb69e9220c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29c0e8ee8c7bfe64b4963f24816446e33f409bf4f560d4ed445eb69e9220c91->enter($__internal_f29c0e8ee8c7bfe64b4963f24816446e33f409bf4f560d4ed445eb69e9220c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bbbf5839d7bd0376cc9b2e5979b8afc44d46ca56f4f6625df169b74d48900bae->leave($__internal_bbbf5839d7bd0376cc9b2e5979b8afc44d46ca56f4f6625df169b74d48900bae_prof);

        
        $__internal_f29c0e8ee8c7bfe64b4963f24816446e33f409bf4f560d4ed445eb69e9220c91->leave($__internal_f29c0e8ee8c7bfe64b4963f24816446e33f409bf4f560d4ed445eb69e9220c91_prof);

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
