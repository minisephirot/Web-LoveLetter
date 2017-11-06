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
        $__internal_3c65f12ad5b62371246f2b14651fbbf7582a5512a60f25ac0c60cb7dc1945eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c65f12ad5b62371246f2b14651fbbf7582a5512a60f25ac0c60cb7dc1945eb2->enter($__internal_3c65f12ad5b62371246f2b14651fbbf7582a5512a60f25ac0c60cb7dc1945eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_cf9296d1f7a58c532fa068b5ed6f2c5d5919f6481b50aec9221f4cfd47e68e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9296d1f7a58c532fa068b5ed6f2c5d5919f6481b50aec9221f4cfd47e68e30->enter($__internal_cf9296d1f7a58c532fa068b5ed6f2c5d5919f6481b50aec9221f4cfd47e68e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3c65f12ad5b62371246f2b14651fbbf7582a5512a60f25ac0c60cb7dc1945eb2->leave($__internal_3c65f12ad5b62371246f2b14651fbbf7582a5512a60f25ac0c60cb7dc1945eb2_prof);

        
        $__internal_cf9296d1f7a58c532fa068b5ed6f2c5d5919f6481b50aec9221f4cfd47e68e30->leave($__internal_cf9296d1f7a58c532fa068b5ed6f2c5d5919f6481b50aec9221f4cfd47e68e30_prof);

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
