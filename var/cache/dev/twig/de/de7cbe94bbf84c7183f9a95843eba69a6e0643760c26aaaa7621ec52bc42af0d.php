<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_cee24180d96e954455d43bb839e8a18febedb66b3aaa641dd8bd3cb0e89dca33 extends Twig_Template
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
        $__internal_f7adbcc67b252a3a6a2c01f368ad90ef473128fd89b715d6a3a623a79cc4d4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7adbcc67b252a3a6a2c01f368ad90ef473128fd89b715d6a3a623a79cc4d4b4->enter($__internal_f7adbcc67b252a3a6a2c01f368ad90ef473128fd89b715d6a3a623a79cc4d4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bfa2cb7232a28bda33108920d67eee98e6802226b47049e62d5f0e721cf01d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa2cb7232a28bda33108920d67eee98e6802226b47049e62d5f0e721cf01d5d->enter($__internal_bfa2cb7232a28bda33108920d67eee98e6802226b47049e62d5f0e721cf01d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_f7adbcc67b252a3a6a2c01f368ad90ef473128fd89b715d6a3a623a79cc4d4b4->leave($__internal_f7adbcc67b252a3a6a2c01f368ad90ef473128fd89b715d6a3a623a79cc4d4b4_prof);

        
        $__internal_bfa2cb7232a28bda33108920d67eee98e6802226b47049e62d5f0e721cf01d5d->leave($__internal_bfa2cb7232a28bda33108920d67eee98e6802226b47049e62d5f0e721cf01d5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
