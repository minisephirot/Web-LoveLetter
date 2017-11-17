<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a43f2d0e2a84e4535dc9c913148a45d42a76c52aff428836aba4799bfd7c2c5f extends Twig_Template
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
        $__internal_5402c976368211c4ba75e18b4ac9656d6a28dd150ea27cc7de1536411e5fa3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5402c976368211c4ba75e18b4ac9656d6a28dd150ea27cc7de1536411e5fa3fe->enter($__internal_5402c976368211c4ba75e18b4ac9656d6a28dd150ea27cc7de1536411e5fa3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_768d808e03f1d67f032e976d3bb2e3d28371358e57012d79f736b90603f7197b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768d808e03f1d67f032e976d3bb2e3d28371358e57012d79f736b90603f7197b->enter($__internal_768d808e03f1d67f032e976d3bb2e3d28371358e57012d79f736b90603f7197b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_5402c976368211c4ba75e18b4ac9656d6a28dd150ea27cc7de1536411e5fa3fe->leave($__internal_5402c976368211c4ba75e18b4ac9656d6a28dd150ea27cc7de1536411e5fa3fe_prof);

        
        $__internal_768d808e03f1d67f032e976d3bb2e3d28371358e57012d79f736b90603f7197b->leave($__internal_768d808e03f1d67f032e976d3bb2e3d28371358e57012d79f736b90603f7197b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
