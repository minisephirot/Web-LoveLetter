<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_8ed13aa695a2904509badc1599f41c99a92b3b8319f420bde1c07e4bac5b0921 extends Twig_Template
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
        $__internal_1a0324215438f4baf73d9dd6b3712b95bc187fb8bf36f11eec0b73e2b972a04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0324215438f4baf73d9dd6b3712b95bc187fb8bf36f11eec0b73e2b972a04d->enter($__internal_1a0324215438f4baf73d9dd6b3712b95bc187fb8bf36f11eec0b73e2b972a04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_309491bf6b29e61a6751be3702ad4e657283cfe727c4dc3dd6ff13500f384271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309491bf6b29e61a6751be3702ad4e657283cfe727c4dc3dd6ff13500f384271->enter($__internal_309491bf6b29e61a6751be3702ad4e657283cfe727c4dc3dd6ff13500f384271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_1a0324215438f4baf73d9dd6b3712b95bc187fb8bf36f11eec0b73e2b972a04d->leave($__internal_1a0324215438f4baf73d9dd6b3712b95bc187fb8bf36f11eec0b73e2b972a04d_prof);

        
        $__internal_309491bf6b29e61a6751be3702ad4e657283cfe727c4dc3dd6ff13500f384271->leave($__internal_309491bf6b29e61a6751be3702ad4e657283cfe727c4dc3dd6ff13500f384271_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
