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
        $__internal_9b993734162b71f28a88b3ded7a6848312575fd634c3ca1f43b6f3ebf7d95e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b993734162b71f28a88b3ded7a6848312575fd634c3ca1f43b6f3ebf7d95e0d->enter($__internal_9b993734162b71f28a88b3ded7a6848312575fd634c3ca1f43b6f3ebf7d95e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_cdb1cfe8c4650fcb5a92adba4cdbad283ea779f4b3c89914886a65cb0ad1c6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb1cfe8c4650fcb5a92adba4cdbad283ea779f4b3c89914886a65cb0ad1c6d9->enter($__internal_cdb1cfe8c4650fcb5a92adba4cdbad283ea779f4b3c89914886a65cb0ad1c6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_9b993734162b71f28a88b3ded7a6848312575fd634c3ca1f43b6f3ebf7d95e0d->leave($__internal_9b993734162b71f28a88b3ded7a6848312575fd634c3ca1f43b6f3ebf7d95e0d_prof);

        
        $__internal_cdb1cfe8c4650fcb5a92adba4cdbad283ea779f4b3c89914886a65cb0ad1c6d9->leave($__internal_cdb1cfe8c4650fcb5a92adba4cdbad283ea779f4b3c89914886a65cb0ad1c6d9_prof);

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
