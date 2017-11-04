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
        $__internal_447745c6d490fd13d98a58c547468829b5729ea33270b37ca9321ff6b95b112e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447745c6d490fd13d98a58c547468829b5729ea33270b37ca9321ff6b95b112e->enter($__internal_447745c6d490fd13d98a58c547468829b5729ea33270b37ca9321ff6b95b112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_9cba88ec0accabe51193dcac88b5379053624e09a44c24cdac4631a999e02e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cba88ec0accabe51193dcac88b5379053624e09a44c24cdac4631a999e02e34->enter($__internal_9cba88ec0accabe51193dcac88b5379053624e09a44c24cdac4631a999e02e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_447745c6d490fd13d98a58c547468829b5729ea33270b37ca9321ff6b95b112e->leave($__internal_447745c6d490fd13d98a58c547468829b5729ea33270b37ca9321ff6b95b112e_prof);

        
        $__internal_9cba88ec0accabe51193dcac88b5379053624e09a44c24cdac4631a999e02e34->leave($__internal_9cba88ec0accabe51193dcac88b5379053624e09a44c24cdac4631a999e02e34_prof);

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
